<?php
$data = array(
    'user' => array(
        'name'  => 'Alice',
        'email' => '',
    ),
);

if ( array_key_exists('email', $data['user']) ) {
    echo 'Email key is provided.' . "\n";
} else {
    echo 'Email key is missing.' . "\n";
}
?>