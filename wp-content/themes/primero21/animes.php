<?php/* Template Name: Animes  */?>

<?php get_header()?>
<section>
    <h2 class="titulo">Animes</h2>

    <div class="principalNoticias" id="sectionNoticias">
        <div class="contenedorNoticias" id="noticiasPadre">
            <div>
                    <?php while ( have_posts() ) : the_post(); ?>
                        
                        <article class="articleNoticias">

                            <?php
                                $argumentos = array(
                                    'post-type'         => 'Animes',
                                    'posts-per-page'    => -1,
                                    'orderby'           => 'date',
                                    'order'             => 'DESC',
                                );
                                $animes = new WP_Query($argumentos);
                            ?>

                            <?php while($animes->have_posts()):$animes->the_post();?>

                            
                            <?php endwhile; ?>
                        </article>
                    <?php endwhile; ?>
            </div>
        </div>    
    </div>
</section>
