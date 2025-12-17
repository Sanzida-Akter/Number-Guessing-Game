<?php

$play_count = 0;
$correct_guesses = 0;
$guess_high = 0;
$guess_low = 0;

echo "I am going to think of numbers between 1 and 10(inclusive). Can you guess it correctly?";

Function guessNumber()
{
    global $play_count, $correct_guesses, $guess_high, $guess_low;

    $play_count++;
    $num = rand(1,10);

    echo "\nMake Your Guess";

    $guess=readline(">> ");
    $guess=intval($guess);
    

    echo "Round: $play_count\nMy Number:$num\nYour Guess: $guess";

    if($guess===$num){
        $correct_guesses++;
    }

    if($guess > $num){
        $guess_high++;
    }

    if($guess < $num){
        $guess_low++;
    }
}

guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();

$percent_correct=$correct_guesses / $play_count *100;

echo "\nAfter $play_count round, You guessed $percent_correct% time correctly.\n";