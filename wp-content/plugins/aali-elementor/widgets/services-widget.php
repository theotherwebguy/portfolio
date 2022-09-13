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
class BdevsServices extends \Elementor\Widget_Base {

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
		return 'bdevs-services';
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
		return __( 'Services', 'bdevs-elementor' );
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
		return [ 'services', 'carousel' ];
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
			'section_content_services',
			[
				'label' => esc_html__( 'Services', 'bdevs-elementor' ),
			]	
		);
		
		$this->add_control(
			'subheading',
			[
				'label'       => __( 'Subheading', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your sub heading', 'bdevs-elementor' ),
				'default'     => __( 'It is sub heading', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);		

		$this->add_control(
			'heading',
			[
				'label'       => __( 'Heading', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your heading', 'bdevs-elementor' ),
				'default'     => __( 'It is Heading', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);	

		$this->add_control(
			'desc',
			[
				'label'       => __( 'Description', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Enter your Description', 'bdevs-elementor' ),
				'default'     => __( 'We have a wide variety of services so that our clients have good options.', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);	
		$this->add_control(
			'tabs',
			[
				'label' => esc_html__( 'Services Items', 'bdevs-elementor' ),
				'type' => Controls_Manager::REPEATER,
				'default' => [
					[
						'tab_title'   => esc_html__( 'Services #1', 'bdevs-elementor' ),
						'tab_content' => esc_html__( 'I am item content. Click edit button to change this text.', 'bdevs-elementor' ),
					]
				],
				'fields' => [
					[
						'name'    => 'icon',
						'label'   => esc_html__( 'Image', 'bdevs-elementor' ),
						'type'    => Controls_Manager::MEDIA,
						'dynamic' => [ 'active' => true ],
					],
					[
						'name'    => 'icon2',
						'label'   => esc_html__( 'Image 2', 'bdevs-elementor' ),
						'type'    => Controls_Manager::MEDIA,
						'dynamic' => [ 'active' => true ],
					],
					[
						'name'        => 'title',
						'label'       => esc_html__( ' Title', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXT,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( ' Title Items' , 'bdevs-elementor' ),
						'label_block' => true,
					],		
					[
						'name'        => 'pricing',
						'label'       => esc_html__( 'Pricing Title', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXT,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( ' #' , 'bdevs-elementor' ),
						'label_block' => true,
					],				
					[
						'name'        => 'subtitle',
						'label'       => esc_html__( 'Subtitle Items', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXTAREA,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( 'Subtitle Items' , 'bdevs-elementor' ),
						'label_block' => true,
					],
					[
						'name'    => 'background',
						'label'   => esc_html__( 'Background Popup', 'bdevs-elementor' ),
						'type'    => Controls_Manager::MEDIA,
						'dynamic' => [ 'active' => true ],
					],
					[
						'name'        => 'text',
						'label'       => esc_html__( 'Text Popup Items', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXTAREA,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( 'Text' , 'bdevs-elementor' ),
						'label_block' => true,
					],
				],
			]
		);
		$this->add_control(
			'title_button',
			[
				'label'       => __( 'Title Button', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your Title Button', 'bdevs-elementor' ),
				'default'     => __( 'Do You Want Something Different?', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);
		$this->add_control(
			'link_button',
			[
				'label'       => __( 'Link Button', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your Link Button', 'bdevs-elementor' ),
				'default'     => __( '#contact', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);	
		$this->add_control(
			'button',
			[
				'label'       => __( ' Button', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your Button', 'bdevs-elementor' ),
				'default'     => __( 'Knock Me', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);	
		$this->add_control(
			'icon_button',
			[
				'label'       => esc_html__( 'Icon Button', 'bdevs-elementor' ),
				'type'        => Controls_Manager::MEDIA,
				'dynamic'     => [ 'active' => true ],
				'label_block' => true,
				'description' => esc_html__( 'Upload Icon Button', 'bdevs-elementor' ),
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
				'label'   => esc_html__( 'Show Description', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);
		$this->add_control(
			'show_title',
			[
				'label'   => esc_html__( 'Show Title', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);
		$this->add_control(
			'show_pricing',
			[
				'label'   => esc_html__( 'Show pricing', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);
		$this->add_control(
			'show_subtitle',
			[
				'label'   => esc_html__( 'Show Subtitle', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);
		$this->add_control(
			'show_title_button',
			[
				'label'   => esc_html__( 'Show Title Button', 'bdevs-elementor' ),
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
		

		$this->end_controls_section();

	}

	public function render() {

		$settings  = $this->get_settings_for_display();
		extract($settings);
		$bg_src = wp_get_attachment_image_src( $settings['background_bg']['id'], 'full' );
	$bg_url = $bg_src ? $bg_src[0] : '';
		?> 
<div class="aali_tm_section" id="service">
    <div class="aali_tm_service">
        <div class="container">
            <div class="service_list">
                <ul>
                    <li class="simple wow fadeInLeft" data-wow-duration="1s">
                        <div class="list_inner">
                            <div class="aali_tm_main_title" data-text-align="left" data-color="dark">
                            	<?php if (( '' !== $settings['subheading'] ) && ( $settings['show_subheading'] )) : ?>	
                                <span><?php echo wp_kses_post($settings['subheading']); ?></span>
                                <?php endif; ?>
                                <?php if (( '' !== $settings['heading'] ) && ( $settings['show_heading'] )) : ?>	
                                <h3><?php echo wp_kses_post($settings['heading']); ?></h3>
                                <?php endif; ?>
                                <?php if (( '' !== $settings['desc'] ) && ( $settings['show_desc'] )) : ?>	
                                <p><?php echo wp_kses_post($settings['desc']); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </li>
                    <?php
			        	$idd = 0;
			        	foreach ( $settings['tabs'] as $item ) :
			        	$idd++;
		        	?>
		        	<?php if($idd % 2 == 1) { ?>
                    <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="list_inner tilt-effect">
                            <span class="icon">
                                <img class="svg" src="<?php print esc_url($item['icon']['url']); ?>" alt="" />
                                <img class="back" src="<?php print esc_url($item['icon2']['url']); ?>" alt="" />
                            </span>
                            <div class="title">
                            	<?php if (( '' !== $item['title'] ) && ( $settings['show_title'] )) : ?>	
                                <h3><?php echo wp_kses_post($item['title']); ?></h3>
                                <?php endif; ?>
                                <?php if (( '' !== $item['pricing'] ) && ( $settings['show_pricing'] )) : ?>	
                                <span class="price"><?php echo wp_kses_post($item['pricing']); ?></span>
                                <?php endif; ?>
                            </div>
                            <?php if (( '' !== $item['subtitle'] ) && ( $settings['show_subtitle'] )) : ?>
                            <div class="text">
                                <p><?php echo wp_kses_post($item['subtitle']); ?></p>
                            </div>
                            <?php endif; ?>
                            <a class="aali_tm_full_link" href="#"></a>
                            <img class="popup_service_image" src="<?php print esc_url($item['background']['url']); ?>" alt="" />
                            <div class="service_hidden_details">
                                <div class="service_popup_informations">
                                    <div class="descriptions">
                                        <?php echo wp_kses_post($item['text']); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                	<?php } else { ?>
                    <li class="wow fadeInLeft" data-wow-duration="1s">
                        <div class="list_inner tilt-effect">
                            <span class="icon">
                                <img class="svg" src="<?php print esc_url($item['icon']['url']); ?>" alt="" />
                                <img class="back" src="<?php print esc_url($item['icon2']['url']); ?>" alt="" />
                            </span>
                            <div class="title">
                               	<?php if (( '' !== $item['title'] ) && ( $settings['show_title'] )) : ?>	
                                <h3><?php echo wp_kses_post($item['title']); ?></h3>
                                <?php endif; ?>
                                <?php if (( '' !== $item['pricing'] ) && ( $settings['show_pricing'] )) : ?>	
                                <span class="price"><?php echo wp_kses_post($item['pricing']); ?></span>
                                <?php endif; ?>
                            </div>
                            <?php if (( '' !== $item['subtitle'] ) && ( $settings['show_subtitle'] )) : ?>
                            <div class="text">
                                <p><?php echo wp_kses_post($item['subtitle']); ?></p>
                            </div>
                            <?php endif; ?>
                            <a class="aali_tm_full_link" href="#"></a>
                            <img class="popup_service_image" src="<?php print esc_url($item['background']['url']); ?>" alt="" />
                            <div class="service_hidden_details">
                                <div class="service_popup_informations">
                                    <div class="descriptions">
                                        <?php echo wp_kses_post($item['text']); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <?php } ?>
                    <?php endforeach; ?>
                    <li class="simple text wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="list_inner">
                            <div class="wrapper">
                            	<?php if (( '' !== $settings['title_button'] ) && ( $settings['show_title_button'] )) : ?>
                                <div class="inner_text">
                                    <h3><?php echo wp_kses_post($settings['title_button']); ?></h3>
                                </div>
                                <?php endif; ?>
                                <?php if (( '' !== $settings['button'] ) && ( $settings['show_button'] )) : ?>
                                <div class="aali_tm_button border">
                                    <a class="anchor" href="<?php echo wp_kses_post($settings['link_button']); ?>"><span><?php echo wp_kses_post($settings['button']); ?> <img class="svg" src="<?php print esc_url($settings['icon_button']['url']); ?>" alt="" /></span></a>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
        <span class="square_left moving_effect" data-direction="y" data-reverse="yes"></span>
        <span class="square_right moving_effect" data-direction="y" data-reverse="yes"></span>
    </div>
</div>
	<?php
	}

}
