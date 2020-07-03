<?php get_header();?>

<section>

    <h2 class="titulo">index.php</h2>
   



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
                                the_post_thumbnail('mau');
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
        <?php get_sidebar();?>
        <p class="plugin"><?php echo get_template_directory_uri();?></p>
        <p class="plugin"><?php echo plugins_url();?></p>
        <p class="plugin"><?php echo plugins_url( '/mauricio_Plugin/estilos_Mau.css' );?></p>
        <p class="plugin">hola mundo</p>
        
    </aside>
    
    </div>
</section>
<p>hola estamos en el index.php</p>
<p>hola estamos en el index.php</p>
