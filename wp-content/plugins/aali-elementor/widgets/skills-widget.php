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
class BdevsSkills extends \Elementor\Widget_Base {

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
		return 'bdevs-skills';
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
		return __( 'Skills', 'bdevs-elementor' );
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
		return [ 'Skills' ];
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
			'section_content_Skills',
			[
				'label' => esc_html__( 'Skills', 'bdevs-elementor' ),
			]	
		);
		$this->add_control(
			'subheading',
			[
				'label'       => __( 'Subheading', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your sub heading', 'bdevs-elementor' ),
				'default'     => __( 'My Skills', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);		

		$this->add_control(
			'heading',
			[
				'label'       => __( 'Heading', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your heading', 'bdevs-elementor' ),
				'default'     => __( 'You Can Imagine <br /> I Can Do', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);		

		
		$this->add_control(
			'desc',
			[
				'label'       => __( 'Description', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Description', 'bdevs-elementor' ),
				'default'     => __( 'I am working on a professional, visually sophisticated and technologically proficient, responsive and multi-functional creative personal resume portfolio template Aali', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);
		$this->add_control(
			'tabs',
			[
				'label' => esc_html__( 'Skills Items', 'bdevs-elementor' ),
				'type' => Controls_Manager::REPEATER,
				'default' => [ ],
				'fields' => [
					[
						'name'        => 'title',
						'label'       => esc_html__( ' Title', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXT,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( 'Website Design' , 'bdevs-elementor' ),
						'label_block' => true,
					],	
					[
						'name'        => 'number',
						'label'       => esc_html__( 'Number', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXT,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( '86%' , 'bdevs-elementor' ),
						'label_block' => true,
					],
					[
						'name'        => 'unit',
						'label'       => esc_html__( 'Unit', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXT,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( '%' , 'bdevs-elementor' ),
						'label_block' => true,
					],
					
					
					
				],
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
				'label'   => esc_html__( 'Show Description', 'bdevs-elementor' ),
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
<div class="aali_tm_section">
    <div class="aali_tm_skills">
        <div class="container">
            <div class="skills_inner">
                <div class="left wow fadeInLeft" data-wow-duration="1s">
                    <div class="aali_tm_main_title" data-text-align="left" data-color="light">
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
                <div class="right wow fadeInRight" data-wow-duration="1s">
                    <div class="aali_progress">
                    	<?php
				        	$idd = 0;
				        	foreach ( $settings['tabs'] as $item ) :
				        	$idd++;
			        	?>
                        <div class="progress_inner" data-value="<?php echo wp_kses_post($item['number']); ?>">
                            <span><span class="label"><?php echo wp_kses_post($item['title']); ?></span><span class="number"><?php echo wp_kses_post($item['number']); ?><?php echo wp_kses_post($item['unit']); ?></span></span>
                            <div class="background"><div class="bar"><div class="bar_in"></div></div></div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <span class="border moving_effect" data-direction="x" data-reverse="yes"></span>
    </div>
</div>
	<?php
	}
}