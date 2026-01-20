<?php
session_start();
include 'qconnection.php';

// Debugging: Ensure session and POST data are received
echo "Session Score (Before Update): " . (isset($_SESSION['score']) ? $_SESSION['score'] : "Not Set") . "<br>";
echo "Selected Answer: " . (isset($_POST['answer']) ? $_POST['answer'] : "No answer selected") . "<br>";
echo "Correct Answer: " . (isset($_SESSION['correct_answer']) ? $_SESSION['correct_answer'] : "Not Set") . "<br>";

// Check if the user selected an answer
if (!isset($_POST['answer'])) {
    echo "No answer selected!<br>";
    exit();
}

// Ensure score is initialized
if (!isset($_SESSION['score'])) {
    $_SESSION['score'] = 0;
}

// Compare the selected answer with the correct answer
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

// Get the current topic to redirect to the appropriate page
if (!isset($_SESSION['topic'])) {
    echo "Error: Topic not set in session!";
    exit();
}
$topic = $_SESSION['topic']; // The topic stored in session

// Debugging: Print the next question number and topic
echo "Next Question Number: " . $_SESSION['current_question'] . "<br>";
echo "Redirecting to topic: " . $topic . "<br>";

// Redirect based on topic
switch ($topic) {
    case 'Basics':
        header("Location: cbasics.php");
        break;
    case 'Pointers':
        header("Location: cpointers.php");
        break;
    case 'Data Structures':
        header("Location: cdata.php");
        break;
    case 'Java Basics':
        header("Location: javabasics.php");
        break;
    case 'OOP':
        header("Location: javaoop.php");
        break;
    case 'Java Advanced':
        header("Location: javaadvanced.php");
        break;
    case 'Python Basics':
        header("Location: pythonbasics.php");
        break;
    case 'Python OOP':
        header("Location: pythonoop.php");
        break;
    case 'Python Advanced':
        header("Location: pythonadvanced.php");
        break;
    default:
        echo "Invalid topic!";
        exit();
}

exit();
?>