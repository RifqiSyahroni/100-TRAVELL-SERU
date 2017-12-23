<?php
include 'koneksi.php';
$xemail = $_GET['kode'];

$query = mysql_query("SELECT * FROM pesanan Where email = '$xemail'");

$data = mysql_fetch_array($query);
?>



<form action="view2.php" method="POST" />
<center>       <b> Syahroni Music Store (Pesanan) </b> <br>

 </br>

<table>
 <tr>
       <td> Email </td>
       <td> : </td>
       <td><input type="text" name="email" value="<?php echo $data['email'];?>" readonly="readonly" />  </td>
 </tr>

<tr>
       <td> Nama </td>
       <td> : </td>
       <td><input type="text" name="nama" value="<?php echo $data['nama'];?>" readonly="readonly" />  </td>
 </tr>

 <tr>
       <td> Tipe Dan Jenis </td>
       <td> : </td>
       <td><input type="text" name="tipe" value="<?php echo $data['tipe'];?>" readonly="readonly" />  </td>
 </tr>

 <tr>
       <td> Alamat </td>
       <td> : </td>
       <td><input type="text" name="alamat" value="<?php echo $data['alamat'];?>" readonly="readonly" />  </td>
 </tr>

 <tr>
       <td> Provinsi </td>
       <td> : </td>
       <td><input type="text" name="provinsi" value="<?php echo $data['provinsi'];?>" readonly="readonly" />  </td>
 </tr>

 <tr>
       <td> Kecamatan </td>
       <td> : </td>
       <td><input type="text" name="kecamatan" value="<?php echo $data['kecamatan'];?>" readonly="readonly" />  </td>
 </tr>

<tr>
       <td> No HandPhone </td>
       <td> : </td>
       <td><input type="text" name="nohp" value="<?php echo $data['nohp'];?>" readonly="readonly" />  </td>
 </tr>

<tr>
       <td> Metode Pembayaran </td>
       <td> : </td>
       <td><input type="radio" name="pembayaran" Value="Transfer" <?php if($data['pembayaran']=='Transfer') echo "checked";?>>Transfer
               <input type="radio" name="pembayaran" Value="Credit Card" <?php if($data['pembayaran']=='Credit Card') echo "checked";?>>Credit Card
               <input type="radio" name="pembayaran" Value="Cash Or Delivery" <?php if($data['pembayaran']=='Cash Or Delivery') echo "checked";?>>Cash Or Delivery
               </td>
 </tr>

 <tr>
       <td colspan="3">
       <input type="submit" value="Simpan"/>
       <input type="reset" value="Batal"/>  
  </td>
 </tr>





</table>
</form>