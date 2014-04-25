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
<body class="font-song">
	<?php
		require('php/banner.php');
	?>

	<div class="intro" id="upIntro">
		<div class="introWrapper">
			<p class="introTitle font-song">导语</p>
			<hr />
			<p>青春不息，追求不止。青年岗位能手评选活动，自11月下旬启动，经过广泛发动、逐级推荐、组织评选、网上公示等环节，从各基层团组织、工会组织的申报人员中最终产生了十位在学校教学科研、党政管理、后勤服务与医疗卫生等岗位表现突出的一线教职员工。他们立足本职岗位发挥生力军作用，他们甘于奉献、兢兢业业，在浙大建设世界一流大学的进程中贡献着最美的青春力量！ <a href="video.php" id="videoLink">[视频]</a></p>
		</div>
	</div>

	<table id="gallery">
	<?php
		require('php/init.php');
		$sql = 'SELECT id, title, subtitle, cover, summary FROM youth ORDER BY id LIMIT 10';
		$result = $conn->query($sql);

		$content = '';
		$currentColumn = 1;

		while($row = $result->fetch_assoc()){
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
		$content .= 		'<a><p>2013年度浙江大学“青年岗位能手”名单</p></a>';
		$content .=			'<table id="add"><tr><td>尤淑君</td><td>李&nbsp;&nbsp;&nbsp;&nbsp;航</td><td>李红涛</td><td>兰荣杰</td><td>谭&nbsp;&nbsp;&nbsp;&nbsp;荣</td><td>潘恩荣</td></tr><tr><td>宁凡龙</td><td>汤&nbsp;&nbsp;&nbsp;&nbsp;珂</td><td>黄晓艳</td><td>李庆华</td><td>王宏涛</td></tr><tr><td>仝维鋆</td><td>钟财军</td><td>毛旭明</td><td>于&nbsp;&nbsp;&nbsp;&nbsp;勇</td><td>何&nbsp;&nbsp;&nbsp;&nbsp;艳</td><tr></tr><td>李&nbsp;&nbsp;&nbsp;&nbsp;斌</td><td>丁&nbsp;&nbsp;&nbsp;&nbsp;玲</td><td>张&nbsp;&nbsp;&nbsp;&nbsp;慧</td><td>邵&nbsp;&nbsp;&nbsp;&nbsp;頔</td><td>牟星亮</td></tr><tr><td>何水平</td><td>杨利军</td><td>杨&nbsp;&nbsp;&nbsp;&nbsp;超</td><td>陈&nbsp;&nbsp;&nbsp;&nbsp;娇</td><td>徐&nbsp;&nbsp;&nbsp;&nbsp;文</td></tr><tr><td>边&nbsp;&nbsp;&nbsp;&nbsp;莉</td><td>陈大进</td><td>田燕萍</td><td>姚&nbsp;&nbsp;&nbsp;&nbsp;丹</td><td>倪&nbsp;&nbsp;&nbsp;&nbsp;红</td></tr></table>';
		$content .= 		'<a href="http://zupo.zju.edu.cn/redir.php?catalog_id=32186&object_id=2370890"><div id="imgWrapper"><img src="img/right.png"></div></a>';
		$content .= '</td>';
		$content .= '</tr>';
		echo($content);
	?>	
	</table>

	<div class="intro" id="downIntro">
		<div class="introWrapper">
			<p class="introTitle font-song">结语</p>
			<hr />
			<p>时光荏苒，光阴匆匆。挥手告别过去的成就，在未来的路上我们还会越走越宽广，因为我们有这样的最美的青春榜样！奋斗抒写精彩人生，青春描绘伟大梦想，奋斗的青春最美丽！</p>
		</div>
	</div>

<?php
	require('php/footer.php');
?>
</body>
</html>