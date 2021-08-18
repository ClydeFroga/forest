<?php
	
	wp_enqueue_script('jquery');
	
	//Регистрация таксономий
	add_action( 'init', 'create_taxonomy' );
	function create_taxonomy(){
		register_taxonomy('issue',
			array('post'),
			array(
				'hierarchical' => true,
				'labels' => array(
					'name' => 'Выпуски журналов',
					'singular_name' => 'Журнал',
					'search_items' =>  'Найти журнал',
					'all_items' => 'Все журналы',
					'parent_item' => null,
					'parent_item_colon' => null,
					'edit_item' => 'Редактировать номер журнала',
					'update_item' => 'Обновить номер журнала',
					'add_new_item' => 'Добавить новый номер журнала',
					'new_item_name' => 'Название нового номера журнала',
					'menu_name' => 'Номера журналов'
				),
				'public' => true,
				'show_in_nav_menus' => true,
				'show_admin_column' => true,
				'show_ui' => true,
				'show_in_menu'=>true,
				'show_tagcloud' =>false,
				'show_in_rest' => true,
				'update_count_callback' => '_update_post_term_count',
				'query_var' => true,
				'rewrite' => array(
					/* настройки URL пермалинков */
					'slug' => 'issues', // ярлык
					'hierarchical' => false, // разрешить вложенность
				),
			)
		);
		register_taxonomy( 'sections', [ 'post' ], [
			'label'                 => '',
			'labels'                => [
				'name'              => 'Разделы',
				'singular_name'     => 'Раздел',
				'search_items'      => 'Искать раздел',
				'all_items'         => 'Все разделы',
				'view_item '        => 'Показать раздел',
				'parent_item'       => 'Родительский раздел',
				'parent_item_colon' => 'Родительский раздел:',
				'edit_item'         => 'Редактировать раздел',
				'update_item'       => 'Обновить раздел',
				'add_new_item'      => 'Добавить новый раздел',
				'new_item_name'     => 'Название нового раздела',
				'menu_name'         => 'Разделы',
			],
			'description'           => '',
			'show_ui' => 						true,
			'public'                => true,
			'show_in_nav_menus'     => true,
			'show_in_menu'          => true,
			'hierarchical'          => true,
			'rewrite'               => true,
			'capabilities'          => array(),
			'meta_box_cb'           => null,
			'show_admin_column'     => true,
			'show_in_rest'          => true,
			'rest_base'             => null,
		] );
        register_taxonomy( 'expert', [ 'post' ], [
            'label'                 => '',
            'labels'                => [
                'name'              => 'Эксперты',
                'singular_name'     => 'Эксперт',
                'search_items'      => 'Искать эксперта',
                'all_items'         => 'Все эксперты',
                'view_item '        => 'Показать эксперта',
                'parent_item'       => 'Родительский эксперт',
                'parent_item_colon' => 'Родительский эксперт:',
                'edit_item'         => 'Редактировать эксперта',
                'update_item'       => 'Обновить эксперта',
                'add_new_item'      => 'Добавить нового эксперта',
                'new_item_name'     => 'Название нового эксперта',
                'menu_name'         => 'Эксперты',
            ],
            'description'           => '',
            'show_ui' => 						true,
            'public'                => true,
            'show_in_nav_menus'     => true,
            'show_in_menu'          => true,
            'hierarchical'          => true,
            'rewrite'               => true,
            'capabilities'          => array(),
            'meta_box_cb'           => null,
            'show_admin_column'     => true,
            'show_in_rest'          => true,
            'rest_base'             => null,
        ] );
		register_taxonomy('AdStatus',
			array('post'),
			array(
				'hierarchical' => true,
				'labels' => array(
					'name' => 'Рекламный статус',
					'singular_name' => 'Рекламный статус',
					'search_items' =>  'Найти рекламный статус',
					'popular_items' => 'Популярные рекламные статусы',
					'all_items' => 'Все рекламные статусы',
					'parent_item' => null,
					'parent_item_colon' => null,
					'edit_item' => 'Редактировать рекламный статус',
					'update_item' => 'Обновить рекламный статус',
					'add_new_item' => 'Добавить новый рекламный статус',
					'new_item_name' => 'Название нового рекламного статуса',
					'separate_items_with_commas' => 'Разделяйте рекламные статусы запятыми',
					'add_or_remove_items' => 'Добавить или удалить рекламный статус',
					'choose_from_most_used' => 'Выбрать из наиболее часто используемых рекламных статусов',
					'menu_name' => 'Рекламные статусы'
				),
				'public' => false,
				'show_in_nav_menus' => true,
				'show_ui' => true,
				'show_tagcloud' => false,
				'query_var' => false,
				'rewrite' =>true,
				'show_in_rest' => true,
				'rest_base' => 'AdStatus',
				'show_admin_column'     => true,
				'publicly_queryable' => false,
			)
		);
	}
	
	// тип записи "Партнеры"
	function partners() {
		$labels = array(
			'name' => 'Партнеры',
			'singular_name' => 'Партнер', // админ панель Добавить->Функцию
			'add_new' => 'Добавить партнера',
			'add_new_item' => 'Добавить нового партнера', // заголовок тега <title>
			'edit_item' => 'Редактировать партнера',
			'new_item' => 'Новый партнер',
			'all_items' => 'Все партнеры',
			'view_item' => 'Просмотр партнеров на сайте',
			'search_items' => 'Искать партнера',
			'not_found' =>  'Партнеров не найдено.',
			'not_found_in_trash' => 'В корзине нет партнеров.',
			'menu_name' => 'Партнеры' // ссылка в меню в админке
		);
		$args = array(
			'labels' => $labels,
			'public' => true,
			'show_ui' => true, // показывать интерфейс в админке
			'has_archive' => true,
			'rewrite'=>true,
			'publicly_queryable' => false,
			'capability_type' => 'post',
			'show_in_rest' => true,
			'menu_position' => 21, // порядок в меню
			'supports' => array( 'title', 'editor', 'excerpt','comments', 'author', 'thumbnail', 'custom-fields'),
		);
		register_post_type('partners', $args);
	}
	add_action( 'init', 'partners' );
	
	//Регистрация меню
	add_action( 'after_setup_theme', 'theme_register_nav_menu' );
	function theme_register_nav_menu() {
		register_nav_menu( 'topWhite', 'Белое меню' );
		register_nav_menu( 'topGreen', 'Зеленое меню' );
		register_nav_menu( 'footerLeft', 'footer левое' );
		register_nav_menu( 'footerTwo', 'footer центральное' );
		register_nav_menu( 'footerThree', 'footer правое' );
	}
	
	//Регистрация функций для темы
	add_theme_support('widgets');
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support('menus');
	add_theme_support( 'html5' );
	add_theme_support( 'custom-logo' );

	add_theme_support( 'html5', array( 'search-form' ) );
	
	
	// регистрация панелей виджетов
	add_action( 'widgets_init', 'register_my_widgets' );

	function register_my_widgets(){
		register_sidebar( array(
			'name'          => 'Опрос в зеленой рамке',
			'id'            => "quiz_poll",
		) );
        register_sidebar( array(
            'name'          => 'Растяжка',
            'id'            => "topbanner",
            'description'   => '',

        ) );
        register_sidebar( array(
            'name'          => 'Растяжка на прототипах',
            'id'            => "protobaner",
            'description'   => '',

        ) );
        register_sidebar( array(
            'name'          => 'Нижняя плашка',
            'id'            => "bottomfixed",
            'description'   => '',

        ) );
	}
	
	//kama_excerpt
	function kama_excerpt( $args = '' ){
		global $post;
		
		if( is_string($args) )
			parse_str( $args, $args );
		
		$rg = (object) array_merge( array(
			'maxchar'     => 350,   // Макс. количество символов.
			'text'        => '',    // Какой текст обрезать (по умолчанию post_excerpt, если нет post_content.
			// Если в тексте есть `<!--more-->`, то `maxchar` игнорируется и берется
			// все до <!--more--> вместе с HTML.
			'autop'       => true,  // Заменить переносы строк на <p> и <br> или нет?
			'save_tags'   => '',    // Теги, которые нужно оставить в тексте, например '<strong><b><a>'.
			'more_text'   => 'Читать дальше...', // Текст ссылки `Читать дальше`.
			'ignore_more' => false, // нужно ли игнорировать <!--more--> в контенте
		), $args );
		
		$rg = apply_filters( 'kama_excerpt_args', $rg );
		
		if( ! $rg->text )
			$rg->text = $post->post_excerpt ?: $post->post_content;
		
		$text = $rg->text;
		// убираем блочные шорткоды: [foo]some data[/foo]. Учитывает markdown
		$text = preg_replace( '~\[([a-z0-9_-]+)[^\]]*\](?!\().*?\[/\1\]~is', '', $text );
		// убираем шоткоды: [singlepic id=3]. Учитывает markdown
		$text = preg_replace( '~\[/?[^\]]*\](?!\()~', '', $text );
		$text = trim( $text );
		
		// <!--more-->
		if( ! $rg->ignore_more  &&  strpos( $text, '<!--more-->') ){
			preg_match('/(.*)<!--more-->/s', $text, $mm );
			
			$text = trim( $mm[1] );
			
			$text_append = ' <a href="'. get_permalink( $post ) .'#more-'. $post->ID .'">'. $rg->more_text .'</a>';
		}
		// text, excerpt, content
		else {
			$text = trim( strip_tags($text, $rg->save_tags) );
			
			// Обрезаем
			if( mb_strlen($text) > $rg->maxchar ){
				$text = mb_substr( $text, 0, $rg->maxchar );
				$text = preg_replace( '~(.*)\s[^\s]*$~s', '\\1...', $text ); // кил последнее слово, оно 99% неполное
			}
		}
		
		// сохраняем переносы строк. Упрощенный аналог wpautop()
		if( $rg->autop ){
			$text = preg_replace(
				array("/\r/", "/\n{2,}/", "/\n/",   '~</p><br ?/?>~'),
				array('',     '</p><p>',  '<br />', '</p>'),
				$text
			);
		}
		
		$text = apply_filters( 'kama_excerpt', $text, $rg );
		
		if( isset($text_append) )
			$text .= $text_append;
		
		return ( $rg->autop && $text ) ? "$text" : $text;
	}
	
	function exclude_category( $query ) {
		$query->set( 'cat', '-2058' );
	}
	if(!is_admin()){
		add_action( 'pre_get_posts', 'exclude_category' );
	}

	//загрузить еще
	function true_load_posts(){
		
		$args = unserialize( stripslashes( $_POST['query'] ) );
		$args['paged'] = $_POST['page'] + 1; // следующая страница
		$args['post_status'] = 'publish';
		
		// обычно лучше использовать WP_Query, но не здесь
		query_posts( $args );
		// если посты есть
		if( have_posts() ) :
			
			// запускаем цикл
			while( have_posts() ): the_post();
				
				get_template_part( 'includes/horizontalBarDiv', get_post_format() );
			
			endwhile;
		
		endif;
		die();
	}

	function archiveloadmore(){
		$offsetLoad = $_POST['offset'];
		$magazines3 = get_terms(array(
			'taxonomy' => 'issue',
			'offset' => $offsetLoad,
			'number' => '9',
			'orderby' => 'slug',
			'order' => 'DESC',
		));
		
		if( $magazines3 ) :
			
			foreach( $magazines3 as $mag ) {
				
				require locate_template('includes/magazine__item.php');
				
			}
		
		endif;
		die();
	}

    function singleLoad(){
        $offset = $_POST['offset'];

        if($offset > 4) {
            die();
        } else {
            $args = array(
                'post__not_in' => [$_POST['currID']],
                'field' => 'slug',
                'sections'    => 'novosti',
                'offset' => $offset,
                'post_status' => 'publish',
                'posts_per_page' => 1
            );
        }

        query_posts( $args );

        if( have_posts() ) :
            while( have_posts() ): the_post();

                require locate_template( 'includes/additionalBlock.php');

            endwhile;
        endif;
        die();
    }

    function filterLoad(){
        $slug = $_POST['slug'];
        $theme = $_POST['currentTheme'];
        $operator = $_POST['operator'];
        $isCat = $_POST['category'];

        require locate_template( 'includes/filterAjax.php');
        die();
    }

    function expertLoadmore(){
    $offsetLoad = $_POST['offset'];
    $terms = get_terms( array(
        'taxonomy'      => array( 'expert'),
        'orderby'       => 'slug',
        'order'         => 'ASC',
        'offset'         => $offsetLoad,
        'hide_empty'    => false,
        'number'    => 23,
    ) );

    if( $terms ) :

        foreach( $terms as $term ) {
            $img_url = get_field('photoexpert', 'expert_' . $term->term_id);
            $link = get_term_link( $term->term_id, $term->taxonomy );
            require locate_template('includes/expertBlock.php');

        }

    endif;
    die();
}

	add_action('wp_ajax_loadmore', 'true_load_posts');
	add_action('wp_ajax_nopriv_loadmore', 'true_load_posts');

	add_action('wp_ajax_archiveloadmore', 'archiveloadmore');
	add_action('wp_ajax_nopriv_archiveloadmore', 'archiveloadmore');

    add_action('wp_ajax_singleLoad', 'singleLoad');
    add_action('wp_ajax_nopriv_singleLoad', 'singleLoad');

    add_action('wp_ajax_filterLoad', 'filterLoad');
    add_action('wp_ajax_nopriv_filterLoad', 'filterLoad');

    add_action('wp_ajax_expertLoadmore', 'expertLoadmore');
    add_action('wp_ajax_nopriv_expertLoadmore', 'expertLoadmore');

