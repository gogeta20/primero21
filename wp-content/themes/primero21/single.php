<?php get_header()?>

<section>

    <h2 class="titulo">noticias de la liga Lugol 2019 - 2020</h2>
   



<div class="principalNoticias" id="sectionNoticias">
    <div class="contenedorNoticias" id="noticiasPadre">
        <div>
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    
                    <article class="articleNoticias">
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
                    </article>
                <?php endwhile; ?>
            <?php else : ?>
                <p>no funciona</p>
            <?php endif; ?>
        </div>
    </div>
    <aside id="asideNoticias"> 
      <p>este es el single.php</p>
    </aside>
    
    </div>
</section>