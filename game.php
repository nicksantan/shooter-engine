<?php
// error_reporting(-1);
// ini_set('display_errors', 'On');
require 'phar://cloudconvert-php.phar/vendor/autoload.php';
use \CloudConvert\Api;
$api = new Api("K6ntrr7tSU2vr3L3x3zlsyBXWFuZCYL-rFnezS3cWFTzml5izdkS796Yx3oT9u6YBfh3jCuxl4UQxamX7qUj4g");

$query = $_GET["powerup_one"];
$url = "http://api.giphy.com/v1/stickers/translate?s=" . $query . "&api_key=dc6zaTOxFJmzC";
$result = json_decode(file_get_contents($url), true);
$gif = $result['data']['images']['fixed_width_small']['url'];
$gifExists = isset($gif);

if ($gifExists) {
	$api->convert([
	    "inputformat" => "gif",
	    "outputformat" => "webm",
	    "input" => "upload",
	    "save" => true,
	    "callback"=> "http://google.com",
	    "file" => fopen($gif, 'r'),
	])
	->wait()
	->download('assets/dynamic/powerup_one.webm');
} else {
	// don't convert
}

$query = $_GET["powerup_two"];
$url = "http://api.giphy.com/v1/stickers/translate?s=" . $query . "&api_key=dc6zaTOxFJmzC";
$result = json_decode(file_get_contents($url), true);
$gif = $result['data']['images']['fixed_width_small']['url'];
$gifExists = isset($gif);

if ($gifExists) {
	$api->convert([
	    "inputformat" => "gif",
	    "outputformat" => "webm",
	    "input" => "upload",
	    "save" => true,
	    "callback"=> "http://google.com",
	    "file" => fopen($gif, 'r'),
	])
	->wait()
	->download('assets/dynamic/powerup_two.webm');
} else {
	// don't convert
}

$query = $_GET["powerup_three"];
$url = "http://api.giphy.com/v1/stickers/translate?s=" . $query . "&api_key=dc6zaTOxFJmzC";
$result = json_decode(file_get_contents($url), true);
$gif = $result['data']['images']['fixed_width_small']['url'];
$gifExists = isset($gif);

if ($gifExists) {
	$api->convert([
	    "inputformat" => "gif",
	    "outputformat" => "webm",
	    "input" => "upload",
	    "save" => true,
	    "callback"=> "http://google.com",
	    "file" => fopen($gif, 'r'),
	])
	->wait()
	->download('assets/dynamic/powerup_three.webm');
} else {
	// don't convert
}

$query = $_GET["companion"];
$url = "http://api.giphy.com/v1/stickers/translate?s=" . $query . "&api_key=dc6zaTOxFJmzC";
$result = json_decode(file_get_contents($url), true);
$gif = $result['data']['images']['fixed_width_small']['url'];
$gifExists = isset($gif);

if ($gifExists) {
	$api->convert([
	    "inputformat" => "gif",
	    "outputformat" => "webm",
	    "input" => "upload",
	    "save" => true,
	    "callback"=> "http://google.com",
	    "file" => fopen($gif, 'r'),
	])
	->wait()
	->download('assets/dynamic/companion.webm');
} else {
	// don't convert
}

$query = $_GET["miniboss"];
$url = "http://api.giphy.com/v1/stickers/translate?s=" . $query . "&api_key=dc6zaTOxFJmzC";
$result = json_decode(file_get_contents($url), true);
$gif = $result['data']['images']['fixed_width']['url'];
$gifExists = isset($gif);

if ($gifExists) {
	$api->convert([
	    "inputformat" => "gif",
	    "outputformat" => "webm",
	    "input" => "upload",
	    "save" => true,
	    "callback"=> "http://google.com",
	    "file" => fopen($gif, 'r'),
	])
	->wait()
	->download('assets/dynamic/miniboss.webm');
} else {
	// don't convert
}

$query = $_GET["enemy_one"];
$url = "http://api.giphy.com/v1/stickers/translate?s=" . $query . "&api_key=dc6zaTOxFJmzC";
$result = json_decode(file_get_contents($url), true);
$gif = $result['data']['images']['fixed_width_small']['url'];
$gifExists = isset($gif);

if ($gifExists) {
	$api->convert([
	    "inputformat" => "gif",
	    "outputformat" => "webm",
	    "input" => "upload",
	    "save" => true,
	    "callback"=> "http://google.com",
	    "file" => fopen($gif, 'r'),
	])
	->wait()
	->download('assets/dynamic/enemy_one.webm');
} else {
	// don't convert
}

$query = $_GET["enemy_two"];
$url = "http://api.giphy.com/v1/stickers/translate?s=" . $query . "&api_key=dc6zaTOxFJmzC";
$result = json_decode(file_get_contents($url), true);
$gif = $result['data']['images']['fixed_width_small']['url'];
$gifExists = isset($gif);

