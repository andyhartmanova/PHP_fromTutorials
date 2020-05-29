<?php

$loggedIn = true;
$arr = [1,3,5,7,9,2];
/*
if($loggedIn){
    echo 'You are logged in';
}else{
    echo 'You are NOT logged in';
}

echo($loggedIn) ? 'You are logged in' : 'You are NOT logged in';

$isRegistred = ($loggedIn == true) ? true : false;
echo $isRegistred;

$age = 20;
$score = 15;
echo 'Your score is: '.($score > 10? ($age > 10 ? 'Average': 'Exeptional') 
    :($age > 10 ? 'Horrible' : 'Average'));
  
*/
?>

<div>
    <?php if($loggedIn) { ?>
    <h1>Welcome USer</h1>
    <?php } else{ ?>
    <h1>Welcome guest</h1>
    <?php } ?>
</div>

<div>
    <?php if($loggedIn): ?>
        <h1>Welcome User</h1>
    <?php else: ?>
        <h1>Welcome Guest</h1>
    <?php endif; ?>
</div>

<div>
    <?php foreach($arr as $val): ?>
        <strong><?php echo $val; ?></strong>
    <?php endforeach; ?>
</div>