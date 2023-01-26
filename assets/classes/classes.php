<?php

class myCalculator{
    public $first_num;
    public $second_num;
    public $operator;
    public $results;

    public function __construct($first_num, $second_num, $operator)
    {
        $this->first_num = $first_num;
        $this->second_num = $second_num;
        $this->operator = $operator;
    }

    public function my_calculator() {
        if($this->operator=="+"){
		    $this->results = $this->first_num + $this->second_num;
        }elseif($this->operator=="-"){
		    $this->results = $this->first_num - $this->second_num;
        }elseif($this->operator=="*"){
		    $this->results = $this->first_num * $this->second_num;
        }elseif($this->operator=="/"){
		    $this->results = $this->first_num / $this->second_num;
        }
    }

    public function displayResults(){
        return $this->results;
    }

}


if ( isset($_POST['Num1']) && isset($_POST['Num2'])) {
    if(!empty($_POST['Num1']) && !empty($_POST['Num2'])){
        $theCalculation = new myCalculator($_POST["Num1"], $_POST["Num2"], $_POST['operator']);
        $theCalculation->my_calculator();
    }
}else{
    $fail="Please fill in both the first number and the second number";
}

?>



   

  



   

  