/**
 * Deal with the custom RSS templates.
 */
function my_custom_rss() {
        get_template_part( 'feed' );
}
remove_all_actions( 'do_feed_rss2' );
add_action( 'do_feed_rss2', 'my_custom_rss', 10, 1 );


function true_top_posts_widget_load() {
    register_widget( 'trueTopPostsWidget' );
    register_widget( 'bottomFixedBlock' );
}

class trueTopPostsWidget extends WP_Widget {
    function __construct() {
        parent::__construct(
            'topBanner',
            'Баннер верхний', // заголовок виджета
            array( 'description' => '' ) // описание
        );
    }

    public function widget( $args, $instance ) {
        $title2 = $instance['title2'];
        $text = $instance['text'];
        $link = $instance['link'];
        $image = $instance['image'];
        $image2 = $instance['image2'];
        $logo = $instance['logo'];
        
        require locate_template('includes/header__container.php');

    }

    public function form( $instance ) {

        if ( isset( $instance[ 'title2' ] ) ) {
            $title2 = $instance[ 'title2' ];
        }
        if ( isset( $instance[ 'text' ] ) ) {
            $text = $instance[ 'text' ];
        }
        if ( isset( $instance[ 'link' ] ) ) {
            $link = $instance[ 'link' ];
        }
        if ( isset( $instance[ 'image' ] ) ) {
            $image = $instance[ 'image' ];
        }
        if ( isset( $instance[ 'image2' ] ) ) {
            $image2 = $instance[ 'image2' ];
        }
        if ( isset( $instance[ 'logo' ] ) ) {
            $logo = $instance[ 'logo' ];
        }
        ?>

        <p>
            <label for="<?php echo $this->get_field_id( 'title2' ); ?>">Заголовок для свернутого режима</label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title2' ); ?>" name="<?php echo $this->get_field_name( 'title2' ); ?>" type="text" value="<?php echo esc_attr( $title2 ); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'text' ); ?>">Скрытый текст:</label>
            <?php wp_editor( $text, $this->get_field_id( 'text' ), array(
                'wpautop'       => 1,
                'media_buttons' => 1,
                'textarea_name' => $this->get_field_name( 'text' ),
                'textarea_rows' => 20,
                'tabindex'      => null,
                'editor_css'    => '',
                'editor_class'  => '',
                'teeny'         => 0,
                'dfw'           => 0,
                'tinymce'       => 0,
                'quicktags'     => 1,
                'drag_drop_upload' => false
            ) ); ?>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'link' ); ?>">Ссылка:</label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'link' ); ?>" name="<?php echo $this->get_field_name( 'link' ); ?>" type="text" value="<?php echo $link; ?>"/>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'image' ); ?>">Ссылка на фоновое изображение(на разрешение > 576):</label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'image' ); ?>" name="<?php echo $this->get_field_name( 'image' ); ?>" type="text" value="<?php echo $image; ?>"/>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'image2' ); ?>">Ссылка на фоновое изображение(на разрешение <= 576):</label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'image2' ); ?>" name="<?php echo $this->get_field_name( 'image2' ); ?>" type="text" value="<?php echo $image2; ?>"/>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'logo' ); ?>">Ссылка на изображение лого отображаемое в свернутом режиме (20x20px):</label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'logo' ); ?>" name="<?php echo $this->get_field_name( 'logo' ); ?>" type="text" value="<?php echo $logo; ?>"/>
        </p>
        <?php
    }

    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title2'] = ( ! empty( $new_instance['title2'] ) ) ? strip_tags( $new_instance['title2'] ) : '';
        $instance['text'] = ( ! empty( $new_instance['text'] ) ) ? $new_instance['text']  : '';
        $instance['link'] = ( ! empty( $new_instance['link'] ) ) ? $new_instance['link']  : '';
        $instance['image'] = ( ! empty( $new_instance['image'] ) ) ? $new_instance['image'] : '';
        $instance['image2'] = ( ! empty( $new_instance['image2'] ) ) ? $new_instance['image2'] : '';
        $instance['logo'] = ( ! empty( $new_instance['logo'] ) ) ? $new_instance['logo'] : '';
        return $instance;
    }
}
class bottomFixedBlock extends WP_Widget {

