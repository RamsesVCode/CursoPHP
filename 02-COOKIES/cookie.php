<?php
    //setcoockie('nombre','valor',caducidad,ruta,dominio);
    setcookie('micookie','soy_una_cookie');//no tiene caducidad
    setcookie('micookie','soy_una_cookie',time()-100);//caduca
    /////////////////////////////////////////////////////////////////////
    setcookie('cookieCaduca','SoyUnaCookieCaduca',time()+60*60*24*365);//caducará en un año mas
    //ahora eliminamos la cookie caducandola
    setcookie('cookieCaduca','SoyUnaCookieCaduca',time()-100);//es un tiempo que ya pasó
?>