<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
	<title>2013年度浙江大学“青年岗位能手”事迹展</title>
	<meta name="keywords" content="2013年度浙江大学青年岗位能手, 视频" >
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<link rel="stylesheet" href="css/style.css">
	<!--[if lt IE 9]>
		<script src="js/IE9.js"></script>
	<![endif]-->
	<script src="jwplayer/jwplayer.js"></script>
	<script>jwplayer.key="JP1TQQO7k/D2GehXErMBy4/PDqp9JqxfkW5bIA==";</script>
</head>
<body class="font-hei">
	<?php
		require('php/banner.php');
		
		$videoID = filter_input(INPUT_GET, "v", FILTER_SANITIZE_NUMBER_INT);
		if($videoID != 2){
			$videoID = 1;
		}
		
		$content = '
		<div id="detail">
			<div id="winnerList">
				<p id="title">2013年度十佳青年岗位能手采访纪实</p>
				<div id="side"></div>
				<ul>
					<a href="video.php?v=1"><li><p>以联络促发展，以尝试善自我</p><p>——记发展联络办公室鲁小双老师</p></li></a>
					<a href="video.php?v=2"><li><p>“做病人眼中最好的自己”</p><p>——记校医院詹慧芳护士</p></li></a>
				</ul>
			</div>
			<div id="detailBody">';
				if($videoID == 1){
					$content .= '<p class="title">以联络促发展，以尝试善自我</p><p class="subtitle">——记发展联络办公室鲁小双老师</p>';
				} else{
					$content .= '<p class="title">“做病人眼中最好的自己”</p><p class="subtitle">——记校医院詹慧芳护士</p>';
				};
				$content .='
				<div id="jwvideo">正在加载视频...</div>
			</div>
		</div>';

	$content .=
	'<script>
		jwplayer("jwvideo").setup({
        file: "video/' . $videoID . '.webm",
        image: "video/' . $videoID . '.jpg",
        height: 576,
        width: 720
    });
	</script>';
	echo($content);

	require('php/footer.php');
?>
<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>