<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorials</title>
</head>
<body>
    <h1>PHP Tutorials</h1>
    <div>
        <h2>Variables & Scope</h2>
        <?php
            // defining variables (php is loosley typed)
            $x = 5; // integer
            $y = "Catherine"; // string
            echo $x;
            echo $y;
        ?>

        <?php
            // use var_dump() to get the data type
            var_dump(5);
            var_dump("Catherine");
            var_dump(3.14);
            var_dump(true);
            var_dump([2, 3, 56]);
            var_dump(NULL);
        ?>

        <?php
            // global scope works differently 
            $x = 5; // global scope

            // function myTest() {
            // using x inside this function will not work
            // echo "Variable x inside function is: $x";
            // }
            // myTest();

            echo "Variable x outside function is: $x";

            echo "<br>";

            // php has static scope. typically, when a function finishes executing, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job. To achieve this, use the static keyword when you first declare the variable.
            function myTest2() {
                static $x = 0; // static scope
                echo $x;
                $x++;
            }

            myTest2();
            echo ", ";
            myTest2();
            echo ", ";
            myTest2();
            echo "<br>";

            // GLOBAL KEYWORD to use global variables in a function
            $a = 5;
            $b = 10;

            function myTest3() {
            global $a, $b;
            $b = $a + $b;
            }

            myTest3();
            echo $b; // outputs 15
        ?>
    </div>

    <div>
        <h2>Date Types (Strings, Numbers, Arrays)</h2>
        <?php
            // String operations with single and double quotes
            $txt1 = "Learn PHP";
            $txt2 = "W3Schools.com";

            print '<h3>' . $txt1 . '</h3>';
            print '<p>Study PHP at ' . $txt2 . '</p>';

            // A double quoted string will substitute the value of variables, and accepts many special characters, like \n, \r, \t by escaping them.

            echo strlen($txt1);
            echo str_word_count($txt1);

            $txt = "I really love PHP!";
            var_dump(str_contains($txt, "love")); // this is case sensitive, if the word was "Love" it wouldn't find anything

            // return in upper case
            $xx = "Hello World!";
            echo strtoupper($xx);
            echo strtolower($xx);

            // Data types list
            echo "<h3>Data Types in PHP</h3>";
            echo "<ul>
                    <li>String</li>
                    <li>Int</li>
                    <li>Float</li>
                    <li>Bool (true / false)</li>
                    <li>Array</li>
                    <li>object</li>
                    <li>null (empty variable)</li>
                    <li>resource (refers external resource)</li>
                 </ul>";

            // Object data type
            class Car {
            public $color;
            public $model;
            public function __construct($color, $model) {
                $this->color = $color;
                $this->model = $model;
            }
            public function message() {
                return "My car is a " . $this->color . " " . $this->model . "!";
            }
            }

            $myCar = new Car("red", "Volvo");
            var_dump($myCar);

            echo "<br>";

            // string concatenation
            $xxx = "Hello";
            $yy = "World";
            $zz = $xxx . " " . $yy;
            echo $zz;
            echo "<br>";

            // escape characters
            $x = "We are the so-called \"Vikings\" from the north.";
            echo $x;

            // Type casting
            $a = 5;       // Integer
            $b = 5.34;    // Float
            $c = "hello"; // String
            $d = true;    // Boolean
            $e = NULL;    // NULL

            $a = (string) $a;
            $b = (string) $b;
            $c = (string) $c;
            $d = (string) $d;
            $e = (string) $e;

            // Use var_dump() to verify the data type
            var_dump($a);
            var_dump($b);
            var_dump($c);
            var_dump($d);
            var_dump($e);

            echo "<h3>Constants</h3>";
            define("GREETING", "Welcome to W3Schools.com!");
            echo GREETING;
        ?>
    </div>

    <div>
        <h2>Operators</h2>
        <?php
            echo(pi());
            echo "<br>";
            echo(min(0, 150, -8, -200));
            echo "<br>";
            echo(max(0, 150, -8, -200));
            echo "<br>";
            echo(abs(-6.7));
            echo "<br>";
            echo(sqrt(64));
            echo "<br>";
            echo(round(3.60));
            echo "<br>";
            echo(round(0.49));
            echo "<br>";
            echo(rand(10, 100));
            echo "<br>";
        ?>
    </div>

    <div>
        <h2>If Else</h2>
        <?php
            // Conditional Statements
            // if (condition) {
            // // code to be executed if condition is true;
            // }

            if (5 > 3) {
                echo "Have a good day!";
            }
            $t = 14;
            if ($t < 20) {
                echo "Have a good day!";
            }

            // using and
            $a = 200;
            $b = 33;
            $c = 500;

            if ($a > $b && $a < $c ) {
            echo "Both conditions are true";
            }

            // using or
            $a = 5;

            if ($a == 2 || $a == 3 || $a == 4 || $a == 5 || $a == 6 || $a == 7) {
            echo "$a is a number between 2 and 7";
            }

            // using if/else
            $t = date("H");

            if ($t < "20") {
            echo "Have a good day!";
            } else {
            echo "Have a good night!";
            }

            // using elseif
            $t = date("H");

            if ($t < "10") {
            echo "Have a good morning!";
            } elseif ($t < "20") {
            echo "Have a good day!";
            } else {
            echo "Have a good night!";
            }
        ?>
    </div>

    <div>
        <h2>Switch</h2>
        <?php
            // Switch is chosen when comparing a single variable against multiple fixed values and if-else for complex logic, ranges, etc.
            $favcolor = "red";

            switch ($favcolor) {
            case "red":
                echo "Your favorite color is red!";
                break;
            case "blue":
                echo "Your favorite color is blue!";
                break;
            case "green":
                echo "Your favorite color is green!";
                break;
            default:
                echo "Your favorite color is neither red, blue, nor green!";
            }
        ?>
    </div>

    <div>
        <h2>Match</h2>
        <?php
           //Match provides a way to handle multiple conditional checks like switch

            $favcolor = "red";

            $text = match($favcolor) {
            "red" => "Your favorite color is red!",
            "blue" => "Your favorite color is blue!",
            "green" => "Your favorite color is green!",
            default => "Your favorite color is neither red, blue, nor green!",
            };

            echo $text;

            // Match multiple values
            $d = 3;

            $text = match($d) {
            1, 2, 3, 4, 5 => "The week feels so long!",
            6, 0 => "Weekends are best!",
            default => "Invalid day",
            };

            echo $text;

            // In a match expression there must be a condition that matches the expression or default case to handle it 
            $favcolor = "pink"; // no conditions will match this

            try {
            $text = match($favcolor) {
                "red" => "Your favorite color is red!",
                "blue" => "Your favorite color is blue!",
                "green" => "Your favorite color is green!",
            };
            } catch (\UnhandledMatchError $e) {
            var_dump($e); // throw unhandled match error exception
            }

            echo $text;
        ?>
    </div>

    <div>
        <h2>Loops</h2>
        <?php
            // PHP has while, do ... while, for and foreach loops

            echo "<h3>While Loops</h3>";
            $i = 1; // Initialize counter
            while ($i < 6) { // Check condition
                echo $i; // Execute code
                $i++; // Increment counter
            }

            // breaking a loop
            $i = 1;
            while ($i < 6) {
                if ($i == 3) break; // could replace break would continue and it would skip 3 and keep going 
                echo $i;
                $i++;
            }

            echo "<h3>Do While Loop</h3>";
            $i = 0;

            do {
                $i++;
                if ($i == 3) continue;
                echo $i;
            } while ($i < 6);

            echo "<h3>For loop</h3>";
            for ($x = 0; $x <= 10; $x++) {
                echo "The number is: $x <br>";
            }

            echo "<h3>For Each loop</h3>";

            // For each loops through an array
            $colors = array("red", "green", "blue", "yellow");

            foreach ($colors as $value) {
                echo "$value <br>";
            }

            // For associative arrays
            $members = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

            foreach ($members as $key => $value) {
                echo "$key : $value <br>";
            }

            // For objects
            // class Car {
            // public $color;
            // public $model;
            // public function __construct($color, $model) {
            //     $this->color = $color;
            //     $this->model = $model;
            // }
            // } this was already defined above

            $myCar = new Car("red", "Volvo");

            foreach ($myCar as $x => $y) {
                echo "$x: $y <br>";
            }
        ?>
    </div>

    <div>
        <h2>Functions</h2>
        <?php
            // Function syntax
            function myMessage() {
                echo "Hello world!";
            }

            myMessage();

            function familyName($fname) {
                echo "$fname Refsnes.<br>";
            }

            familyName("Jani");
            familyName("Hege");
            familyName("Stale");
            familyName("Kai Jim");
            familyName("Borge");
        ?>
    </div>

    <div>
        <h2>Arrays</h2>
        <?php
            echo "<ul>
            <li>Indexed Arrays (arrays with numeric index)</li>
            <li>Associative arrays (python dictionary)</li>
            <li>Multidimensional arrays (arrays within arrays)</li>
            </ul>";

            // Indexed arrays
            $cars = array("Volvo", "BMW", "Toyota");
            echo $cars[0];

            // Associative Arrays
            $car2 = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
            echo $car2["model"];

            // changing value of array item
            $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
            $car["year"] = 2024;
            var_dump($car);

            // two ways to create arrays:
            $cars = array("Volvo", "BMW", "Toyota");
            $cars2 = ["Volvo", "BMW", "Toyota"];

            // declaring empty array
            $cars = [];
            $cars[0] = "Volvo";
            $cars[1] = "BMW";
            $cars[2] = "Toyota";
        ?>
        
    </div>
</body>
</html>