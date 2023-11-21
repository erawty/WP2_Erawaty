<html>

<head>
    <title>Form Input Data Siswa</title>
    <style>
  .datasiswa {
    color: red;
    font-style: italic;
  }
  </style>
</head>
<body>
  <div class="datasiswa">
    <?php echo validation_errors(); ?>
  </div>
  <center>
    <form action="<?= base_url('datasiswa/cetak'); ?>" method="post">
      <table>
            <tr>
                <th colspan="3">
                    Form Input Data Siswa
                </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <th>Nama Siswa</th>
                <th>:</th>
                <td>
                    <input type="text" name="nama" id="nama">
                </td>
            </tr>
            <tr>
                <th>NIS</th>
                <td>:</td>
                <td>
                    <input type="text" name="nis" id="nis">
                </td>
            </tr>
            <tr>
                <th>Kelas</th>
                <td>:</td>
                <td>
                    <input type="text" name="kls" id="kls">
                </td>
            </tr>
            <tr>    
                <th>Tempat Lahir</th>
                <td>:</td>
                <td>
                    <input type="text" name="tpl" id="tpl">
                </td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td>:</td>
                <td>
                    <input type="text" name="tgl" id="tgl">
                </td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>:</td>
                <td>
                    <input type="text" name="alamat" id="alamat">
                </td>
            </tr>
            <tr>
                <th>JenisKelamin</th>
                <td>:</td>
                <td>
                    <input type="radio" name="jkl" value="Laki-laki"> Laki-laki<br>   
                    <input type="radio" name="jkl" value="Perempuan"> Perempuan<br>
                </td>    
            </tr>
            <tr>
                <th></th>
                <td>:</td>
                <td>
                    <select name="agama" id="agama">
                        <option value="">Pilih Agama</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katholik">Katholik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Buddha">Buddha</option>
                        <option value="khonghucu">khonghucu</option>
                        
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <input type="submit" value="Submit">
                </td>
            </tr>
        </table>
    </form>
 </center>
</body>

</html>