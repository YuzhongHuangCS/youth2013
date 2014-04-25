<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
	<title>2013年度浙江大学青年岗位能手风采展示</title>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<link rel="stylesheet" href="css/style.css">
	<!--[if lt IE 9]>
		<script src="js/IE9.js"></script>
	<![endif]-->
</head>
<body class="font-hei">
	<div id="nav">
		<a href="http://www.youth.zju.edu.cn/" id="link">
			<span>求是青年 | 共青团浙江大学委员会</span>
		</a>
	</div>
	<img src="img/banner.jpg" onClick="location.href='index.php'" id="banner">

	<div id="detail">
		<div id="winnerList">
			<p id="title">2013年度十佳青年岗位能手</p>
			<div id="side"></div>
			<ul>
			<?php
				$postID = filter_input(INPUT_GET, "p", FILTER_SANITIZE_NUMBER_INT);
				require('php/init.php');

				$sql = 'SELECT id, title, subtitle FROM youth ORDER BY id';
				$result=$conn->query($sql);

				$content = '';
				while($row = $result->fetch_assoc()){
					$content .= '<li><a href="detail.php?p=' . $row['id'] . '"><p>' . $row['title'] . '</p><p>' . $row['subtitle'] . '</p></a>';
				};
				echo($content);

echo 		'</ul>';
echo 	'</div>';
echo	'<div id="detailBody" class="font-song">';

				if(!$postID){
					$postID = 1;
				}
				$sql = 'SELECT title, subtitle, album, detail FROM youth WHERE id = ' . $postID;
				$result=$conn->query($sql);

				$row = $result->fetch_assoc();
				$row['subtitle'] = explode(']', $row['subtitle']);
				$row['subtitle'] = '——记' . $row['subtitle'][1];

				$content  = '<p class="title font-hei">' . $row['title'] . '</p>';
				$content .= '<p class="subtitle font-hei">' . $row['subtitle'] . '</p>';
				$content .= '<img src="' . $row['album'] . '">';
				$content .= $row['detail'];

				echo($content);
			?>
		</div>
	</div>

	<div id="footer">
		<p>版权所有 共青团浙江大学委员会</p>
		<p>地址：浙江大学紫金港校区小剧场B座317室 邮编：310058 电话：0571-88206671 传真：0571-88206672</p>
	</div>

<script src="js/jquery-2.0.3.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>
