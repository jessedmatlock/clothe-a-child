<?php

$remove_defaults_widgets = array(
    'dashboard_incoming_links' => array(
        'page'    => 'dashboard',
        'context' => 'normal'
    ),
    'dashboard_right_now' => array(
        'page'    => 'dashboard',
        'context' => 'normal'
    ),
    'dashboard_recent_drafts' => array(
        'page'    => 'dashboard',
        'context' => 'side'
    ),
    'dashboard_quick_press' => array(
        'page'    => 'dashboard',
        'context' => 'side'
    ),
    'dashboard_plugins' => array(
        'page'    => 'dashboard',
        'context' => 'normal'
    ),
    'dashboard_primary' => array(
        'page'    => 'dashboard',
        'context' => 'side'
    ),
    'dashboard_secondary' => array(
        'page'    => 'dashboard',
        'context' => 'side'
    ),
    'dashboard_recent_comments' => array(
        'page'    => 'dashboard',
        'context' => 'normal'
    )
);

$custom_dashboard_widgets = array(
    'my-dashboard-widget' => array(
        'title' => 'Clothe A Child Dashboard',
        'callback' => 'dashboardWidgetContent'
    )
);

function dashboardWidgetContent() {
    $user = wp_get_current_user();
    echo 'Hello <strong>' . $user->user_login . '</strong>, welcome to the Admin area of the Clothe A Child website:';
  ?>
<div class="welcome-panel-content">
	
</div><!-- end div.welcome-panel-content -->
    <ul>
        <li><a class="button" href="edit.php"><i class="fa fa-newspaper-o"></i> Manage Testimonials or Resources Pages</a></li>
        <li><a class="button" href="edit.php?post_type=page"><i class="fa fa-file-text"></i> Manage Page Content (main pages of site)</a></li>
        <li><a class="button" href="nav-menus.php"><i class="fa fa-list-ul"></i> Manage the Main Menu items</a></li>
        <li><a class="button" href="admin.php?page=gf_edit_forms"><i class="fa fa-envelope-o"></i> Manage Your Contact and Donation Forms</a></li>
    </ul>
    <?php }