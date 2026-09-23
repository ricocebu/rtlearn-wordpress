<!-- Exercises
Go through the lessons on security vulnerabilities on hacksplaining.com.
Identify security vulnerabilities in the following code and fix them. -->

<?php
/**
 * 
 * Plugin Name: My WordPress plugin
 */

// Hook to display a form in the WordPress admin page
function insecure_plugin_form() {
    ?>
    <form method="post" action="">
        <label for="user_input">Enter your message:</label>
        <input type="text" id="user_input" name="user_input">
        <input type="submit" name="submit_message" value="Submit">
    </form>
    <?php
}

// Hook to display the form on the admin page
add_action('admin_menu', function() {
    add_menu_page('Insecure Plugin', 'Insecure Plugin', 'manage_options', 'insecure_plugin', 'insecure_plugin_form');
});

// Process form data without sanitization or nonce verification
function insecure_plugin_process_form() {
    if (isset($_POST['submit_message'])) {
        // Directly use user input without verification or sanitization
        $user_input = $_POST['user_input'];

        // Display user input without escaping
        echo '<div class="updated"><p>Your input: ' . $user_input . '</p></div>';
    }
}

add_action('admin_init', 'insecure_plugin_process_form');