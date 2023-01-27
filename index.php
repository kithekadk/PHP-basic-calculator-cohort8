<?php 
$result="";

if ($_SERVER ['REQUEST_METHOD'] == 'POST'){
    include "assets/classes/classes.php";
    $result='Result : '.$theCalculation->displayResults();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Simple-calculator</title>
</head>

<body>



<div class="main-container">
    <h1>SIMPLE CALCULATOR</h1>

    <form action="index.php" method="POST">
        <label for="Num1">
        First number  
        <input type="number" name="Num1"  placeholder="Input your integer here" required >
        </label>

        <label for="num2">
        Second number
        <input type="number" name="Num2"  placeholder="Input your integer here" required >

        </label>

        <div class="buttons">
            <input type="submit" name="operator" value="+">
            <input type="submit" name="operator" value="-">
            <input type="submit" name="operator" value="*">
            <input type="submit" name="operator" value="/">
        </div>
        <label for="Result">
             Result <?php echo $theCalculation->my_calculator(); ?>
        </label>
        
        <h1 class="success">
             <?php echo $result; ?>
        </h1>
    </form>

</div>


    

</body>
</html>
