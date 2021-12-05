<?php

include ("koneksi.php");
$query_view=mysqli_query($koneksi, "select * from form_cuti");

?>
</br>
<a href="input_cuti.php" class="" btn btn-danger">Kembali ke form cuti</a>
<table width="800" border="1">
    <tr>
        <td align='center'>No</td>
        <td align='center'>Nip</td>
        <td align='center'>Nama</td>
        <td align='center'>Departemen</td>
        <td align='center'>Jabatan</td>
        <td align='center'>Alasan Cuti</td>
        <td align='center'>Mulai Cuti</td>
        <td align='center'>Akhir Cuti</td>
        <td align='center'>Lama Cuti</td>
        <td align='center'>Hak Cuti</td>
        <td align='center'>Keterangan</td>
    </tr>

<?php
$setuju="menunggu persetujuan";
$no=1;
while ($tampil=mysqli_fetch_array($query_view)) { ?>
    <tr>
        <td align='center'><?php echo $no++;?></td>
        <td><?php echo $tampil['nip'];?></td>
        <td><?php echo $tampil['nama'];?></td>
        <td><?php echo $tampil['departemen'];?></td>
        <td><?php echo $tampil['jabatan'];?></td>
        <td><?php echo $tampil['alasan_cuti'];?></td>
        <td><?php echo $tampil['mulai_cuti'];?></td>
        <td><?php echo $tampil['akhir_cuti'];?></td>
        <td><?php echo $tampil['lama_cuti'];?></td>
        <td><?php echo $tampil['hak_cuti'];?></td>
        <td><?php echo $setuju;?></td>
    </tr>
<?php }?>
</table>