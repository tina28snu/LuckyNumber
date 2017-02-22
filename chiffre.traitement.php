<?php
    $chiffre = $_POST['chiffre'];
    $chiffreGagnante = rand(0, 10);
    

    print '<h1>Guess the lucky number</h1>';
    print 'Your number is: ' . $chiffre . '<br><br>';
    print 'The lucky number is: ' . $chiffreGagnante . '<br><br>';

    $bravo = 0;
    $sorry = 0;

    if ($chiffre == $chiffreGagnante) {
        print 'Bravo! <br><br>';
        
        session_start();

        if (!isset($_SESSION['Bravo'])) {
            $_SESSION['Bravo'] = 0;
        }
        else {
            $_SESSION['Bravo']++;
        }
        $bravo = $_SESSION['Bravo'];
    }

    else {
        print 'Sorry! <br><br>';
        
        session_start();

        if (!isset($_SESSION['Sorry'])) {
            $_SESSION['Sorry'] = 0;
        }
        else {
            $_SESSION['Sorry']++;
        }
        $sorry = $_SESSION['Sorry'];
    }

    print "You guessed the number " . $bravo . " times <br>";
    print "You didn't guess the number " . $sorry . " times <br>";

    print '<a href="./chiffre.php"> Try again </a>';
?>