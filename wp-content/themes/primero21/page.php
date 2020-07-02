<?php get_header(); ?>

<p>hola estamos en el page</p>
<p>hola estamos en el page</p>
<?php 
    if(have_posts()):
        while(have_posts()):
            the_post();
        endwhile;
    endif;
?>
