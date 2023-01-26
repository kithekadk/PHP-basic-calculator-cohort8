<?php


if ( isset($_POST['submit']) ) {
        
    $num = $_POST['first_num'];
    $num = $_POST['second_num'];

    $num= $_POST['results'];

    $num = my_calculator($first_num, $second_num, $results);
}

function my_calculator($first_num, $second_num, $results) {
    
    switch($results) {            
        case '+':
            $results = $first_num + $second_num;
            break;
        case '-':
            $results = $first_num - $second_num;
            break;
        case '*':
            $results = $first_num * $second_num;
            break;
        case '/':
            $results = $first_num / $second_num;
            break;       
    }
    return $results;
}
?>



   

  