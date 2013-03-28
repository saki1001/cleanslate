<?php
/**
 * The template for the homepage.
 *
 * @package CleanSlate
 * @since CleanSlate 0.1
 */
?>

<?php if ( have_posts() ) :
    
        while ( have_posts() ) : the_post();
            /* Include the Post-Format-specific template for the content.
             * If you want to overload this in a child theme then include a file
             * called content-___.php (where ___ is the Post Format name) and that will be used instead.
             */
            get_template_part( 'content', get_post_format() );
        endwhile;
    
    else :
    // Content Not Found Template
    include('content-not-found.php');
    
    endif;
?>