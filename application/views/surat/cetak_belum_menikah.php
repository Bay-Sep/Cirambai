<style type="text/css">
@media print and (width: 21cm) and (height: 33cm) {
    @page {
        margin: 1cm;
    }
}

.tabelku {
    border: 1px solid black;
    border-collapse: collapse;
    padding: 2px;
}
</style>
<style type="text/css" media="print">
@page {
    size: portrait;
}
</style>
<img src="<?php echo base_url('assets/images/kop-surat.png'); ?>" width="100%" height="30%">
<br /><br /><br />
<center>
    <font size="5"><u><b>SURAT KETERANGAN DESA</b></u></font><br />Nomor:
    145/<?php echo $belum_menikah->id_belum_menikah; ?>/DS/<?php echo substr($belum_menikah->tanggal_belum_menikah, 0, 4); ?>
</center>
<br /><br /><br />
<font align="justify">
    Yang bertanda tangan dibawah ini , Kepala Desa Rambai Kecamatan Pariaman Selatan Kota Pariaman Provinsi Jawa
    Barat
</font>
<table width="100%">
    <tr>
        <td width="20%">Nama Lengkap</td>
        <td width="3%">:</td>
        <td width="77%"><?php echo $belum_menikah->nama; ?></td>
    </tr>
    <tr>
        <td>NIK</td>
        <td>:</td>
        <td><?php echo $belum_menikah->nik; ?></td>
    </tr>
    <tr>
        <td>Tempat/Tanggal Lahir</td>
        <td>:</td>
        <td><?php echo $belum_menikah->tempat_lahir; ?> /
            <?= date('d F Y', strtotime($belum_menikah->tanggal_lahir)); ?></td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td><?php echo $belum_menikah->jenis_kelamin; ?></td>
    </tr>
    <tr>
        <td>Pekerjaan</td>
        <td>:</td>
        <td><?php echo $belum_menikah->pekerjaan; ?></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><?php echo $belum_menikah->alamat; ?></td>
    </tr>
</table>
<br /><br />
<center>Adalah benar warga kami, dan nama tersebut diatas berstatus :<br />--------------------- <b>BELUM KAWIN</b>
    ---------------------</center>
<font align="justify">
    Demikian Surat Keterangan ini dibuat dengan sebenarnya, untuk dapat dipergunakan sesuai keperluannya serta agar yang
    berkepentingan menjadi maklum.<br /><br /><br />
</font>
<table width="100%">
    <tr>
        <td width="50%"></td>
        <td width="50%">
            <center>Rambai, <?= date('d F Y', strtotime($belum_menikah->tanggal_belum_menikah)); ?></center>
        </td>
    </tr>
    <tr>
        <td>
            <center>Yang Bersangkutan</center>
        </td>
        <td>
            <center>Kepala Desa Rambai</center>
        </td>
    </tr>
    <tr>
        <td></td>
        <td>
            <center>Kecamatan Pariaman Selatan</center>
        </td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>
            <center><b><u><?php echo $belum_menikah->nama; ?></u></b></center>
        </td>
        <td>
            <center><b><u><?php echo $belum_menikah->nama_pejabat; ?></u></b></center>
        </td>
    </tr>
    <tr>
        <td></td>
        <td>
            <center>NIP. <?php echo $belum_menikah->nip_pejabat; ?></center>
        </td>
    </tr>
</table>
<script>
window.print();
</script>