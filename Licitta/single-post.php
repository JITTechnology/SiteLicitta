<?php include("header-blog.php");?>
<?php $count =0;
$excluded_ids[] = 6700;
global $post;
wp_reset_postdata();
$slug = $post->ID;
$categoriesP = get_the_category( $post->post_id );
$category_name = '';					
foreach( $categoriesP as $categoryP ) {
	$category_name = get_category_link($categoryP->term_id);
} 
$path = parse_url($category_name, PHP_URL_PATH);
$path = trim($path, '/');
$segments = explode('/', $path);
$category_name = end($segments);
?>
<main>
	<div id="main-blog" style="margin-top: 9em;">
		<section class="py-4" style="background-color: #F5F5F5">
			<div class="container">
				<div class="row">
					<div class="col-md-8">

						<div class="container">
							<section>
								<div class="col-12">
									<div>
										<p style="color: #AFADAA">
											<?=get_the_author_meta('display_name', $post->post_author) . ' | ' . get_the_date('d/m/Y', $post);
											?>
										</p>
									</div>
									<h2 class="mt-4">
										<?php the_title();?>
									</h2>
								</div>
							</section>
							<img style="width: 100%" class="mt-4" src="<?=get_the_post_thumbnail_url($post->ID)?>" />
							<hr class="container">
							<section class="mt-5 mb-5 post-content">
								<?php the_content();?>
							</section>
							<hr class="container">

							<section class="mb-5">
								<section class="d-flex justify-content-between flex-wrap">
									<div class="mt-4 mb-3 col-12">
										<p style="color: var(--primary-color);font-weight: bolder; font-size: 1.5em">
											Compartilhar via:</p>
									</div>
									<!-- REDES -->
									<div class="post-share">
										<?php
								$wplogoutURL = urlencode(get_the_permalink());
								$wplogoutTitle = urlencode(get_the_title());
								$wplogoutImage= urlencode(get_the_post_thumbnail_url(get_the_ID(), 'full'));
								?>
										<div class="social-wrapper-d">
											<a class="social-sharing social-facebook" href="" target="_blank"
												rel="nofollow">
												<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
													viewBox="0 0 24 24" fill="#000">
													<path
														d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
												</svg>
											</a>
											<a class="social-sharing social-twitter" href="" target="_blank"
												rel="nofollow">
												<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
													viewBox="0 0 24 24" fill="#000">
													<path
														d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
												</svg>
											</a>
											<a class="social-sharing social-linkedin" href="" target="_blank"
												rel="nofollow">
												<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
													viewBox="0 0 24 24" fill="#000">
													<path
														d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z" />
												</svg>
											</a>
											<a class="social-sharing social-whatsapp" href="" target="_blank"
												rel="nofollow">
												<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
													viewBox="0 0 24 24" fill="#000">
													<path
														d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
												</svg>
											</a>
											<a class="social-sharing social-insta" href="" target="_blank"
												rel="nofollow">
												<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
													fill="#000" class="bi bi-instagram" viewBox="0 0 16 16">
													<path
														d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
												</svg>
											</a>
										</div>
									</div>
								</section>
							</section>
							<section class="mt-5">
								<div>
									<p style="color: var(--primary-color);font-weight: bolder; font-size: 1.5em">
										Relacionado:</p>
								</div>
								<div id="section-category" class="row">
									<?php
$args = array(
    
'category_name' => $category_name,
'posts_per_page' => 6,
'paged' => 1,
'orderby' => 'date',
'order' => 'DESC',
'post__not_in' => $excluded_ids
);
$query = new WP_Query($args);
if ($query->have_posts()) :
    while ($query->have_posts()) :
        $query->the_post();
        $excluded_ids[] = get_the_ID();
        ?>
		<div class="col-sm-12 col-md-6 mb-2">
				<a href="<?php the_permalink(); ?>">
                <div class="row">
                    <div class="col-sm-5"> 
                        <img style="width: 100%; border-radius: 10px;" 
                             src="<?php echo has_post_thumbnail() ? get_the_post_thumbnail_url() : '/path/to/default/image.jpg'; ?>" />
                    </div>
                    <div class="col-sm-7"> 
                        <h5 class="title_post"><?php the_title(); ?></h5>
                        <p class="title_author"><?php the_author(); ?></p>
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
							</section>
						</div>
					</div>
					<div class="col-md-4">
						<h4 class="title_sessao">Últimas</h4>
						<div id="section-ultimas">
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
			</div>
		</section>
	</div>
</main>
<?php get_footer();?>