if ($gifExists) {
	$api->convert([
	    "inputformat" => "gif",
	    "outputformat" => "webm",
	    "input" => "upload",
	    "save" => true,
	    "callback"=> "http://google.com",
	    "file" => fopen($gif, 'r'),
	])
	->wait()
	->download('assets/dynamic/enemy_two.webm');
} else {
	// don't convert
}

$query = $_GET["enemy_three"];
$url = "http://api.giphy.com/v1/stickers/translate?s=" . $query . "&api_key=dc6zaTOxFJmzC";
$result = json_decode(file_get_contents($url), true);
$gif = $result['data']['images']['fixed_width_small']['url'];
$gifExists = isset($gif);

if ($gifExists) {
	$api->convert([
	    "inputformat" => "gif",
	    "outputformat" => "webm",
	    "input" => "upload",
	    "save" => true,
	    "callback"=> "http://google.com",
	    "file" => fopen($gif, 'r'),
	])
	->wait()
	->download('assets/dynamic/enemy_three.webm');
} else {
	// don't convert
}

$query = $_GET["enemy_four"];
$url = "http://api.giphy.com/v1/stickers/translate?s=" . $query . "&api_key=dc6zaTOxFJmzC";
$result = json_decode(file_get_contents($url), true);
$gif = $result['data']['images']['fixed_width_small']['url'];
$gifExists = isset($gif);

if ($gifExists) {
	$api->convert([
	    "inputformat" => "gif",
	    "outputformat" => "webm",
	    "input" => "upload",
	    "save" => true,
	    "callback"=> "http://google.com",
	    "file" => fopen($gif, 'r'),
	])
	->wait()
	->download('assets/dynamic/enemy_four.webm');
} else {
	// don't convert
}

?>


<?php 

$version = rand(5, 15);

?>
<!doctype html> 
<html lang="en"> 
<head> 
	<meta charset="UTF-8" />
	<title>GIPHY Shooter</title>
	<link rel="stylesheet" href="css/fonts.css" type="text/css" media="screen" />

	<script type="text/javascript" src="js/md5.js?v=<?php echo $version?>"></script>
	<script type="text/javascript" src="js/phaser277.min.js?v=<?php echo $version?>"></script>
	<script type="text/javascript" src="js/phaser-debug.js?v=<?php echo $version?>"></script>
	<script type="text/javascript" src="js/level_data.js?v=<?php echo $version?>"></script>
	<script type="text/javascript" src="js/classes/Explosion.js?v=<?php echo $version?>"></script>
	<script type="text/javascript" src="js/classes/Powerup.js?v=<?php echo $version?>"></script>
	<script type="text/javascript" src="js/classes/Bullet.js?v=<?php echo $version?>"></script>
	<script type="text/javascript" src="js/classes/Weapons.js?v=<?php echo $version?>"></script>
	<script type="text/javascript" src="js/classes/Enemies.js?v=<?php echo $version?>"></script>
	<script type="text/javascript" src="js/classes/Buddy.js?v=<?php echo $version?>"></script>
	<script type="text/javascript" src="js/classes/Player.js?v=<?php echo $version?>"></script>
	<script type="text/javascript" src="js/boot.js?v=<?php echo $version?>"></script>
	<script type="text/javascript" src="js/preload.js?v=<?php echo $version?>"></script>
	<script type="text/javascript" src="js/gametitle.js?v=<?php echo $version?>"></script>
	<script type="text/javascript" src="js/gameplay.js?v=<?php echo $version?>"></script>
	<script type="text/javascript" src="js/gameover.js?v=<?php echo $version?>"></script>
	<script type="text/javascript" src="js/scoresummary.js?v=<?php echo $version?>"></script>
	<script type="text/javascript" src="js/toptenscore.js?v=<?php echo $version?>"></script>
	<script type="text/javascript" src="js/displayscores.js?v=<?php echo $version?>"></script>
	<script type="text/javascript" src="js/cutscene.js?v=<?php echo $version?>"></script>
    
    <style type="text/css">
        body {
            margin: 0;
            text-align: center;
        }
        p{
        	/*display:none;*/
        	position: absolute;
        	left:-9999px;
        	font-family: "Tandysoft";
        }
        p.coders{
        	font-family:"Coders";
        }
    </style>

    <script type="text/javascript">
		(function() {
			setTimeout(function(){
				//Create a new game that fills the screen
				game = new Phaser.Game(1280,720, Phaser.AUTO, 'game-container');
				
				//Add all states
				game.state.add("Boot", Boot);
				game.state.add("Preload", Preload);
				game.state.add("GameTitle", GameTitle);
				game.state.add("Gameplay", Gameplay);
				game.state.add("GameOver", GameOver);
				game.state.add("Cutscene", Cutscene);
				game.state.add("ScoreSummary", ScoreSummary);
				game.state.add("TopTenScore", TopTenScore);
				game.state.add("DisplayScores", DisplayScores);
				//Start the first state
				game.state.start("Boot");


			}, 1000)
				
		})();
    </script>
    	
</head>
<body><p>.</p><p class = "coders">.</p>
	<div id = "game-container"></div>
</body>
</html>
