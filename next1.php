<?php
session_start();
include 'qconnection.php'; // Ensure this file is correct

// Debugging: Check if session and post data are received
echo "Session Score (Before Update): " . (isset($_SESSION['score']) ? $_SESSION['score'] : "Not Set") . "<br>";
echo "Selected Answer: " . (isset($_POST['answer']) ? $_POST['answer'] : "No answer selected") . "<br>";
echo "Correct Answer: " . (isset($_SESSION['correct_answer']) ? $_SESSION['correct_answer'] : "Not Set") . "<br>";

// Check if the answer was selected
if (!isset($_POST['answer'])) {
    echo "No answer selected!<br>";
    exit();
}

// Ensure score is initialized
if (!isset($_SESSION['score'])) {
    $_SESSION['score'] = 0;
}

// Compare selected answer with correct answer
if ($_POST['answer'] === $_SESSION['correct_answer']) {
    $_SESSION['score']++; // Increment score if correct
    echo "Score Updated: " . $_SESSION['score'] . "<br>";
} else {
    echo "Wrong Answer!<br>";
}

// Move to next question
if (!isset($_SESSION['current_question'])) {
    $_SESSION['current_question'] = 0;
}
$_SESSION['current_question']++;

// Debugging: Check updated score
echo "Session Score (After Update): " . $_SESSION['score'] . "<br>";

// Wait before redirecting
sleep(2);

// Redirect to next question
header("Location: cpointers.php");
exit();
?>