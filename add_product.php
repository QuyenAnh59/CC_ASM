<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<!-- làm giống form đăng ký tài khoản -->
<form method="POST" enctype="multipart/form-data">
	<table>
		<tr> 
			<td> Product ID</td>
			<td><input type="text" name="product_id"> </td>
		</tr>
		<tr> 
			<td> Product Name</td>
			<td><input type="text" name="product_name"> </td>
		</tr>
		<tr> 
			<td> Product Price</td>
			<td><input type="text" name="product_price"> </td>
		</tr>
		<tr> 
			<td> Product Img</td>
			<td><input type="file" name="product_img"> </td>
		</tr>
		<tr> 
			<td> </td>
			<td><input type="submit" name="add_product" value="Thêm"> </td>
		</tr>
	</table>
	
</form>

<?php 
$connect = mysqli_connect('localhost','root','','mydb');
				if(!$connect){
					echo "Kết nối thất bại";
				}

				if(isset($_POST['add_product'])){
					$product_id = $_POST['product_id'];
					$product_name = $_POST['product_name'];
					$product_price = $_POST['product_price'];
					//Lấy ảnh từ thư mục bất kỳ của máy tính
					$product_img = $_FILES['product_img']['name'];
					// di chuyển ảnh từ thư mục bất kỳ sang thư mục tmp_name của htdoc
					$product_img_tmp = $_FILES['product_img']['tmp_name'];

					// Đưa ảnh từ thư mục tmp sang thư mục cần lưu 
					move_uploaded_file($product_img_tmp, "Img/$product_img");

					//Thêm sản phẩm vào cơ sở dữ liệu
					$sql = "INSERT INTO product VALUES('$product_id','$product_name','$product_price','$product_img')";
					$result = mysqli_query($connect,$sql);
					if($result){
						echo"<script>alert('Thêm mới sản phẩm thành công') </script>";
						echo"<script> window.open('index2.php','_self') </script>";
					}
					else{
						echo"<script>alert('Thêm mới lỗi') </script>";
					}
				}
?>
</body>
</html>