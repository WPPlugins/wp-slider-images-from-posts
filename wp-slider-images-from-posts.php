<?php
/*
 Plugin Name: Wp slider images from posts
 Plugin URI: http://vnete.org/plugins/wp-slider-images-from-posts.zip
 Description: This plugin displays images with captions of your selected records and their beautiful looks through a ukazannm your interval. To set up the widget bar select photos , sign them and specify the interval turning.
 Version: 2.0
 Author: Mikityuk
 Author URI: http://vnete.org/
 License: GPL2
*/
	function img_slider_language()
	{
		load_plugin_textdomain('img-slider', false, dirname( plugin_basename( __FILE__ )));
	}
	add_action('init', 'img_slider_language');

	function img_slider_css() {
		$img_slider_css_url  =  plugins_url('style.css', __FILE__);
		$img_slider_css_file =   plugin_dir_path(__FILE__). 'style.css';
		if ( file_exists($img_slider_css_file) ) {
			wp_register_style('slider_css', $img_slider_css_url);
			wp_enqueue_style( 'slider_css');
		}
	}
	
	add_action('wp_print_styles', 'img_slider_css');

	class Slider_images_from_posts  extends Wp_widget
	{
		public function __construct()
		{
			parent::__construct("text_widget", "Slider show images from posts",
            array("description" => __('Slider images from posts','img-slider')));
		}
		
		public function form($instance)
		{
			
			$val_title =  (isset($instance["title"])) ?  $instance["title"]  : "Photos";			
			$tableId = $this->get_field_id("title");
			$tableName = $this->get_field_name("title");
			echo '<label for="' . $tableId . '">'.__('Title:','img-slider').'</label><br>';
			echo '<input id="' . $tableId . '" type="text" name="' . $tableName . '" value="' . $val_title . '"><br>';
			
			$val_interval =  (isset($instance["interval"])) ?  $instance["interval"]  : 4000;
			$interval = $this->get_field_name("interval");
			echo '<label for="' . $interval . '">'.__('Interval:','img-slider').'</label><br>';
			echo '<input  type="text" name="'. $interval .'" value="'.$val_interval.'"> <br>';
			echo '<hr>';
			echo '<p>'.__('Select images and caption','img-slider').'</p>';
			
			echo '<hr>';

	
		/* Start IMG 1 */
			echo '<br>';
			$image1 = $this->get_field_name("image1");
				$posts = get_posts( array(
					'numberposts'     => 100, 
					'post_type'       => 'attachment', 
				) );
			echo '<select   id="y1"  name="'.$image1.'">';
				
				$i=0;
				foreach($posts as $post)
				{
					$val_img1 =  (isset($instance["image1"]) && $i==0) ?  $instance["image1"]  : $post->guid;
					echo  '<option   value="' . $val_img1 . '">'  . basename($val_img1) .  '</option>' ;
					$i++;
				}
			echo '</select>';
			$podpis1 = $this->get_field_name("podpis1");
			$val_podpis1 =  (isset($instance["podpis1"])) ?  $instance["podpis1"]  :  __('caption','img-slider');
			echo '<input  type="text" name="'. $podpis1 .'" value="'.$val_podpis1.'"> <br>';
			$href1 = $this->get_field_name("href1");
			$val_href1 =  (isset($instance["href1"])) ?  $instance["href1"]  :  __('you link one','img-slider');
			echo '<input  type="text" name="'. $href1 .'" value="'.$val_href1.'"> <br>';
		/* END IMG 1 */		
			
		/* Start IMG 2 */
			echo '<br>';
			$image2 = $this->get_field_name("image2");
				$posts = get_posts( array(
					'numberposts'     => 100, 
					'post_type'       => 'attachment', 
				) );
			echo '<select   id="y2"  name="'.$image2.'">';
				
				$i=0;
				foreach($posts as $post)
				{
					$val_img2 =  (isset($instance["image2"]) && $i==0) ?  $instance["image2"]  : $post->guid;
					echo  '<option   value="' . $val_img2 . '">'  . basename($val_img2) .  '</option>' ;
					$i++;
				}
			echo '</select>';
			$podpis2 = $this->get_field_name("podpis2");
			$val_podpis2 =  (isset($instance["podpis2"])) ?  $instance["podpis2"]  :  __('caption','img-slider');
			echo '<input  type="text" name="'. $podpis2 .'" value="'.$val_podpis2.'"> <br>';
			$href2 = $this->get_field_name("href2");
			$val_href2 =  (isset($instance["href2"])) ?  $instance["href2"]  :  __('you link one','img-slider');
			echo '<input  type="text" name="'. $href2 .'" value="'.$val_href2.'"> <br>';
		/* END IMG 2 */	
			
		/* Start IMG 3 */
			echo '<br>';
			$image3 = $this->get_field_name("image3");
				$posts = get_posts( array(
					'numberposts'     => 100, 
					'post_type'       => 'attachment', 
				) );
			echo '<select   id="y3"  name="'.$image3.'">';
				
				$i=0;
				foreach($posts as $post)
				{
					$val_img3 =  (isset($instance["image3"]) && $i==0) ?  $instance["image3"]  : $post->guid;
					echo  '<option   value="' . $val_img3 . '">'  . basename($val_img3) .  '</option>' ;
					$i++;
				}
			echo '</select>';
			$podpis3 = $this->get_field_name("podpis3");
			$val_podpis3 =  (isset($instance["podpis3"])) ?  $instance["podpis3"]  :  __('caption','img-slider');
			echo '<input  type="text" name="'. $podpis3 .'" value="'.$val_podpis3.'"> <br>';
			$href3 = $this->get_field_name("href3");
			$val_href3 =  (isset($instance["href3"])) ?  $instance["href3"]  :  __('you link one','img-slider');
			echo '<input  type="text" name="'. $href3 .'" value="'.$val_href3.'"> <br>';
		/* END IMG 3 */	
			
		/* Start IMG 4 */
			echo '<br>';
			$image4 = $this->get_field_name("image4");
				$posts = get_posts( array(
					'numberposts'     => 100, 
					'post_type'       => 'attachment', 
				) );
			echo '<select   id="y4"  name="'.$image4.'">';
				
				$i=0;
				foreach($posts as $post)
				{
					$val_img4 =  (isset($instance["image4"]) && $i==0) ?  $instance["image4"]  : $post->guid;
					echo  '<option   value="' . $val_img4 . '">'  . basename($val_img4) .  '</option>' ;
					$i++;
				}
			echo '</select>';
			$podpis4 = $this->get_field_name("podpis4");
			$val_podpis4 =  (isset($instance["podpis4"])) ?  $instance["podpis4"]  :  __('caption','img-slider');
			echo '<input  type="text" name="'. $podpis4 .'" value="'.$val_podpis4.'"> <br>';
			$href4 = $this->get_field_name("href4");
			$val_href4 =  (isset($instance["href4"])) ?  $instance["href4"]  :  __('you link one','img-slider');
			echo '<input  type="text" name="'. $href4 .'" value="'.$val_href4.'"> <br>';
		/* END IMG 4 */	

		/* Start IMG 5 */
			echo '<br>';
			$image5 = $this->get_field_name("image5");
				$posts = get_posts( array(
					'numberposts'     => 100, 
					'post_type'       => 'attachment', 
				) );
			echo '<select   id="y5"  name="'.$image5.'">';
				
				$i=0;
				foreach($posts as $post)
				{
					$val_img5 =  (isset($instance["image5"]) && $i==0) ?  $instance["image5"]  : $post->guid;
					echo  '<option   value="' . $val_img5 . '">'  . basename($val_img5) .  '</option>' ;
					$i++;
				}
			echo '</select>';
			$podpis5 = $this->get_field_name("podpis5");
			$val_podpis5 =  (isset($instance["podpis5"])) ?  $instance["podpis5"]  :  __('caption','img-slider');
			echo '<input  type="text" name="'. $podpis5 .'" value="'.$val_podpis5.'"> <br>';
			$href5 = $this->get_field_name("href5");
			$val_href5 =  (isset($instance["href5"])) ?  $instance["href5"]  :  __('you link one','img-slider');
			echo '<input  type="text" name="'. $href5 .'" value="'.$val_href5.'"> <br>';
		/* END IMG 5 */

		}
			
		public function update($newInstance, $oldInstance) 
		{
			$values = array();
			$values["title"]   =  $newInstance["title"];
			$values["interval"] =  $newInstance["interval"];
			$values["podpis1"] =  $newInstance["podpis1"];
			$values["podpis2"] =  $newInstance["podpis2"];
			$values["podpis3"] =  $newInstance["podpis3"];
			$values["podpis4"] =  $newInstance["podpis4"];
			$values["podpis5"] =  $newInstance["podpis5"];
			$values["image1"] =  $newInstance["image1"];
			$values["image2"] =  $newInstance["image2"];
			$values["image3"] =  $newInstance["image3"];
			$values["image4"] =  $newInstance["image4"];
			$values["image5"] =  $newInstance["image5"];
			$values["href1"] =  $newInstance["href1"];
			$values["href2"] =  $newInstance["href2"];			
			$values["href3"] =  $newInstance["href3"];
			$values["href4"] =  $newInstance["href4"];
			$values["href5"] =  $newInstance["href5"];			
			return $values;
		}
		
		public function widget($args, $instance)
		{
			echo $args["before_widget"];
			echo $args["before_title"] ;
			echo $instance["title"]; 
			echo $args["after_title"];

		?>
			<div class="owers">
				<div id="sid2">
					<div class="slide dblock">
						<div class="img-wrapper">
							<a href="<?php echo $instance["href1"];?>">
								<img  style="display: block !important;"

									src="<?php echo $instance["image1"];?>"alt="<?php echo $instance["podpis1"];?>">
								
								</div></a>
								<p class="amount"><?php echo $instance["podpis1"];?></p>
							</a>
					</div>
						
					<div class="slide">
						<div class="img-wrapper">
							<a href="<?php echo $instance["href2"];?>">
								<img src="<?php echo $instance["image2"];?>" alt="<?php echo $instance["podpis2"];?>"></div></a>
								<p class="amount"><?php echo $instance["podpis2"];?></p>
							</a>
					</div>
					
					<div class="slide">
						<div class="img-wrapper">
							<a href="<?php echo $instance["href3"];?>">
								<img src="<?php echo $instance["image3"];?>" alt="<?php echo $instance["podpis3"];?>"></div></a>
								<p class="amount"><?php echo $instance["podpis3"];?></p>
							</a>
					</div>
					
					<div class="slide">
						<div class="img-wrapper">
							<a href="<?php echo $instance["href4"];?>">
								<img src="<?php echo $instance["image4"];?>" alt="<?php echo $instance["podpis4"];?>"></div></a>
								<p class="amount"><?php echo $instance["podpis4"];?></p>
							</a>
					</div>
					
					<div class="slide">
						<div class="img-wrapper">
							<a href="<?php echo $instance["href5"];?>">
								<img src="<?php echo $instance["image5"];?>"  alt="<?php echo $instance["podpis5"];?>"></div></a>
								<p class="amount"><?php echo $instance["podpis5"];?></p>
							</a>
					</div>
				</div>
			</div>
			<script>
				jQuery(document).ready(function() {
					var p = 1;
					var interval;
					interval = setInterval(function()
					{ 
						jQuery('#sid2').addClass("imgslide"+p); p++; 
						if(p==7)
						{
							p=1;
							jQuery('#sid2').removeClass("imgslide2").removeClass("imgslide3").removeClass("imgslide4").removeClass("imgslide5");
						} 
	
					},  <?php echo $instance["interval"];?>);
					
				});
			</script>
				
		<?php		
			echo $args['after_widget'];
		}
	}
	add_action("widgets_init", function ()
{
    register_widget("Slider_images_from_posts");
});
?>