<?php

    $vmail=$_POST['email_txt'];
    $vassunto=$_POST['assunto_txt'];
    $vmsg=$_POST['msg_txt'];

    mail($vmail,$vassunto,$vmsg,"From:ozielborges168@gmail.com");

    if(mail($vmail,$vassunto,$vmsg)){
        echo "Mensagem enviada</br>";
        echo "<a href=index.php target=_self>Voltar</a>";
    }
    else{
        echo "Erro ao enviar, tente novamente</br>";
        echo "<a href=index.php target=_self>Voltar</a>";
    }
        
?>



<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <style>
            body{
                display:flex;
                flex-direction:column;
                justify-content: center;
                height:100vh;
                align-items: center;
                font-size:50px;
            }
        </style>
    </head>
</html>
