<?

$seasons = "";

switch ($show) {

  default:
    # code...
    break;

  case 'thrones':
    $title = "Game of Thrones";
    $seasons = 7;
    $intro = "Game of Thrones is an American fantasy drama television series created by David Benioff and D. B. Weiss. It is an adaptation of A Song of Ice and Fire, George R. R. Martin's series of fantasy novels, the first of which is A Game of Thrones. It is filmed in Belfast and elsewhere in the United Kingdom, Canada, Croatia, Iceland, Malta, Morocco, Spain, and the United States. The series premiered on HBO in the United States on April 17, 2011, and its sixth season ended on June 26, 2016. The series was renewed for a seventh season, which premiered on July 16, 2017, and will conclude with its eighth season in 2018 or 2019.";
    $characters = array(

      "jaime_lannister" => array(
        "prefix" => "Lord",
        "first_name" => "Jaime",
        "last_name" => "Lannister",
        "nickname" => "Kingslayer",
        "house" => "Lannister",
        "fealty" => "Lannister",
        "banner" => "",
        "seasons" => array(1,2,3,4,5,6,7),
      ),

      "tywin_lannister" => array(
        "prefix" => "Lord",
        "first_name" => "Tywin",
        "last_name" => "Lannister",
        "nickname" => "",
        "house" => "Lannister",
        "fealty" => "Lannister",
        "banner" => "",
        "seasons" => array(1,2,3,4,5),
      ),

      "cersei_lannister" => array(
        "prefix" => "",
        "first_name" => "Cersei",
        "last_name" => "Lannister",
        "nickname" => "",
        "house" => "Lannister",
        "fealty" => "Lannister",
        "banner" => "",
        "seasons" => array(1,2,3,4,5,6,7),
        "description" => "Meggings kogi biodiesel Cosby sweater Blue Bottle.",
      ),

      "daenarys_targaryen" => array(
        "prefix" => "",
        "first_name" => "Daenarys",
        "last_name" => "Targaryen",
        "nickname" => "",
        "house" => "Targaryen",
        "fealty" => "Targaryen",
        "banner" => "",
        "seasons" => array(1,2,3,4,5,6,7),
        "description" => "Meggings kogi biodiesel Cosby sweater Blue Bottle.",
      ),

      "catelyn_stark" => array(
        "prefix" => "",
        "first_name" => "Catelyn",
        "last_name" => "Stark",
        "nickname" => "",
        "house" => "Stark",
        "fealty" => "Stark",
        "banner" => "",
        "seasons" => array(1,2,3),
        "description" => "Meggings kogi biodiesel Cosby sweater Blue Bottle.",
      ),

      "eddard_stark" => array(
        "prefix" => "Lord",
        "first_name" => "Eddard",
        "last_name" => "Stark",
        "nickname" => "Ned",
        "house" => "Stark",
        "fealty" => "Stark",
        "banner" => "",
        "seasons" => array(1),
        "description" => "Meggings kogi biodiesel Cosby sweater Blue Bottle.",
      ),

    );
    break;

  case 'one-piece':
    $title = "One Piece";
    $seasons = 12;
    $intro = "One Piece is a Japanese manga series written and illustrated by Eiichiro Oda. It has been serialized in Shueisha's Weekly Shōnen Jump magazine since July 22, 1997, with the chapters collected into 85 tankōbon volumes to date. The story follows the adventures of Monkey D. Luffy, a boy whose body gained the properties of rubber after unintentionally eating a Devil Fruit. With his crew of pirates, named the Straw Hat Pirates, Luffy explores the Grand Line in search of the world's ultimate treasure known as \"One Piece\" in order to become the next Pirate King.";
    // $arcs = array(
    //   "Romance Dawn Arc",
    //   "Orange Town Arc",
    //   "Syrup Village Arc",
    //   "Baratie Arc",
    //   "Arlong Park Arc",
    //   "Loguetown Arc",
    //   "Reverse Mountain Arc",
    //   "Whiskey Peak Arc",
    //   "Little Garden Arc",
    //   "Drum Island Arc",
    //   "Alabasta Arc",
    //   "Jaya Arc",
    //   "Skypiea Arc",
    //   "Thriller Bark Arc",
    //   "Sabaody Archipelago Arc",
    //   "Amazon Lily Arc",
    //   "Impel Down Arc",
    //   "Marineford Arc",
    //   "Post-War Arc",
    //   "Return to Sabaody Arc",
    //   "Fishman Island Arc",
    //   "Punk Hazard Arc",
    //   "Dressrosa Arc",
    //   "Zou Arc",
    //   "Whole Cake Island Arc",
    // );
    $characters = array(

      "luffy" => array(
        "first_name" => "Luffy",
        "middle_name" => "D.",
        "last_name" => "Monkey",
        "nickname" => "Straw Hat",
        "crew" => "Straw Hat Pirates",
        "seasons" => array(1,2,3,4,5,6,7,8,9,10,11,12),
      ),

      "ace" => array(
        // "prefix" => "Lord",
        "first_name" => "Portgas",
        "middle_name" => "D.",
        "last_name" => "",
        "nickname" => "",
        "crew" => "Whitebeard Pirates",
        "seasons" => array(1,2,3,4,5,6,7,8,9,10,11,12),
      ),

    );
    break;


  case 'breaking-bad':
    $title = "Breaking Bad";
    $seasons = 6;
    $characters = array(

      "walter-white" => array(
        "first_name" => "Walter",
        "middle_name" => "",
        "last_name" => "White",
        "nickname" => "Heisenberg",
        "nickname" => "alternate", //alternate, middle, prefix, suffix
        "crew" => "",
        "seasons" => array(1,2,3,4,5,6),
      ),

      "gus-fring" => array(
        // "prefix" => "Lord",
        "first_name" => "Gus",
        "middle_name" => "",
        "last_name" => "Fring",
        "nickname" => "",
        "crew" => "Los Pollos Hermanos",
        "seasons" => array(3,4),
      ),

    );
    break;

}
