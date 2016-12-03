<?php
$post = $wp_query->post;
if ( in_category('3') ) {
include(TEMPLATEPATH . '/single-home.php');
} 
// servicios y especialidades
else if ( in_category('9') || in_category('10') ) {
	include(TEMPLATEPATH . '/single-services.php');
} 
// else if ( in_category('10') ) {
// 	include(TEMPLATEPATH . '/single-services.php');
// } 

else {
	include(TEMPLATEPATH . '/single-all.php');
}
?>