<?php
    function reescrita_mais_lidas() {
        add_rewrite_rule('^blog/mais-lidas/?page/([0-9]+)/?$', 'index.php?pagename=mais-lidas&paged=$matches[1]', 'top');
    }
    add_action('init', 'reescrita_mais_lidas');
    
    function theme_setup(){
        add_theme_support('post-thumbnails');

        add_theme_support('title-tag');

        register_nav_menus(
            array(
                'my_main_menu' => 'Main Menu',
                'my_footer_menu' => 'Footer Menu'
            )
        );
    }
    add_action('after_setup_theme','theme_setup');
    function permitir_paginacao_query_string($query) {
        if (is_page('mais-lidas') && isset($_GET['page'])) {
            $query->set('paged', absint($_GET['page']));
        }
    }
    add_action('pre_get_posts', 'permitir_paginacao_query_string');
    
    function css_files() {
        wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
        wp_enqueue_style('intl-tel-input', 'https://cdn.jsdelivr.net/npm/intl-tel-input@19.2.20/build/css/intlTelInput.css');
        wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css');
        wp_enqueue_style('manrope', 'https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700&display=swap', array(), '1.0.0', 'all');
        wp_enqueue_style('main-styles', get_template_directory_uri() . '/assets/styles/style.css');
        wp_enqueue_style('swiperstyle', get_template_directory_uri() . '/assets/styles/swiper-bundle.min.css');

        wp_enqueue_style('header', get_template_directory_uri() . '/assets/styles/header.css');	
        wp_enqueue_style('footer', get_template_directory_uri().'/assets/styles/footer.css');
        if ( is_front_page() ) {
            wp_enqueue_style('home', get_template_directory_uri() . '/assets/styles/home.css');
            wp_enqueue_style('perguntas-frequentes', get_template_directory_uri() . '/assets/styles/perguntas-frequentes.css');
        }
        if(is_page('blog') || is_single() || is_category() || is_tag() || is_page('mais-lidas') || is_page('ultimas')){
            wp_enqueue_style('home', get_template_directory_uri() . '/assets/styles/blog-front.css');   
        }
        if(is_page('intercambio-na-irlanda') || is_page('intercambio-na-australia') || is_page('intercambio-no-canada')){
            wp_enqueue_style('landingpage', get_template_directory_uri() . '/assets/styles/landingpage.css');
            if ( wp_is_mobile() ) {
                wp_enqueue_style('landingpage-mobile', get_template_directory_uri() . '/assets/styles/landingpage-mobile.css');
            }else{
                wp_enqueue_style('landingpage-desktop', get_template_directory_uri() . '/assets/styles/landingpage-desktop.css');
            }
        }
        wp_enqueue_style('depoimentos', get_template_directory_uri() . '/assets/styles/components/depoimentos.css');

        //estilos dos componentes
    }
    add_action('wp_enqueue_scripts', 'css_files');
    function script_files() {
        wp_deregister_script('jquery');
        wp_enqueue_script('script', get_template_directory_uri().'/assets/scripts/script.js');
        wp_enqueue_script('jquery-slim', 'https://code.jquery.com/jquery-3.3.1.slim.min.js', array(), null, true);
        wp_enqueue_script('intl-tel-input', 'https://cdn.jsdelivr.net/npm/intl-tel-input@19.2.20/build/js/intlTelInput.min.js', array(), null, true);
        wp_enqueue_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js', array('jquery-slim'), null, true);
        wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js', array('jquery-slim', 'popper'), null, true);
        wp_enqueue_script( 'swiperjsbundle', get_template_directory_uri() . '/assets/scripts/swiper-bundle.min.js', array(), '8.0.7', true );
		wp_enqueue_script( 'swiperinit', get_template_directory_uri() . '/assets/scripts/swiper-init.js', array(), '8.0.7', true );
    
    }    

    add_action('wp_enqueue_scripts', 'script_files');
    
    function wpse_the_category_list( $categories, $post_id ) {
        return array_slice( $categories, 0, 4, true );
    }
    add_filter( 'the_category_list', 'wpse_the_category_list', 10, 4 );

    //php the_SVG('nomedoarquivo')
    define("IMGPATH", get_bloginfo("template_url") . "/assets/images/");
    define("SVGPATH", IMGPATH . "/svg/");
    require_once(get_template_directory().'/app/utils/get-svg.php');

    function enable_excerpt_for_pages() {
        add_post_type_support('page', 'excerpt');
    }
    add_action('init', 'enable_excerpt_for_pages');
    
    ///////////////CUSTOM POSTS TYPES
    
    //Filtro para excerpt nao ultrapassar o tamanho e quebrar layout
    function wpdocs_custom_excerpt_length( $length ) {
        return 35;
    }
    add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

    function includeFile($fileName, $variables) {
        extract($variables);
        include($fileName);
    }

    function get_attachment_url_by_slug( $slug ) {
        $args = array(
          'post_type' => 'attachment',
          'name' => sanitize_title($slug),
          'posts_per_page' => 1,
          'post_status' => 'inherit',
        );
        $_header = get_posts( $args );
        $header = $_header ? array_pop($_header) : null;
        return $header ? wp_get_attachment_url($header->ID) : '';
    }

    
