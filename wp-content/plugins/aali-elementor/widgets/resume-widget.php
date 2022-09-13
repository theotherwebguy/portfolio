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
class BdevsResume extends \Elementor\Widget_Base {

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
		return 'bdevs-resume';
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
		return __( 'Resume', 'bdevs-elementor' );
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
		return [ 'Resume', 'carousel' ];
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
			'section_content_Resume',
			[
				'label' => esc_html__( 'Resume', 'bdevs-elementor' ),
			]	
		);
		$this->add_control(
			'subheading',
			[
				'label'       => __( 'Subheading', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your sub heading', 'bdevs-elementor' ),
				'default'     => __( 'Know More', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);		

		$this->add_control(
			'heading',
			[
				'label'       => __( 'Heading', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your heading', 'bdevs-elementor' ),
				'default'     => __( 'My Resume', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);		
		$this->add_control(
			'desc',
			[
				'label'       => __( 'Description', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Enter your Description', 'bdevs-elementor' ),
				'default'     => __( 'I enjoy every step of the design process, from discussion and collaboration to concept and execution', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);
		$this->add_control(
			'link_vimeo',
			[
				'label'       => __( 'Link Vimeo', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your Link Vimeo', 'bdevs-elementor' ),
				'default'     => __( 'https://vimeo.com/337293658', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);

		$this->end_controls_section();
		$this->start_controls_section(
			'section_content_Education',
			[
				'label' => esc_html__( 'Education', 'bdevs-elementor' ),
			]	
		);
		$this->add_control(
			'education',
			[
				'label'       => __( 'Education', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your Education', 'bdevs-elementor' ),
				'default'     => __( 'Education', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);		

		
		$this->add_control(
			'tabs',
			[
				'label' => esc_html__( 'Education Items', 'bdevs-elementor' ),
				'type' => Controls_Manager::REPEATER,
				'fields' => [
					[
						'name'    => 'icon',
						'label'   => esc_html__( 'Image', 'bdevs-elementor' ),
						'type'    => Controls_Manager::MEDIA,
						'dynamic' => [ 'active' => true ],
					],
					[
						'name'        => 'title',
						'label'       => esc_html__( ' Title', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXT,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( 'Cognitive Sciences' , 'bdevs-elementor' ),
						'label_block' => true,
					],				
					[
						'name'        => 'subtitle',
						'label'       => esc_html__( 'Subtitle ', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXT,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( 'University of Maine' , 'bdevs-elementor' ),
						'label_block' => true,
					],
					[
						'name'        => 'time',
						'label'       => esc_html__( 'Time ', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXT,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( '2018 - 2020' , 'bdevs-elementor' ),
						'label_block' => true,
					],
					[
						'name'        => 'text',
						'label'       => esc_html__( 'Text ', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXTAREA,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( 'Aali is a leading web design agency with an award-winning design' , 'bdevs-elementor' ),
						'label_block' => true,
					],
				],
			]
		);

		$this->end_controls_section();
		$this->start_controls_section(
			'section_content_Experience',
			[
				'label' => esc_html__( 'Experience', 'bdevs-elementor' ),
			]	
		);
		$this->add_control(
			'experience',
			[
				'label'       => __( 'Experience', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your Experience', 'bdevs-elementor' ),
				'default'     => __( 'Experience', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);		

		
		$this->add_control(
			'tabs2',
			[
				'label' => esc_html__( 'Experience Items', 'bdevs-elementor' ),
				'type' => Controls_Manager::REPEATER,
				'fields' => [
					[
						'name'    => 'icon',
						'label'   => esc_html__( 'Image', 'bdevs-elementor' ),
						'type'    => Controls_Manager::MEDIA,
						'dynamic' => [ 'active' => true ],
					],
					[
						'name'        => 'title',
						'label'       => esc_html__( ' Title', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXT,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( 'Product Designer' , 'bdevs-elementor' ),
						'label_block' => true,
					],				
					[
						'name'        => 'subtitle',
						'label'       => esc_html__( 'Subtitle ', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXT,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( 'Easy Computers' , 'bdevs-elementor' ),
						'label_block' => true,
					],
					[
						'name'        => 'time',
						'label'       => esc_html__( 'Time ', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXT,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( '2018 - running' , 'bdevs-elementor' ),
						'label_block' => true,
					],
					[
						'name'        => 'text',
						'label'       => esc_html__( 'Text ', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXTAREA,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( 'Aali is a leading web design agency with an award-winning design' , 'bdevs-elementor' ),
						'label_block' => true,
					],
				],
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
				'label'   => esc_html__( 'Show subheading', 'bdevs-elementor' ),
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
			'show_education',
			[
				'label'   => esc_html__( 'Show Title Education', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);
		$this->add_control(
			'show_experience',
			[
				'label'   => esc_html__( 'Show Title experience', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);
		$this->add_control(
			'show_title',
			[
				'label'   => esc_html__( 'Show Title ', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);
		$this->add_control(
			'show_subtitle',
			[
				'label'   => esc_html__( 'Show Subtitle ', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);
		
		$this->add_control(
			'show_time',
			[
				'label'   => esc_html__( 'Show Time ', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);
		$this->add_control(
			'show_text',
			[
				'label'   => esc_html__( 'Show Text ', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);
		$this->add_control(
			'show_link_vimeo',
			[
				'label'   => esc_html__( 'Show Video vimeo ', 'bdevs-elementor' ),
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
		<div class="aali_tm_section">
		<div class="aali_tm_resume">
			<div class="content">
				<div class="container">
					<div class="resume_in">
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
						<div class="content_inner">
							<ul>
								<li class="wow fadeInLeft" data-wow-duration="1s">
									<?php if (( '' !== $settings['education'] ) && ( $settings['show_education'] )) : ?>
									<h3 class="main_title"><span><?php echo wp_kses_post($settings['education']); ?></span></h3>
									<?php endif; ?>
									<ul class="list">
										<?php
								        	$idd = 0;
								        	foreach ( $settings['tabs'] as $item ) :
								        	$idd++;
							        	?>
										<li>
											<div class="list_inner">
												<span class="icon"><img class="svg" src="<?php print esc_url($item['icon']['url']); ?>" alt="" /></span>
												<div class="info">
													<div class="left">
														<?php if (( '' !== $item['title'] ) && ( $settings['show_title'] )) : ?>	
														<h3><?php echo wp_kses_post($item['title']); ?></h3>
														<?php endif; ?>
														<?php if (( '' !== $item['subtitle'] ) && ( $settings['show_subtitle'] )) : ?>	
														<span><?php echo wp_kses_post($item['subtitle']); ?></span>
														<?php endif; ?>
													</div>
													<?php if (( '' !== $item['time'] ) && ( $settings['show_time'] )) : ?>	
													<div class="right">
														<span><?php echo wp_kses_post($item['time']); ?></span>
														
													</div>
													<?php endif; ?>
												</div>
												<?php if (( '' !== $item['text'] ) && ( $settings['show_text'] )) : ?>	
												<div class="text">
													<p><?php echo wp_kses_post($item['text']); ?></p>
													
												</div>
												<?php endif; ?>
											</div>
										</li>
										<?php endforeach; ?>
									</ul>
								</li>
								<li class="wow fadeInRight" data-wow-duration="1s">
									<?php if (( '' !== $settings['experience'] ) && ( $settings['show_experience'] )) : ?>
									<h3 class="main_title"><span><?php echo wp_kses_post($settings['experience']); ?></span></h3>
									<?php endif; ?>
									<ul class="list">
										<?php
								        	$idd = 0;
								        	foreach ( $settings['tabs2'] as $item ) :
								        	$idd++;
							        	?>

										<li>
											<div class="list_inner">
												<span class="icon"><img class="svg" src="<?php print esc_url($item['icon']['url']); ?>" alt="" /></span>
												<div class="info">
													<div class="left">
														<?php if (( '' !== $item['title'] ) && ( $settings['show_title'] )) : ?>	
														<h3><?php echo wp_kses_post($item['title']); ?></h3>
														<?php endif; ?>
														<?php if (( '' !== $item['subtitle'] ) && ( $settings['show_subtitle'] )) : ?>	
														<span><?php echo wp_kses_post($item['subtitle']); ?></span>
														<?php endif; ?>
													</div>
													<?php if (( '' !== $item['time'] ) && ( $settings['show_time'] )) : ?>	
													<div class="right">
														<span><?php echo wp_kses_post($item['time']); ?></span>
														
													</div>
													<?php endif; ?>
												</div>
												<?php if (( '' !== $item['text'] ) && ( $settings['show_text'] )) : ?>	
												<div class="text">
													<p><?php echo wp_kses_post($item['text']); ?></p>
													
												</div>
												<?php endif; ?>
											</div>
										</li>
										<?php endforeach; ?>

									</ul>
								</li>
							</ul>
						</div>
					
					</div>
				</div>
			</div>
			<?php if (( '' !== $settings['link_vimeo'] ) && ( $settings['show_link_vimeo'] )) : ?>
			<div class="media" data-background-style="video"> <!-- Background Styles: "video" and "image" // Also you can use any youtube, vimeo, and local videos -->
				<div class="video jarallax" data-speed="0" data-jarallax-video="<?php echo wp_kses_post($settings['link_vimeo']); ?>"></div>
				<div class="image jarallax" data-speed="0" data-img-url="img/about/2.jpg"></div>
				<span class="square moving_effect" data-direction="y" data-reverse="yes"></span>
			</div>
			<?php endif; ?>
		</div>
	</div>
	<?php
	}

}
