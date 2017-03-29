<h1>Floyd Lehman GD1A</h1>
<?php
// Page title
$title = 'Eightball';

// Read the question from the form ($_POST-var)
if (!empty($_POST['question'])) {
    $question =  $_POST['question']; // post-var from form (check the view)
}
else{
    $question = 'Will you enter a question below?'; // default
}

$ballNumber = rand(1,21);

include 'views/head.php';
include 'views/eightball.php';
include 'views/footer.php';