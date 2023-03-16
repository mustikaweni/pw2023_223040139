<?php 
$perangkathardware= ["Motherboard","Processor","Hard Disk","PC Coller","VGA Card","SSD"]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4b</title>
</head>
<body>
    <h2>Macam-macam Perangkat Keras</h2>
    <ol>
    <?php foreach($perangkathardware as $hrd){ ?>
    <li><?=$hrd ?></li>
    <?php } ;?>
    </ol>
    
    <?php 
    $perangkathardware [] = "Card Reader";
    $perangkathardware [] = "Modem";
    sort ($hardware);   
    ?>

    <h2> Macam-macam Perangkat Keras Baru</h2>
    <ol>
    <?php foreach($perangkathardware as $hrd){ ?>
    <li><?=$hrd ?></li>
    <?php } ;?>
    </ol>

    
</body>
</html>
