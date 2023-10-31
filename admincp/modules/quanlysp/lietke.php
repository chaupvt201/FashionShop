<?php
$sql_lietke_sp = "SELECT * FROM tbl_sanpham, tbl_danhmuc WHERE tbl_sanpham.id_danhmuc = tbl_danhmuc.id_danhmuc ORDER BY id_sanpham DESC"; 
$query_lietke_sp = mysqli_query($mysqli,$sql_lietke_sp); 
?>
<p>Liet ke danh muc san pham </p> 
<table style="width:100%" border="1" style="border-collapse:collapse;"> 
<tr> 
    <th>Id</th>
    <th>Ten san pham</th> 
    <th>Hinh anh</th> 
    <th>Gia sp</th> 
    <th>So luong</th> 
    <th>Danh muc</th>
    <th>Ma sp</th> 
    <th>Tom tat</th> 
    <th>Trang thai</th> 
    <th>Quan ly</th> 
</tr> 
<?php
$i =0; 
while($row = mysqli_fetch_array($query_lietke_sp)){ 
    $i++;
?>
<tr> 
    <td><?php echo $i ?></td>
    <td><?php echo $row['tensanpham']?></td> 
    <td><img src="modules/quanlysp/upload/<?php echo $row['hinhanh']?>" width="150px"></td> 
    <td><?php echo $row['giasp']?></td> 
    <td><?php echo $row['soluong']?></td> 
    <td><?php echo $row['tendanhmuc']?></td> 
    <td><?php echo $row['masp']?></td> 
    <td><?php echo $row['tomtat']?></td> 
    <td><?php if($row['tinhtrang']==1){
        echo 'Kich hoat'; 
    }else{
        echo 'An'; 
    } ?>
        </td>
    <td>
        <a href="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham']?>">Xoa</a> | <a href="?action=quanlysp&query=sua&idsanpham=<?php echo $row['id_sanpham']?>">Sua</a>
    </td>
</tr> 
<?php
}
?>
</table>