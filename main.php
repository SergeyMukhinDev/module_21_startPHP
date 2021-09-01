<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice </title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    
    <div class="flex-container">

        <div class="header"> 
            <div class="left">    
               <?php include 'logo.inc.php' ?>         
               <?php include 'menu.inc.php' ?>
               <?php include 'logo2.inc.php' ?>
            </div> 	  
            <div class="right">
                <?php include 'input.inc.php' ?>
            </div> 
        </div>  
        <div class="headsup">
            <?php include 'headsup.inc.php' ?>
        </div>     
     
        <div class="about_me">
         
          <h1>  <?php  echo $p  ?> </h1>

            <div class="data">
                <div class="myImg">
                    <?php  echo '<img src="/img/php.jpg">'; ?>                    
                </div>

                <div class="fullname">
                    <p> Меня зовут 
                    <?php echo $name, ' ', $surname . '<br>'; 
                          echo 'город', ' ', $city; ?>                                      
                    </p> 
           
                    <p> Мне
                    <?php  echo $age;   ?>          
                    лет </p>
                    <p> Мы научились создавать переменные </p>
                    <p> Изучили простые операции с ними </p>
                </div>
            </div>

            <div class="knowledge">
                    <p>         
                    <?php  include 'knowledge.inc.php'; ?>
                    <?php   echo $a, ' ', $b, ' ', $c; ?> <br>
                                       
                    <?php
                        $a = 10;
                        $b = 20;
                        $c = $a + $b;
                        echo $c;
                    ?>   <br>                
                     <?php
                        echo $d;
                    ?>
                    </p>
                    <br>
                    <p> Сгенерировано случайное число <br>
                    в диапазоне от 0 до 999 - 
                    <br>
                    <?php 
                        echo $randomNumber
                    ?> 
                    данное число 
                    <?php 
                        echo $result
                    ?>
                    <br>
                    время затраченное на генерацию чила
                    <?php 
                        echo $time
                    ?> 
                    </p>

            </div>

            <div class="article">
                <p class="text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                    Recusandae asperiores ducimus dolore explicabo. Animi est amet quibusdam molestias! 
                    Minus laudantium sapiente dignissimos possimus natus cumque delectus sed, accusantium totam quia?
                </p>
            </div>
        </div>

            <?php include 'footer.inc.php' ?>

    </div>


</body>
</html>
