<?php
    // access the variables
    $job = $_POST['job'];
    $food = $_POST['food'];
    $hobby = $_POST['hobby'];
    $personality = $_POST['personality'];
    $driving = $_POST['driving'];
    $animal = $_POST['animal'];
    $drink = $_POST['drink'];


    
    // validate the data (make sure we have all of the answers to the questions)
    if ($job == 'unknown' || $food == 'unknown' || $hobby == 'unknown' || $personality == 'unknown' || $driving == 'unknown' || $animal == 'unknown' || $drink == 'unknown') {
        header("Location:  index.php?error=missingvalues");
    }
    else {
        // diagnose the character
        $monica = 0;
        $rachel = 0;
        $phoebe = 0;
        $ross = 0;
        $chandler = 0;
        $joey = 0;

        // job
        if ($job == 'chef') {
            $monica += 1;
        }
        else if ($job == 'actor') {
            $joey += 1;
        }
        else if ($job == 'data') {
            $chandler += 1;
        }
        else if ($job == 'prof') {
            $ross += 1;
        }
        else if ($job == 'massage') {
            $phoebe += 1;
        }
        else if ($job == 'fashion') {
            $rachel += 1;
        }

        // food
        if ($food == 'oysters') {
            $monica += 1;
        }
        else if ($food == 'sandwich') {
            $joey += 1;
        }
        else if ($food == 'mac') {
            $chandler += 1;
        }
        else if ($food == 'thanksgiving') {
            $ross += 1;
        }
        else if ($food == 'vegetables') {
            $phoebe += 1;
        }
        else if ($food == 'cookies') {
            $rachel += 1;
        }

        // hobby
        if ($hobby == 'cleaning') {
            $monica += 1;
        }
        else if ($hobby == 'dating') {
            $joey += 1;
        }
        else if ($hobby == 'tv') {
            $chandler += 1;
        }
        else if ($hobby == 'history') {
            $ross += 1;
        }
        else if ($hobby == 'music') {
            $phoebe += 1;
        }
        else if ($hobby == 'shop') {
            $rachel += 1;
        }

        // personality
        if ($personality == 'competitive') {
            $monica += 1;
        }
        else if ($personality == 'fun') {
            $joey += 1;
        }
        else if ($personality == 'sarcastic') {
            $chandler += 1;
        }
        else if ($personality == 'passionate') {
            $ross += 1;
        }
        else if ($personality == 'independent') {
            $phoebe += 1;
        }
        else if ($personality == 'sensitive') {
            $rachel += 1;
        }

        // driving
        if ($driving == 'responsible') {
            $monica += 1;
        }
        else if ($driving == 'sleepy') {
            $joey += 1;
        }
        else if ($driving == 'dontdrive') {
            $chandler += 1;
        }
        else if ($driving == 'slow') {
            $ross += 1;
        }
        else if ($driving == 'reckless') {
            $phoebe += 1;
        }
        else if ($driving == 'speed') {
            $rachel += 1;
        }

        // animal
        if ($animal == 'dog') {
            $monica += 1;
        }
        else if ($animal == 'penguin') {
            $joey += 1;
        }
        else if ($animal == 'duck') {
            $chandler += 1;
        }
        else if ($animal == 'dino') {
            $ross += 1;
        }
        else if ($animal == 'mouse') {
            $phoebe += 1;
        }
        else if ($animal == 'cat') {
            $rachel += 1;
        }

        // drink
        if ($drink == 'cappucino') {
            $monica += 1;
        }
        else if ($drink == 'beer') {
            $joey += 1;
        }
        else if ($drink == 'yoohoo') {
            $chandler += 1;
        }
        else if ($drink == 'tea') {
            $ross += 1;
        }
        else if ($drink == 'coffee') {
            $phoebe += 1;
        }
        else if ($drink == 'latte') {
            $rachel += 1;
        }

        // calculate
        if ($monica > $chandler && $monica > $rachel && $monica > $phoebe && $monica > $joey && $monica > $ross) {
            $friend = 'Monica';
        }
        else if ($rachel > $monica && $rachel > $chandler && $rachel > $phoebe && $rachel > $joey && $rachel > $ross) {
            $friend = 'Rachel';
        }
        else if ($phoebe > $monica && $phoebe > $chandler && $phoebe > $rachel && $phoebe > $joey && $phoebe > $ross) {
            $friend = 'Phoebe';
        }
        else if ($chandler > $monica && $chandler > $rachel && $chandler > $phoebe && $chandler > $joey && $chandler > $ross) {
            $friend = 'Chandler';
        }
        else if ($ross > $monica && $ross > $chandler && $ross > $phoebe && $ross > $joey && $ross > $rachel) {
            $friend = 'Ross';
        }
        else if ($joey > $monica && $joey > $chandler && $joey > $phoebe && $joey > $rachel && $joey > $ross) {
            $friend = 'Joey';
        }
        // if two of them tie
        else if ($joey == $monica || $ross == $monica || $rachel == $monica || $phoebe == $monica || $chandler == $monica) {
            $friend = 'Monica';
        }
        else if ($joey == $rachel || $ross == $rachel || $phoebe == $rachel || $chandler == $rachel) {
            $friend = 'Rachel';
        }
        else if ($joey == $phoebe || $ross == $phoebe || $chandler == $phoebe) {
            $friend = 'Phoebe';
        }
        else if ($joey == $chandler || $ross == $chandler) {
            $friend = 'Chandler';
        }
        else if ($ross == $joey) {
            $friends = 'Joey';
        }

        // store the data in the file
        $filename = getcwd() . '/data/results.txt';
        $data = $friend . "\n";
        file_put_contents($filename, $data, FILE_APPEND);

        // drop cookie on computer keeping track of friend
        setcookie('friend', $friend);
        // send them to their result page
        header("Location: results.php");
        exit();
    }
?>