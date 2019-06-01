<?php
/*

Plugin name: Cool Message
Description: Adds a cool message to the bottom of a post
Version: 1.0
Author: James Mackay

*/



// Create the action to append message
add_action('the_content', 'my_thank_you_text');
function my_thank_you_text($content)
{
    $content = $content . get_option('new_message');
    return $content;
}

// Add the text to the end of widgets
add_filter('widget_text', 'add_smiley');
function add_smiley($content)
{
    $new_content = '';
    $new_content .= $content . '<br>' . get_option('new_message');
    return $new_content;
}


// // Apply script to a widget
// do_action('widget_text', 'widget_extension');

// function widget_extension($widgetContent) {
//     $widgetContent = $widgetContent . get_option('new_message');
//     return $widgetContent;
// }

// Create/register the option (stores in DB as a field)
function register_my_cool_plugin_settings()
{
    register_setting('my-cool-plugin-settings-group', 'new_message');
}


// Add menu to the Wordpress admin bar
add_action('admin_menu', 'my_cool_plugin_create_menu');

function my_cool_plugin_create_menu()
{
    add_menu_page('Cool Message Settings', 'Cool Message', 'administrator', 'cool-message-settings', 'my_cool_plugin_settings_page');

    add_action('admin_init', 'register_my_cool_plugin_settings');
}





// Front end form created
function my_cool_plugin_settings_page()
{
    ?>
    <div class="wrap">
        <h1>Cool Plugin</h1>
        <form method="post" action="options.php">
            <?php settings_fields('my-cool-plugin-settings-group'); ?>
            <?php do_settings_sections('my-cool-plugin-settings-group'); ?>
            <table class="form-table">
                <tr valign="top">
                    <th scope="row">Message Here</th>
                    <td><input type="text" name="new_message" value="<?php echo esc_attr(get_option('new_message')); ?>" /></td>
                </tr>
            </table>
            <?php submit_button(); ?>
        </form>
    </div>
<?php } ?>
