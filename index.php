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

	<div class="intro" id="upIntro">
		<p class="introTitle">导语</p>
		<hr />
		<p>青春不息，追求不止。青年岗位能手评选活动，自11月下旬启动，经过广泛发动、逐级推荐、组织评选、网上公示等环节，从各基层团组织、工会组织的申报人员中最终产生了十位在学校教学科研、党政管理、后勤服务与医疗卫生等岗位表现突出的一线教职员工。他们立足本职岗位发挥生力军作用，他们甘于奉献、兢兢业业，在浙大建设世界一流大学的进程中贡献着最美的青春力量！</p>
	</div>

	<div id="gallery">
	<?php
		require('init.php');
		$sql = 'SELECT id, title, subtitle, cover, summary FROM youth ORDER BY id';
		$result = mysql_query($sql, $con);
		mysql_close($con);
		$content = '';

		while($row = mysql_fetch_assoc($result)){
			$content .= '<div class="wrapper">';
			$content .= 	'<div class="title" href="www.sogou.com">';
			$content .= 		'<a href="detail.php?p=' . $row['id'] . '">'; 
			$content .=			'<p>' . $row['title'] . '</p>';
			$content .= 		'<p>' . $row['subtitle'] . '</p></a>';
			$content .= 	'</div>';
			$content .= 	'<hr />';
			$content .= 	'<a href="detail.php?p=' . $row['id'] . '"><img src="' . $row['cover'] . '"></a>';
			$content .= 	'<div class="summary">';
			$content .= 		'<p>' . $row['summary'] . '</p>';
			$content .= 	'</div>';
			$content .= '</div>';
		};

		echo($content);
	?>	
	</div>

	<div class="intro" id="downIntro">
		<p class="introTitle">结语</p>
		<hr />
		<p>时光荏苒，光阴匆匆。挥手告别过去的成就，在未来的路上我们还会越走越宽广，因为我们有着这样优秀的“青春榜样”！奋斗抒写无悔人生，青春描绘中国梦想，奋斗的青春最美丽！</p>
	</div>

	<div id="footer">
		<p>版权所有 共青团浙江大学委员会</p>
		<p>地址：浙江大学紫金港校区小剧场B座317室 邮编：310058 电话：0571-88206671 传真：0571-88206672</p>
	</div>

</body>
</html>