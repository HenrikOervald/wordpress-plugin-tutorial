<?php

/**
 * @package OervaldPlugin
 */
namespace Inc\Base;

class CustomPostCreator{
 public function __construct()
 {
 }

 function register()
 {
     add_action('init', array($this, 'register_oervald_custom_post'));
	 add_action('init', array($this, 'add_oervald_tax'));
	 add_action('admin_init', array($this, 'admin_init'));
	 add_action('save_post', array($this, 'save_details'));
	 flush_rewrite_rules();
 }

 function add_oervald_tax()
 {
	register_taxonomy("Product IDs", array("product"), array("hierarchical" => true, "label" => "Product IDs", "singular_label" => "Product ID", "rewrite" => true));
 }

 function admin_init()
 {
	 add_meta_box('product_id-meta','Product ID', array($this,'product_ID'),'product','side','low');
	 add_meta_box("details_meta", "Design & Build Credits", array($this,"oervald_details_meta"), "product", "normal", "low");
 }



 function register_oervald_custom_post()
 {
    $labels = array(
		'name' => _x('My Product', 'post type general name'),
		'singular_name' => _x('Product Item', 'post type singular name'),
		'add_new' => _x('Add New', 'product item'),
		'add_new_item' => __('Add New Product Item'),
		'edit_item' => __('Edit Product Item'),
		'new_item' => __('New Product Item'),
		'view_item' => __('View Product Item'),
		'search_items' => __('Search Product'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' => 'dashicons-carrot',
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','editor','thumbnail')
	  ); 

	register_post_type( 'product' , $args );
 }

 function product_ID()
 {
	 global $post;

	 $custom = get_post_custom($post->ID);
	 $product_description = $custom['product_ID'][0];
	 ?>
		<label>Product Description</label>
		<input name="product_ID" value="<?php echo $product_description; ?>" />
<?php
 }

 function oervald_details_meta() {
	global $post;
	$custom = get_post_custom($post->ID);
	$designers = $custom["designers"][0];
	$developers = $custom["developers"][0];
	$producers = $custom["producers"][0];
	?>
		<p><label>Designed By:</label><br />
    		<textarea cols="50" rows="5" name="designers"><?php echo $designers; ?></textarea></p>
		<p><label>Built By:</label><br />
    		<textarea cols="50" rows="5" name="developers"><?php echo $developers; ?></textarea></p>
		<p><label>Produced By:</label><br />
    		<textarea cols="50" rows="5" name="producers"><?php echo $producers; ?></textarea></p>
<?php
  }

  function save_details(){
	global $post;
  
	update_post_meta($post->ID, "product_ID", $_POST["product_ID"]);
	update_post_meta($post->ID, "designers", $_POST["designers"]);
	update_post_meta($post->ID, "developers", $_POST["developers"]);
	update_post_meta($post->ID, "producers", $_POST["producers"]);
  }
}