<?php

/**
 * Trigger this file in uninstall
 * 
 * @package OervaldPlugin
 */

 if(!defined('WP_UNINSTALL_PLUGIN')){
     die;
 }

 /**
 *//*Clear database stored data
 $books = get_post(array('post_type' => 'book', 'numberpost' => -1));

 foreach($books as $book){
     wp_delete_post($book->ID, true);
 }
  */

 global $wpdb;
 $wpdb->query("DELETE from wp_posts WHERE post_type = 'books'");
 $wpdb->query("DELETE from wp_postmeta WHERE post_id NOT IN (SELECT id FROM wp_posts)");
 $wpdb->query("DELETE from wp_term_relationships WHERE object_id NOT IN (SELECT id FROM wp_posts)");