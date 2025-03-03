<?php include("header-blog.php");?>
<main>
    <div id="main-blog" style="margin-top: 9em;">
        <section class="container-fluid pb-4 bg-gray">
            <div class="container">
                <div class="col-lg-12 blog-wrapper-home row" id="blogContent">
                    <h4 class="title_sessao mb-1 d-none d-md-block">Mais recentes</h4>

                    <?php
                    $excluded_ids[] = 6700;
                    $args = array(
                        'post_type' => 'post',
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'posts_per_page' => 4,
                        'post__not_in' => $excluded_ids
                    );
                    $query = new WP_Query($args);
                    if ($query->have_posts()) :
                        $query->the_post();$excluded_ids[] = get_the_ID();?>
                    <div class="col-md-6 col-sm-12 blog-post">
                        <a href="<?=get_the_permalink()?>">
                            <div class="post-frame">
                                <img class="thumb" src="<?=get_the_post_thumbnail_url()?>" />
                                <div class="post-info">
                                    <div class="blog-title col-12 p-1">
                                        <h5>
                                            <?=get_the_title()?>
                                        </h5>
                                        <p class="title_author">
                                            <?php the_author(); echo ' | ' . get_the_date('d/m/Y', $post); ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-sm-12 blog-post">
                        <?php
                            endif;
                            if ($query->have_posts()) :
                                while ($query->have_posts()) :
                                    $query->the_post();
                                    $excluded_ids[] = get_the_ID();
                            ?>
                        <a href="<?php the_permalink(); ?>">
                            <div class="col-sm-12 mb-2">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <img class="w-100 br-5"
                                            src="<?php echo has_post_thumbnail() ? get_the_post_thumbnail_url() : '/path/to/default/image.jpg'; ?>" />
                                    </div>
                                    <div class="col-sm-7">
                                        <h5 class="title_post">
                                            <?php the_title(); ?>
                                        </h5>
                                        <p class="title_author">
                                            <?php the_author(); echo ' | ' . get_the_date('d/m/Y', $post); ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <?php
                        endwhile;
                        endif;
                    ?>
                    </div>
                    <?php
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </section>

        <section class="py-4 bg-footer-color">
            <h2 class="cl-white ps-5 title_sessao">Em destaque</h2>
            <div class="swiper swiper-destaque mt-4 d-md-block">
                <div class="swiper-wrapper">
                    <?php
                    $tag_especifica = 'destaque';
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => -1,
                        'tag' => $tag_especifica,
                    );
                    $query = new WP_Query($args);
                    if ($query->have_posts()) {
                        while ($query->have_posts()) {
                            $query->the_post();
                            $excluded_ids[] = get_the_ID();
                            $catecories = get_the_category();
                            $categoriesHTML = '';
                            foreach ($catecories as $category) {
                                $category_link = get_category_link($category->term_id);
                                $categoriesHTML .= '<a class="featuredBadge bg-primary cl-white" href="' . esc_url($category_link) . '">' . esc_html($category->name) . '</a>';
                            }
                            echo '
                            <div class="swiper-slide">
                                <div class="d-flex flex-column">
                                    <div class="featuredDiv position-relative">
                                        <a href="' . get_permalink() . '">
                                            <img src="' . get_the_post_thumbnail_url($post->ID). '"  class="w-100 br-5 filter-brightness" alt="'.get_the_title().'">
                                        </a>
                                        <h4 class="featuredTitle text-start"><span class="cl-primary">|</span>
                                        ' . get_the_title() . '
                                        </h4>
                                    </div>
                                    <div class="d-flex flex-wrap align-items-center gap-2 mt-3">
                                        ' . $categoriesHTML . '
                                    </div>
                                </div>
                            </div>
                            ';
                        }
                        wp_reset_postdata();
                    } else {
                        echo 'Em breve...';
                    }
                ?>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </section>
        <section class="py-4 bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <?php
                            $args = array(
                                'category_name' => 'dicas',
                                'posts_per_page' => 2,
                                'paged' => 1,
                                'orderby' => 'date',
                                'order' => 'DESC',
                                'post__not_in' => $excluded_ids
                            );

                            $query = new WP_Query($args);
                        ?>
                        <h4 class="title_sessao">Dicas de viagem</h4>
                        <div class="swiper swiper-dicas d-block d-md-none height-auto">
                            <div class="swiper-wrapper" id="section-dicas-viagem-swiper">
                                <?php
                                if ($query->have_posts()) :
                                    while ($query->have_posts()) :
                                        $query->the_post();
                                        $excluded_ids[] = get_the_ID();
                                        ?>
                                <div class="swiper-slide">
                                    <div class="w-100 post-frame col-12 d-flex">
                                        <a href="<?php the_permalink(); ?>">
                                            <div class="post-frame">
                                                <img class="thumb" <?php if (has_post_thumbnail()) : ?>
                                                src="
                                                <?php the_post_thumbnail_url(); ?>"
                                                <?php else : ?>
                                                src="/path/to/default/image.jpg"
                                                <?php endif; ?>
                                                alt="
                                                <?php the_title(); ?>">
                                                <div class="post-info bg-footer-color">
                                                    <div class="blog-title col-12 p-1">
                                                        <h6>
                                                            <?php the_title(); ?>
                                                        </h6>
                                                        <p class="title_author">
                                                            <?php the_author(); echo ' | ' . get_the_date('d/m/Y', $post); ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <?php
                                    endwhile;
                                    wp_reset_postdata();
                                endif;
                            ?>
                            </div>
                        </div>
                        <div id="section-dicas-viagem">
                            <div class="d-none d-md-grid d-lg-grid blog-wrapper">
                                <?php
                                    if ($query->have_posts()) :
                                        while ($query->have_posts()) :
                                            $query->the_post();
                                            $excluded_ids[] = get_the_ID();
                                            ?>
                                <div class="a-posts">
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="post-frame">
                                            <img class="thumb" <?php if (has_post_thumbnail()) : ?>
                                            src="
                                            <?php the_post_thumbnail_url(); ?>"
                                            <?php else : ?>
                                            src="/path/to/default/image.jpg"
                                            <?php endif; ?>
                                            alt="
                                            <?php the_title(); ?>">
                                            <div class="post-info bg-footer-color">
                                                <div class="blog-title col-12 p-1">
                                                    <h6>
                                                        <?php the_title(); ?>
                                                    </h6>
                                                    <p class="title_author">
                                                        <?php the_author(); echo ' | ' . get_the_date('d/m/Y', $post); ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <?php
                                        endwhile;
                                        wp_reset_postdata();
                                    endif;
                                ?>
                            </div>
                        </div>
                    </div>
                    <aside class="col-md-4">
                        <h4 class="title_sessao ">E-books gratuitos</h4>
                        <div id="section-ebooks" class="row">
                            <?php
                                $args = array(
                                    'post_type' => 'ebook',
                                    'posts_per_page' => -1,
                                );
                                $query = new WP_Query($args);
                                if ($query->have_posts()) :
                                    while ($query->have_posts()) :
                                        $query->the_post();
                                        $excluded_ids[] = get_the_ID();
                                        ?>
                            <a class="col-lg-6" href="<?=get_the_permalink()?>" target="_blanc">
                                <img src="<?=get_field('capa_do_ebook')?>" alt="<?=get_the_title()?>"
                                    class="w-100 br-5" />
                            </a>
                            <?php
                                    endwhile;
                                    else:
                                    echo 'Em breve...';
                                endif;
                            ?>
                        </div>
                    </aside>
                </div>
            </div>
        </section>
        <section class="py-4 bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h4 class="title_sessao">Tudo sobre intercâmbio</h4>
                        <?php
                            $args = array(
                                'category_name' => 'intercambio',
                                'posts_per_page' => 6,
                                'paged' => 1,
                                'orderby' => 'date',
                                'order' => 'DESC',
                                'post__not_in' => $excluded_ids
                            );

                            $query = new WP_Query($args);
                        ?>
                        <div class="d-block d-md-none swiper swiper-sobre-intercambio height-auto">
                            <div class="swiper-wrapper" id="section-intercambio-swiper">
                                <?php
                                if ($query->have_posts()) :
                                    while ($query->have_posts()) :
                                        $query->the_post();
                                        $excluded_ids[] = get_the_ID();
                                        ?>
                                <div class="swiper-slide">
                                    <div class="w-100 post-frame col-12 d-flex">
                                        <a href="<?php the_permalink(); ?>">
                                            <div class="post-frame">
                                                <img class="thumb" <?php if (has_post_thumbnail()) : ?>
                                                src="
                                                <?php the_post_thumbnail_url(); ?>"
                                                <?php else : ?>
                                                src="/path/to/default/image.jpg"
                                                <?php endif; ?>
                                                alt="
                                                <?php the_title(); ?>">
                                                <div class="post-info bg-footer-color">
                                                    <div class="blog-title col-12 p-1">
                                                        <h6>
                                                            <?php the_title(); ?>
                                                        </h6>
                                                        <p class="title_author">
                                                            <?php the_author(); echo ' | ' . get_the_date('d/m/Y', $post); ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <?php
                                    endwhile;
                                    wp_reset_postdata();
                                endif;
                            ?>
                            </div>
                            <div class="swiper-pagination pagination-sobre-intercambio mt-3"></div>
                        </div>
                        <div id="section-intercambio">
                            <div class="d-none d-md-grid d-lg-grid blog-wrapper">
                                <?php
                                    if ($query->have_posts()) :
                                        while ($query->have_posts()) :
                                            $query->the_post();
                                            $excluded_ids[] = get_the_ID();
                                            ?>
                                <div class="a-posts">
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="post-frame">
                                            <img class="thumb" <?php if (has_post_thumbnail()) : ?>
                                            src="
                                            <?php the_post_thumbnail_url(); ?>"
                                            <?php else : ?>
                                            src="/path/to/default/image.jpg"
                                            <?php endif; ?>
                                            alt="
                                            <?php the_title(); ?>">
                                            <div class="post-info bg-footer-color">
                                                <div class="blog-title col-12 p-1">
                                                    <h6>
                                                        <?php the_title(); ?>
                                                    </h6>
                                                    <p class="title_author">
                                                        <?php the_author(); echo ' | ' . get_the_date('d/m/Y', $post); ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <?php
                                        endwhile;
                                        wp_reset_postdata();
                                    endif;
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h4 class="title_sessao">Mais lidas</h4>
                        <div id="section-mais-lidas">
                            <div class="col-sm-12">
                                <?php
                            $args = array(
                                'posts_per_page' => 8,
                                'meta_key' => 'views',
                                'orderby' => array(
                                    'meta_value_num' => 'DESC',
                                    'date' => 'DESC'
                                ),
                                'meta_query' => array(
                                    array(
                                        'key' => 'views',
                                        'value' => 0,
                                        'compare' => '>',
                                        'type' => 'NUMERIC'
                                    )
                                ),
                                'post__not_in' => $excluded_ids
                            );
                            $query = new WP_Query($args);
                            if ($query->have_posts()) :
                                while ($query->have_posts()) :
                                    $query->the_post();
                                    $excluded_ids[] = get_the_ID();
                                    ?>
                                <a href="<?php the_permalink(); ?>">
                                    <div class="col-sm-12 mb-2">
                                        <div class="row">
                                            <div class="col-sm-5">
                                                <img class="w-100 br-5"
                                                    src="<?php echo has_post_thumbnail() ? get_the_post_thumbnail_url() : '/path/to/default/image.jpg'; ?>" />
                                            </div>
                                            <div class="col-sm-7">
                                                <h5 class="title_post">
                                                    <?php the_title(); ?>
                                                </h5>
                                                <p class="title_author">
                                                    <?php the_author(); echo ' | ' . get_the_date('d/m/Y', $post);  ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <?php
                                endwhile;
                                wp_reset_postdata();
                            endif;
                        ?>
                            </div>

                        </div>
                    </div>
                </div>
        </section>
    </div>
</main>

<?php get_footer(); ?>