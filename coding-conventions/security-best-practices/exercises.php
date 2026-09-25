<?php
/**
 * Plugin Name: My WordPress plugin
 */

// Hook to display a form in the WordPress admin page
function secure_plugin_form()
{
    ?>
    <form method="post" action="">
        <?php wp_nonce_field('post_action', 'post_field'); ?>
        <label for="user_input">Enter your message:</label>
        <input type="text" id="user_input" name="user_input">
        <input type="submit" name="submit_message" value="Submit">
    </form>
    <?php
}

// Hook to display the form on the admin page
add_action('admin_menu', function () {
    add_menu_page('Secure Plugin', 'Secure Plugin', 'manage_options', 'secure_plugin', 'secure_plugin_form');
});

// Process form data with sanitization and nonce verification
function secure_plugin_process_form()
{
    if (isset($_POST['submit_message'])) {
        // Check if nonce is verified for security
        if (
            ! isset($_POST['post_field']) ||
            ! wp_verify_nonce($_POST['post_field'], 'post_action')
        ) {
            wp_die('Nonce verification failed!');
        }
        // Sanitize the user input
        $user_input = sanitize_text_field( $_POST['user_input'] );

        // Escape user input before display
        echo '<div class="updated"><p>Your input: ' . esc_html($user_input) . '</p></div>';
    }
}

add_action('admin_init', 'secure_plugin_process_form');