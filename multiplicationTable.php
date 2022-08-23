<?php
$interval = $_GET['numSet'];
$difficulty = $_GET['difficulty'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Table</title>
</head>
<body>
    <div>
        <h3>🚻 Name:_________</h3>
        <h3>🔢 Date:_________</h3>
        <h3>🎯 Score:________</h3>
    </div>
    <hr>

    <h1>Multiplication table</h1>

        <table border="1">
            <?php
                for ($heading = 0; $heading <= $interval; $heading++) {
                    ?>
                    <th class="header">
                        <?=($heading === 0)? "🔆": $heading?>
                    </th>
            <?php    }
            ?>
            <?php
                for ($i=1; $i<=$interval; $i++) {
                     
            ?>
                <tr>
                    <td class='header'><?= $i?></td>
                    <?php for ($y=1; $y<=$interval; $y++) { ?>
                        <td><?=(rand(0,100)<$difficulty)?'':($i*$y) ?></td>
                    <?php } 
            ?>
                </tr>
            <?php } ?>
        </table>

        <div class="home-link">
            <a href="form.php">Home</a>
        </div>

   

   


</body>
</html>