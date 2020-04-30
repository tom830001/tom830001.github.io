<!DOCTYPE html>
<html>
<head>

</head>

	
	
	
<body >

<meta http-equiv="refresh" content="5" />
<?php


$text=file_get_contents('http://www.cpbl.com.tw/games/box.html?&game_type=01&game_id=27&game_date=2020-04-30&date=2020-04-30&pbyear=2020');


preg_match_all("/<div class=\"t_cell\">.*?<\/div>/", $text, $match);

if (count($match[0])>0) {
    //逐筆印出
    foreach ($match[0] as $key => $value) {
        echo $value;
    }
}else{
	echo "無資料";
}

?>


</body>
</html>
