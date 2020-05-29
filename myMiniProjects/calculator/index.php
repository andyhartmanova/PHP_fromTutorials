



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <nav>
            <a href="index.php">Kalkulačka</a>
        </nav>
    </header>
    <main>

        <form action="" method="GET">
            
                    <input type="number" name="no1" placeholder="A" value="<?php echo isset($_GET['no1']) ? $no1 : '' ; ?>">
               
                    <input type="number" name="no2" placeholder="B" value="<?php echo isset($_GET['no2']) ? $no2 : '' ; ?>">
             
            
                    <input type="submit" name="plus" value="+">
              
                    <input type="submit" name="minus" value="-">
               
                    <input type="submit" name="times" value="x">
                
                    <input type="submit" name="divided" value="/">
                    <input type="number" name="c"  value="<?php
                                                                                if(isset($_GET['plus'])){
                                                                                    $a = $_GET['no1'];
                                                                                    $b = $_GET['no2'];
                                                                                    $c = $a + $b;
                                                                                    echo $c;

                                                                                }elseif(isset($_GET['minus'])){
                                                                                    $a = $_GET['no1'];
                                                                                    $b = $_GET['no2'];
                                                                                    $c = $a - $b;
                                                                                    echo $c;
                                                                                }elseif(isset($_GET['times'])){
                                                                                    $a = $_GET['no1'];
                                                                                    $b = $_GET['no2'];
                                                                                    $c = $a * $b;
                                                                                    echo $c;
                                                                                }elseif(isset($_GET['divided'])){
                                                                                    $a = $_GET['no1'];
                                                                                    $b = $_GET['no2'];
                                                                                    $c = $a / $b;
                                                                                    echo $c;
                                                                                    

                                                                                }else{
                                                                                    echo 'C';
                                                                                }

                                                                                ?>">
           
                 
               
        </form>
        
    </main>

</body>

</html>