<p>Chi tiet san pham</p>
<?php 
$sql_chitiet ="SELECT * FROM tbl_sanpham, tbl_danhmuc WHERE tbl_sanpham.id_danhmuc = tbl_danhmuc.id_danhmuc 
AND tbl_sanpham.id_sanpham ='$_GET[id]' LIMIT 1"; 
$query_chitiet = mysqli_query($mysqli,$sql_chitiet); 
while($row_chitiet = mysqli_fetch_array($query_chitiet)){
?> 
<div class="wrapper_chitiet">
<div class="hinhanh_sanpham">
    <img width="100%" src="admincp/modules/quanlysp/upload/<?php echo $row_chitiet['hinhanh'] ?>" >
</div> 
<form method="POST" action="pages/main/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham'] ?>">
<div class="chitiet_sanpham">
    <h3 style="margin:0">Ten san pham: <?php echo $row_chitiet['tensanpham'] ?></h3> 
    <p>Ma sp: <?php echo $row_chitiet['masp'] ?> </p> 
    <p>Gia sp: <?php echo number_format($row_chitiet['giasp']).'vnd' ?></p>
    <p>So luong: <?php echo $row_chitiet['soluong'] ?></p>
    <p>Ten danh muc: <?php echo $row_chitiet['tendanhmuc'] ?></p> 
    <p><input class="themgiohang" type="submit" name="themgiohang" value="Them gio hang"></p>
</div> 
</form>
</div>
<?php
}
?>