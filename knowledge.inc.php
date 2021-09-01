
<?php
$a = 'Мои знания на';
$b = 100;
$c = '%'; 
?>

<?php
  $price = 15;

  if($price >= 15 && $price <= 20)
      $d = 'Это число находится между 15 и 20';
?>

<?php 
  $time_start = microtime(true);
  $randomNumber = rand(0, 999);
  
  if(($randomNumber % 2) == 0){
    $result = 'четное';
  } else {
    $result = 'не четное';
  }
  $time_end = microtime(true);
  $time = $time_end - $time_start;
?>
