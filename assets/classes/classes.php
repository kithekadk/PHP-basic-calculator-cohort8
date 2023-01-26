<?php

// class MyCalculator
// {
//     private $first_num;
//     private $second_num;

//     public function __construct($first_num, $second_num)
//     {
//         $this->first_num = $first_num;
//         $this->second_num = $second_num;
//     }
//             public function add() {
//                 return $this->first_num + $this->second_num;
//                 }
//             public function subtract() {
//                 return $this->first_num - $this->second_num;
//                 }

//             public function multiply() {
//                 return $this->first_num * $this->second_num;
//                 }
//             public function divide() {
//                 return $this->first_num / $this->second_num;
//                     }
// }

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



   

  