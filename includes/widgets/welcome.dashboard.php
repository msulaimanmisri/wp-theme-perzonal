<?php

/**
 * Welcome card
 */

function widget_dashboard_welcome()
{
    echo '
        <h2 class="">Core Setting</h2>
        <p>Please choose one. Bootstrap or Elementor?</p>
        <br>
        <div>
        <input type="checkbox"  checked>
        <label for="">Bootstrap</label>

        <input type="checkbox"  checked>
        <label for="">Elementor</label>
        </div>

        <br>
        <br>

        <a href="/wp-admin/edit.php?post_type=page" class="button btn-primary"> Save </a>
    ';
    // <a href="https://github.com/msulaimanmisri" target="_blank" class="button btn-primary"> Show Repo </a>
}

function add_dashboard_widgets()
{
    wp_add_dashboard_widget('custom_dashboard_widget', 'Learning Management System', 'widget_dashboard_welcome');
}
add_action('wp_dashboard_setup', 'add_dashboard_widgets');
