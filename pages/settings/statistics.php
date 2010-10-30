<?php
/**
 * Elgg user statistics.
 *
 * @package Elgg
 * @subpackage Core
 */

// Make sure only valid admin users can see this
gatekeeper();

// Make sure we don't open a security hole ...
if ((!page_owner_entity()) || (!page_owner_entity()->canEdit())) {
	set_page_owner(get_loggedin_userid());
}

$content = elgg_view_title(elgg_echo("usersettings:statistics"));
$content .= elgg_view("usersettings/statistics");

$body = elgg_view_layout('one_column_with_sidebar', $content);

page_draw(elgg_echo("usersettings:statistics"), $body);