function my_awesome_func( $data ) {
    $values_destinos = [];
    $values_destinos_menu = [];
    $values_programas = [];
    $pais_query = new WP_Query(array ('post_type' => 'destino','orderby' => 'title','order' => 'ASC'));
    if($pais_query->have_posts()) : 
        while ($pais_query->have_posts()) : $pais_query->the_post();
            $destinos = ["link" => get_permalink($post->ID), "title" => get_the_title($post->ID)];
            array_push($values_destinos, $destinos);
        endwhile;
    endif; wp_reset_postdata();

    $pais_query = new WP_Query(array ('post_type' => 'destino','orderby' => 'title','order' => 'ASC','tax_query' => array(array('taxonomy' => 'menu','field' => 'slug','terms' => 'Sim',))));
    if($pais_query->have_posts()) : 
        while ($pais_query->have_posts()) : $pais_query->the_post();
            $destinos = ["link" => get_permalink($post->ID), "title" => get_the_title($post->ID)];
            array_push($values_destinos_menu, $destinos);
        endwhile;
    endif; wp_reset_postdata();


    $pais_query = new WP_Query(array ('post_type' => 'Programa','orderby' => 'title','order' => 'ASC'));
    if($pais_query->have_posts()) : 
        while ($pais_query->have_posts()) : $pais_query->the_post();
            $programa = ["link" => 'https://okintercambio.com.br/programas/#' . str_replace(' ','-',strtolower(get_the_title($post->ID))), "title" => get_the_title($post->ID)];
            array_push($values_programas, $programa);
        endwhile;
    endif; wp_reset_postdata();

    return ["destinos" => $values_destinos, "programas" => $values_programas, "menu" => $values_destinos_menu];
  }
  
    // Função de callback para retornar os dados dos destinos
    function get_custom_destinos(WP_REST_Request $request) {
        $args = array(
            'post_type' => 'destino', // Tipo de post personalizado "destino"
            'posts_per_page' => -1, // Retornar todos os posts
        );

        $query = new WP_Query($args);
        $posts = $query->posts;

        // Montar a resposta
        $data = array();
        foreach ($posts as $post) {
            $data[] = array(
                'id' => $post->ID,
                'title' => $post->post_title,
                'content' => $post->post_content,
                'excerpt' => $post->post_excerpt,
                'link' => get_permalink($post->ID),
                'slug' => $post->post_name,
                'featured_media' => get_the_post_thumbnail_url($post->ID),
                'categories' => wp_get_post_categories($post->ID, array('fields' => 'all'))
            );
        }

        return new WP_REST_Response($data, 200);
    }

  add_action( 'rest_api_init', function () {
    register_rest_route( 'posts', '/menu', array(
      'methods' => 'GET',
      'callback' => 'my_awesome_func',
    ) );

    register_rest_route('custom/v1', '/destinos', array(
        'methods' => 'GET',
        'callback' => 'get_custom_destinos',
        'permission_callback' => '__return_true', // Permitir acesso público, ajustar conforme necessário
    ));
  } );
  function search_func( WP_REST_Request $request ) {
      $values_destinos = [];
      $values_destinos_menu = [];
      $values_programas = [];
      $pais_query = new WP_Query(array ('post_type' => 'destino','orderby' => 'title','order' => 'ASC'));
      if($pais_query->have_posts()) : 
          while ($pais_query->have_posts()) : $pais_query->the_post();
              $destinos = ["link" => get_permalink($post->ID), "title" => get_the_title($post->ID)];
              array_push($values_destinos, $destinos);
          endwhile;
      endif; wp_reset_postdata();
  
      $pais_query = new WP_Query(array ('post_type' => 'destino','orderby' => 'title','order' => 'ASC','tax_query' => array(array('taxonomy' => 'menu','field' => 'slug','terms' => 'Sim',))));
      if($pais_query->have_posts()) : 
          while ($pais_query->have_posts()) : $pais_query->the_post();
              $destinos = ["link" => get_permalink($post->ID), "title" => get_the_title($post->ID)];
              array_push($values_destinos_menu, $destinos);
          endwhile;
      endif; wp_reset_postdata();
  
  
      $pais_query = new WP_Query(array ('post_type' => 'Programa','orderby' => 'title','order' => 'ASC'));
      if($pais_query->have_posts()) : 
          while ($pais_query->have_posts()) : $pais_query->the_post();
              $programa = ["link" => 'https://okintercambio.com.br/programas/#' . str_replace(' ','-',strtolower(get_the_title($post->ID))), "title" => get_the_title($post->ID)];
              array_push($values_programas, $programa);
          endwhile;
      endif; wp_reset_postdata();
      foreach ($values_programas as $value) {
          array_push($values_destinos, $value);
      }
      $slug = $request->get_param( 'slug' );
      $response = wp_remote_get('https://blog.okintercambio.com.br/wp-json/posts/search/'.$slug);
    $query  = json_decode(wp_remote_retrieve_body( $response ));
$filteredData = array_filter($values_destinos, function($item) use ($slug) {
    return strpos(strtolower($item['title']), strtolower($slug)) !== false;
});
foreach ($query as $value) {
    array_push($filteredData, $value);
}


$result = array_values($filteredData);


      return $result;
    }
    
    add_action( 'rest_api_init', function () {
        register_rest_route( 'posts', '/search/(?P<slug>[a-zA-Z0-9-_%]+)', array(
            'methods' => 'GET',
            'callback' => 'search_func',
        ) );
        
    } );

    function disable_emojis() {
        remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
        remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
        remove_action( 'wp_print_styles', 'print_emoji_styles' );
        remove_action( 'admin_print_styles', 'print_emoji_styles' );   
        remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
        remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );     
        remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
        add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
    }
    add_action( 'init', 'disable_emojis' );
    
    function disable_emojis_tinymce( $plugins ) {
        if ( is_array( $plugins ) ) {
            return array_diff( $plugins, array( 'wpemoji' ) );
        } else {
            return array();
        }
    }
    add_filter('wpcf7_form_elements', function ($content) {
        // Garante que todos os labels possuam um atributo for correto
        $content = preg_replace_callback('/<label[^>]*>(.*?)<\/label>\s*\[(text|email|tel|select)[^\]]*id:([^\s\]]+)/', function ($matches) {
            $labelText = trim($matches[1]); // Captura o texto do label
            $fieldType = $matches[2];       // Captura o tipo do campo (text, email, tel, select)
            $fieldId = $matches[3];         // Captura o ID do campo
    
            // Retorna um label corrigido com for corretamente vinculado
            return '<label for="' . $fieldId . '">' . $labelText . '</label>' . "\n[" . $fieldType . ' id:' . $fieldId . ']';
        }, $content);
    
        return $content;
    });
    
?>