    function __construct() {
        parent::__construct(
            'bottomBlock',
            'Нижняя плашка', // заголовок виджета
            array( 'description' => 'поялвяется на странице и записях новостей' ) // описание
        );
    }

    public function widget( $args, $instance ) {

        $text = $instance['text'];
        $link = $instance['link'];

        require locate_template('includes/bottomFixedBlock.php');

    }

    public function form( $instance ) {
        if ( isset( $instance[ 'text' ] ) ) {
            $text = $instance[ 'text' ];
        }
        if ( isset( $instance[ 'link' ] ) ) {
            $link = $instance[ 'link' ];
        }
        ?>


        <p>
            <label for="<?php echo $this->get_field_id( 'text' ); ?>">Текст:</label>
            <?php wp_editor( $text, $this->get_field_id( 'text' ), array(
                'wpautop'       => 1,
                'media_buttons' => 1,
                'textarea_name' => $this->get_field_name( 'text' ),
                'textarea_rows' => 20,
                'tabindex'      => null,
                'editor_css'    => '',
                'editor_class'  => '',
                'teeny'         => 0,
                'dfw'           => 0,
                'tinymce'       => 0,
                'quicktags'     => 1,
                'drag_drop_upload' => false
            ) ); ?>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'link' ); ?>">Ссылка:</label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'link' ); ?>" name="<?php echo $this->get_field_name( 'link' ); ?>" type="text" value="<?php echo $link; ?>"/>
        </p>
        <?php
    }

    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['text'] = ( ! empty( $new_instance['text'] ) ) ? $new_instance['text']  : '';
        $instance['link'] = ( ! empty( $new_instance['link'] ) ) ? $new_instance['link']  : '';
        return $instance;
    }
}

