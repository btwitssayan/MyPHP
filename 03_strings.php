<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP String Manipulation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            width: 80%;
            max-width: 600px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            font-size: 1.5em;
            color: #333;
            border-bottom: 2px solid #e0e0e0;
            padding-bottom: 10px;
        }
        p {
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>PHP String Manipulation</h1>
        <?php
            $str = "this is a string";
            echo "<p><strong>Original String:</strong> $str</p>";
            echo "<p><strong>Length of the string:</strong> " . strlen($str) . "</p>";
            echo "<p><strong>Number of words:</strong> " . str_word_count($str) . "</p>";
            echo "<p><strong>Reversed String:</strong> " . strrev($str) . "</p>";
            echo "<p><strong>Position of the word 'string':</strong> " . strpos($str, "string") . "</p>";

            $newstr = "this";
            echo "<p><strong>Replace 'is' with 'at' in '$newstr' to make it 'that':</strong> " . str_replace("is", "at", $newstr) . "</p>";
        ?>
    </div>
</body>
</html>
