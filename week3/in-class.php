<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>in-class Week3</title>
</head>
<body>
    <h1> Challenge 1</h1>
    <?php 
     $hour = ceil(rand(1,24));

     $theTime = "The time is ";
     $noFood = "The Animals do not need to be fed right now.";   

     $breakfast = "Bananas, Apples and Oats";
     $lunch = " Fish, Chicken, and Vegetables";
     $dinner = "Steak, Carrots, and Broccoli";
    

    if ($hour == 5 || $hour == 6 || $hour == 7 || $hour == 8 || $hour == 9){
        echo '<p>'. $theTime . $hour .'</p>';
        echo '<p>' . $breakfast . '</p>';

    } elseif ($hour == 12 || $hour == 13 || $hour == 14){
        echo '<p>'. $theTime . $hour .'</p>';
        echo '<p>' . $lunch . '</p>';
    }
    elseif ($hour == 19 || $hour == 20|| $hour == 21|| $hour == 22){
        echo '<p>'. $theTime . $hour .'</p>';
        echo '<p>' . $dinner . '</p>';
    } else{
        echo '<p>'. $theTime . $hour .'</p>';
        echo '<p>'. $noFood .'</p>';
    };
    
    ?>
    <hr>
    <h1> Challenge 2 </h1>
    <?php 
    $magicNumber = ceil(rand(1,100));
    $text = " Your magic number is ";
    $trueMagicNumber = "Your number is magic ";
    $fizz = "Fizz";
    $buzz = "Buzz";
    $fizzBuzz = "FizzBuzz";
    
    if($magicNumber % 3){
        echo '<p>' . $text . $magicNumber . '</p>';
        echo '<p>'. $fizz . '</p>';
    }else if ($magicNumber % 5){
        echo '<p>' . $text . $magicNumber . '</p>';
        echo '<p>'. $buzz . '</p>';
    }elseif ($magicNumber % 3 && $magicNumber % 5){
        echo '<p>' . $text . $magicNumber . '</p>';
        echo '<p>'. $fizzBuzz . '</p>';
    }else{
        echo '<p>' . $trueMagicNumber . $magicNumber . '</p>'; 
    };


    ?>
</body>
</html>