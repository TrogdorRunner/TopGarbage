<!DOCTYPE html>
<html>
    <head>
    <title>My First Day on the Jay</title>
    </head>
    <body>
        <p>
            <?php
            echo "<p>Hello World</p>";
            echo "<p>Hello," . " " . "world" . "!</p>";
            echo "<p>" . 5*7 . "</p>";
            $myname = "OnyC";
            $bignumbers = 84877496;
            if ($bignumbers > 1){
                print "<p>help</p>";
            }
            echo "<p>help</p>";
            $myArray = array("A", "B", "C");
            echo $myArray[0];
            $myArray[1] = "Bee";
            echo $myArray[1];
            unset($myArray[2]);
            array_push($myArray, "See");
            print count($myArray);
            ?>

            <a href="sblounskched.html">SBLOUNSKCHED!</a>
        </p>
    </body>
</html>
