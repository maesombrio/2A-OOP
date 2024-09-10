<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Define variables of different types
$Name = "Glendy Mae Sombrio"; 
// Char
$middleInitial = 'N'; 
// Integer
$Age = 18; 
// Float
$height = 4.11; 
// Boolean
$isExcited = true; 
// course



// expectation
$expectation = "I am eager to learn the fundamentals of Object-Oriented Programming (OOP), <br>
 including concepts like classes, objects, inheritance, and encapsulation. <br>
 Overall, my expectation is to build a strong foundation in OOP that will <br>
 not only aid me in this course but also serve as a critical skill in my future<br>
  programming endeavors.<br>";

// Constructing Paragraph
$introduction = "
    <p>
        Hello, my name is <strong>$Name</strong>, and my middle initial is <strong> $middleInitial</strong> stands for <strong> Navarez.</strong> <br>
        I am <strong> $Age</strong> years of age and my height is <strong>$height.</strong><br>
        My course is <strong> Bachelor of Science in Information Technology.</strong><br>
        
    </p>
  
    <p>
        <strong>My Expectations:</strong><br>
        I am " . ($isExcited ? "very excited" : "somewhat indifferent") . " about learning OOP.<br>
        because $expectation.
    </p>
";

// Display the paragraphs
echo $introduction;
?>

</body>
</html>