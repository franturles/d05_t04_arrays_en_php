<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <h3>Definicion de arrays en PHP</h3>
        <?php
        //Array indexado
        $amigos=array("Anton","Rosalia","Xoan");
        echo "O terceiro amigo e: " . $amigos[2]."<br/>";

        //Array asociativo
        $dnisAmigos=array("Anton"=>"12345678x","Rosalia"=>"11112222X","Xoan"=>"99997777X");
        echo "O DNI de Rosalia e:" . $dnisAmigos["Rosalia"]."<br/>";
        ?>
    </body>
</html>