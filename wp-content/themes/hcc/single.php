<?php
$post = $wp_query->post;
if ( in_category('3') ) {
include(TEMPLATEPATH . '/single-home.php');
}
// servicios y especialidades
if ( in_category('9') ) {
include(TEMPLATEPATH . '/single-services.php');
} else {
include(TEMPLATEPATH . '/single-all.php');
}
?>