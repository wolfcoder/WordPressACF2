<?php
$themeurl = get_stylesheet_directory_uri();
$siteurl = get_option("siteurl");
$id = "";
$background_triangle = get_sub_field("background_triangle");
$background_color = get_sub_field("background_color");
$green_text = get_sub_field("green_text");
$title = get_sub_field("title");
$subtitle = get_sub_field("subtitle");
$featured_news = get_sub_field("featured_news");
$link_all_news = get_sub_field("link_all_news");


if($id=="")
  $id = "row".get_row_index();

if(!$background_triangle){
    echo '
    <style>
    .blog-news-event::before{
        background-image: none;
    }
    .blog-news-event::after{
        background-image: none;
    }
    </style>
    ';
    if($background_color){
        $background_color = 'background-color:'.$background_color;
    }
}

?>
<section id="<?php echo $id; ?>" style="<?php echo $background_color; ?>" class="blog-news-event">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="blog-news-event-content">
          <div class="title-area">
            <?php 
                if($title){
                    ?>
                    <h2><span class="green"><?php echo $green_text ? $green_text : '' ?></span> <?php echo $title; ?></h2>
                    <?php
                }
                if($subtitle){
                    ?>
                    <h3><?php echo $subtitle; ?></h3>
                    <?php
                }
            
            ?>
          </div>
          <?php 
            if($featured_news){
                $counter = 0;
                foreach($featured_news as $data){
                    $title_news = get_the_title($data->ID);
                    $permalink = get_permalink($data->ID);
                    $image = wp_get_attachment_url( get_post_thumbnail_id($data->ID));

                    $desktop_featured_image = get_field('desktop_featured_image', $data->ID);
                    $mobile_featured_image = get_field('mobile_featured_image', $data->ID);
                    if($counter==1){
                    break;
                    }
                    ?>
                    <div class="highlight-blog">
                            <a href="<?php echo $permalink; ?>" class="stretched-link"><span class="sr-only">highlight blog</span></a>
                            <div class="image-area">
                                <?php 
                                    if($image){
                                        ?>
                                        <img src="<?php echo $image; ?>" alt="image desktop" class="img-fluid d-none d-md-block">
                                        <?php
                                    }
                                    if($image){
                                        ?>
                                        <img src="<?php echo $image; ?>" alt="mobile desktop" class="img-fluid d-md-none">
                                        <?php
                                    }
                                
                                ?>
                            </div>
                            <div class="text-area">
                            <?php 
                                if($title_news){
                                    ?>
                                    <h3><?php echo $title_news; ?></h3>
                                    <?php
                                }
                                if($data->post_content){
                                    ?>
                                    <p><?php echo wp_trim_words($data->post_content,48,'...') ?></p>
                                    <?php
                                }
                                if($permalink){
                                    ?>
                                    <p class="read-more"><a href="<?php echo $permalink; ?>" class="animated-arrow">Read More</a></p>
                                    <?php
                                }
                            
                            ?>
                            
                        </div>
                    </div>
                    <?php
                    $counter++;

                }
            }
          
          ?>

          <div class="list-blog">
            <?php 
            $counter2 = 0;
            if($featured_news){
                foreach($featured_news as $data){
                    $counter2++;

                    $title_news = get_the_title($data->ID);
                    $permalink = get_permalink($data->ID);
                    if($counter2 > 1){
                        ?>
                        <div class="blog-box">
                            <a href="<?php echo $permalink; ?>" class="stretched-link"><span class="sr-only">blog box <?php echo $counter2; ?></span></a>
                            <?php 
                            if($title_news){
                                ?>
                                <h3><?php echo $title_news; ?></h3>
                                <?php
                            }
                            ?>
                            <a href="<?php echo $permalink; ?>" class="animated-arrow">Read More</a>
                        </div>
                        <?php
                    }
                }
            }
            
            
            ?>

          </div>
          <div class="button-all">
            <?php 
            if($link_all_news){
                $link_all_news_url = $link_all_news['url'];
                $link_all_news_title = $link_all_news['title'];
                $link_all_news_target = $link_all_news['target'] ? $link_all_news['target'] : '_self';
                    ?>
                    <a <?php echo $link_all_news_url != '#' ? 'href="'.$link_all_news_url.'"' : ''; ?> target="<?php echo $link_all_news_target; ?>" class="btn btn-primary"><?php echo $link_all_news_title; ?></a>
                    <?php
            }
            
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>