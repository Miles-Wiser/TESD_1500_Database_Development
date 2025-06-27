<?php
$name = "@".$_POST['name'];
if ($name == "@") {
    $name = "@Tea_Times_Anonymous";
}


$question1 = htmlspecialchars($_POST['question1']);
$question2 = $_POST['question2'];
$question3 = $_POST['question3'];

$date = date('H:i, jS F Y');

// Replace naughty words
$naughty = ['crybaby', 'poopoo', 'meanie'];

$question1 = str_replace($naughty, "*****", $question1);
$question2 = str_replace($naughty, "*****", $question2);
$question3 = str_replace($naughty, "*****", $question3);

// allows for easy seperation by \t
$outputstring = "$name\t$date\t$question1\t$question2\t$question3\n";

@$comments = fopen("comments.txt", "ab");
if (!$comments) {
    echo "<p><strong> Your order could not be processed at this time.
          Please try again later.</strong></p>";
    exit;
}

flock($comments, LOCK_EX);
fwrite($comments, $outputstring, strlen($outputstring));
flock($comments, LOCK_UN);
fclose($comments);
?>

<DOCTYPE html>
<html>

<head>
<title>Call and Response | Form Submission</title>
    <meta charset="UTF-8">
    <meta lang="english">

    <link href="styles/reset.css" rel="stylesheet">
    <link href="styles/layout.css" rel="stylesheet">
    <style> main {padding-top: 25px; text-align: center;}</style>
</head>

<body>
    <main>
        <h4>Call and Response: Succesfully Submitted</h4>
        <p>Thank you for participating in this week's "Call and Response."
            Click the "return" button below to return to the article and to view
            your's and others' comments.
        </p>
        <form action="index.php">
            <input type="submit" value="Return">
        </form>
    </main>
</body>

</html>
</DOCTYPE>