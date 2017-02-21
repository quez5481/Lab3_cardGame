<!DOCTYPE html>
<html>
    <head>
        <title> </title>
        <link rel="stylesheet" href="silverjack_Styles.css">
    </head>
    <body>
        <div id="background">
        
            <h1> 
                Silverjack
            </h1>
            <?php
            
                $player[4][16];
                $drawn[4][14];
                $characters[6];
                
               /// START GAME
                for($i = 0; $i < 4; $i++)
                {
                    $player[$i][0] = $i + 1; // player number
                    $player[$i][1] = 0; // card 1 suit
                    $player[$i][2] = 0; // card 1 value
                    $player[$i][3] = 0; // card 2 suit
                    $player[$i][4] = 0; // card 2 value
                    $player[$i][5] = 0; // card 3 suit
                    $player[$i][6] = 0; // card 3 value
                    $player[$i][7] = 0; // card 4 suit
                    $player[$i][8] = 0; // card 4 value
                    $player[$i][9] = 0; // card 5 suit
                    $player[$i][10] = 0; // card 5 value
                    $player[$i][11] = 0; // card 6 suit
                    $player[$i][12] = 0; // card 6 value
                    $player[$i][13] = 0; // player sum
                    $player[$i][14] = rand(4,6); // player number of cards
                    $player[$i][15] = 0; // player 
                }
                /// DRAWN INITIALIZATION
                for($i = 0; $i < 4; $i++)
                {
                    for($j = 0; $j < 13; $j++)
                    {
                        $drawn[$i][$j] = 0;
                    }
                }
                /// CHARACTER INITIALIZATION
                for($i = 0; $i < 6; $i++)
                {
                        $characters[$i] = 0;
                }
                /// DRAW CARDS PER PLAYER
                for($i = 0; $i < 4; $i++)
                {
                    /// CHARACTER SELECTION
                    while(true)
                        {
                            $r = rand(0, 5); 
                            if($characters[$r] == 0)
                            {
                                $characters[$r] = 1;
                                $player[$i][15] =$r;
                                break;
                            }
                        }
                    /// DEALING
                    for($j = 1; $j < (2 * $player[$i][14]) + 1 ; $j = $j + 2)
                    {
                        while(true)
                        {
                            $s = rand(0, 3);
                            $v = rand(1, 13); 
                            if($drawn[$s][$v] == 0)
                            {
                                break;
                            }
                        }
                        $player[$i][$j] = $s; 
                        $player[$i][$j + 1] = $v; 
                        $drawn[$s][$v] = 1;
                        $player[$i][13] = $player[$i][13] + $v;
                    }
                }
            ?>
            
            
            
            <div id="gameTable">
                <div>
                    <div id="player"><img src="cards/<?php echo $player[0][15] ?>.jpg" alt=""></img></div>
                    <div id="card"><img src="cards/<?php echo $player[0][1] ?>/<?php echo $player[0][2] ?>.png" alt=""></img></div>
                    <div id="card"><img src="cards/<?php echo $player[0][3] ?>/<?php echo $player[0][4] ?>.png" alt=""></img></div>
                    <div id="card"><img src="cards/<?php echo $player[0][5] ?>/<?php echo $player[0][6] ?>.png" alt=""></img></div>
                    <div id="card"><img src="cards/<?php echo $player[0][7] ?>/<?php echo $player[0][8] ?>.png" alt=""></img></div>
                    <div id="card"><img src="cards/<?php echo $player[0][9] ?>/<?php echo $player[0][10] ?>.png" alt=""></img></div>
                    <div id="card"><img src="cards/<?php echo $player[0][11] ?>/<?php echo $player[0][12] ?>.png" alt=""></img></div>
                    <div id="score"><?php echo $player[0][13] ?></div>
                </div>
                <br><br><br><br><br><br>
                <div>
                    <div id="player"><img src="cards/<?php echo $player[1][15] ?>.jpg" alt=""></img></div>
                    <div id="card"><img src="cards/<?php echo $player[1][1] ?>/<?php echo $player[1][2] ?>.png" alt=""></img></div>
                    <div id="card"><img src="cards/<?php echo $player[1][3] ?>/<?php echo $player[1][4] ?>.png" alt=""></img></div>
                    <div id="card"><img src="cards/<?php echo $player[1][5] ?>/<?php echo $player[1][6] ?>.png" alt=""></img></div>
                    <div id="card"><img src="cards/<?php echo $player[1][7] ?>/<?php echo $player[1][8] ?>.png" alt=""></img></div>
                    <div id="card"><img src="cards/<?php echo $player[1][9] ?>/<?php echo $player[1][10] ?>.png" alt=""></img></div>
                    <div id="card"><img src="cards/<?php echo $player[1][11] ?>/<?php echo $player[1][12] ?>.png" alt=""></img></div>
                    <div id="score"><?php echo $player[1][13] ?></div>
                </div>
                <br><br><br><br><br><br>
                <div>
                    <div id="player"><img src="cards/<?php echo $player[2][15] ?>.jpg" alt=""></img></div>
                    <div id="card"><img src="cards/<?php echo $player[2][1] ?>/<?php echo $player[2][2] ?>.png" alt=""></img></div>
                    <div id="card"><img src="cards/<?php echo $player[2][3] ?>/<?php echo $player[2][4] ?>.png" alt=""></img></div>
                    <div id="card"><img src="cards/<?php echo $player[2][5] ?>/<?php echo $player[2][6] ?>.png" alt=""></img></div>
                    <div id="card"><img src="cards/<?php echo $player[2][7] ?>/<?php echo $player[2][8] ?>.png" alt=""></img></div>
                    <div id="card"><img src="cards/<?php echo $player[2][9] ?>/<?php echo $player[2][10] ?>.png" alt=""></img></div>
                    <div id="card"><img src="cards/<?php echo $player[2][11] ?>/<?php echo $player[2][12] ?>.png" alt=""></img></div>
                    <div id="score"><?php echo $player[2][13] ?></div>
                </div>
                <br><br><br><br><br><br>
                <div>
                    <div id="player"><img src="cards/<?php echo $player[3][15] ?>.jpg" alt=""></img></div>
                    <div id="card"><img src="cards/<?php echo $player[3][1] ?>/<?php echo $player[3][2] ?>.png" alt=""></img></div>
                    <div id="card"><img src="cards/<?php echo $player[3][3] ?>/<?php echo $player[3][4] ?>.png" alt=""></img></div>
                    <div id="card"><img src="cards/<?php echo $player[3][5] ?>/<?php echo $player[3][6] ?>.png" alt=""></img></div>
                    <div id="card"><img src="cards/<?php echo $player[3][7] ?>/<?php echo $player[3][8] ?>.png" alt=""></img></div>
                    <div id="card"><img src="cards/<?php echo $player[3][9] ?>/<?php echo $player[3][10] ?>.png" alt=""></img></div>
                    <div id="card"><img src="cards/<?php echo $player[3][11] ?>/<?php echo $player[3][12] ?>.png" alt=""></img></div>
                    <div id="score"><?php echo $player[3][13] ?></div>
                </div>
                <br><br><br><br><br><br>
            </div>
            
            <?php
                /// WINNER
                $winner = 0;
                $highest = 0;
                for($i = 0; $i < 4; $i++)
                {
                    if($player[$i][13] > $highest && $player[$i][13] <= 42)
                    {
                        $highest = $player[$i][13];
                        $winner = $i;
                    }
                }
                echo '<div id="winner">';
                $c = $player[$winner][15];
                if($c == 0)
                {
                    echo 'Broly';;
                }
                else if($c == 1)
                {
                    echo 'The Devil';;
                }
                else if($c == 2)
                {
                    echo 'Dr. Doge';;
                }
                else if($c == 3)
                {
                    echo 'Patrick';;
                }
                else if($c == 4)
                {
                    echo 'Tony';;
                }
                else if($c == 5)
                {
                    echo 'Heisenberg';;
                }
                echo ' wins!';
            ?>
            
            <br><br><br>
            <div id="replay">
                <li style="display:inline"><a href="silverjack.php" class="active">REPLAY</a></li>
            </div>
            <div id="space"></div>
        </div>
    </body>
</html>