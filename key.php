<?php
/*Color*/
$green = "\033[92m";
$red = "\033[91m";
$cyan = "\033[36m";
$yellow = "\033[93m";
$bold = "\033[5m";
$white = "\033[0m";
/*Form*/
$date   = date('d-M-Y H:i');
//system("clear");
echo $bold . $red . "Count      : ";
$count = trim(fgets(STDIN,1024));
echo $bold . $red . "Delay      : ";
$sleep = trim(fgets(STDIN,1024));
for($x = 0; $x < $count; $x++){
$str = file_get_contents("http://namegenerators.org/fake-name-generator-us/");
$var = '/<div class="col2">(.*?)<\/div>/s';
preg_match_all($var, $str, $matches);
echo $red . "\n===============INFO===============\n";
echo $bold . $green . "[name : ".str_replace("</span>", "", str_replace('<span class="name">', "", $matches[1][3]))."]".
		" [address : ".$matches[1][8]."]".
		" [phone : ".$matches[1][9]."]\n";
echo $red . "================CC================\n";
echo $bold . $green . "[email : ".$matches[1][10]."]".
		" [card number : ".str_replace(" ", "", $matches[1][14])."]".
		" [cvv : ".$matches[1][16]."]".
		" [exp-date : ".$matches[1][15]."]\n";
	sleep($sleep);
}
?>
