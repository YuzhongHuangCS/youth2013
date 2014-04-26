<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
	<title>2013年度浙江大学青年岗位能手风采展示</title>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<!--[if lt IE 9]>
		<script src="js/IE9.js"></script>
		<script src="js/PIE.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="css/style.css">
</head>
<body class="font-hei" onload="winnerListControl()">
	<?php
		require('php/banner.php');
	?>

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
					$content .= '<li><a href="detail.php?p=' . $row['id'] . '"><p>' . $row['title'] . '</p><p>' . $row['subtitle'] . '</p></a></li>';
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
				$content .= '<img class="album" src="' . $row['album'] . '">';
				$content .= $row['detail'];

				echo($content);
			?>
		</div>
	</div>

<?php
	require('php/footer.php');
?>
<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>