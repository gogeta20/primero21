<?php/* Template Name: Mangas  */?>

<?php get_header()?>
<section>
    <h2 class="titulo">Mangas</h2>

    <div class="principalNoticias" id="sectionNoticias">
        <div class="contenedorNoticias" id="noticiasPadre">
            <div>
                    <?php while ( have_posts() ) : the_post(); ?>
                        
                        <article class="articleNoticias">

                            <?php
                                $argumentos = array(
                                    'post-type'         => 'mangas',
                                    'posts-per-page'    => -1,
                                    'orderby'           => 'date',
                                    'order'             => 'DESC',
                                );
                                $mangas = new WP_Query($argumentos);
                            ?>

                            <?php while($mangas->have_posts()):$mangas->the_post();?>
                                <?php the_post_thumbnail('mau');?>
                                <?php the_title();?>
                                <?php the_content();?>
                                <p>aqui en manga.php</p>
                            <?php endwhile; ?>
                        </article>
                    <?php endwhile; ?>
            </div>
        </div>    
    </div>
</section>
