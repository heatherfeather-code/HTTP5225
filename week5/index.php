<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    //Connection String
    $connect = mysqli_connect('localhost', 'root', 'root', 'colors');


    if(!$connect){
        //this is optional, but good practice to ensure that it is connecting to the database.
        //using the same family of commands: any error related to the connection string, it will spit out the below error. 
        die("Connection Failed:" . mysqli_connect_error());
    }

    $query = "SELECT name, hex FROM colors";
    $colors = mysqli_query($connect,  $query);


    
    foreach ($colors as $color){
        echo

        '<div style= "align-content: center; font-size: 20px;font-weight:800; text-align: center; width: 100%; height: 100px; background-color: ' . $color["hex"] . '"> '.$color["name"].'</div>';

      
    }
    

    
    
    ?>
</body>
</html>