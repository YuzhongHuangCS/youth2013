<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
	<title>2013年度浙江大学“青年岗位能手”事迹展</title>
	<meta name="keywords" content="2013年度浙江大学青年岗位能手, 青年岗位能手, 浙江大学青年岗位能手, 2013年度青年岗位能手,  2013年度浙江大学青年岗位能手风采展示，浙江大学团委, 求是青年, 共青团浙江大学委员会" >
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
	<img src="img/banner.jpg" id="banner">

	<div class="intro" id="upIntro">
		<div class="introWrapper">
			<p class="introTitle font-song">导语</p>
			<hr />
			<p>青春不息，追求不止。青年岗位能手评选活动，自11月下旬启动，经过广泛发动、逐级推荐、组织评选、网上公示等环节，从各基层团组织、工会组织的申报人员中最终产生了十位在学校教学科研、党政管理、后勤服务与医疗卫生等岗位表现突出的一线教职员工。他们立足本职岗位发挥生力军作用，他们甘于奉献、兢兢业业，在浙大建设世界一流大学的进程中贡献着最美的青春力量！</p>
		</div>
	</div>

	<table id="gallery">
	<?php
		require('init.php');
		$sql = 'SELECT id, title, subtitle, cover, summary FROM youth ORDER BY id LIMIT 10';
		$result = mysql_query($sql, $con);
		mysql_close($con);
		$content = '';
		$currentColumn = 1;

		while($row = mysql_fetch_assoc($result)){
			if($currentColumn == 1){
				$content .= '<tr>';
			}
			$content .= '<td class="wrapper">';
			$content .= 	'<div class="title">';
			$content .= 		'<a href="detail.php?p=' . $row['id'] . '">'; 
			$content .=			'<p>' . $row['title'] . '</p>';
			$content .= 		'<p>' . $row['subtitle'] . '</p></a>';
			$content .= 	'</div>';
			$content .= 	'<hr />';
			$content .= 	'<a href="detail.php?p=' . $row['id'] . '"><img src="' . $row['cover'] . '"></a>';
			$content .= 	'<div class="summary">';
			$content .= 		'<p>' . $row['summary'] . '</p>';
			$content .= 	'</div>';
			$content .= '</td>';
			if($currentColumn == 3){
				$content .= '</tr>';
				$currentColumn = 0;
			}
			$currentColumn++;
		};
		$content .= '<td colspan="2" class="wrapper" id="more">';
		$content .= 		'<a href="detail.php?p=31"><p>全部31位“青年岗位能手”名单</p></a>';
		$content .= 		'<a href="detail.php?p=31"><div class="imgWrapper"><img src="img/right.png"></div></a>';
		$content .= '</td>';
		$content .= '</tr>';
		echo($content);
	?>	
	</table>

	<div class="intro" id="downIntro">
		<div class="introWrapper">
			<p class="introTitle font-song">结语</p>
			<hr />
			<p>时光荏苒，光阴匆匆。挥手告别过去的成就，在未来的路上我们还会越走越宽广，因为我们有着这样优秀的“青春榜样”！奋斗抒写精彩人生，青春描绘伟大梦想，奋斗的青春最美丽！</p>
		</div>
	</div>

	<div id="footer">
		<p>版权所有 共青团浙江大学委员会</p>
		<p>地址：浙江大学紫金港校区小剧场B座317室 邮编：310058 电话：0571-88206671 传真：0571-88206672</p>
	</div>

</body>
</html>
