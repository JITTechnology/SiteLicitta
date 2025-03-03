<?php $count =0;
$excluded_ids[] = 6700;
$uri = $_SERVER['REQUEST_URI'];
$uri = strtok($uri, '?');
$segments = explode('/', trim($uri, '/'));
$slug = end($segments);
$category_object = get_category_by_slug($slug);
$category_name = "Categoria não encontrada.";
if ($category_object) {
    $category_name = $category_object->name;
}
$endpoint = home_url().'/blog/tema/' . $slug;
$title = 'Blog - Categoria ' . $category_name;
$description = 'Confira as melhores dicas, curiosidades e tudo o que você precisa saber sobre '.$category_name.' com a OK Intercâmbio, especialista em intercâmbios e educação internacional.';
?>
<?php include("header-blog.php");?>
<main>
    <div id="main-blog" style="margin-top: 9em;">
        <section class="py-4" style="background-color: #F5F5F5">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <?php
                        $paged = (get_query_var('page')) ? get_query_var('page') : 1;
                            $args = array(
                                'category_name' => $category_name,
                                'posts_per_page' => 8,
                                'paged' => $paged,
                                'orderby' => 'date',
                                'order' => 'DESC',
                                'post__not_in' => $excluded_ids
                            );

                            $query = new WP_Query($args);
                            $totalPages = $query->max_num_pages;
                            $totalPosts = $query->found_posts;
                        ?>
                        <h4 class="title_sessao">Tudo sobre
                            <?=$category_name?></h4>
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
                                    endif;
                                ?>
                                </div>
                            <div class="pagination mt-2" style="align-items: center; justify-content: center;">
                                <a class="btn <?= ($paged == 1) ? 'disabled' : ''; ?>" href="<?= ($paged == 1) ? '#' : $endpoint . '/page/1'; ?>">
                                    <i class="fa fa-angle-double-left"></i>
                                </a>
                                <a class="btn <?= ($paged == 1) ? 'disabled' : ''; ?>" href="<?= ($paged == 1) ? '#' : $endpoint . '/page/' . ($paged - 1); ?>" id="prevBtn">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                                <span>Página <span id="pagedDisplay"><?= $paged; ?></span> de <span id="totalPagesDisplay"><?= $totalPages; ?></span></span>
                                <a class="btn <?= ($paged == $totalPages) ? 'disabled' : ''; ?>" href="<?= ($paged == $totalPages) ? '#' : $endpoint . '/page/' . ($paged + 1); ?>" id="nextBtn">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                                <a class="btn <?= ($paged == $totalPages) ? 'disabled' : ''; ?>" href="<?= ($paged == $totalPages) ? '#' : $endpoint . '/page/' . $totalPages; ?>" id="lastBtn">
                                    <i class="fa fa-angle-double-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
					<div class="col-md-4">
						<h4 class="title_sessao">Últimas</h4>
						<div id="section-ultimas">
							<div class="col-sm-12">
                                <?php
                            $args = array(
                                'posts_per_page' => ceil($totalPosts / 3) * 2.5,
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
                                                    src="<?= has_post_thumbnail() ? get_the_post_thumbnail_url() : '/path/to/default/image.jpg'; ?>" />
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
            </div>
        </section>
    </div>
</main>
<?php get_footer();?>