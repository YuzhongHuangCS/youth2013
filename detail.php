<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>2013年度浙江大学“青年岗位能手”事迹展</title>
	<link rel="stylesheet" href="css/style.css"/>
</head>
<body>
	<div id="nav">
		<a href="http://www.youth.zju.edu.cn/" id="link">
			<span>求是青年 | 共青团浙江大学委员会</span>
		</a>
	</div>
	<img src="img/banner.jpg" id="banner">

	<div id="detail">
		<div id="winnerList">
			<p id="title">2013年度青年岗位能手</p>
			<ul>
				<li><p>淡泊明志，宁静致远</p><p>——建工学院吕朝锋教授</p></li>
				<li><p>淡泊明志，宁静致远</p><p>——建工学院吕朝锋教授</p></li>
				<li><p>淡泊明志，宁静致远</p><p>——建工学院吕朝锋教授</p></li>
				<li><p>淡泊明志，宁静致远</p><p>——建工学院吕朝锋教授</p></li>
				<li><p>淡泊明志，宁静致远</p><p>——建工学院吕朝锋教授</p></li>
				<li><p>淡泊明志，宁静致远</p><p>——建工学院吕朝锋教授</p></li>
			</ul>
		</div>
		<div id="detailBody">
		<?php
			require('init.php');

			$postID = filter_input(INPUT_GET, "p", FILTER_SANITIZE_NUMBER_INT);
			$sql = 'SELECT id, title, subtitle, album, detail FROM youth WHERE id = ' . $postID;
			$result = mysql_query($sql, $con);
			mysql_close($con);
			$row = mysql_fetch_assoc($result);

			$content  = '<p class="title">' . $row['title'] . '</p>';
			$content .= '<p class="subtitle">' . $row['subtitle'] . '</p>';
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
</body>
</html>