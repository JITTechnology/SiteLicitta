<?php
$args = array(
    'post_type' => 'pacote',
    'posts_per_page' => -1
);
$pacote_query = new WP_Query($args);
if($pacote_query->have_posts()) : while ($pacote_query->have_posts()) : $pacote_query->the_post();
?>
<section style="background: <?=$background_fundo?>; padding: 3%">
    <div class="container" style="padding: 0px 10%">
        <section class="row">
            <div class="col-lg-6">
            <h2 class="d-flex d-lg-none"><b style="background: #FF6A2E;"><?=the_title();?></b></h2>
            <img src="<?=get_the_post_thumbnail_url()?>" style="width: 100%; text-align: center; margin-bottom: 2%" />
               
            </div>
            <div class="col-lg-6" style="align-self: center;">
                <h2 class="d-none d-lg-flex"><b style="background: #FF6A2E;"><?=the_title();?></b></h2>
                <h1><b style="background: white;">À partir de:<br  class="d-flex d-lg-none"/>R$ <?=get_field('valor_do_pacote')?></b></h1>
                <h2><b style="background: white;"><?=get_field('sub-title')?></b></h2><br/>
            <h3>
                <b style="font-size: 20px; background: white;">
                    <?=the_content();?>
                </b>
            </h3>
            <div class="text-center col-12 mt-3">
                <button class="saber-mais" data-bs-toggle="modal" data-bs-target="#modal-contact">
                    <p>
                    SABER MAIS
                    </p>
                </button>
            </div>
            </div>
        </section>
    </div>
</section>
<?php endwhile; else:
    echo '
        <div class="w-100 d-flex justify-content-center"><h4 class="mt-4 mb-4">Desculpe não temos promoções no momento :(</h4></div>
    '; 
endif; wp_reset_postdata();?> 