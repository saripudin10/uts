<?php
include("koneksi.php");

if(isset($_POST['save'])){
$query_input=mysqli_query($koneksi,"insert into form_cuti(nip,nama,departemen,jabatan,alasan_cuti,mulai_cuti,akhir_cuti,lama_cuti,hak_cuti)
values(
'".$_POST['nip']."',
'".$_POST['nama']."',
'".$_POST['departemen']."',
'".$_POST['jabatan']."',
'".$_POST['alasan']."',
'".$_POST['mulai']."',
'".$_POST['akhir']."',
'".$_POST['lama']."',
'".$_POST['hak']."')");

if($query_input){
header('location:view_cuti.php');
}else{
	echo mysqli_error();
}
}
?>
<form method="POST">
<th>--FORM PENGAJUAN CUTI--</th>
<table class="table table-bordered" border="1">
    <tr>
		<td>Nip</td>
		<td><input type="text" name="nip" class="form-control"></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama" class="form-control"></td>
	</tr>
	<tr>
		<td>Departemen</td>
		<td><select name="departemen" name="departemen">
            <option value="HRD">HRD</option>
            <option value="Produksi">Produksi</option>
            <option value="Marketing">Marketing</option>
	<tr>
		<td>Jabatan</td>
		<td><select name="jabatan" name="jabatan">
            <option value="SPV">SPV</option>
            <option value="Manager">Manager</option>
            <option value="Leader">Leader</option>
            <option value="Staff">Staff</option>
            <option value="Admin">Admin</option>
	</tr>
    <tr>
		<td>Alasan Cuti</td>
		<td><input type="text" name="alasan" class="form-control"></td>
	</tr>
    <tr>
		<td>Mulai Cuti</td>
		<td><input type="date" name="mulai" class="form-control"></td>
	</tr>
    <tr>
		<td>Akhir Cuti</td>
		<td><input type="date" name="akhir" class="form-control"></td>
	</tr>
    <tr>
		<td>Lama Cuti</td>
		<td><input type="text" name="lama" class="form-control"></td>
	</tr>
	<tr>
		<td>Hak Cuti</td>
		<td><input type="text" name="hak" class="form-control"></td>
	</tr>
	<tr>
		<td><input type="submit" name="save" class="btn btn-danger"></td>
	</tr>
</table>
</form>