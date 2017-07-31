<?
function string_lower( $string ){
  $string = ( strtolower ( $string ) );
  $string = ( str_replace(" ", "-", $string ) );
  $string = ( str_replace(",", "", $string ) );
  $string = ( str_replace("'", "", $string ) );
  return $string;
}
function get_files($dir){
  $files = array_diff( scandir( $dir ), Array( ".", "..", ".DS_Store" ) );
  $files = array_values($files);
  $files = array_filter(array_merge(array(0), $files));
  return $files;
}
function string_erase( $string, $replace ) {
    $string = ( str_replace( $replace, "", $string ) );
    return $string;
}
function replace_string( $string, $thing_to_replace, $replace_with ){
    $string = ( str_replace($thing_to_replace, $replace_with, $string ) );
    return $string;
}
function columns($content,$class=null,$clearfix=false){
// function columns($content,$sm=12,$sm_o=null,$md=10,$md_o=1,$lg=8,$lg_o=2,$class=null,$clearfix=false){

  // switch ($number) {
  //   case '2': $number='two'; break;
  //   case '4': $number='four'; break;
  //   case '6': $number='six'; break;
  //   case '8': $number='eight'; break;
  //   case '10': $number='ten'; break;
  //   case '12': $number='twelve'; break;
  //   case '16': $number='sixteen'; break;
  //   default:
  //   $number='sixteen';
  //   break;
  // }

  $classes="";


  $html="";
  $html.="<div class='col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-md-offset-2 $class'>";
  $html.=$content;
  $html.="</div>";
  $html.= ($clearfix) ? "<div class='clearfix'></div>" : null;
  return $html;
}
function container($content,$class=null){
  $html="";
  $html.= ($class) ? "<div class='container-fluid $class'>" : "<div class='container-fluid'>";
  $html.= $content;
  $html.= "</div>";
  return $html;
}
function img($imgpath,$scale=true,$alt=null){
  $html="";
  $class = ($scale) ? "class='img-responsive'" : null;
  $alt_text = ($alt) ? "alt='$alt'" : null;
  $html="
  <img $class src='$imgpath' $alt_text>
  ";
  return $html;
}
function birthday($birth_month,$birth_day,$birth_year){
  date_default_timezone_set('America/Los_Angeles');

  $date = getdate();
  $current_year = $date["year"];
  $current_month = $date["mon"];
  $current_day = $date["mday"];

  $age = $current_year - $birth_year;
  if ( $current_month >= $birth_month && $current_day >= $birth_day ) {
    return $age;
  } else {
    $age--;
    return $age;
  }
}

