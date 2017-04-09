<meta http-equiv="Content-type" content="text/html;charset=utf-8"/>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/index.css">
	</head>
	<body>
		<div id=app1 class=app>
			<h1>막장채팅</h1>
			<form name="upload-form" action="upload.php" method="post" enctype="multipart/form-data">
				<input type="hidden" name="MAX_FILE_SIZE" value="25242880"/>
				<input type="file" name="upload" id="upload"/>
				<input type="hidden" name="no" value="1"/>
				<input type=submit value='이미지업로드' class=btn>
			</form>
			<img class=img id=img1 align=middle onclick='imgclick(this)'>
			<input type=text id=url1 class=url>
			<div class=btn onclick='update(1)'>수정</div>
		</div>
		<div id=app2 class=app>
			<h1>불타는채팅</h1>
			<form name="upload-form" action="upload.php" method="post" enctype="multipart/form-data">
				<input type="hidden" name="MAX_FILE_SIZE" value="25242880"/>
				<input type="file" name="upload" id="upload"/>
				<input type="hidden" name="no" value="2"/>
				<input type=submit value='이미지업로드' class=btn>
			</form>
			<img class=img id=img2 align=middle onclick='imgclick(this)'>
			<input type=text id=url2 class=url>
			<div class=btn onclick='update(2)'>수정</div>
		</div>
		<div id=app3 class=app>
			<h1>썸타는연애</h1>
			<form name="upload-form" action="upload.php" method="post" enctype="multipart/form-data">
				<input type="hidden" name="MAX_FILE_SIZE" value="25242880"/>
				<input type="file" name="upload" id="upload"/>
				<input type="hidden" name="no" value="3"/>
				<input type=submit value='이미지업로드' class=btn>
			</form>
			<img class=img id=img3 align=middle onclick='imgclick(this)'>
			<input type=text id=url3 class=url>
			<div class=btn onclick='update(3)'>수정</div>
		</div>
		<div id=app4 class=app>
			<h1>유부클럽</h1>
			<form name="upload-form" action="upload.php" method="post" enctype="multipart/form-data">
				<input type="hidden" name="MAX_FILE_SIZE" value="25242880"/>
				<input type="file" name="upload" id="upload"/>
				<input type="hidden" name="no" value="4"/>
				<input type=submit value='이미지업로드' class=btn>
			</form>
			<img class=img id=img4 align=middle onclick='imgclick(this)'>
			<input type=text id=url4 class=url>
			<div class=btn onclick='update(4)'>수정</div>
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script type="text/javascript" src="js/index.js"></script>
	</body>
</html>
