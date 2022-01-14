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

        // Array de duas dimensions;
        $cochesAmigos = array 
          (
            "Anton"=>array
          (
            "Fiat 500",
            "Audi A3",
            "Peugeot 208"
          ),
          "Rosalia"=> array
          (
            "Audi TT"
          ),
          "Xoan"=>array 
          (
            "Jaguar XF",
            "BMW 520d",
            "Seat Ibiza"
          )
          );
          echo "O segundo coche de Xoan é " . $cochesAmigos["Xoan"][1] ."<br/>";
        ?>
    </body>
</html>