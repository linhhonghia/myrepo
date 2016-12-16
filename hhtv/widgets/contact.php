<?php


class hhtv_contact extends WP_Widget {


	function __construct() {
		parent::__construct(
			'hhtv_widget', 
			esc_html__( 'HHTV Contact', 'cactus' ),
			array( 'description' => esc_html__( 'Show Contact ', 'cactus' ), ) 
		);
	}

	public function form( $instance ) {
	$default = array(
	        'quote' => 'feel free to contact us at',
	        'summary' =>'We value quality over quantity and smart work over hard work.Our teams are always thirsty for passionate techies and creative people to come on board and build awesome products.',

	        'adress' => '168 Lang Street, Dong Da, Ha Noi',
			'phone' => '(+84) 4 8587 7801',
			'email' => 'hi@hhtv.vn'
	);

	$instance = wp_parse_args( (array) $instance, $default);

	$quote = esc_attr($instance['quote'] );	
	$summary = esc_attr($instance['summary'] );	
	$adress = esc_attr($instance['adress'] );	
	$phone = esc_attr($instance['phone'] );	
	$email = esc_attr($instance['email'] );	

	?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'quote' ) ); ?>"><?php esc_attr_e( 'Quote:', 'cactus' ); ?></label> 
		<input class="widefat" name="<?php echo esc_attr( $this->get_field_name( 'quote' ) ); ?>" type="text" value="<?php echo $quote ; ?>">
		</p>

		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'summary' ) ); ?>"><?php esc_attr_e( 'Summary:', 'cactus' ); ?></label> 
		<textarea  rows="4" class="widefat" name="<?php echo esc_attr( $this->get_field_name( 'summary' ) ); ?>"><?php echo $summary ; ?> </textarea>
		</p>

		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'adress' ) ); ?>"><?php esc_attr_e( 'Our Address:', 'cactus' ); ?></label> 
		<input class="widefat" name="<?php echo esc_attr( $this->get_field_name( 'adress' ) ); ?>" type="text" value="<?php echo $adress ; ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'phone' ) ); ?>"><?php esc_attr_e( 'Our Phone:', 'cactus' ); ?></label> 
		<input class="widefat" name="<?php echo esc_attr( $this->get_field_name( 'phone' ) ); ?>" type="text" value="<?php echo $phone ; ?>">
		</p>

		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'email' ) ); ?>"><?php esc_attr_e( 'Our Email:', 'cactus' ); ?></label> 
		<input class="widefat" name="<?php echo esc_attr( $this->get_field_name( 'email' ) ); ?>" type="text" value="<?php echo $email ; ?>">
		</p>
		


	<?php

	}


	public function update( $new_instance, $old_instance ) {

		parent::update( $new_instance, $old_instance );
 
        $instance = $old_instance;
        $instance['quote'] = strip_tags($new_instance['quote']);
        $instance['summary'] = strip_tags($new_instance['summary']);
        $instance['adress'] = strip_tags($new_instance['adress']);
        $instance['phone'] = strip_tags($new_instance['phone']);
        $instance['email'] = strip_tags($new_instance['email']);

        return $instance;
		
	}


	public function widget( $args, $instance ) {
		?>

		<footer id="colophon" class="site-footer">

			<section class="c-footer__top">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 c-column">
							<section class="c-contact-quote">
								<div class="item-title">
									<h3><?php echo $instance['quote']; ?></h3>
								</div>
								<div class="item-summary">
									<p><?php echo $instance['summary']; ?></p>
								</div>
							</section>
						</div>
					</div>
					<div class="row">
						<section class="c-sidebar footer-sidebar">
							<div class="col-xs-12 col-md-4 c-column">
								<div class="c-address widget">
									<div class="item-summary">
										<i class="fa fa-address-book" aria-hidden="true"></i>

										<h3>Our Address</h3>

										<p><?php echo $instance['adress']; ?></p>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-md-4 c-column">
								<div class="c-mobile widget">
									<div class="item-summary">
										<i class="fa fa-phone" aria-hidden="true"></i>

										<h3>Our Phone</h3>

										<p><?php echo $instance['phone']; ?></p>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-md-4">
								<div class="c-email widget" style="border: none">
									<div class="item-summary">
										<i class="fa fa-envelope-open" aria-hidden="true"></i>

										<h3>Our Email</h3>

										<p><?php echo $instance['email']; ?>n</p>
									</div>
								</div>
							</div>
						</section>
					</div>
					<!--!links-->
				</div>
			</section>
			<!--!footer-top-->
		</footer>

		<?php
		
	}
} 


// register HHTV_contact widget


add_action( 'widgets_init', function(){
	register_widget( 'hhtv_contact' );
});