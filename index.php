<?
$page_content = "";
require "functions.php";

$show = (isset( $_GET["n"] ) ? $_GET["n"] : null );
$season = (isset( $_GET["s"] ) ? $_GET["s"] : null );

$debug = "series:$show, season: $season";

require "db.php";

if ( is_null($show) )
{

  // DEFAULT
  $title = "";
  $content = "
  <div class='container'>
    <h1>TV Watcher</h1>
    <p>
      Tumblr fashion axe locavore, readymade squid 8-bit artisan VHS irony Tonx vegan paleo. Readymade cardigan forage irony. 90's beard Wes Anderson mumblecore Tonx, High Life roof party retro Cosby sweater vinyl. Cardigan mumblecore chillwave +1 gluten-free direct trade. Keffiyeh cred Godard dreamcatcher, ennui beard forage slow-carb Neutra. Deep v Williamsburg whatever freegan, 8-bit squid butcher Truffaut banh mi brunch try-hard. Bushwick bitters messenger bag, cliche roof party irony Banksy deep v 3 wolf moon hashtag twee.
    </p>
  </div>
  ";
}
else
{

  // RETURNS A LIST OF CHARACTERS IN THE SEASON
  $season_nav = "";
  $character_list = "";

  $season_nav = get_season_active_class( $show, $season, $seasons );

  foreach ($characters as $key => $character) {
    $seasons = $character['seasons'];
    if ( in_array( $season, $seasons ) ) {

      // $array_key = key();

      // $character_page = "index.php?n=$show&c=$array_key";
      $character_page = "";

      $character_list .= "<li><a href='$character_page'>$character[first_name] $character[last_name]</a>";
    }
  }

  // if ( !isset($s) ) {
  //   $intro_html = "<h2 style='color:hsla(0, 0%, 0%, 0.75);margin-bottom:1em;font-weight:400'>$intro</h2>";
  // } else {
  //   $intro_html = "";
  // }

  $content = "
  <div class='container'>
    <h1 class='title'><a href='$show'>$title</a></h1>
    <ul class='season-nav'>$season_nav</ul>
    $character_list
  </div>
  ";
}

include "views/page.php";
echo $page_content;

// ========================
// FUNCTIONS

function get_season_active_class( $show, $season, $seasons ){
  $content = "";
  for ($i = 1; $i <= $seasons ; $i++) {
    // active class
    if ( $i == $season ) {$active = "class='active'"; } else {$active = ""; }
    $content .= "<li $active><a href='index.php?n=$show&s=$i'>$i</a>";
  }
  return $content;
}