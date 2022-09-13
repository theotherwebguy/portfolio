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
class BdevsAbout extends \Elementor\Widget_Base {

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
		return 'bdevs-about';
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
		return __( 'About', 'bdevs-elementor' );
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
		return [ 'about' ];
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
			'section_content_about',
			[
				'label' => esc_html__( 'About', 'bdevs-elementor' ),
			]	
		);
		$this->add_control(
			'background_image1',
			[
				'label'       => esc_html__( 'Background Image Left', 'bdevs-elementor' ),
				'type'        => Controls_Manager::MEDIA,
				'dynamic'     => [ 'active' => true ],
				'label_block' => true,
				'description' => esc_html__( 'Upload Background Image', 'bdevs-elementor' ),
			]
		);
		$this->add_control(
			'subheading',
			[
				'label'       => __( 'Subheading', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your sub heading', 'bdevs-elementor' ),
				'default'     => __( 'About Me', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);		

		$this->add_control(
			'heading1',
			[
				'label'       => __( 'Heading 1', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your heading 1', 'bdevs-elementor' ),
				'default'     => __( 'I am <span>Aali</span>', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);	
		$this->add_control(
			'heading2',
			[
				'label'       => __( 'Heading 2', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your heading 1', 'bdevs-elementor' ),
				'default'     => __( 'Web <span>Designer</span>', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);		
		$this->add_control(
			'desc',
			[
				'label'       => __( 'Description', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your Description', 'bdevs-elementor' ),
				'default'     => __( 'Based in London,UK', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);
		$this->add_control(
			'text',
			[
				'label'       => __( 'Description', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Enter your Description', 'bdevs-elementor' ),
				'default'     => __( '<p>Hi! My name is Aali Walker. I am UI/UX designer, and I am very passionate and dedicated to my work.</p>
                    <p>With 20 years experience as a professional graphic designer and web developer, I have acquired the skills and knowledge necessary to make your project a success.</p>', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);
		$this->add_control(
			'icon_button',
			[
				'label'       => esc_html__( 'Icon button', 'bdevs-elementor' ),
				'type'        => Controls_Manager::MEDIA,
				'dynamic'     => [ 'active' => true ],
				'label_block' => true,
				'description' => esc_html__( 'Upload Icon Button', 'bdevs-elementor' ),
			]
		);
		$this->add_control(
			'button',
			[
				'label'       => __( 'Button', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your button', 'bdevs-elementor' ),
				'default'     => __( 'Download CV ', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);
		$this->add_control(
			'link_button',
			[
				'label'       => __( 'Link Button', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your Link Button', 'bdevs-elementor' ),
				'default'     => __( 'http://localhost/aali/wp-content/uploads/2022/04/1-2.jpg', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);
		$this->add_control(
			'background_image2',
			[
				'label'       => esc_html__( 'Background Image Right', 'bdevs-elementor' ),
				'type'        => Controls_Manager::MEDIA,
				'dynamic'     => [ 'active' => true ],
				'label_block' => true,
				'description' => esc_html__( 'Upload Background Image Right', 'bdevs-elementor' ),
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
			'show_background_image1',
			[
				'label'   => esc_html__( 'Show Background Image Left', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);
		$this->add_control(
			'show_heading1',
			[
				'label'   => esc_html__( 'Show Heading 1', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);	
		$this->add_control(
			'show_heading2',
			[
				'label'   => esc_html__( 'Show Heading 2', 'bdevs-elementor' ),
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
			'show_desc',
			[
				'label'   => esc_html__( 'Show Text 1', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);


		$this->add_control(
			'show_text',
			[
				'label'   => esc_html__( 'Show Text', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);
		$this->add_control(
			'show_button',
			[
				'label'   => esc_html__( 'Show Button', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);
		$this->add_control(
			'show_background_image2',
			[
				'label'   => esc_html__( 'Show Background Image Right', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);

		$this->end_controls_section();

	}

	public function render() {
		$settings  = $this->get_settings_for_display();
		extract($settings);
		$bg_src = wp_get_attachment_image_src( $settings['background_bg']['id'], 'full' );
	$bg_url = $bg_src ? $bg_src[0] : '';
	?> 
<div class="aali_tm_section" id="about">
    <div class="aali_tm_about">
        <div class="about_inner">
        	<?php if (( '' !== $settings['background_image1'] ) && ( $settings['show_background_image1'] )) : ?>
            <div class="left">
                <div class="image">
                    <img src="<?php echo get_template_directory_uri();?>/img/thumbs/45-49.jpg" alt="" />
                    <div class="main" data-img-url="<?php print esc_url($settings['background_image1']['url']); ?>"></div>
                    <span class="square moving_effect" data-direction="y" data-reverse="yes"></span>
                    <span class="border"><span class="in moving_effect" data-direction="x" data-reverse="yes"></span></span>
                </div>
            </div>
            <?php endif; ?>
            <div class="center">
                <div class="title wow fadeInUp" data-wow-duration="1s">
                	<?php if (( '' !== $settings['subheading'] ) && ( $settings['show_subheading'] )) : ?>
                    <span class="small"><?php echo wp_kses_post($settings['subheading']); ?></span>
                    <?php endif; ?>
                    <?php if (( '' !== $settings['heading1'] ) && ( $settings['show_heading1'] )) : ?>
                    <h3><?php echo wp_kses_post($settings['heading1']); ?></span></h3>
                    <?php endif; ?>
                    <?php if (( '' !== $settings['heading2'] ) && ( $settings['show_heading2'] )) : ?>
                    <h3><?php echo wp_kses_post($settings['heading2']); ?></span></h3>
                    <?php endif; ?>
                    <?php if (( '' !== $settings['desc'] ) && ( $settings['show_desc'] )) : ?>
                    <span class="subtitle"><?php echo wp_kses_post($settings['desc']); ?></span>
                    <?php endif; ?>
                </div>
                <?php if (( '' !== $settings['text'] ) && ( $settings['show_text'] )) : ?>
                <div class="text wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                	
                    <?php echo wp_kses_post($settings['text']); ?>
                    
                </div>
                <?php endif; ?>

                <?php if (( '' !== $settings['button'] ) && ( $settings['show_button'] )) : ?>
                <div class="aali_tm_button wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.2s">
                    <a href="<?php echo wp_kses_post($settings['link_button']); ?>" download><span><?php echo wp_kses_post($settings['button']); ?> <img class="svg" src="<?php print esc_url($settings['icon_button']['url']); ?>" alt="" /></span></a>
                </div>
                <?php endif; ?>
            </div>
            <?php if (( '' !== $settings['background_image2'] ) && ( $settings['show_background_image2'] )) : ?>
            <div class="right">
                <div class="image">
                    <img src="<?php echo get_template_directory_uri();?>/img/thumbs/41-61.jpg" alt="" />
                    <div class="main" data-img-url="<?php print esc_url($settings['background_image2']['url']); ?>"></div>
                    <div class="square moving_effect" data-direction="x" data-reverse="no"></div>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>


	<?php
	}
}