add_action( 'widgets_init', 'true_top_posts_widget_load' );



/**
 * Возможность загружать изображения для терминов (элементов таксономий: категории, метки).
 *
 * Пример получения ID и URL картинки термина:
 *     $image_id = get_term_meta( $term_id, '_thumbnail_id', 1 );
 *     $image_url = wp_get_attachment_image_url( $image_id, 'thumbnail' );
 *
 * @author: Kama http://wp-kama.ru
 *
 * @version 3.0
 */
if( is_admin() && ! class_exists('Term_Meta_Image') ){

	// init
	//add_action('current_screen', 'Term_Meta_Image_init');
	add_action( 'admin_init', 'Term_Meta_Image_init' );
	function Term_Meta_Image_init(){
		$GLOBALS['Term_Meta_Image'] = new Term_Meta_Image();
	}

	class Term_Meta_Image {

		// для каких таксономий включить код. По умолчанию для всех публичных
		static $taxes = []; // пример: array('category', 'post_tag');

		// название мета ключа
		static $meta_key = '_thumbnail_id';
		static $attach_term_meta_key = 'img_term';

		// URL пустой картинки
		static $add_img_url = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkAQMAAABKLAcXAAAABlBMVEUAAAC7u7s37rVJAAAAAXRSTlMAQObYZgAAACJJREFUOMtjGAV0BvL/G0YMr/4/CDwY0rzBFJ704o0CWgMAvyaRh+c6m54AAAAASUVORK5CYII=';

		public function __construct(){
			// once
			if( isset($GLOBALS['Term_Meta_Image']) )
				return $GLOBALS['Term_Meta_Image'];

			$taxes = self::$taxes ? self::$taxes : get_taxonomies( [ 'public' =>true ], 'names' );

			foreach( $taxes as $taxname ){
				add_action( "{$taxname}_add_form_fields",   [ $this, 'add_term_image' ],     10, 2 );
				add_action( "{$taxname}_edit_form_fields",  [ $this, 'update_term_image' ],  10, 2 );
				add_action( "created_{$taxname}",           [ $this, 'save_term_image' ],    10, 2 );
				add_action( "edited_{$taxname}",            [ $this, 'updated_term_image' ], 10, 2 );

				add_filter( "manage_edit-{$taxname}_columns",  [ $this, 'add_image_column' ] );
				add_filter( "manage_{$taxname}_custom_column", [ $this, 'fill_image_column' ], 10, 3 );
			}
		}

		## поля при создании термина
		public function add_term_image( $taxonomy ){
			wp_enqueue_media(); // подключим стили медиа, если их нет

			add_action('admin_print_footer_scripts', [ $this, 'add_script' ], 99 );
			$this->css();
			?>
			<div class="form-field term-group">
				<label><?php _e('Image', 'default'); ?></label>
				<div class="term__image__wrapper">
					<a class="termeta_img_button" href="#">
						<img src="<?php echo self::$add_img_url ?>" alt="">
					</a>
					<input type="button" class="button button-secondary termeta_img_remove" value="<?php _e( 'Remove', 'default' ); ?>" />
				</div>

				<input type="hidden" id="term_imgid" name="term_imgid" value="">
			</div>
			<?php
		}

		## поля при редактировании термина
		public function update_term_image( $term, $taxonomy ){
			wp_enqueue_media(); // подключим стили медиа, если их нет

			add_action('admin_print_footer_scripts', [ $this, 'add_script' ], 99 );

			$image_id = get_term_meta( $term->term_id, self::$meta_key, true );
			$image_url = $image_id ? wp_get_attachment_image_url( $image_id, 'thumbnail' ) : self::$add_img_url;
			$this->css();
			?>
			<tr class="form-field term-group-wrap">
				<th scope="row"><?php _e( 'Image', 'default' ); ?></th>
				<td>
					<div class="term__image__wrapper">
						<a class="termeta_img_button" href="#">
							<?php echo '<img src="'. $image_url .'" alt="">'; ?>
						</a>
						<input type="button" class="button button-secondary termeta_img_remove" value="<?php _e( 'Remove', 'default' ); ?>" />
					</div>

					<input type="hidden" id="term_imgid" name="term_imgid" value="<?php echo $image_id; ?>">
				</td>
			</tr>
			<?php
		}

		public function css(){
			?>
			<style>
				.termeta_img_button{ display:inline-block; margin-right:1em; }
				.termeta_img_button img{ display:block; float:left; margin:0; padding:0; min-width:100px; max-width:150px; height:auto; background:rgba(0,0,0,.07); }
				.termeta_img_button:hover img{ opacity:.8; }
				.termeta_img_button:after{ content:''; display:table; clear:both; }
			</style>
			<?php
		}

		## Add script
		public function add_script(){
			// выходим если не на нужной странице таксономии
			//$cs = get_current_screen();
			//if( ! in_array($cs->base, array('edit-tags','term')) || ! in_array($cs->taxonomy, (array) $this->for_taxes) )
			//  return;

			$title = __('Featured Image', 'default');
			$button_txt = __('Set featured image', 'default');
			?>
			<script>
				jQuery(document).ready(function($){
					var frame,
						$imgwrap = $('.term__image__wrapper'),
						$imgid   = $('#term_imgid');

					// добавление
					$('.termeta_img_button').click( function(ev){
						ev.preventDefault();

						if( frame ){ frame.open(); return; }

						// задаем media frame
						frame = wp.media.frames.questImgAdd = wp.media({
							states: [
								new wp.media.controller.Library({
									title:    '<?php echo $title ?>',
									library:   wp.media.query({ type: 'image' }),
									multiple: false,
									//date:   false
								})
							],
							button: {
								text: '<?php echo $button_txt ?>', // Set the text of the button.
							}
						});

						// выбор
						frame.on('select', function(){
							var selected = frame.state().get('selection').first().toJSON();
							if( selected ){
								$imgid.val( selected.id );
								$imgwrap.find('img').attr('src', selected.sizes.thumbnail.url );
							}
						} );

						// открываем
						frame.on('open', function(){
							if( $imgid.val() ) frame.state().get('selection').add( wp.media.attachment( $imgid.val() ) );
						});

						frame.open();
					});

					// удаление
					$('.termeta_img_remove').click(function(){
						$imgid.val('');
						$imgwrap.find('img').attr('src','<?php echo self::$add_img_url ?>');
					});
				});
			</script>

			<?php
		}

		## Добавляет колонку картинки в таблицу терминов
		public function add_image_column( $columns ){
			// fix column width
			add_action( 'admin_notices', function(){
				echo '<style>.column-image{ width:50px; text-align:center; }</style>';
			});

			// column without name
			return array_slice( $columns, 0, 1 ) + [ 'image' =>'' ] + $columns;
		}

		public function fill_image_column( $string, $column_name, $term_id ){

			if( 'image' === $column_name && $image_id = get_term_meta( $term_id, self::$meta_key, 1 ) ){
				$string = '<img src="'. wp_get_attachment_image_url( $image_id, 'thumbnail' ) .'" width="50" height="50" alt="" style="border-radius:4px;" />';
			}

			return $string;
		}

		## Save the form field
		public function save_term_image( $term_id, $tt_id ){
			if( isset($_POST['term_imgid']) && $attach_id = (int) $_POST['term_imgid'] ){
				update_term_meta( $term_id,   self::$meta_key,             $attach_id );
				update_post_meta( $attach_id, self::$attach_term_meta_key, $term_id );
			}
		}

		## Update the form field value
		public function updated_term_image( $term_id, $tt_id ){
			if( ! isset($_POST['term_imgid']) )
				return;

			$cur_term_attach_id = (int) get_term_meta( $term_id, self::$meta_key, 1 );

			if( $attach_id = (int) $_POST['term_imgid'] ){
				update_term_meta( $term_id,   self::$meta_key,             $attach_id );
				update_post_meta( $attach_id, self::$attach_term_meta_key, $term_id );

				if( $cur_term_attach_id != $attach_id )
					wp_delete_attachment( $cur_term_attach_id );
			}
			else {
				if( $cur_term_attach_id )
					wp_delete_attachment( $cur_term_attach_id );

				delete_term_meta( $term_id, self::$meta_key );
			}
		}

	}

}
