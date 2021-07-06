<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            color:red;
            font-family:sans-serif;
        }
        figure{
            width:250px;
            /* height:250px; */
        }
        img{
            width:100%;
            /* height:100%; */
            object-fit:cover;
        }
    </style>
</head>
<body>
    <h1>ESTE ES MI PDF GENERADO CON DOMPDF</h1>
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
            <td colspan=3><figure><img src='./images/logo.jpg' width='200px' height='200px'/></figure></td>
        </tr>
    </table>
</body>
</html>