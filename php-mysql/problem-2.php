<?php
$data = array(
    'user' => array(
        'name'  => 'Alice',
        'email' => '',
    ),
);

if ( ! empty( $data['user']['email'] ) ) {
    echo 'Email key is provided.' . "\n";
} else {
    echo 'Email key is missing.' . "\n";
}
?>