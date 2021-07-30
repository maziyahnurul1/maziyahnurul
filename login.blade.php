<!DOCTYPE html>
<html>
<head>
	<title>Form login</title>
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
	background:linear-gradient(to right, orange, #ec38bc, #7303c0, cyan);
  	color: black;
 	padding: 10rem 3rem;
  	margin: 4rem;
  	font-size: 20px;
  	text-align: left;
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
	margin-right: 50px;
	background-color: #FFFACD;
	padding: 2px;
	margin-left: -29px;

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


	</style>
</head>
<body class="background">

<form class="box-login" action="{{route('postlogin')}}" method="POST">
	{{csrf_field()}}
	<h1 align="center">LOGIN
</h1>
<table align="center">
	<tr>
		<td colspan="2">
			<label for="username">Username</label>
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<input type="text" name="name" id="username">
		</td>
	</tr>
	<td colspan="2">
		<label for="password">Password</label>
	</td>
</tr>
<tr>
	<td colspan="2">
		<input type="password" name="password" id="password">
	</td>
</tr>
<tr>
	<td>
		<button href="#">Cancel</button>
	</td>
	<td align="right">
		<input type="submit" name="submit" id="submit" value="Login">
	</td>
</tr>
</table>

</form>


</body>
</html>