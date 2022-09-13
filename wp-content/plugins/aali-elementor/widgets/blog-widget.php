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
class BdevsBlog extends \Elementor\Widget_Base {

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
		return 'bdevs-blog';
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
		return __( 'Blog', 'bdevs-elementor' );
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
		return 'eicon-post-content';
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
		return [ 'blog-post' ];
	}

	public function get_script_depends() {
		return [ 'bdevs-elementor'];
	}

	protected function _register_controls() {

		$this->start_controls_section(
			'section_content_service_post',
			[
				'label' => esc_html__( 'Blog Post', 'bdevs-elementor' ),
			]
		);
		
		$this->add_control(
			'heading',
			[
				'label'       => __( 'Heading', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Type section title here', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'subheading',
			[
				'label'       => __( 'Subheading', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Enter your heading', 'bdevs-elementor' ),
			]
		);
		$this->add_control(
			'desc',
			[
				'label'       => __( 'Description', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Enter your Description', 'bdevs-elementor' ),
			]
		);
		$this->add_control(
			'number',
			[
				'label'     => esc_html__( 'Post Count', 'bdevs-elementor' ),
				'type'      => Controls_Manager::TEXT,
				'default'   => '4',
			]
		);

		$this->add_control(
			'orderpost',
			[
				'label'     => esc_html__( 'Post Order', 'bdevs-elementor' ),
				'type'      => Controls_Manager::SELECT,
				'options'   => [
					'asc'  => esc_html__( 'ASC', 'bdevs-elementor' ),
					'desc' => esc_html__( 'DESC', 'bdevs-elementor' ),
				],
				'default'   => 'desc',
			]
		);

		$this->add_control(
			'orderby',
			[
				'label'     => esc_html__( 'Order By', 'bdevs-elementor' ),
				'type'      => Controls_Manager::SELECT,
				'options'   => [
					'date'  => esc_html__( 'Date', 'bdevs-elementor' ),
					'title' => esc_html__( 'Title', 'bdevs-elementor' ),
					'rand' => esc_html__( 'Random', 'bdevs-elementor' ),
				],
				'default'   => 'desc',

			]
		);
		$this->add_control(
			'read_more',
			[
				'label'       => __( 'Read More', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your Read More', 'bdevs-elementor' ),
				'default'   => 'Read More',
			]

		);
		$this->add_control(
			'icon',
			[
				'label'       => __( 'Icon Image', 'bdevs-elementor' ),
				'type'    => Controls_Manager::MEDIA,
				'dynamic' => [ 'active' => true ],			]
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
			'show_read_more',
			[
				'label'   => esc_html__( 'Show Read More', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);		

		$this->end_controls_section();

	}

	public function render() {

		$settings  = $this->get_settings_for_display(); 
		extract($settings); ?>
<div class="aali_tm_section" id="blog">
	<div class="aali_tm_news">
		<div class="container">
			<div class="aali_tm_main_title" data-text-align="center" data-color="dark">
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
			<div class="news_list">
				<ul>
					<?php 
		                $q = new \WP_Query(array(
		                    'post_type'     => 'post',
		                    'posts_per_page'=> $number,
		                    'orderby'       => $orderby,
		                    'order'         => $orderpost,
		                ));
		            while($q->have_posts()): $q->the_post();  ?>
					<li class="wow fadeInLeft" data-wow-duration="1s">
						<div class="list_inner">
							
							<div class="image">
								<a href="<?php the_permalink(); ?>">
								<img src="<?php echo esc_url(home_url('/')); ?>wp-content/uploads/2022/04/42-29.jpg" alt="" />
								<div class="main" data-img-url="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>"></div>
								</a>
							</div>
							
							<div class="details">
								<span class="category"><a href="<?php the_permalink(); ?>">Web Design</a></span>
								<a href="<?php the_permalink(); ?>"><h3 class="title"><?php the_title();?></h3></a>
								<span class="date"><?php the_time(get_option( 'date_format' ));?></span>
							</div>
							<div class="button">
								<div class="aali_tm_learn_more">
									<a href="<?php the_permalink(); ?>"><?php echo wp_kses_post($settings['read_more']); ?></a>
								</div>
							</div>
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