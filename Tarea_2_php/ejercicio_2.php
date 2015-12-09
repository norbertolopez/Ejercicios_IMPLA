<html>
<head>
</head>
<body>
    <table style="border-collapse: collapse; border: solid black 1px">      
    <?php
      $v1=["2222222X" => "Pepe", "3333333X" => "Manuel", "4444444X" => "José", "5555555X" => "Rosa"];
    $v2=["2222222X" => "Perez", "3333333X" => "Jimenez", "4444444X" => "Martínez", "5555555X" => "Rodriguez"];
    
    foreach($v1 as $k => $z){
        echo "<tr style='border-collapse: collapse; border: solid black 1px'>"."<td style='border-collapse: collapse; border: solid black 1px'>".$z."</td>"."<td style='border-collapse: collapse; border: solid black 1px'>".$v2[$k]."</td>"."</tr>";
    };
        ?>
        
    </table>
    </br>
</body>
</html>
