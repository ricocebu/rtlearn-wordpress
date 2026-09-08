<?php
/**
 * Function to write a message to a log file
 * 
 * @param string $message The message to write to the log file
 * 
 * @return void
 */
function writeLog( $message ) {
    $file = fopen( 'log.txt', 'a');

    fwrite( $file, $message . PHP_EOL );
    fclose($file);
}

writeLog( 'This is a test log.' );
?>