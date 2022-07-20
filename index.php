<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index.php | Php Practice 19-7-22</title>
</head>
<body>
    <h1><a href="https://www.w3schools.com/php/" target="_blank">PHP (w3Schools)</a> <a href="https://youtu.be/_TST9dVptls" target="_blank">PHP For Absolute Beginners in Bangla | PHP Crash Course In 2 Hours (Procoder BD)</a></h1>
    <hr>
    <?php
        // $food = "Pizza"; 
        // echo 'I Love ' . $food .'<br>';

        // PHP Comments...............................
        // phpinfo();
        /*Lorem ipsum dolor sit, 
        amet consectetur 
        adipisicing elit. 
        Accusantium, quod!*/

        // PHP Variables text type...............................
        // $age = 10;
        // echo 'My age is ' . $age;
        
        // $age = 10;
        // echo 'My age is ' . $age .', I read in class one.';

        // $x = 10;
        // $y = 20;
        // echo $x + $y;

        // PHP echo and print statements...............................
        // $x = 10;
        // $y = 20;
        
        // echo $x + $y .'<br>';
        // echo ($x + $y .'<br>');
        // print $x + $y .'<br>';
        // print ($x + $y);

        // PHP Data types...............................
        // $name = 'Forhad Khan';
        // $name1 = "It's me";
        // $age = 30;
        // $age1 = 30.2;
        // $religion = true;
        // $fruits = array('Apple', 'watermelon', 'Pulm');
        // $null = null;
        // var_dump($null);

        // PHP Object...............................
        // class Phone {
        //     var $model;
        //     function phoneModel ($number) {
        //         global $model;
        //         $model = $number;
        //         echo "This is $model <br>";
        //     }
        //  }

        //  $apple = new Phone;
        //  $apple -> phoneModel('iPhone 14');

        //  $samsung = new Phone;
        //  $samsung -> phoneModel('S22 Ultra');


        // PHP Strings...............................
        // echo strlen('I love to eat Pizza');
        // echo str_word_count('I love to eat Pizza');
        // echo strrev('I love to eat Pizza');
        // echo strpos('I love to eat Pizza', 'eat');

        // $test = strpos('I love to eat Pizza', 'rice');
        // var_dump($test);

        // $test = strpos('I love to eat Pizza', 'Pizza');
        // var_dump($test);

        // echo str_replace('Pizza', 'Burger', 'I love to eat Pizza');


        // PHP number...............................
        // $x = 5;
        // $y = 10;

        // PHP math...............................
        // echo (pi());

        // echo (min(21, 15, 40, 45, 66, 18, 1, 4, 17));
        // echo (max(21, 15, 40, 45, 66, 18, 1, 4, 17, 1000));

        // echo (abs(-17));
        // echo (abs(17));

        // echo (sqrt(16));
        // echo (sqrt(64));

        // echo (round(pi()));

        // echo (rand());
        // echo (rand(1, 6));

        // PHP Constants...............................
        // $x = 5;
        // $x = 55;
        // $y = 10;

        // echo($x);


        // $x = 5;
        // $x = 55;
        // $y = 10;

        // define('a', '98');
        // echo(a);
        // var_dump(a);


        // $x = 5;
        // $x = 55;
        // $y = 10;

        // define('a', 98);
        // echo(a);
        // var_dump(a);


        // $x = 5;
        // $x = 55;
        // $y = 10;

        // define('a', 98);
        // define('A', 99);
        // echo(a);
        // var_dump(A);


        // $x = 5;
        // $x = 55;
        // $y = 10;

        // define('a', 98);
        // define('A', 99);
        // define('cars', [
        //     'BMW',
        //     'Tesla',
        //     'Toyota']);
        // echo(cars[1]);
        // var_dump(cars);


        // function name(){
        //     $x = 40;
        //     echo($x);
        //     echo(cars[1]);

        // }

        // name();



        // PHP Operators...............................
        // $x = 55;
        // $y = 10;

        // echo $x + $y;
        // echo $x - $y;
        // echo $x / $y;
        // echo $x * $y;
        // echo $x % $y;
        // echo $x ** $y;


        // PHP Assignment Operators...............................
        // $x = 2;
        // $y = 3;

        // echo $x = $y;


        // $x = 2;
        // $y = 3;
        // $z = $x + $y;

        // // echo $x = $y;
        // echo $z;


        // $x = 2;
        // $y = 3;
        // // $z = $x + $y;
        // $x = $x + $y;
        

        // // echo $x = $y;
        // echo $x;



        // $x = 2;
        // $y = 3;
        // // $z = $x + $y;
        // $x += $y;
        

        // // echo $x = $y;
        // echo $x;



        // $x = 2;
        // $y = 3;
        // $x -= $y;
        // // $x /= $y;
        // // $x *= $y;
        // // $x %= $y;
        

        // // echo $x = $y;
        // echo $x;



        // PHP Comparison Operators...............................
        // $x = 50;
        // $y = '30';

        // var_dump($x == $y);


        // $x = 50;
        // $y = '50';

        // var_dump($x == $y);



        // $x = '50';
        // $y = '50';

        // var_dump($x === $y);



        // $x = 50;
        // $y = '50';

        // var_dump($x === $y);



        // $x = 50;
        // $y = '50';

        // var_dump($x != $y);



        // $x = 50;
        // $y = '50';

        // var_dump($x !== $y);



        // $x = 50;
        // $y = '50';

        // var_dump($x <> $y);



        // $x = 50;
        // $y = 50;

        // var_dump($x !== $y);



        // $x = 500;
        // $y = 50;

        // var_dump($x !== $y);



        // $x = 500;
        // $y = 50;

        // var_dump($x > $y);



        // $x = 500;
        // $y = 50;

        // var_dump($x >= $y);



        // $x = 500;
        // $y = 50;

        // var_dump($x < $y);



        // $x = 500;
        // $y = 50;

        // var_dump($x <= $y);


        // PHP If & else Statements...............................
        // $date = date('H');

        // if(5<6){
        //     echo 'Good Morning';
        // }



        // $date = date('H');

        // if(5>6){
        //     echo 'Good Morning';
        // }



        // $date = date('H');

        // if(5>6){
        //     echo 'Good Morning';
        // } else{
        //     echo 'Have a nice day.';
        // }



        // $date = date('H');

        // if(5<6){
        //     echo 'Good Morning';
        // } else{
        //     echo 'Have a nice day.';
        // }



        // $date = date('H');

        // if($date < 19){
        //     echo 'Good Morning';
        // } else{
        //     echo 'Have a nice day.';
        // }



        // $date = date('H');

        // if($date > 19){
        //     echo 'Good Morning';
        // } else{
        //     echo 'Have a nice day.';
        // }



        // $date = date('H');

        // if($date < 19){
        //     echo 'Good Morning'. $date;
        // } else{
        //     echo 'Have a nice day.';
        // }



        // $date = date('H');

        // if(22 < 19){
        //     echo 'Good Morning';
        // } elseif(22 < 25){
        //     echo 'nice day.';
        // }
        
        // else{
        //     echo 'Have a nice day.';
        // }



        // $date = date('H');

        // if(22 < 19){
        //     echo 'Good Morning';
        // } elseif(22 < 21){
        //     echo 'nice day.';
        // }
        
        // else{
        //     echo 'Have a nice day.';
        // }


        // PHP Switch Statements...............................
        // switch('red'){
        //     case 'red':
        //         echo 'Apple is red';
        // }



        // switch('green'){
        //     case 'red':
        //         echo 'Apple is red';
        //     default:
        //     echo 'I love to eat fruits';
        // }



        // switch('green'){
        //     case 'red':
        //         echo 'Apple is red';
        //     case 'green':
        //         echo 'Mango is green';
        //     default:
        //     echo 'I love to eat fruits';
        // }



        // switch('green'){
        //     case 'red':
        //         echo 'Apple is red';
        //         break;
        //     case 'green':
        //         echo 'Mango is green';
        //         break;
        //     default:
        //     echo 'I love to eat fruits';
        // }



        // switch('blue'){
        //     case 'red':
        //         echo 'Apple is red';
        //         break;
        //     case 'green':
        //         echo 'Mango is green';
        //         break;
        //     default:
        //     echo 'I love to eat fruits';
        // }



        // PHP loops...............................
        // $x = 2;

        // while($x <= 5){
        //     echo "The number is: $x <br>";
        //     $x++;
        // }


        // $x = 2;

        // do{
        //     echo "The number is: $x <br>";
        //     $x++;
        // } while($x <= 5);




    
        // for($y = 0; $y <= 10; $y++){
        //     echo "The number is: $y <br>";
        // }




        // for($y = 0; $y <= 10; $y+=5){
        //     echo "The number is: $y <br>";
        // }



        // for($y = 0; $y <= 10; $y+=10){
        //     echo "The number is: $y <br>";
        // }


        // for($y = 0; $y <= 10; $y-=2){
        //     echo "The number is: $y <br>";
        // }



        // for($y = 0; $y <= 10; $y+=2){
        //         echo "The number is: $y <br>";
        //     }



        // PHP Functions...............................
        // function test_name(){
        //     echo "This is function";
        // }
        // test_name();



        // function test_name($name){
        //     echo "This is function. $name";
        // }
        // test_name("Forhad");
        // test_name("Khan");



        // function test_name($name){
        //     echo "This is function. $name <br>";
        // }
        // test_name("Forhad");
        // test_name("Khan");



        // function test_name($name, $age){
        //     echo "This is function. $name and his age is $age <br>";
        // }
        // test_name("Forhad", 21);
        // test_name("Khan", 14);



        // function test_name($name, $age = 2){
        //     echo "This is function. $name and his age is $age <br>";
        // }
        // test_name("Forhad", 21);
        // test_name("Khan", 14);
        // test_name("Alif");



        // PHP Date and Time...............................
        // echo "Today is " .date("1") . "<br>";

        // echo "Today is " .date("d/m/Y") . "<br>";

        // echo "Today is " .date("d.m.Y") . "<br>";

        // echo "Today is " .date("d-m-Y") . "<br>";

        // echo "Today is " .date("Y") . "<br>";

        // echo "Today is " .date("h:i:sa") . "<br>";

        echo "Today is " .date("d-m-Y") . "<br>";

        date_default_timezone_set("Asia/Dhaka");
        echo "Time is " .date("h:i:sa") . "<br>";

    ?>
</body>
</html>