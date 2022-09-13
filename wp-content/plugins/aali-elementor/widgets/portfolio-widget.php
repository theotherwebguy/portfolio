<?php
namespace BdevsElementor\Widget;

use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;
use Elementor\Scheme_Typography;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Box_Shadow;

/**
 * Bdevs Elementor Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class BdevsPortfolio extends \Elementor\Widget_Base {

	/**
	 * Get widget name.
	 *
	 * Retrieve Bdevs Elementor widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'bdevs-portfolio';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve Bdevs Elementor widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( 'Portfolio', 'bdevs-elementor' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve Bdevs Slider widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-favorite';
	}

	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the Bdevs Slider widget belongs to.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return [ 'bdevs-elementor' ];
	}

	public function get_keywords() {
		return [ 'Portfolio' ];
	}

	public function get_script_depends() {
		return [ 'bdevs-elementor'];
	}

	// BDT Position
	protected function element_pack_position() {
	    $position_options = [
	        ''              => esc_html__('Default', 'bdevs-elementor'),
	        'top-left'      => esc_html__('Top Left', 'bdevs-elementor') ,
	        'top-center'    => esc_html__('Top Center', 'bdevs-elementor') ,
	        'top-right'     => esc_html__('Top Right', 'bdevs-elementor') ,
	        'center'        => esc_html__('Center', 'bdevs-elementor') ,
	        'center-left'   => esc_html__('Center Left', 'bdevs-elementor') ,
	        'center-right'  => esc_html__('Center Right', 'bdevs-elementor') ,
	        'bottom-left'   => esc_html__('Bottom Left', 'bdevs-elementor') ,
	        'bottom-center' => esc_html__('Bottom Center', 'bdevs-elementor') ,
	        'bottom-right'  => esc_html__('Bottom Right', 'bdevs-elementor') ,
	    ];

	    return $position_options;
	}

	protected function _register_controls() {
		$this->start_controls_section(
			'section_Portfolio',
			[
				'label' => esc_html__( 'Portfolio', 'bdevs-elementor' ),
			]	
		);
		$this->add_control(
			'subheading',
			[
				'label'       => __( 'Subheading', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your sub heading', 'bdevs-elementor' ),
				'default'     => __( 'Selected works', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);		

		$this->add_control(
			'heading',
			[
				'label'       => __( 'Heading ', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your heading', 'bdevs-elementor' ),
				'default'     => __( 'Check my portfolio', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);	
		$this->add_control(
			'post_number',
			[
				'label'     => esc_html__( 'Post Count', 'bdevs-elementor' ),
				'type'      => Controls_Manager::TEXT,
				
				'default'   => '6',
			]
		);

		$this->add_control(
			'order',
			[
				'label'     => esc_html__( 'Order', 'bdevs-elementor' ),
				'type'      => Controls_Manager::SELECT,
				'options'   => [
					'asc'  => esc_html__( 'ASC', 'bdevs-elementor' ),
					'desc' => esc_html__( 'DESC', 'bdevs-elementor' ),
				],
				'default'   => 'desc',
			]
		);

		$this->end_controls_section();

		/** 
		*	Layout section 
		**/
		$this->start_controls_section(
			'section_content_layout',
			[
				'label' => esc_html__( 'Layout', 'bdevs-elementor' ),
			]
		);

		$this->add_responsive_control(
			'align',
			[
				'label'   => esc_html__( 'Alignment', 'bdevs-elementor' ),
				'type'    => Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'bdevs-elementor' ),
						'icon'  => 'fa fa-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'bdevs-elementor' ),
						'icon'  => 'fa fa-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'bdevs-elementor' ),
						'icon'  => 'fa fa-align-right',
					],
					'justify' => [
						'title' => esc_html__( 'Justified', 'bdevs-elementor' ),
						'icon'  => 'fa fa-align-justify',
					],
				],
				'prefix_class' => 'elementor%s-align-',
				'description'  => 'Use align to match position',
				'default'      => 'left',
			]
		);
		$this->add_control(
			'show_heading',
			[
				'label'   => esc_html__( 'Show Heading', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);			

		$this->add_control(
			'show_subheading',
			[
				'label'   => esc_html__( 'Show Subheading', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);	

		$this->end_controls_section();

	}

	public function render() {
		$settings  = $this->get_settings_for_display(); 
		
		$q = new \WP_Query(array('posts_per_page' => $settings['post_number'],'post_type' => 'portfolio',  'orderby' => $orderby, 'order' => $settings['order']));
	    ?> 

<div class="aali_tm_section help" id="portfolio">
    <div class="aali_tm_portfolio wow fadeInUp" data-wow-duration="1s">
        <div class="container">
            <div class="aali_tm_main_title" data-text-align="center" data-color="light">
            	<?php if (( '' !== $settings['subheading'] ) && ( $settings['show_subheading'] )) : ?>
                <span ><?php echo wp_kses_post($settings['subheading']); ?></span>
                <?php endif; ?>
                <?php if (( '' !== $settings['heading'] ) && ( $settings['show_heading'] )) : ?>
                <h3><?php echo wp_kses_post($settings['heading']); ?></span></h3>
                <?php endif; ?>
            </div>
            <div class="portfolio_filter">
                <ul>
                    <li><a href="#" class="current" data-filter="*"><?php echo esc_html__( 'All', 'aali' )?></a></li>
                    <?php 
                    $categories = get_terms('type1'); 
                    foreach( (array)$categories as $categorie){
                                $cat_name = $categorie->name;
                                $cat_slug = $categorie->slug;                           
                    ?> 
                    <li><a href="#" data-filter=".<?php echo esc_attr($cat_slug); ?>"><?php echo esc_attr($cat_name); ?></a></li>
                    <?php } ?>
                </ul>
            </div>
            <div class="portfolio_list">
                <ul class="gallery_zoom">
                	<?php  
	      	while($q->have_posts()) : $q->the_post();      
	        $cates = get_the_terms(get_the_ID(),'type1');
	        $cate_name = '';
	        $cate_slug = ''; 
	        foreach((array)$cates as $cate){
	                $cate_name .= $cate->name.' ' ;
	                $cate_slug .= $cate->slug .' ';  }

	        $portfolio_social_icon = get_post_meta(get_the_ID(),'_cmb_portfolio_social_icon', true);
			$portfolio_social_link = get_post_meta(get_the_ID(),'_cmb_portfolio_social_link', true); 
        ?> 
                    <li class="<?php echo esc_attr($cate_slug); ?>">
                        <div class="list_inner">
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri();?>/img/thumbs/1-1.jpg" alt="" />
                                <div class="main" data-img-url="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>"></div>
                            </div>
                            <div class="overlay"></div>
                            <img class="svg" src="<?php echo wp_get_attachment_url($portfolio_social_icon);?>" alt="" />
                            <div class="details">
                                <span><?php echo esc_attr($cate_name); ?></span>
                                <h3><?php the_title();?></h3>
                            </div>
                            <a class="aali_tm_full_link popup-vimeo" href="<?php echo esc_attr($portfolio_social_link); ?>"></a>
                        </div>
                    </li>
                    <?php endwhile; ?>
                </ul>
            </div>
        </div>
    </div>
</div>
	<?php
	}

}