
<?php
$themeurl = get_stylesheet_directory_uri();
$siteurl = get_option("siteurl");
$id = "";
$geometric_background = get_sub_field("geometric_background");



if($id=="")
  $id = "row".get_row_index();

if(!$geometric_background){
    echo '
    <style>
    #'.$id.'.news-event-list::after {
        background-image: none;
    }
    </style>
    ';
}
?>
<section id="<?php echo $id; ?>" class="news-event-list">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="category-link">
        <?php
			$terms = get_terms( 'category', array(
			    'hide_empty' => true,
			) );
		    echo '<a href="javascript:;" filtercat="" class="active filtercat">All Categories</a>';
		    foreach($terms as $term){
		    	echo '<a href="javascript:;" filtercat="'.$term->slug.'" class="filtercat">'.$term->name.'</a>';
		    }
		?>
          <!-- <a href="#" class="active">All Articles</a>
          <a href="#">Cargomatic News</a>
          <a href="#">Events</a>
          <a href="#">Carriers</a>
          <a href="#">Shippers</a> -->
        </div>
        <div class="news-event-list-content">
          <?php 
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 6,
                'offset' => 0
            );	
            $query = new WP_Query( $args );
            while ( $query->have_posts() ) {
                $query->the_post();
                $image = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()));
                $term_list = wp_get_post_terms( get_the_ID(), 'category', array( 'fields' => 'names' ) );
                

                ?>
                <div class="content-box">
                    <?php 
                        if($image){
                            ?>
                            <div class="image-area">
                                <a href="<?php echo get_permalink() ?>">
                                    <img src="<?php echo $image ?>" alt="image event 1" class="img-fluid">
                                </a>
                            </div>
                            <?php
                        }
                    ?>

                    <?php 
                    if($term_list){
                        ?>
                        <h4 class="category"><?php echo implode(", ",$term_list) ?></h4>
                        <?php
                    }

                    ?>
                    <h3><a href="<?php echo get_permalink() ?>"><?php echo get_the_title() ?></a></h3>
                    <p><?php echo get_the_excerpt() ?></p>
                    <a href="<?php echo get_permalink() ?>" class="animated-arrow">Read More</a>
                </div>
                <?php
            }
            wp_reset_postdata();
          ?>
        </div>
        <input type="hidden" name="category" id="category" value="">
	    <input type="hidden" name="paging" id="paging" value="1">
        <?php 
        if($query->max_num_pages > 1){
            ?>
        <div class="load-more-article text-center">
          <a href="javascript:;" class="btn btn-primary">Load More Articles</a>
        </div>
            <?php
        }
        
        ?>

      </div>
    </div>
  </div>
</section>
<script type="text/javascript">
	jQuery(document).ready(function(){
		var ajaxurl = "<?php echo get_option("siteurl").'/?ajax=listpost&time='.time();?>";
		jQuery(".load-more-article a").click(function(){
			var scrolltop = jQuery(document).scrollTop();
			jQuery.ajax({
				type : "post",
				url : ajaxurl,
				dataType : "json",
				data : {action: "listpost", category: jQuery("#category").val(), paging: jQuery("#paging").val()},
				success: function(response) {
					jQuery(document).scrollTop(scrolltop);
					jQuery(".news-event-list-content").append(response.datalist);
					if(response.paging>0){
						jQuery(".load-more-article").show();
						jQuery("#paging").val(response.paging);
					}
					else{
						jQuery(".load-more-article").hide();
					}
				}
			})   

		});
		jQuery(".filtercat").click(function(){
			var scrolltop = jQuery(document).scrollTop();
			jQuery(".filtercat").removeClass("active");
			jQuery(this).addClass("active");
			jQuery("#category").val(jQuery(this).attr("filtercat"));
			jQuery("#paging").val(2);
            jQuery(".news-event-list-content").html("");
            jQuery(".load-more-article").hide();


			jQuery.ajax({
				type : "post",
				url : ajaxurl,
				dataType : "json",
				data : {action: "listpost", category: jQuery("#category").val(), paging: 1},
				success: function(response) {
					jQuery(document).scrollTop(scrolltop);
					jQuery(".news-event-list-content").append(response.datalist);
					if(response.paging>0){
						jQuery(".load-more-article").show();
						jQuery("#paging").val(response.paging);
					}
					else{
						jQuery(".load-more-article").hide();
					}
				}
			})   
		});
	});
</script>