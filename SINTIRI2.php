<?php
// Reads the variables sent via POST
$sessionId   = $_POST["sessionId"];  
$serviceCode = $_POST["serviceCode"];  
$text = $_POST["text"];
//This is the first menu screen
if ( $text == "" ) {
$response  = "CON Hello Faydah, WHERE DO YOU INTEND TO GO TO \n";
$response .= "1. Enter 1 to continue";
}
// Menu for a user who selects '1' from the first menu
// Will be brought to this second menu screen
else if ($text == "1") {
$response  = "CON  SELECT YOUR DESTINATION\n";
$response .= "1. APO BRIDGE\n";
$response .= "2. RITA LORI \n";
$response .= "3. SECRETARIAT \n";
$response .= "4. NITEL JUNCTION\n";
$response .= "5. BANNEX\n";
}
//Menu for a user who selects '1' from the second menu above
// Will be brought to this third menu screen
else if ($text == "1*1") {
$response = "CON APO BRIDGE IS N60 \n";
$response .= "Please Enter 1 to confirm \n";
}
else if ($text == "1*1*1") {
$response = "CON N60 will be deducted from your account \n";
$response .= "Enter 1 to continue \n";
$response .= "Enter 0 to cancel";
}
else if ($text == "1*1*1*1") {
$response = "END Your car reservation to APO BRIDGE has been booked. 
You will receive your ride details soon";
}
else if ($text == "1*1*1*0") {
$response = "END Your car reservation to Apo Bridge has been canceled";
}
// Menu for a user who selects "2" from the second menu above
// Will be brought to this fourth menu screen
else if ($text == "1*2") {
$response = "CON You are about to book a ride to Rita Lori \n";
$response .= "Please Enter 1 to confirm \n";
}
// Menu for a user who selects "1" from the fourth menu screen
else if ($text == "1*2*1") {
$response = "RITA LORI IS N70 \n";
$response .= "Enter 1 to continue \n";
$response .= "Enter 0 to cancel";
}
else if ($text == "1*2*1*1") {
$response = "END Your ride to Rita Lori has been booked.
You will receive your ride details soon";
}
else if ($text == "1*2*1*0") {
$response = "END Your ride to Rita Lori has been canceled";
}
// Menu for a user who enters "3" from the second menu above
// Will be brought to this fifth menu screen
else if ($text == "1*3") {
$response = "CON You are about to book a ride to Secretariat \n";
$response .= "Please Enter 1 to confirm \n";
}
// Menu for a user who enters "1" from the fifth menu
else if ($text == "1*3*1") {
$response = "CON Secretariat is N110 \n";
$response .= "Enter 1 to continue \n";
$response .= "Enter 0 to cancel";
}
else if ($text == "1*3*1*1") {
$response = "END Your ride to Secretariat has been booked";
}
else if ($text == "1*3*1*0") {
$response = "END Your ride to secretariat has been canceled";
}
// Menu for a user who enters "4" from the second menu above
// Will be brought to this sixth menu screen
else if ($text == "1*4") {
$response = "CON You are about to book a ride to NITEL JUNCTION \n";
$response .= "Please Enter 1 to confirm \n";
}
// Menu for a user who enters "1" from the sixth menu
else if ($text == "1*4*1") {
$response = "CON Nitel Junction is N160\n";
$response .= "Enter 1 to continue \n";
$response .= "Enter 0 to cancel";
}
else if ($text == "1*4*1*1") {
$response = "END Your ride to Nitel Junction has been booked. 
You will receive your ride details soon";
}
else if ($text == "1*4*1*0") {
$response = "END Your ride to NITEL JUNCTION has been canceled";
}

// Menu for a user who enters "5" from the second menu above
// Will be brought to this fifth menu screen
else if ($text == "1*5") {
    $response = "CON You are about to book a ride to Bannex \n";
    $response .= "Please Enter 1 to confirm \n";
    }
    // Menu for a user who enters "1" from the fifth menu
    else if ($text == "1*5*1") {
    $response = "CON Bannex is N200 \n";
    $response .= "Enter 1 to continue \n";
    $response .= "Enter 0 to cancel";
    }
    else if ($text == "1*5*1*1") {
    $response = "END Your ride to Bannex has been booked. 
    You shall receive your ride details shortly";
    }
    else if ($text == "1*5*1*0") {
    $response = "END Your ride to Bannex has been canceled";
    }
//echo response
header('Content-type: text/plain');
echo $response;
?>