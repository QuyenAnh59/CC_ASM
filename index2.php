<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	

	<style type="text/css">	

		.wrapper{
			width: 1200px;
			margin: auto;
			height: auto;
		}
		.header{
			height: 50px;			
			margin: auto;
		}
		.header img{
			float: left;
			padding: 5px;
		}
		#form-search{
			padding-top: 10px;
		}
		#form-search input[type=text]{
			width: 300px; height: 30px;
		}
		#form-search input[type=submit]{
			height: 30px;
		}
		.menu{
			height: 30px;
			background-color: rgb(106, 90, 205);
		}
		.menu ul li{
			list-style: none;
			text-align: center;
			display: inline-table;
		}
		.menu ul li a{
			text-decoration: none;
			font-size: 16px;
			margin: 30px;
			padding: 5px;
			text-transform: uppercase;
		}
		.content{
			height: 800px;
			
		}
		.left{
			width: 20%;
			background-color: rgb(255, 165, 0);
			float: left;
			height: 800px;
			
		}
		.left>p{
			background: white;
			font-size: 22px;
			font-family: arial;
			text-align: center;
		}
		.category ul li{
			list-style: none;
		}
		.category ul li a{
			color: white;			
			font-size: 20px;
			text-decoration: none;
			font-family: Comic Sans Ms;
		}
		.category a:hover{
			text-decoration: underline;
		}
		.brand ul li{
			list-style: none;
		}
		.brand ul li a{
			color: white;			
			font-size: 20px;
			text-decoration: none;
			font-family: Comic Sans Ms;
			
		}
		.brand a:hover{
			text-decoration: underline;
		}
		.right{

			width: 80%;
			height: 800px;
			background-color: gray;
			float: right;			 
		}
		.right >p{
			text-align: center;
			font-size: 20px;
		}
		.single-product{	
		   float: left;		
			margin-left: 30px ;
		}
		.single-product img{
			border: 2px solid black;
		}
	</style>
</head>
<body>
<!--dùng thẻ div để phân chia bố cục -->
<div class="wrapper">
	<div class="header">
		<img src="Img/bg.jfif" width="55px" height="55px">
		<div id="form-search">
			<form>
				<input type="text" name="" placeholder="Tim kiem thong tin tai day">
				<input type="submit" name="">
			</form>
		</div>
	</div>
	 <div class="banner">        
      	<img src="Img/bg2.jfif" width="1200px" height="200px" alt="Slideshow Image 1" />
       </div>         
	<div class="menu">
		<ul>
			<li><a href=""> Trang chủ </a></li>
			<li><a href=""> Giới thiệu </a></li>
			<li><a href=""> Đăng nhập </a></li>
			<li><a href=""> Đăng ký tài khoản </a></li>
			<li><a href=""> Liên hệ </a></li>
		</ul>
	</div>
	<div class="content">
		<!-- Nếu sử dụng layout 2 cột thì phần content chúng ta chia làm 2-->
		<div class="left">
			<p> Loại sản phẩm </p>
			<div class="category"> 
				<ul>
					<li><a href=""> Máy ảnh </a></li>
					<li><a href=""> LapTop </a></li>
					<li><a href=""> Gimbal </a></li>
				</ul>
			</div>
			<p> Thương hiệu </p>
			<div class="brand"> 
				<ul>
					<li><a href=""> Karok </a></li>
					<li><a href=""> Nikon </a></li>
					<li><a href=""> Asus </a></li>
					<li><a href=""> MSI</a></li>
				</ul>
			</div>
		</div>
		<div class="right">
			<!-- Hiển thị sản phẩm ở đây-->
			<p> Tất cả sản phẩm </p>
			<div class="product">
				<?php 
				$connect = mysqli_connect('localhost','root','','mydb');
				if(!$connect){
					echo "Kết nối thất bại";
				}
				$sql="SELECT * FROM product";

				$result = mysqli_query($connect,$sql);

				//Tìm và trả về kết quả dưới dạng 1 mảng và lấy từng dòng dữ liệu

				while($row = mysqli_fetch_array($result)){

					//lấy ra từng dòng dữ liệu truy vấn được và hiển thị
					//$row['product_id'];
					//$row['product_name'];
					//$row['product_img'];
					//$row['product_price'];
					?>
					<div class="single-product">
					<h3 > <?php echo $row['Product Name'] ?> </h3>
					<img src="img/<?php echo $row['Product Img'] ?>" width="180px" height="180px">
					<p> <b> Giá tiền: <?php echo $row['Product Price'] ?> </b> </p>
					<a href=""> Chi tiết</a>
				</div>
				<?php
				}
				?>
				
				
			</div>
		</div>
	</div>
	<div class="footer">
	</div>

</div>
</body>
</html>