<?php 

/**
 * Adds Widget widget.
 */
class Widget_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'widget_widget', // Base ID
			esc_html__( 'Widget', 'widget_domain' ), // Name
			array( 'description' => esc_html__( 'Widget for sidebar blog', 'widget_domain' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		// if ( ! empty( $instance['title'] ) ) {
		// 	echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		// }

        $contact_link = site_url('/contact');
    
    

		echo
        '
      
        <div class="blog__sidebar">
            <div class="blog__sidebar__profile">
              <div class="blog__sidebar__profile__img">
                <img src="'.$instance['img'].'" alt="" />
              </div>
              <div class="blog__sidebar__profile__content">
                <p>
                    '.$instance['body'].'
                </p>
                <a class="btn btn--primary" href="'.$contact_link.'">connect with me</a>
              </div>
            </div>
         
          </div>
         
        ';
		echo $args['after_widget'];
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		$img = ! empty( $instance['img'] ) ? $instance['img'] : esc_html__( 'Image', 'widget_domain' );
		$body = ! empty( $instance['body'] ) ? $instance['body'] : esc_html__( 'Body', 'widget_domain' );
		
		?>
        <!-- IMAGE -->
		<p>
		    <label for="<?php echo esc_attr( $this->get_field_id( 'img' ) ); ?>">
            <?php esc_attr_e( 'Image:', 'widget_domain' ); ?></label> 
		    <input 
                class="widefat" 
                id="<?php echo esc_attr( $this->get_field_id( 'img' ) ); ?>" 
                name="<?php echo esc_attr( $this->get_field_name( 'img' ) ); ?>" 
                type="text" 
                value="<?php echo esc_attr( $img ); ?>">
		</p>
           <!-- BODY -->
		<p>
		    <label for="<?php echo esc_attr( $this->get_field_id( 'body' ) ); ?>">
            <?php esc_attr_e( 'Body:', 'widget_domain' ); ?></label> 
		    <textarea rows="10"
                class="widefat" 
                id="<?php echo esc_attr( $this->get_field_id( 'body' ) ); ?>" 
                name="<?php echo esc_attr( $this->get_field_name( 'body' ) ); ?>" 
                value=""><?php echo esc_attr( $body ); ?></textarea>
		</p>
		<?php 
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['img'] = ( ! empty( $new_instance['img'] ) ) ? sanitize_text_field( $new_instance['img'] ) : '';
        $instance['body'] = ( ! empty( $new_instance['body'] ) ) ? sanitize_text_field( $new_instance['body'] ) : '';
		return $instance;
	}

} // class Foo_Widget