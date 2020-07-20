<?php
//fetch.php

$parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
require_once( $parse_uri[0] . 'wp-load.php' );
global $wpdb;
$table = $wpdb->prefix."posts";  
$request =  $_POST["query"];
$sql = "SELECT id, post_title, guid FROM $table where post_type = 'pruebas' and post_status = 'publish' and post_title LIKE '%".$request."%'";
//echo $sql.'<br>';
$result = $wpdb->get_results($sql,'ARRAY_N');
$data = array();
/*if($result) { 
	foreach($result as $row) {

		//$data[] = $row["0"];
		$data[] = array(
                    'value' => $row["1"];
                    'url' => get_permalink( $row["0"]; ),
                    'tokens' => explode( ' ', $row["1"] ),
                );
	} 
}*/

	
	
	$suggestions = array();
	foreach( $result as $row ) {
		//$titles[] = '<a href='.'"' . $r->guid .'"'.'>'.$r->post_title.'</a>';
		
		//$titles[] = '<a href='.'"' . $r->post_title .'"'.'>'.'</a>';
		$suggestion = array();
		$suggestion['label'] = $row["1"];
       $suggestion['link'] =  get_the_permalink( $row["0"]);//$r->guid;
		$suggestions[] = $suggestion;
		}
		echo json_encode( $suggestions );
		//$titles[] =$r->post_title;
		//echo json_encode( $titles );
		die();



//$json=json_encode($data);
 //echo json_encode($data);
// echo json_encode($model_names);
  //print_r($json);
  $wpdb->close();

 // wp_reset_query();
  /*$results = array( );
        if ( $search_query->get_posts() ) {
            foreach ( $search_query->get_posts() as $the_post ) {
                $title = get_the_title( $the_post->ID );
                $results[] = array(
                    'value' => $title,
                    'url' => get_permalink( $the_post->ID ),
                    'tokens' => explode( ' ', $title ),
                );
            }
        } else {
            $results[] = __( 'Sorry. No results match your search.', 'wp-typeahead' );
        }
 
        wp_reset_postdata();
        echo json_encode( $results );*/
  
?>