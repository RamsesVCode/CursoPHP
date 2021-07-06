<?php
    require '../vendor/autoload.php';
    
    use Dompdf\Dompdf;
    use Dompdf\Options;
    //Instanciar y usar la clase Domdf
    $options = new Options();
    $options->setChroot(__DIR__);
    $options->setIsRemoteEnabled(true);
    $dompdf = new Dompdf($options);
//---------------------------------------------------------------------------
    ob_start();
    require_once 'importar.php';
    $html = ob_get_clean();
//---------------------------------------------------------------------------
    //Creamos un documento html
    // $html = file_get_contents('./importar.php');
    // $dompdf->loadHtmlFile(__DIR__.'/importar.html');
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