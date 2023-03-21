<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pham Trung Nguyen - Trang Chu</title>
	<link rel="stylesheet" type="text/css" href="./style.css">
</head>
<body id="gradient">
	<div class="square_box box_three"></div>
	<div class="square_box box_four"></div>
	<div class="square_box box_one"></div>
	<div class="square_box box_two"></div>
	<div class="container">
		<div class="banner"><img src="./images/banner.jpg" width="100%"></div>
		<div id="menu">
			<ul>
				<li><a href="./">Trang chủ</a></li>
				<li><a href="">Liên Hệ ⇓</a>
					<ul class="sub-menu">
						<li><a href="fb.com/phamtrungnguyen1806">Facebook</a></li>
						<li><a href="zalo.me/0388949981">Zalo</a></a></li>
					</ul>
				</li>
			</ul>
		</div>
		<div class='console-container'><span id='text'></span><div class='console-underscore' id='console'>&#95;</div></div>
		<br>
		<?php
    // kết nối CSDL
    // kết nối đến server
		$ketnoi = mysqli_connect("localhost","root","vertrigo") or die ("LỖI KẾT NỐI ĐẾN HỆ QUẢN TRỊ MYSQL");
    //kết nối CSDL
		mysqli_select_db($ketnoi,"qlnv") or die ("Không kết nối được vơi CSDL");
		$maNV = $_REQUEST["maNV"];
		$sql = "SELECT * FROM thongtin where MaNV='$maNV'";
		$ketqua = mysqli_query($ketnoi, $sql);
		if (mysqli_num_rows($ketqua) <> 0)
		{

			while ($row = mysqli_fetch_array($ketqua))       
			{
				$quequan = $row['QueQuan'];
				$tenSP = $row['HoTen'];
				$anh = $row['Anh'];
				$gia = $row['Luong'];
				$gia = number_format($row['Luong'],0,'.','.');
				echo "<div class='thongtinsp'>
				<div class='anhspthongtin'><img src='$anh' width='80%'></div>
				<div class='tenspthongtin'><p>$tenSP</p></div>
				<div class='motasp'>
				<h2>Thông Tin Nhân Viên</h2>
				<p><b>Quê Quán:</b>$quequan</p>
				<p><b>Lương:</b>$gia</p>
				<hr>
				<a href='./'>Quay Lại Trang Chủ</a>
				</div>
				</div>";
			} 
		}
		else
		{
			echo "Không có bản ghi nào";
		}
		mysqli_free_result($ketqua);
		mysqli_close($ketnoi);	
		?>
		<footer class="footer">
			<nav class="nav-link">
				<a href="/">Trang Chủ</a> | <a href="#">Điều khoản &amp; điều kiện</a> | <a href="#">Liên Hệ</a>
			</nav>
			<p>
				<p id="footer"></p>
			</p>

		</footer>
	</div>
</body>
<script type="text/javascript" src="./java.js"></script>
</html>