<?php
// Get the user's guess
$guess = (int)$_POST['guess'];

// Generate a random number between 1 and 6
$randomNumber = rand(1, 6);

// Check if the guess is valid
if ($guess >= 1 && $guess <= 6) {
    if ($guess === $randomNumber) {
        $result = "Congratulations! You guessed the correct number: $randomNumber";
    } else {
        $result = "Sorry, the correct number was: $randomNumber. Try again!";
    }
} else {
    $result = "Please enter a number between 1 and 6.";
}

// Redirect back to the index page with the result
header("Location: index.php?result=" . urlencode($result));
exit();
?>

