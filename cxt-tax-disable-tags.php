<?php
/*
Plugin Name:    Context Taxonomy Disable Tags
Description:    Don't use default Tags taxonomy.
Text-Domain:    cxt-tax-disable-tags
Version:        1.1
Author:         Robert Andrews
Author URI:     http://www.robertandrews.co.uk
License:        GPL v2 or later
License URI:    https://www.gnu.org/licenses/gpl-2.0.html
*/

// cf. https://wordpress.stackexchange.com/a/236211/39300
add_action('init', 'myprefix_remove_tax');
function myprefix_remove_tax() {
    register_taxonomy('post_tag', array());
}

?>