# Context WP Taxonomy Disable Tags

Tested up to: 5.9.1  
Tags: wordpress, taxonomy, tags  
Contributors: robertandrews  

## Description

**Disable the default "Tags" taxonomy in WordPress.**

WordPress ships with two default taxonomies - Categories and Tags.

Admins who wish to use specific custom taxonomies may wish to disable these, to force users to use appropriate taxonomies only.

This plugin runs `register_taxonomy('post_tags', array());` during the `init` action.

## Acknowledgements

This plugin sumply plugin-ises standard WordPress code circulating online - in this specific case, that [posted by @Marc to StackExchange](https://wordpress.stackexchange.com/questions/110782/remove-categories-tags-from-admin-menu/236211#236211).
