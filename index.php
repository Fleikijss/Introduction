<!DOCTYPE html>

<?php include('navigation.php'); ?>

<pre>
    

<?php 
    echo "Hello World" . PHP_EOL;
    print("Hello Latvia!" . PHP_EOL);
    $number1 = 8;
    $number2 = 7;
    

    echo $number1 + $number2 - 2 . PHP_EOL;

    if ($number1 > 5) {
        echo "$number1 is larger than 5" . PHP_EOL;
        echo sprintf(
            '%s is larger than 5%s',
            $number1,
            PHP_EOL
        );
    } elseif ($number1 < 5) {
        echo "$number1 is smaller than 5" . PHP_EOL;
    } else {
        echo "$number1 is equal to 5" . PHP_EOL;
    }

    /*
    1 == "1" => true
    1 === "1" => false jo cipars un string nav viens un tas pats.
    */

    $first = true;
    for ($i = 0; $i <= 12; $i++) {
        echo $i . '|';
        if ($first === true) {
            $first = false;
            echo '<br> &';
        }
    }

    echo PHP_EOL;
    $b = 5;
    echo $b++ + 2;

    echo PHP_EOL;
    echo $b;

    printHeader('Sveiki Pasaule!');

    function printHeader ($text) {
        echo "<h1>$text</h1>";
    }

    $a = 999999;
    $b = $a;

    $b++;

    echo $a . PHP_EOL; 
    echo $b . PHP_EOL;

    function makeArray($n) {
        $arr = [];
        for ($i = 1; $i <= $n; $i++) {
            $arr[] = $n + 2;

        }
        
        return $arr;
    }

    echo print_r(makeArray(5), true) . PHP_EOL;

    function makeArrayRecursively($n) {
        $arr = [];
        if ($n > 0) {
            $arr = makeArrayRecursively($n - 1);
            $arr[] = $n + 3;
        }

        return $arr;
    }

    echo print_r(makeArrayRecursively(6), true) . PHP_EOL;

    /*
    makeArrayRecursively(0); => [];
    makeArrayRecursively(1); => [4];
    makeArrayRecursively(2); => [4, 5];
    makeArrayRecursively(3); => [4, 5, 6];
    makeArrayRecursively(4); => [4, 5, 6, 7];

    */
    $num1 = 3;
    $num2 = $num1;

    $num2++;

    /* 
    Cik ir num 1 un num2?
    num1 = 3;
    num2 = 4;
    
    
    */

?>

</pre>