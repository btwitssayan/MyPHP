<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .container {
            margin: 20px auto;
            width: 80%;
            padding: 20px;
            border: 2px solid #333;
            background-color: #e0e0e0;
            border-radius: 8px;
        }
        h1 {
            color: #333;
            border-bottom: 1px solid #ddd;
            padding-bottom: 5px;
        }
        p {
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>PHP Tutorial</h1>
        
        <h2>Conditional Statements</h2>
        <?php
            $age = 0;
            if ($age > 18) {
                echo "<p>You can go to the party</p>";
            } elseif ($age <= 0) {
                echo "<p>You cannot go to the party because you are not born yet</p>";
            } else {
                echo "<p>You cannot go to the party</p>";
            }
        ?>

        <h2>Arrays</h2>
        <?php
            $fruits = array("apple", "banana", "mango", "orange");
            for ($i = 0; $i < count($fruits); $i++) {
                echo "<p>Fruit " . ($i + 1) . ": " . $fruits[$i] . "</p>";
            }
            echo "<p>Total fruits: " . count($fruits) . "</p>";
        ?>

        <h2>Loops</h2>

        <h3>For Loop</h3>
        <?php
            for ($i = 0; $i < count($fruits); $i++) {
                echo "<p>Fruit: " . $fruits[$i] . "</p>";
            }
        ?>

        <h3>While Loop</h3>
        <?php
            $i = 0;
            while ($i < 3) {
                echo "<p>Count: " . $i . " - Hello World</p>";
                $i++;
            }
        ?>

        <h3>Do-While Loop</h3>
        <?php
            $i = 0;
            do {
                echo "<p>Count: " . $i . " - Hello World</p>";
                $i++;
            } while ($i < 3);
        ?>

        <h3>Foreach Loop</h3>
        <?php
            foreach ($fruits as $fruit) {
                echo "<p>Fruit: " . $fruit . "</p>";
            }
        ?>

        <h2>Functions</h2>
        <?php
            function sum($a, $b) {
                return $a + $b;
            }
            echo "<p>Sum of 10 and 20: " . sum(10, 20) . "</p>";
        ?>
    </div>
</body>
</html>
