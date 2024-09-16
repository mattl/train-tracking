<?php

$day = date('j');

$fake = $_GET['fake'];

// $day=$fake;

switch ($day) {
 case 21:
   echo "Travelling from Boston to Chicago, via Albany.";
   $train=449;
   $jpg="lsl";
   break;
 case 22:
   echo "Travelling from Chicago to LA";
   $train=3;
   $jpg="swc";
   break;
 case 23:
   echo "Travelling from Chicago to LA (day two)";
   $train=3;
   $jpg="swc";
   break;
 case 24:
   echo "Travelling from LA to San Diego";
   $train=770;
   $jpg="ps";
   break;
 case 28:
   echo "Travelling from San Diego to LA, and then to Chicago.";
   $train=4;
   $jpg="swc";
   break;
 case 29:
   echo "Travelling from LA to Chicago (day two)";
   $train=4;
   $jpg="swc";
   break;
 case 30:
   echo "Travelling from Chicago to Boston";
   $train=48;
   $jpg="lsl";
   break;
 case 24:
   echo "Travelling from Chicago to Boston (day two)";
   $train=448;
   $jpg="lsl";
   break;

 default:
   echo "No travel today. See links below to see all the routes of this trip.";
   break;  

}


?></p>

<p><?php

if ($train) {
  echo "I should be on <a href='https://railrat.net/trains/".$train."'>Amtrak train " . $train . " today</a>.";
  echo "<p><img src='" . $jpg . ".jpg' alt='Amtrak train schedule for train ". $train . "' /></p>";
  echo "<p>Follow along with a <a href='https://asm.transitdocs.com/map?train=" . $train . "&day=" . $day . "&rr=A'>Live Train ". $train . " Map</a>";
    }?>
