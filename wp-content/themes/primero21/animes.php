<?php/* Template Name: Animes  */?>

<?php get_header()?>
<section>
    <h2 class="titulo">Animes desde la surface</h2>

    <div class="principalNoticias" id="sectionNoticias">
        <div class="contenedorNoticias" id="noticiasPadre">
            <div>
                    <?php while ( have_posts() ) : the_post(); ?>
                        
                        <article class="articleNoticias">

                            <?php
                                $argumentos = array(
                                    'post_type'         => 'animes',
                                    'posts_per_page'    => -1,
                                    'orderby'           => 'date',
                                    'order'             => 'DESC',
                                );
                                $animes = new WP_Query($argumentos);
                            ?>

                            <?php while($animes->have_posts()):$animes->the_post();?>
                            <div class="z1">
                                    <a href="<?php the_permalink()?>">
                                    <?php
                                        if (has_post_thumbnail()) {
                                            the_post_thumbnail();
                                        }
                                    ?>
                                    </a>
                                </div>
                                <div class="z2">
                                    <a href="<?php the_permalink()?>"><h2 class="articleNoticiasTitulo titulo"><?php the_title()?></h2></a>
                                    <div class="noticiasFecha"><?php echo get_the_date()?></div>
                                    <div class="dc">

                                        <div id=""  class="visible"><?php the_content()?></div>
                                        <div class="botonSaberMas" id="${i}">
                                            <button id="" value="" class="botonSaberMas">ampliar</button>
                                        </div>
                                    
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </article>
                    <?php endwhile; ?>
            </div>
        </div>    
    </div>
</section>
