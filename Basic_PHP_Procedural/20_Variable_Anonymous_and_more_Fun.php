<?php
/* Variable Anonymous , Callable, and Arrow Functions */

function sum(...$nums){
    
    return array_sum($nums);
}
$x='sum';

if(is_callable($x)){
    echo $x(1,2,3,4);//10
}else{
    echo 'not callable';
}

//Anonymous fun

 $sums=function (...$nums){
    return array_sum($nums);
}; 
 
    echo $sums(1,2,3,4);//10 

    $z=1;
    $sums=function (...$nums) use($z){
        echo $z;//1  this(use($z)) helps to use out side var in the function
        $z=5;
        return array_sum($nums);
    };  
        echo $sums(1,2,3,4);//10 
        echo $z;//1    if we use(&$z) the the out put be come 5


        $array=[1,2,3,4];
        
        function  foo($element){
            return $element *2;
        };
                $array2 = array_map('foo',$array);
        
                print_r($array2);
        
                //or

        $c=function($element){
    return $element *2;
};
        $array2 = array_map($c,$array);

        print_r($array2);

        //or

        $array2 = array_map(function($element){
            return $element *2;
        },$array);

        print_r($array2);
/*
out put
Array
(
    [0] => 2
    [1] => 4
    [2] => 6
    [3] => 8
)
  */
 

  $sums=function (callable $callback,...$nums){  // we can use closure instead of callable. the difference is that closure must be an anonymous function where callable can be a normal function 
    return $callback(array_sum($nums));
}; 
 
    echo $sums('bb',1,2,3,4);//8

    function  bb($total_array_sum){
        return $total_array_sum -2;
    };
    //or
    echo $sums(function ($total_array_sum){
        return $total_array_sum -2;
    },1,2,3,4);  //8

    // arrow functions
$arr=[1,2,3,4];
    $arr2 = array_map(function($element){
        return $element *$element;
    },$arr);

    print_r($array2);

//or

$arr=[1,2,3,4];
    $arr2 = array_map(fn($element) => $element*$element,$arr);

    print_r($array2);
    /*
    Array
(
    [0] => 2
    [1] => 4
    [2] => 6
    [3] => 8
)
    */
?>