<?php



if(isset($_POST['tipo'])){
    $tipo = $_POST['tipo'];

    if($tipo == 'pdf' || $tipo == 'excel' || $tipo == 'word' || $tipo == 'imagen'){

        

        $usuarios = array();

        if(file_exists('usuarios.json')){
            $usuarios = json_decode(file_get_contents('usuarios.json'), true);
        }
        
        if($tipo == 'pdf'){
            require 'vendor/autoload.php';
            $pdf = new TCPDF();
            $pdf->AddPage();
            $pdf->SetFont('helvetica', 'B', 16);
            $pdf->Cell(40, 10, 'Reporte de usuarios');
            $pdf->Ln(10);
            $pdf->SetFont('helvetica', 'I', 12);
            foreach($usuarios as $usuario){
                $pdf->Cell(40, 10, $usuario['usuario']);
                $pdf->Ln(10);
                $pdf->Cell(40, 10, $usuario['password']);
                $pdf->Ln(10);
            }

            $pdf->Output();
            
} else if ($tipo == 'word') {
    require 'vendor/autoload.php';
    $phpWord = new \PhpOffice\PhpWord\PhpWord();
    $section = $phpWord->addSection();
    $section->addText('Reporte de usuarios');
    foreach($usuarios as $usuario){
        $section->addText($usuario['usuario']);
        $section->addText($usuario['password']);
    }

    $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
    $objWriter->save('usuarios.docx');
    header('Location: usuarios.docx');

} else if ($tipo == 'excel' ){

    header("Content-Type: application/vnd.ms-excel");
    header('Content-Disposition: attachment;filename="usuarios.xls"');
    echo  '<table>';  
    echo  '<tr>';
    echo '<th>Usuario</th>';
    echo '<th>Password</th>';
    echo '</tr>';
    foreach($usuarios as $usuario){
        echo '<tr>';
        echo '<td>'.$usuario['usuario'].'</td>';
        echo '<td>'.$usuario['password'].'</td>';
        echo '</tr>';
    }


} else if ($tipo == 'imagen'){

    $numUsuarios = count($usuarios);
    $alturaPorUsuario = 50;
    $altura = $numUsuarios * $alturaPorUsuario;

    $imagen = imagecreate(200, $altura);
    $fondo = imagecolorallocate($imagen, 255, 255, 255);
    $texto = imagecolorallocate($imagen, 0, 0, 0);

    $y = 0;
    foreach($usuarios as $usuario){
        imagestring($imagen, 5, 10, $y, $usuario['usuario'], $texto);
        imagestring($imagen, 5, 100, $y, $usuario['password'], $texto);
        $y += $alturaPorUsuario;
    }

    header('Content-Type: image/png');
    imagepng($imagen);
    imagedestroy($imagen);

}

}

}



?>