function img_wall($img_path){
  // $img_path = "img/hannah";
  $content="";
  $imgs = get_files($img_path);
  $array_count = count( $imgs );
  $large_even_thumbs = floor( $array_count/4);
  $large_remainder = $array_count%4;
  $mobile_even_thumbs = floor( $array_count/2);
  $mobile_remainder = $array_count%2;
  $medium_even_thumbs = floor( $array_count/3);
  $medium_remainder = $array_count%3;

  $large_column1 = "";
  $large_column2 = "";
  $large_column3 = "";
  $large_column4 = "";

  $count = 1;
  $number = 1;

  while ( $count <= $large_even_thumbs ) {

    $first  = $number;
    $second = $number+1;
    $third  = $number+2;
    $fourth = $number+3;

    $large_column1 .= "<img class='img-responsive' src='$img_path/$imgs[$first]'>#$first";
    $large_column2 .= "<img class='img-responsive' src='$img_path/$imgs[$second]'>#$second";
    $large_column3 .= "<img class='img-responsive' src='$img_path/$imgs[$third]'>#$third";
    $large_column4 .= "<img class='img-responsive' src='$img_path/$imgs[$fourth]'>#$fourth";
    $count++;
    $number = $number + 4;
  }

  $count = 1;
  if ($count <= $large_remainder) {
    $large_column1 .= "<img class='img-responsive add-bottom' src='$img_path/$imgs[$number]'>#$number";
    $count++;
    $number++;
  }
  if ($count <= $large_remainder) {
    $large_column2 .= "<img class='img-responsive add-bottom' src='$img_path/$imgs[$number]'>#$number";
    $count++;
    $number++;
  }
  if ($count <= $large_remainder) {
    $large_column3 .= "<img class='img-responsive add-bottom' src='$img_path/$imgs[$number]'>#$number";
    $count++;
    $number++;
  }
  if ($count <= $large_remainder) {
    $large_column4 .= "<img class='img-responsive add-bottom' src='$img_path/$imgs[$number]'>#$number";
    $count++;
    $number++;
  }

  $content .= "<div class='img-wall visible-lg-block col-md-3 add-bottom'>";
  $content .= $large_column1;
  $content .= "</div>";

  $content .= "<div class='img-wall visible-lg-block col-md-3 add-bottom'>";
  $content .= $large_column2;
  $content .= "</div>";

  $content .= "<div class='img-wall visible-lg-block col-md-3 add-bottom'>";
  $content .= $large_column3;
  $content .= "</div>";

  $content .= "<div class='img-wall visible-lg-block col-md-3 add-bottom'>";
  $content .= $large_column4;
  $content .= "</div>";

  // $content .= "<div class='clearfix'>";

  // MOBILE

  $mobile_column1 = "";
  $mobile_column2 = "";

  $count = 1;
  $number = 1;

  while ( $count <= $mobile_even_thumbs ) {

    $first  = $number;
    $second = $number+1;

    $mobile_column1 .= "<img class='img-responsive' src='$img_path/$imgs[$first]'>#$first";
    $mobile_column2 .= "<img class='img-responsive' src='$img_path/$imgs[$second]'>#$second";

    $count++;
    $number = $number + 2;

  }

  $count = 1;
  if ($count <= $mobile_remainder) {
    $mobile_column1 .= "<img class='img-responsive add-bottom' src='$img_path/$imgs[$number]'>#$number";
    $count++;
    $number++;
  }
  if ($count <= $mobile_remainder) {
    $mobile_column2 .= "<img class='img-responsive add-bottom' src='$img_path/$imgs[$number]'>#$number";
    $count++;
    $number++;
  }

  $content .= "<div class='img-wall visible-xs-block visible-sm-block col-xs-12 col-sm-6 add-bottom'>";
  $content .= $mobile_column1;
  $content .= "</div>";

  $content .= "<div class='img-wall visible-xs-block visible-sm-block col-xs-12 col-sm-6 add-bottom'>";
  $content .= $mobile_column2;
  $content .= "</div>";




  // MEDIUM
  $medium_column1 = "";
  $medium_column2 = "";
  $medium_column3 = "";

  $count = 1;
  $number = 1;

  while ( $count <= $medium_even_thumbs ) {

    $first  = $number;
    $second = $number+1;
    $third  = $number+2;

    $medium_column1 .= "<img class='img-responsive' src='$img_path/$imgs[$first]'>#$first";
    $medium_column2 .= "<img class='img-responsive' src='$img_path/$imgs[$second]'>#$second";
    $medium_column3 .= "<img class='img-responsive' src='$img_path/$imgs[$third]'>#$third";
    $count++;
    $number = $number + 3;
  }

  $count = 1;
  if ($count <= $medium_remainder) {
    $medium_column1 .= "<img class='img-responsive add-bottom' src='$img_path/$imgs[$number]'>#$number";
    $count++;
    $number++;
  }
  if ($count <= $medium_remainder) {
    $medium_column2 .= "<img class='img-responsive add-bottom' src='$img_path/$imgs[$number]'>#$number";
    $count++;
    $number++;
  }
  if ($count <= $medium_remainder) {
    $medium_column3 .= "<img class='img-responsive add-bottom' src='$img_path/$imgs[$number]'>#$number";
    $count++;
    $number++;
  }
  if ($count <= $medium_remainder) {
    $medium_column4 .= "<img class='img-responsive add-bottom' src='$img_path/$imgs[$number]'>#$number";
    $count++;
    $number++;
  }

  $content .= "<div class='img-wall visible-md-block col-md-4 add-bottom'>";
  $content .= $medium_column1;
  $content .= "</div>";

  $content .= "<div class='img-wall visible-md-block col-md-4 add-bottom'>";
  $content .= $medium_column2;
  $content .= "</div>";

  $content .= "<div class='img-wall visible-md-block col-md-4 add-bottom'>";
  $content .= $medium_column3;
  $content .= "</div>";

  // $content .= "<div class='clearfix'>";


  return $content;
}
function get_image($info,$member){
  // looks for a FB
  if ($info['fb']) {
    $portrait = $info['fb'];
    $portrait = "<img class='img-responsive' src='https://graph.facebook.com/$portrait/picture?width=1200'>";
  } else {
    // looks for image in folder
    if ( file_exists("img/portraits/$member") ) {
      $portrait = get_files("img/portraits/$member");
      $portrait = $portrait['1'];
      $portrait = "<img class='img-responsive' src='img/portraits/$member/$portrait'>";
      // lookfs for image in the img tag
    } elseif ( isset($info['img']) ) {
      $portrait = $info['img'];
      $portrait = "<img class='img-responsive' src='$portrait'>";
      // looks for a fb profile pic
    } else {
      $portrait = "";
    }
  }
  return $portrait;
}
function get_title($string){
  $content = "";
  $string = replace_string( $string, "img_", "");
  $string = replace_string( $string, ".png", "");
  $string = replace_string( $string, ".jpg", "");
  $string = replace_string( $string, ".JPG", "");
  $string = replace_string( $string, "_-_", "? ");
  $string = replace_string( $string, "_-", "'");
  $string = replace_string( $string, "_____", ": ");
  $string = replace_string( $string, "____", "! ");
  $string = replace_string( $string, "___", ", ");
  $string = replace_string( $string, "__", " & ");
  $string = replace_string( $string, "_", " ");
  return $string;
}