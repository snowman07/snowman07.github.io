<!--
Name: Arr Belrey Domingo
Date: September 14, 2020 (Fall2020 Term)
Instructor: Philip Redmond
Course: DMIT 2025 PHP/MySQL
Description: This is a Calculator form in PHP file. User need to input Num 1, operation(+,-,*,/), and Num 2. Result will show below the form. Value of the inputs will retain in the browser (prepopulate the form) 
-->

<!--Submodule testing!!! this is to check if parent/master repo be affected if there's an update in this repo-->  


<!--This is an update on SUBMODULE (meaning, a repo within the master repo)-->

<<<<<<< HEAD
<!--This is another update from SUBMODULE-->
=======
<!--This is an update on MAIN REPO-->

>>>>>>> 055e75e18a672eaf2f46a2cf2c822882288a9e57
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>

    <?php
        if(isset($_POST['mysubmit'])){ // code when user first come to the form, form must be blank
            $num1 = $_POST['num1'];
            $operator = $_POST['operator'];
            $num2 = $_POST['num2'];

            //echo the variables to test
            //echo "$num1 $operator $num2";

            //Let's do a switch conditional statement based on the type of operation
            switch ($operator) {
                case "+": //this is the content of "option" tag, enclose in a text string. Can also be the "value" attribute of "option" tag. 
                    $result = $num1 + $num2;
                    break;
                case "-": //this is the content of "option" tag, enclose in a text string. Can also be the "value" attribute of "option" tag.
                    $result = $num1 - $num2;
                    break;
                case "*": //this is the content of "option" tag, enclose in a text string. Can also be the "value" attribute of "option" tag.
                    $result = $num1 * $num2;
                    break;
                case "/": //this is the content of "option" tag, enclose in a text string. Can also be the "value" attribute of "option" tag.
                    $result = $num1 / $num2;
                    break;
                //default:
                    //echo "Number should not be blank";
            }
            //echo "$result";
        } // END OF code when user first come to the form, form must be blank
    ?>

    <h1>Calculator</h1>

    <form name="calcform" method="post" action="calculator.php">
        Num 1: <input type="number" name="num1" value="<?php echo $num1?>"> <!--"value" attrib is use to prepopulate the form-->
        <select name="operator">

            <?php
            // quick and dirty way to retain the value of operator "input" (prepopulate the form of the name="operator")
            // not perfect as it is simply adds one option to the top, but better than losing the users last operation
                if($operator){
                    echo "\n\t<option>$operator</option>"; 
                }
            ?>

            <!--<option value="add">+</option>-->
            <option>+</option>
            <!--<option value="subtract">-</option>-->
            <option>-</option>
            <!--<option value="multiply">*</option>-->
            <option>*</option>
            <!--<option value="divide">/</option>-->
            <option>/</option>
        </select>
        Num 2: <input type="number" name="num2" value="<?php echo $num2?>"> <!--"value" attrib is use to prepopulate the form-->
        <input type="submit" name="mysubmit">
    </form>

    <?php
    if($result) {
        echo "<b> = " . $result . "</b>";
    }
    
    ?>
    
</body>
</html>