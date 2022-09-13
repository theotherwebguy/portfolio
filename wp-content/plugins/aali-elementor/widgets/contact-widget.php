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
class BdevsContactUs extends \Elementor\Widget_Base {

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
		return 'bdevs-contact';
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
		return __( 'Contact Us', 'bdevs-elementor' );
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
		return [ 'contact' ];
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
			'section_content_contact',
			[
				'label' => esc_html__( 'Contact Us', 'bdevs-elementor' ),
			]	
		);
		
		$this->add_control(
			'subheading',
			[
				'label'       => __( 'Subheading', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your sub subheading', 'bdevs-elementor' ),
				'default'     => __( 'Get in Touch', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);		
		$this->add_control(
			'heading',
			[
				'label'       => __( 'Heading', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your heading', 'bdevs-elementor' ),
				'default'     => __( 'Connect with Me with Confidence', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);	
		$this->add_control(
			'desc',
			[
				'label'       => __( 'Description', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Enter your sub subheading', 'bdevs-elementor' ),
				'default'     => __( 'Please fill out the form on this section to contact with me. Or call between 9:00 a.m. and 8:00 p.m. ET, Monday through Friday', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);	
		$this->add_control(
			'icon_phone',
			[
				'label'       => esc_html__( ' Image Icon Phone', 'bdevs-elementor' ),
				'type'        => Controls_Manager::MEDIA,
				'dynamic'     => [ 'active' => true ],
				'label_block' => true,
				'description' => esc_html__( 'Upload Background Image', 'bdevs-elementor' ),
			]
		);
		$this->add_control(
			'title_phone',
			[
				'label'       => __( 'Title Phone', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your Title Phone', 'bdevs-elementor' ),
				'default'     => __( 'Call me', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);		
		$this->add_control(
			'phone',
			[
				'label'       => __( ' Phone', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your Phone', 'bdevs-elementor' ),
				'default'     => __( '+1234 5678 9000', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);		
		$this->add_control(
			'icon_email',
			[
				'label'       => esc_html__( ' Image Icon email', 'bdevs-elementor' ),
				'type'        => Controls_Manager::MEDIA,
				'dynamic'     => [ 'active' => true ],
				'label_block' => true,
				'description' => esc_html__( 'Upload Image Icon email ', 'bdevs-elementor' ),
			]
		);
		$this->add_control(
			'title_email',
			[
				'label'       => __( 'Title Email', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your Title Email', 'bdevs-elementor' ),
				'default'     => __( 'Email', 'bdevs-elementor' ),
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
		$this->add_control(
			'contact_form',
			[
				'label'       => __( 'Contact Form', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Contact Form', 'bdevs-elementor' ),
				'default'     => __( '[contact-form-7 id="55" title="Get in Touch"]', 'bdevs-elementor' ),
				'label_block' => true,
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

		$this->add_control(
			'show_desc',
			[
				'label'   => esc_html__( 'Show description', 'bdevs-elementor' ),
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
<div class="aali_tm_section" id="contact">
    <div class="aali_tm_contact">
        <div class="container">
            <div class="aali_tm_main_title" data-text-align="center" data-color="dark">
                <?php if (( '' !== $settings['subheading'] ) && ( $settings['show_subheading'] )) : ?>
                <span><?php echo wp_kses_post($settings['subheading']); ?></span>
                <?php endif; ?>
                <?php if (( '' !== $settings['heading'] ) && ( $settings['show_heading'] )) : ?>
                <h3><?php echo wp_kses_post($settings['heading']); ?></span></h3>
                <?php endif; ?>
            </div>
            <div class="contact_inner">
                <div class="left wow fadeInLeft" data-wow-duration="1s">
                    <?php if (( '' !== $settings['desc'] ) && ( $settings['show_desc'] )) : ?>
                    <div class="text">
                        <p><?php echo wp_kses_post($settings['desc']); ?></p>
                    </div>
                    <?php endif; ?>
                    <ul>
                        <li>
                            <div class="list_inner">
                                <img class="svg" src="<?php print esc_url($settings['icon_phone']['url']); ?>" alt="" />
                                <span><?php echo wp_kses_post($settings['title_phone']); ?></span>
                                <h3><?php echo wp_kses_post($settings['phone']); ?></h3>
                            </div>
                        </li>
                        <li>
                            <div class="list_inner">
                                <img class="svg" src="<?php print esc_url($settings['icon_email']['url']); ?>" alt="" />
                                <span><?php echo wp_kses_post($settings['title_email']); ?></span>
                                <h3><a class="line_anim" href="mailto:<?php echo wp_kses_post($settings['email']); ?>"><?php echo wp_kses_post($settings['email']); ?></a></h3>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="right wow fadeInRight" data-wow-duration="1s">
                    <div class="fields">
                        <?php echo do_shortcode($settings['contact_form']);?>
                    </div>
                </div>
            </div>
        </div>
        <span class="square moving_effect" data-direction="y" data-reverse="yes"></span>
    </div>
</div>
    
	<?php
	}
}