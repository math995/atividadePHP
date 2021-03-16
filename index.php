<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<?php
$fundo = "#0000FF";
?>
<style>
body{
    height: 200px;
    flex-direction: column;
    display: flex;
}
#imagem{
    width: 811px;
    margin-bottom: 0px;
}
#section{
    display: flex;
    justify-content: center;
    align-items: center;
}
#section2{
    display: flex;
    justify-content: center;
    margin-top: 10%;
    margin-bottom: 0;
    align-items: center;
    background-color: <?php echo $fundo; ?>;
}
</style>
<body>
    <section id="section">
    <?php

    ini_set('default_charset', 'utf-8');
    $nome =  "Matheus Fernandes Silva";
    $idade = 16;
    $email = "matheus.silva2115@etec.sp.gr.br";
    
    echo '<h1 id="text">Olá <font color="#000080">'.$nome.'</font>, bem vindo!<br>
    Você tem <font color="#FF0000">'.$idade.'</font> anos, seu email é: "<font color="#0000FF">'.$email.'</font>"</h1>';
    
    ?>
    </section>

    <section id="section2">
        <?php
            $name = "Matheus Fernandes Silva";
            $imagem = "https://hips.hearstapps.com/hmg-prod/amv-prod-cad-assets/images/12q3/463430/2013-srt-viper-viper-gts-coupe-first-drive-review-car-and-driver-photo-472806-s-original.jpg?fill=2:1&resize=1200:*";
            
            echo '<background-color="'.$fundo.'"><h1 style="margin-left: 30%;"><font color="#FFFAFA">'.$name.'</font><br></h1><img src="'.$imagem.'" id="imagem">';
        ?>
    </section>
</body>
</html>