
<p>Gio hang</p>
<?php 
if(isset($_SESSION['dangky'])){
    echo "xin chao: ".'<span style="color:red">'.$_SESSION['dangky'].'</span>';
    echo $_SESSION['id_khachhang'];
}
?>
<?php 

?>
<table style="width:100%; text-align:center; border-collapse:collapse;" ,border="1">
    <tr> 
        <th>Id</th> 
        <th>Ma sp</th> 
        <th>Ten san pham</th> 
        <th>Hinh anh</th> 
        <th>So luong</th> 
        <th>Gia san pham</th> 
        <th>Thanh tien</th>
    </tr> 
    <?php 
    if(isset($_SESSION['cart'])){ 
        $i =0; 
        $tongtien = 0; 
        foreach($_SESSION['cart'] as $cart_item){ 
            $thanhtien = $cart_item['soluong']*$cart_item['giasp']; 
            $tongtien+=$thanhtien; 
            $i++;
    ?>
    <tr> 
        <td><?php echo $i; ?></td> 
        <td><?php echo $cart_item['masp']; ?></td> 
        <td><?php echo $cart_item['tensanpham']; ?></td> 
        <td><img src="admincp/modules/quanlysp/upload/<?php echo $cart_item['hinhanh']; ?>" width="150px"></td> 
        <td>
            <a href="pages/main/themgiohang.php?cong=<?php echo $cart_item['id'] ?>"><i class="fa fa-plus fa-style" aria-hidden="true"></i></a>
            <?php echo $cart_item['soluong']; ?>
            <a href="pages/main/themgiohang.php?tru=<?php echo $cart_item['id'] ?>"><i class="fa fa-minus fa-style" aria-hidden="true"></i></a>
        </td> 
        <td><?php echo number_format($cart_item['giasp'],0,',','.').'vnd'; ?></td> 
        <td><?php echo number_format($thanhtien,0,',','.').'vnd'; ?> </td> 
        <td><a href="pages/main/themgiohang.php?xoa=<?php echo $cart_item['id'] ?>">Xoa</a></td>
    </tr> 
<?php 
} 
?>
<tr>
<td colspan="8">
    <p style="float:left;">Tong tien: <?php echo number_format($tongtien,0,',','.').'vnd' ?></p><br/>
    <p style="float:right;"><a href="pages/main/themgiohang.php?xoatatca=1">Xoa tat ca </a></p>
    <div style="clear:both;"></div> 
    <?php 
    if(isset($_SESSION['dangky'])){
    ?>
    <p><a href="pages/main/thanhtoan.php">Dat hang</a></p> 
    <?php 
    }else{
    ?> 
    <p><a href="index.php?quanly=dangky">Dang ky dat hang</a></p>
    <?php 
    }
    ?>
</td>
</tr> 
<?php 
}else{
?>
<tr> 
    <td colspan="8"><p>Hien tai gio hang trong</p></td> 
</tr> 
<?php 
}
?>

</table>