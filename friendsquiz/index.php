<!doctype html>
<html>
    <head>
        <title>Macro Assignment 7</title>
        <style>
            body{
                padding: 20px;
            }
            @font-face {
                font-family: friends;
                src: url('gabriel_weiss_friends/GABRWFFR.TTF');
            }
            h1 {
                font-family: friends;
                color: red;
            }

            div {
                padding: 10px;
                font-family: friends; 
                display: flex;
                flex-direction: column;             
            }

            #job {
                color: #FFBF00;
            }

            #food {
                color: blue;
            }

            #hobby {
                color: red;
            }

            #personality {
                color: #FFBF00;
            }

            #driving {
                color: blue;
            }

            #animal {
                color: red;
            }

            #drink {
                color: #FFBF00;
            }

            select {
                width: 200px;
            }

            #submit {
                background-color: #FFBF00;
                color: blue;
                margin: 10px;
            }
            
            a {
                font-family: friends;
                color: blue;
            }

        </style>
    </head>
    <body>
        <h1>Which FRIENDS Character Are You?</h1>
        
        <hr>

        <?php
            if (isset($_GET['error']) && $_GET['error'] == 'missingvalues') {
                echo "<p>Please select an answer to all the questions.</p>";
            }

            if (isset($_COOKIE['friend']) && !$_GET['play'] && !$_GET['error']) {
                header("Location: results.php");
                exit();
            }
        ?>
        <form action="process.php" method="POST">
            <div id='job'>
                What is your ideal job?
                <select name="job">
                    <option value="unknown">Select a value</option>
                    <option value="chef">Chef</option>
                    <option value="actor">Actor</option>
                    <option value="data">Data analyst</option>
                    <option value="prof">Professor</option>
                    <option value="massage">Massage therapist</option>
                    <option value="fashion">Designer</option>
                </select>
            </div>
            <div id='food'>
                What is your favourite food? 
                <select name="food">
                    <option value="unknown">Select a value</option>
                    <option value="sandwich">Sandwiches</option>
                    <option value="thanksgiving">Thanksgiving foods</option>
                    <option value="oysters">Oysters</option>
                    <option value="mac">Mac & cheese</option>
                    <option value="veggie">Vegetables</option>
                    <option value="cookies">Cookies</option>
                </select>
            </div>
            <div id='hobby'>
                What is your favourite hobby? 
                <select name="hobby">
                    <option value="unknown">Select a value</option>
                    <option value="music">Music</option>
                    <option value="history">Learning history</option>
                    <option value="shop">Shopping</option>
                    <option value="cleaning">Cleaning</option>
                    <option value="dating">Going on dates</option>
                    <option value="tv">Watching TV</option>
                </select>
            </div>
            <div id='personality'>
                How would you describe your personality? 
                <select name="personality">
                    <option value="unknown">Select a value</option>
                    <option value="sarcastic">Sarcastic</option>
                    <option value="fun">Fun</option>
                    <option value="competitive">Competitive</option>
                    <option value="independent">Independent</option>
                    <option value="passionate">Passionate</option>
                    <option value="sensitive">Sensitive</option>
                </select>
            </div>
            <div id='driving'>
                How would you describe your driving? 
                <select name="driving">
                    <option value="unknown">Select a value</option>
                    <option value="responsible">Responsible</option>
                    <option value="reckless">Reckless</option>
                    <option value="slow">Below the speed limit</option>
                    <option value="speed">Above the speed limit</option>
                    <option value="sleepy">I always fall asleep while driving</option>
                    <option value="dontdrive">I don't drive</option>
                </select>
            </div>
            <div id='animal'>
                What is your favourite animal? 
                <select name="animal">
                    <option value="unknown">Select a value</option>
                    <option value="mouse">Mice</option>
                    <option value="duck">Ducks</option>
                    <option value="penguin">Penguins</option>
                    <option value="dino">Dinosaurs</option>
                    <option value="dog">Dogs</option>
                    <option value="cat">Cats</option>

                </select>
            </div>
            <div id='drink'>
                What is your favourite drink? 
                <select name="drink">
                    <option value="unknown">Select a value</option>
                    <option value="yoohoo">Chocolate milk</option>
                    <option value="cappucino">Cappucino</option> <!-- monica -->
                    <option value="tea">Iced tea</option> <!-- ross --> 
                    <option value="coffee">Coffee</option> <!-- phoebe -->
                    <option value="beer">Beer</option> <!-- joey -->
                    <option value="latte">Latte</option> <!-- rach -->
                </select>
            </div>
            <input type="submit" id="submit" value="See Your FRIENDS Character!">
        </form>
        <hr>
        <a href='results.php'>See Aggregate Results</a>
    </body>
</html>

