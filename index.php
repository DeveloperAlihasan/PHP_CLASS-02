                                             <!-- Assignment01 -->


<?php
//Rishita subject marks
$subjectA = 75;
$subjectB = 80;
$subjectC = 65;
$subjectD = 90;


//total mark

$total_mark = $subjectA + $subjectB + $subjectC + $subjectD ;

//echo "$total_mark";
    
  //Rishita average mark
  
  $average_mark = $total_mark / 4 ;

//echo "$average_mark";


//grade marking

if ($average_mark >= 80 && $average_mark <= 100) {
    echo "You got A+";
}
elseif ($average_mark >= 70 && $average_mark < 80) {
    echo "You got A";
}
elseif ($average_mark >= 60 && $average_mark < 80) {
    echo "You got A-";
}
elseif ($average_mark >= 50 && $average_mark < 60) {
    echo "You got B";
}
elseif ($average_mark >= 40 && $average_mark < 50) {
    echo "You got C";
}
elseif ($average_mark >= 0 && $average_mark < 40) {
    echo "You got F";
}


   echo "<br>";
   echo "<br>";
   echo "<br>";
?>   
   
   
                                      <!-- //Assignment02// -->    

<?php

//$bike = "start";
$bike  = "stop";
//$bike  = "break";
//$bike  = "gear";
//$bike  = "signal";
//$bike  = "headlight";


switch ($bike ) {
  case "start":
    echo "bike takes a start";
    break;

  case "stop":
    echo "bike takes a stop";
    break;

  case "break":
    echo "bike take break";
    break;

  case "gear":
     echo "bike move faster and faster";
     break; 

  case "signal":
     echo " bike shows a signal light";
     break;  

  case "headlight":
     echo "bike headlight will start";
     break; 

  default:
    echo "bike stop in hose";
}




?>

 

 

