<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Simple-calculator</title>
</head>

<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>


<body>



<div class="main-container">
    <h1>SIMPLE CALCULATOR</h1>

    <form action="post" method="">
        <label for="Num1">
        First number  
        <input type="number" name="Num1"  placeholder="Input your integer here">
        </label>

        <label for="num2">
        Second number

        <input type="number" name="Num2"  placeholder="Input your integer here">

        </label>

        <div class="buttons">

            <button> + </button>
            <button> - </button>
            <button> * </button>
            <button> / </button>
        </div>

        <label for="Result">
        Result<input type="number" name="Result" placeholder="Result to be displayed here" >
        </label>
    </form>

</div>


    

</body>
</html>