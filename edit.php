<?php
require 'fungsi.php';
?>
<html>
<body>
<form method="post">

<?php    

<?php 
$datastock = mysqli_query($conn, "select*from barang where id='".$_GET['id']."'");
$data=mysqli_fetch_array($datastock);
$id = $data['id'];
    $namabarang = $data['nama_barang'];
    $jumlahstock = $data['jumlah_stock'];
?>
<table border="0">
<input type="text" name="id" value="<?=$id;?>" hidden/>

<tr>
    <td>Nama Barang</td>
    <td><input type="text" name="nama" value="<?=$namabarang;?>"/></td>    
</tr>
<tr>
<td>Stock Barang</td>
<td><input type="text" name="stock" value="<?=$jumlahstock;?>"/></td>    
</tr>
    <tr>
<td colspan="2" align="center"><button type ="submit" name="editstock">Submit</button> </td>
</tr>
</table>
</form>
</body>
</html>