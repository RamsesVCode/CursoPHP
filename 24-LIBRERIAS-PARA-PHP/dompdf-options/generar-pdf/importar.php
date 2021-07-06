<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Roboto:wght@100&display=swap" rel="stylesheet">
    
    <title>Document</title>
    <style>
        *{
            font-family:'FJalla One';
        }
        h2{
            color:red;
            font-family:'FJalla One';
        }
        img{
            width:300px;
            height:auto;
        }
        table{

        }
        table tr:nth-child(odd){
            background:red;
        }
        table td:nth-child(odd){
            background:green;
        }
    </style>
</head>
<body>
    <h2>ESTE ES MI PDF GENERADO CON DOMPDF</h2>
    <table border=1 cellspacing=0>
        <tr>
            <th>TITULO1</th><th>TITULO2</th><th>TITULO3</th>
        </tr>
        <tr>
            <td>Argumento 1</td><td>Argumento 2</td><td>Argumento 3</td>
        </tr>
        <tr>
            <td>Sub Argumento 1</td><td>Sub Argumento 2</td><td>Sub Argumento 3</td>
        </tr>
        <tr>
            <td colspan=3><img src='./images/logo.jpg' width='200px' height='200px'/></td>
        </tr>
    </table>
    <table border=1 cellspacing=0>
        <tr>
            <?php for($i=1;$i<=9;$i++):?>
            <td>
            <?php for($j=1;$j<=10;$j++): ?>
                <?php echo $i.'*'.$j.'='.($i*$j).'<br/>';?>
            <?php endfor;?>
            </td>
            <?php endfor;?>
        </tr>
    </table>
</body>
</html>