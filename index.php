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
		<?php
			$kn = mysqli_connect("localhost","root","vertrigo") or die ("LỖI KẾT NỐI ĐẾN HỆ QUẢN TRỊ MYSQL");
			mysqli_select_db($kn,"qlnv") or die ("Không kết nối được vơi CSDL");
			$sql = "SELECT * FROM thongtin";
			$kq = mysqli_query($kn, $sql);
			if (mysqli_num_rows($kq) <> 0)
			{

				while ($row = mysqli_fetch_array($kq))       
				{
					$maNV = $row['MaNV'];
					$hoTen = $row['HoTen'];
					$anh = $row['Anh'];
					$luong = $row['Luong'];
					$luong = number_format($row['Luong'],0,'.','.');
					echo "<div class='sanpham'>
					<div class='anhsp'><img src='$anh' width='80%'></div>
					<div class='tensp'><p>$hoTen</p></div>
					<div class='giasp'><p>Lương: $luong VND</p></div>
					<div class='chitietsp'><a href='./chitiet.php?maNV=$maNV'>Xem Chi Tiết Nhân Viên $hoTen</a></div>
					</div>";
				} 
			}
			else
			{
				echo "Không có bản ghi nào";
			}
			mysqli_free_result($kq);
			mysqli_close($kn);
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