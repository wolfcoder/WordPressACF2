<?php
$themeurl = get_stylesheet_directory_uri();
$siteurl = get_option("siteurl");
$geometric_background = get_sub_field("geometric_background");
$background_color = get_sub_field("background_color");
$black_title_text = get_sub_field("black_title_text");
$green_title_text = get_sub_field("green_title_text");
$table_content = get_sub_field("table_content");

$id = "";
if($id=="")
  $id = "row".get_row_index();

if(!$geometric_background){
    echo '
    <style>
    #'.$id.'.table-stripe::after {
        background-image: none;
    }
    </style>
    ';
} else {
    echo '
    <style>
    #'.$id.'.table-stripe::after {
        background-image: url('.$siteurl.'/wp-content/uploads/2021/03/table-stripe-geo.png);
    }
    </style>
    ';
}


if($background_color){
    $background_color = 'background-color: '.$background_color.';';
}
?>
<section id="<?php echo $id; ?>" class="table-stripe" style="<?php echo $background_color ? $background_color : ''; ?>">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="content-area">
          <?php 
            if($black_title_text){
                ?>
                <h2><?php echo $black_title_text; echo $green_title_text ? ' <span class="green">'.$green_title_text.'</span>' : '' ?> </h2>
                <?php
            }
          
          ?>
          <div class="table-responsive">
            <table>
                <?php 
                    if($table_content){
                        foreach($table_content as $data){
                            $table_data_1 = $data['table_data_1'];
                            $table_data_2 = $data['table_data_2'];
                            $table_data_3 = $data['table_data_3'];
                            ?>
                            <tr>
                                <td>
                                    <?php echo $table_data_1; ?>
                                </td>
                                <td>
                                    <?php echo $table_data_2; ?>
                                </td>
                                <td>
                                <?php echo $table_data_3; ?>
                                </td>
                            </tr>
                            <?php
                        }
                    }
                
                ?>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>