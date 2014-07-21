<?php
function DoAlert(){

    $result = array();
    $result['data'] = "we were unable to send you anything today. Click <a href='fix.php' target='_blank'>here</a> to fix the problem";
    return $result;
}

function PushNotification(){
    $file = '../res/temporary_counter.txt';
    
    $counter = file_get_contents($file);
    $counter = strval($counter);
    $counter ++;
    
    file_put_contents($file, $counter);
    
    $result = array();
    $result['data'] = 'we have received '.$counter.' discs from you ';
    return $result;
}
?>
