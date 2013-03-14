<?php
/**
 * The template for displaying Category News posts.
 *
 * @package CleanSlate
 * @since CleanSlate 0.1
 */

get_header(); ?>
    
<?php
    if ( have_posts() ) :
        // Blog Template
        include('content-blog.php');
        
    else :
        // Content Not Found Template
        include('content-not-found.php');
        
    endif;
?>

<?php get_footer(); ?>