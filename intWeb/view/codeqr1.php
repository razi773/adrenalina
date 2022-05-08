<?php

include('../phpqrcode/qrlib.php');
require_once '../Controller/clienntC.php';
require_once '../Controller/ticketC.php';

$ticketC = new ticketC();
$clienntC = new clienntC();
$cliennt = $ticketC->CgetclienntbyID($ticket['id']);

    $param = $_GET['Num']; // remember to sanitize that - it is user input!
    
    // we need to be sure ours script does not output anything!!!
    // otherwise it will break up PNG binary!
    
    ob_start("callback");
    
    // here DB request or some processing
    $codeText = 'le Num est '.$param.'';
    
    // end of processing here
    $debugLog = ob_get_contents();
    ob_end_clean();
    
    // outputs image directly into browser, as PNG stream
    QRcode::png($codeText);
 

