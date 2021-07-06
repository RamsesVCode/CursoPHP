<?php
    require '../vendor/autoload.php';
    
    use Dompdf\Dompdf;
    //Instanciar y usar la clase Domdf
    $dompdf = new Dompdf();
    //Creamos un documento html
    $html = file_get_contents('./importar.php');
    //Tamaño y orientacion del papel
    // $dompdf->setPaper('A4','landscape');
    //Usamos el metodo cargar html
    $dompdf->loadHtml($html);
    //Renderizar el HTML como PDF
    $dompdf->render();
    //Envia el pdf generado al navegador (attachment es para que no se descargue)
    //Si quitasemos el segundo parametro se descarga automaticamente
    $dompdf->stream('Documento.pdf',array('Attachment'=>'0'));

?>