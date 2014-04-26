<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
	<title>2013年度浙江大学“青年岗位能手”事迹展</title>
	<meta name="keywords" content="2013年度浙江大学青年岗位能手, 视频" >
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<!--[if lt IE 9]>
		<script src="js/IE9.js"></script>
		<script src="js/PIE.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="css/style.css">
	<script src="jwplayer/jwplayer.js"></script>
	<script>jwplayer.key="JP1TQQO7k/D2GehXErMBy4/PDqp9JqxfkW5bIA==";</script>
</head>
<body class="font-hei" onload="winnerListControl()">
	<?php
		require('php/banner.php');
		
		$videoID = filter_input(INPUT_GET, "v", FILTER_SANITIZE_NUMBER_INT);
		if($videoID != 2){
			$videoID = 1;
		}
		
		$videos = array();
		$videos[1] = array(
			'title'		=> '以联络促发展，以尝试善自我',
			'subtitle'	=> '——记发展联络办公室鲁小双老师',
			'file'		=> 'http://youth2013-video.stor.sinaapp.com/lu.mp4',
			'image' 	=> 'img/cover7.jpg'
		);
		$videos[2] = array(
			'title'		=> '“做病人眼中最好的自己”',
			'subtitle'	=> '——记校医院詹慧芳护士',
			'file'		=> 'http://youth2013-video.stor.sinaapp.com/zhan.mp4',
			'image' 	=> 'img/cover9.jpg'
		);

		$content = '
		<div id="detail">
			<div id="winnerList">
				<p id="title">2013年度十佳青年岗位能手采访纪实</p>
				<div id="side"></div>
				<ul>';
				foreach ($videos as $key => $value) {
					$content .= '<a href="video.php?v=' . $key . '"><li><p>' . $value['title'] . '</p><p>' . $value['subtitle'] . '</p></li></a>';
				}
				$content .='
				</ul>
			</div>
			<div id="detailBody">';
				$content .= '<p class="title">' . $videos[$videoID]['title'] . '</p><p class="subtitle">' . $videos[$videoID]['subtitle'] . '</p>';
				$content .='
				<div id="jwvideo">正在加载视频...</div>
			</div>
		</div>';

	$content .=
	'<script>
		jwplayer("jwvideo").setup({
        file: "' . $videos[$videoID]['file'] . '",
        image: "' . $videos[$videoID]['image'] . '",
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