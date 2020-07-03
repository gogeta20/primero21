<?php get_header()?>
<?php 
    if(have_posts()):
        while(have_posts()):
            the_post();
        endwhile;
    endif;
?>


<p>estamos en el front page</p>
<p>estamos en el front page</p>
<p>estamos en el front page</p>
