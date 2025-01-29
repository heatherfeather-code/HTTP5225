<!doctype html>
<html>
  <head>
    
    <title>PHP and Creating Output</title>
    
  </head>
  <body>
  
    <?php echo '<h1>PHP and Creating Output</h1>' ?>

    <?php 
        echo '<p>The PHP echo command can be used to create output.</p>'; 

        echo '<p>When creating output using echo and PHP, quotes can often cause problems. There are several solutions to using quotes within an echo statement:</p>';
    ?>

    
    <?php 
    echo 
    '<ul>
        <li>Use HTML special characters</li>
        <li>Alternate between single and double quotes</li>
        <li>Use a backslash to escape quotes</li>
    </ul>';
    
    ?>
    <?php
    echo '<h2>More HTML to Convert</h2>';

    echo '<p>PHP says "Hello World!"</p>';

    echo '<p>Can you display a sentence with \' and "?</p>';

    echo '<img src="php-logo.png">';
    ?>

    <img src="<?php echo 'https://google.com/image';?>" alt="<?php echo ''; ?>">

    <!-- VARIABLES AND CONCATENATION -->

    
    <?php 
    //Both of these variables are the same, it does not matter if you use single or double quotes, just be consistent!
    $name = "Heather Boden";
    $lastName = 'Boden';
    
    // Concatenation!
    echo "Hello, " . $name;


    //$person = array ('','','',);
    //for lab make the mailto and the hyper link work

    $person['first'] = 'Heather';
    $person['last'] = 'Boden';
    $person['email'] = 'heatherboden3@gmail.com';
    $person['web'] = '<a href="https://google.com">Google</a>';
    
    echo ' email: <a href="mailto:' .$person['email'] .'">' .$person['email'] . '</a>';
    echo ' Hello, ' . $person['first'];
    echo ' Website: ' . $person['web'];
    
    ?>

    

  </body>
</html>