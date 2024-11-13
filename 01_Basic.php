<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        h2 {
            color: #333;
            border-bottom: 1px solid #ddd;
            padding-bottom: 5px;
        }
        pre {
            background: #f8f8f8;
            padding: 10px;
            border-radius: 5px;
            overflow-x: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>PHP Tutorial</h2>
        <p>This is a simple PHP tutorial demonstrating PHP operators, variables, and data types.</p>

        <h3>Basic Output</h3>
        <pre><?php echo "Hello World"; ?></pre>
        <p>PHP Version: <?php echo phpversion(); ?></p>

        <h3>Variables and Arithmetic Operations</h3>
        <?php
            $a = 10;
            $b = 20;
            echo "<p>Sum of $a and $b = " . ($a + $b) . "</p>";
        ?>
        
        <h3>Arithmetic Operators</h3>
        <?php
            echo "<pre>";
            echo "Sum: " . ($a + $b) . "\n";
            echo "Subtraction: " . ($a - $b) . "\n";
            echo "Multiplication: " . ($a * $b) . "\n";
            echo "Division: " . ($a / $b) . "\n";
            echo "Modulus: " . ($a % $b) . "\n";
            echo "Increment: " . ($a++) . "\n";
            echo "Decrement: " . ($a--) . "\n";
            echo "Exponentiation: " . ($a ** $b) . "\n";
            echo "Floor Division: " . floor($a / $b) . "\n";
            echo "Ceiling Division: " . ceil($a / $b);
            echo "</pre>";
        ?>

        <h3>Assignment Operators</h3>
        <?php
            $newvar = $a;
            $newvar += 1;
            echo "<p>New variable (after += 1): $newvar</p>";
        ?>

        <h3>Comparison Operators</h3>
        <?php
            echo "<pre>";
            echo "1 == 1: " . var_dump(1 == 1);
            echo "1 === 1: " . var_dump(1 === 1);
            echo "1 != 1: " . var_dump(1 != 1);
            echo "1 !== 1: " . var_dump(1 !== 1);
            echo "1 > 1: " . var_dump(1 > 1);
            echo "1 < 1: " . var_dump(1 < 1);
            echo "1 >= 1: " . var_dump(1 >= 1);
            echo "1 <= 1: " . var_dump(1 <= 1);
            echo "</pre>";
        ?>

        <h3>Logical Operators</h3>
        <?php
            echo "<pre>";
            echo "1 && 1: " . var_dump(1 && 1);
            echo "1 || 1: " . var_dump(1 || 1);
            echo "!1: " . var_dump(!1);
            echo "</pre>";
        ?>

        <h3>Bitwise Operators</h3>
        <?php
            echo "<pre>";
            echo "1 & 1: " . var_dump(1 & 1);
            echo "1 | 1: " . var_dump(1 | 1);
            echo "1 ^ 1: " . var_dump(1 ^ 1);
            echo "~1: " . var_dump(~1);
            echo "1 << 1: " . var_dump(1 << 1);
            echo "1 >> 1: " . var_dump(1 >> 1);
            echo "</pre>";
        ?>

        <h3>Data Types</h3>
        <?php 
            define("PI", 3.14);
            $name = "Rahul";
            $age = 20;
            $salary = 20.5;
            $is_true = true;
            $car = null;
            $fruits = ["apple", "banana", "orange"];
            $person = new stdClass();
            $person->name = "Rahul";
            $person->age = 20;
            $file = fopen("index.php", "r");

            echo "<pre>";
            echo "Name (String): $name\n";
            echo "Age (Integer): $age\n";
            echo "Salary (Float): $salary\n";
            echo "Boolean: " . ($is_true ? 'true' : 'false') . "\n";
            echo "Null value: " . var_export($car, true) . "\n";
            echo "Array (First Fruit): " . $fruits[0] . "\n";
            echo "Object: Name - " . $person->name . ", Age - " . $person->age . "\n";
            echo "File Resource: " . var_export($file, true) . "\n";
            echo "Constant PI: " . PI;
            echo "</pre>";
        ?>
    </div>
</body>
</html>
