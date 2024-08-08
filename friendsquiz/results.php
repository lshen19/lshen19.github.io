<!doctype html>
<html>
    <head>
        <title>Results Page</title>
        <style>
            @font-face {
                font-family: friends;
                src: url('gabriel_weiss_friends/GABRWFFR.TTF');
            }
            h1 {
                font-family: friends;
                color: red;
            }
            h2 {
                font-family: friends;
                color: blue;
            }
            div {
                font-family: friends;
            }

            img {
                max-width: 350px;
            }
            input {
                background-color: #FFBF00;
                color: blue;
                margin: 10px;
            }
            #results {
                display: flex;
                flex-direction: column;
                align-items: center;
            }
            
            p {
                font-family: friends;
            }
        </style>
    </head>
    <body>
        <h1>Your Result Is...</h1>
        <hr>
        
        <div id='results'>
            <?php 
                if ($_COOKIE['friend'] == 'Monica') {
                    print "<h2>Monica</h2>";
                    print "<img src=assignment07_images/monica.jpeg>";

                }
                else if ($_COOKIE['friend'] == 'Rachel') {
                    print "<h2>Rachel</h2>";
                    print "<img src=assignment07_images/rachel.jpeg>";
                }
                else if ($_COOKIE['friend'] == 'Phoebe') {
                    print "<h2>Phoebe</h2>";
                    print "<img src=assignment07_images/phoebe.jpeg>";

                }
                else if ($_COOKIE['friend'] == 'Chandler') {
                    print "<h2>Chandler</h2>";
                    print "<img src=assignment07_images/chandler.jpeg>";

                }
                else if ($_COOKIE['friend'] == 'Joey') {
                    print "<h2>Joey</h2>";
                    print "<img src=assignment07_images/joey.jpeg>";

                }
                else if ($_COOKIE['friend'] == 'Ross') {
                    print "<h2>Ross</h2>";
                    print "<img src=assignment07_images/ross.jpeg>";

                }
            ?>
            <form action="index.php" method='GET'>
                <input type="submit" name='play' value="Play again!">
            </form>
           
        </div>
        <?php
           
           // include was not working and i couldn't figure out way so i just used the direct path, i hope that's okay
           $data = getcwd() . '/data/results.txt';
           $alldata = trim(file_get_contents($data));            
           $items = explode("\n", $alldata);
            $monica = 0;
            $rachel = 0;
            $phoebe = 0;
            $ross = 0;
            $joey = 0;
            $chandler = 0;
            for ($i = 0; $i < sizeof($items); $i++) {
                if ($items[$i] == 'Monica'){
                    $monica += 1;
                }
                else if ($items[$i] == 'Rachel'){
                    $rachel += 1;
                }
                else if ($items[$i] == 'Phoebe'){
                    $phoebe += 1;
                }
                else if ($items[$i] == 'Chandler'){
                    $chandler += 1;
                }
                else if ($items[$i] == 'Joey'){
                    $joey += 1;
                }
                else if ($items[$i] == 'Ross'){
                    $ross += 1;
                }
            }

            $monpercent = ($monica / $i) * 100;
            $phoebpercent = ($phoebe / $i) * 100;
            $rachpercent = ($rachel / $i) * 100;
            $joepercent = ($joey / $i) * 100;
            $rosspercent = ($ross / $i) * 100;
            $chanpercent = ($chandler / $i) * 100;

            echo '<div class="bar" id="monica" style="background-color: red; width: ' . $monpercent . '%;"> Monica </div>';
            echo '<div class="bar" id="rachel" style="background-color: green; width: ' . $rachpercent . '%;"> Rachel </div>';
            echo '<div class="bar" id="phoebe" style="background-color: yellow; width: ' . $phoebpercent . '%;"> Phoebe </div>';
            echo '<div class="bar" id="chandler" style="background-color: blue; width: ' . $chanpercent . '%;"> Chandler </div>';
            echo '<div class="bar" id="joey" style="background-color: orange; width: ' . $joepercent . '%;"> Joey </div>';
            echo '<div class="bar" id="ross" style="background-color: purple; width: ' . $rosspercent . '%;"> Ross </div>';


            // display how many submissions have been made
            echo "<p>Total number of quiz submissions: " . $i . "</p>";

        ?>

    </body>
</html>

