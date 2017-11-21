<?php
/*
Template Name: Tin Tức
*/
?>
<?php
$url = get_permalink( get_page_by_title('Báo Chí') );
wp_redirect( $url );
exit;
?>
<?php get_footer(); ?>
