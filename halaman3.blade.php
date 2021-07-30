<!DOCTYPE html>
<html>
	<head>
		<title>halaman1</title>
	<style type="text/css">
.box-login{
	background: #FFFFCC;
	width: 450px;
	padding: 20px;
	border-radius: 10px;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
}

.background{
	background: rgb(63,94,251);
	background: radial-gradient(circle, rgba(63,94,251,1) 0%, rgba(252,70,107,1) 100%);
}

body{
	font: 16px/28px'Open Sans', small-caption;
	background-image: url('background 2.jpeg');
	background-position: center;
	color: #000000;
	width: 1335px;
}

.header{
	width: 99%;
	height: 100px;
	background-color: #FFE4E1;
	padding: 8px;
}

.header img{
	padding: 5px;
	float: left;
	margin-left: 20px;
}

.header h1{
	margin-top: 35px;
	margin-left: 520px;
}	

.menu{
	background-color: #ADD8E6;
	margin:-14px;
	margin-left: 0px;
	margin-right: 0px;


}

.menu ul li{
	display: inline-block;
	margin-top: 8px;
	margin-bottom: 8px;
	margin-right: -1010px;
	background-color: #FFFACD;
	padding: 2px;
	margin-left: 1220px;

}

.menu a{
	text-decoration: none;
	color: #000000;
	padding: 10px;
}

.menu a:hover{
	background-color: #CCCCFF;
	color: #FFFFFF;
}

.content{
	background-color: #D8BFD8;
	width: 990px;
	height: auto;
	padding: 10px;
	float: right;
	margin-top: 3px;
}

.content img{
	float: left;
	margin-right: 10px;
}

.beritabaru{
	background-color: #E0FFFF;
	width: 300px;
	height: auto;
	font: 16px/28px;
	padding: 10px;
	float: left;
	margin-top: 3px;
}

.beritabaru h5{
	background-color: #F5F5DC;
}

.beritabaru a{
	text-orientation: none;
	color:#000000;
	padding: 10px;
}

.beritabaru a:hover{
	background-color: #FF9966;
	color: #FFFFFF;
}

.next{
	background-color: #40E0D0;
	margin-top: 250px;
	font-size: 20px;
}

.next a:hover{
	background-color: #40E0D0;
	color: #FFFFFF;
}

	</style>
</head>
	<body>
		<div class="header">
			<h1 class="judul">Halaman Admin</h1>
		</div>

		<div class="menu">
			<ul>
				
				<li><a href="../logout.php">Logout</a></li>
			</ul>
		</div>

		<div class="beritabaru">
			<ul>
                <li><a href="#">Posting</a></li>
                <li><a href="#">Categories</a></li>
				<li><a href="#">Coments</a></li>
				<li><a href="../logout.php">Logout</a></li>

			</ul>
		</div>

		<div class="content">
			
		<p><h2>Title Post</h2>

			Isi Berita</p>

		<p><h2>Title Post</h2>

			Isi Berita</p>
			
		</div>

		
	</body>
</html>