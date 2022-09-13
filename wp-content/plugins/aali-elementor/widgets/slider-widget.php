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
class BdevsSlider extends \Elementor\Widget_Base {

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
		return 'bdevs-slider';
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
		return __( 'Slider', 'bdevs-elementor' );
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
		return 'eicon-slideshow';
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
		return [ 'slides', 'carousel' ];
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
			'section_content_sliders',
			[
				'label' => esc_html__( 'Sliders', 'bdevs-elementor' ),
			]
		);

		
		$this->add_control(
			'hello',
			[
				'label'       => __( 'Hello', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your hello', 'bdevs-elementor' ),
				'default'     => __( 'Hello, I am', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);		
		$this->add_control(
			'heading',
			[
				'label'       => __( 'Heading', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your heading', 'bdevs-elementor' ),
				'default'     => __( 'Aali', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);	
		$this->add_control(
			'subheading',
			[
				'label'       => __( 'Subheading', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your subheading', 'bdevs-elementor' ),
				'default'     => __( 'Creative', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);	
		$this->add_control(
			'subheading_dynamic',
			[
				'label'       => __( 'Subheading Dynamic', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your subheading dynamic', 'bdevs-elementor' ),
				'default'     => __( 'Designer', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);
		$this->add_control(
			'subheading_dynamic2',
			[
				'label'       => __( 'Subheading Dynamic 2', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your subheading dynamic 2', 'bdevs-elementor' ),
				'default'     => __( 'Developer', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);	
		$this->add_control(
			'subheading_dynamic3',
			[
				'label'       => __( 'Subheading Dynamic 3', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your subheading dynamic 3', 'bdevs-elementor' ),
				'default'     => __( 'Freelancer', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);	
		$this->add_control(
			'button1',
			[
				'label'       => __( 'Button 1', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your Button 1', 'bdevs-elementor' ),
				'default'     => __( 'Say Hello', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);		
		$this->add_control(
			'link_button1',
			[
				'label'       => __( 'Link Button 1', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your Link Button 1', 'bdevs-elementor' ),
				'default'     => __( '#contact', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);	
		$this->add_control(
			'image_button_icon',
			[
				'label'       => __( 'Image Icon Button 1', 'bdevs-elementor' ),
				'type'    => Controls_Manager::MEDIA,
				'dynamic' => [ 'active' => true ],			]
			);	
		
		$this->add_control(
			'button2',
			[
				'label'       => __( 'Button 2', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your Button 2', 'bdevs-elementor' ),
				'default'     => __( 'About Me', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);		
		$this->add_control(
			'link_button2',
			[
				'label'       => __( 'Link Button 2', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your Link Button 2', 'bdevs-elementor' ),
				'default'     => __( '#about', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);	
		$this->add_control(
			'background_image',
			[
				'label'       => __( 'Background Image', 'bdevs-elementor' ),
				'type'    => Controls_Manager::MEDIA,
				'dynamic' => [ 'active' => true ],			]
			);
		$this->add_control(
			'stroke_text',
			[
				'label'       => __( 'Stroke Text', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your Stroke Text', 'bdevs-elementor' ),
				'default'     => __( 'Aali', 'bdevs-elementor' ),
				'label_block' => true,	                      
			]
		);
		$this->add_control(
			'link_facebook',
			[
				'label'       => __( 'Link Facebook', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your Link facebook', 'bdevs-elementor' ),
				'default'     => __( 'https://www.facebook.com/', 'bdevs-elementor' ),
				'label_block' => true,	                      
			]
		);
		$this->add_control(
			'link_twitter',
			[
				'label'       => __( 'Link Twitter', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your Link Twitter', 'bdevs-elementor' ),
				'default'     => __( 'https://twitter.com/', 'bdevs-elementor' ),
				'label_block' => true,	                      
			]
		);
		$this->add_control(
			'link_instagram',
			[
				'label'       => __( 'Link Instagram', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your Link Instagram', 'bdevs-elementor' ),
				'default'     => __( 'https://www.instagram.com/', 'bdevs-elementor' ),
				'label_block' => true,	                      
			]
		);
		$this->add_control(
			'email',
			[
				'label'       => __( 'Email', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your Email', 'bdevs-elementor' ),
				'default'     => __( 'hello@aali.com', 'bdevs-elementor' ),
				'label_block' => true,	                      
			]
		);
		$this->end_controls_section();
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
			'show_hello',
			[
				'label'   => esc_html__( 'Show Hello', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
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
		$this->add_control(
			'show_button1',
			[
				'label'   => esc_html__( 'Show Button 1', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);
		
		$this->add_control(
			'show_button2',
			[
				'label'   => esc_html__( 'Show Button 2', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);
		$this->add_control(
			'show_stroke_text',
			[
				'label'   => esc_html__( 'Show Stroke Text', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);
		$this->add_control(
			'show_link_facebook',
			[
				'label'   => esc_html__( 'Show Facebook', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);
		$this->add_control(
			'show_link_twitter',
			[
				'label'   => esc_html__( 'Show Twitter', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);
		$this->add_control(
			'show_link_instagram',
			[
				'label'   => esc_html__( 'Show Instagram', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);
		$this->add_control(
			'show_email',
			[
				'label'   => esc_html__( 'Show Email', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);
		$this->end_controls_section();

	}

	public function render() {

		$settings  = $this->get_settings_for_display();
		extract($settings);
		?>
<div class="aali_tm_section" id="home">
    <div class="aali_tm_hero">
        <div class="container">
            <div class="hero_inner">
                <div class="content">
                	<?php if (( '' !== $settings['hello'] ) && ( $settings['show_hello'] )) : ?>
                    <span class="hello"><?php echo wp_kses_post($settings['hello']); ?></span>
                    <?php endif; ?>
                    <?php if (( '' !== $settings['heading'] ) && ( $settings['show_heading'] )) : ?>
                    <h3 class="name"><?php echo wp_kses_post($settings['heading']); ?></h3>
                    <?php endif; ?>
                    <div class="job">
                        <span class="cd-headline rotate-1"> <!-- ANIMATE TEXT VALUES: zoom, rotate-1, letters type, letters rotate-2, loading-bar, slide, clip, letters rotate-3, letters scale, push,  -->
                        	<?php if (( '' !== $settings['subheading'] ) && ( $settings['show_subheading'] )) : ?>
                            <span class="blc"><?php echo wp_kses_post($settings['subheading']); ?></span>
                            <?php endif; ?>
                            <span class="cd-words-wrapper">
                              <b class="is-visible"><?php echo wp_kses_post($settings['subheading_dynamic']); ?></b>
                              <b><?php echo wp_kses_post($settings['subheading_dynamic2']); ?></b>
                              <b><?php echo wp_kses_post($settings['subheading_dynamic3']); ?></b>
                            </span>
                        </span>
                    </div>
                    <div class="hero_buttons">
                    	<?php if (( '' !== $settings['button1'] ) && ( $settings['show_button1'] )) : ?>
                        <div class="aali_tm_button">
                            <a class="anchor" href="<?php echo wp_kses_post($settings['link_button1']); ?>"><span><?php echo wp_kses_post($settings['button1']); ?> <img class="svg" src="<?php print esc_url($settings['image_button_icon']['url']); ?>" alt="" /></span></a>
                        </div>
                        <?php endif; ?>
                        <?php if (( '' !== $settings['button2'] ) && ( $settings['show_button2'] )) : ?>
                        <div class="simple_button">
                            <a class="anchor" href="<?php echo wp_kses_post($settings['link_button2']); ?>"><?php echo wp_kses_post($settings['button2']); ?></a>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="aali_tm_down">
                        <div class="down-icon white top_120">
                            <a class="anchor" href="#about">
                                <svg width="26px" height="100%" viewBox="0 0 247 390" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:1.5;">
                                    <path id="wheel" d="M123.359,79.775l0,72.843" style="fill:none;stroke:#fff;stroke-width:20px;"/>
                                    <path id="mouse" d="M236.717,123.359c0,-62.565 -50.794,-113.359 -113.358,-113.359c-62.565,0 -113.359,50.794 -113.359,113.359l0,143.237c0,62.565 50.794,113.359 113.359,113.359c62.564,0 113.358,-50.794 113.358,-113.359l0,-143.237Z" style="fill:none;stroke:#fff;stroke-width:20px;"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="avatar parallax" data-relative-input="true">
                    <div class="main">
                        <img src="<?php print esc_url($settings['background_image']['url']); ?>" alt="" class="layer" data-depth="0.1" />
                    </div>
                    <span class="one"><span class="in layer" data-depth="0.14"></span></span>
                    <span class="two"><span class="in layer" data-depth="0.18"></span></span>
                    <span class="three"><span class="in layer" data-depth="0.22"></span></span>
                    <span class="four"><span class="in layer" data-depth="0.26"></span></span>
                    <span class="five"><span class="in layer" data-depth="0.3"></span></span>
                    <?php if (( '' !== $settings['stroke_text'] ) && ( $settings['show_stroke_text'] )) : ?>
                    <h3 class="stroke_text"><span class=""><?php echo wp_kses_post($settings['stroke_text']); ?></span></h3>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="socials">
            <ul>
            	<?php if (( '' !== $settings['link_facebook'] ) && ( $settings['show_link_facebook'] )) : ?>
                <li><a href="<?php echo wp_kses_post($settings['link_facebook']); ?>"><img class="svg" src="<?php echo get_template_directory_uri();?>/img/svg/social/facebook.svg" alt="" /></a></li>
                <?php endif; ?>
                <?php if (( '' !== $settings['link_twitter'] ) && ( $settings['show_link_twitter'] )) : ?>
                <li><a href="<?php echo wp_kses_post($settings['link_twitter']); ?>"><img class="svg" src="<?php echo get_template_directory_uri();?>/img/svg/social/twitter.svg" alt="" /></a></li>
                <?php endif; ?>
                <?php if (( '' !== $settings['link_instagram'] ) && ( $settings['show_link_instagram'] )) : ?>
                <li><a href="<?php echo wp_kses_post($settings['link_instagram']); ?>"><img class="svg" src="<?php echo get_template_directory_uri();?>/img/svg/social/instagram.svg" alt="" /></a></li>
                <?php endif; ?>
            </ul>
        </div>
        <?php if (( '' !== $settings['email'] ) && ( $settings['show_email'] )) : ?>
        <div class="hero_mail">
            <a class="line_anim" href="mailto:<?php echo wp_kses_post($settings['email']); ?>"><?php echo wp_kses_post($settings['email']); ?></a>
        </div>
        <?php endif; ?>
    </div>
</div>
	<?php
	}

}
