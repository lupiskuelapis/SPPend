<!DOCTYPE html>
<html>
<head>
  <title>Laporan Pembayaran</title>
</head>
<body>

    <p>Laporan Pembayaran Siswa. Ini Merupakan Bukti Laporan Pembayaran. Silahkan Print sebagai Bukti kepada bagian keuangan sekolah</p>
    <table width="100%" border="1px">
      <tr>
        <th>Id Pembayaran</th>
        <th>Id Petugas</th>
        <th>Nama Siswa</th>
        <th>NISN</th>
        <th>Tanggal Bayar</th>
        <th>Id SPP</th>
        <th>Nominal</th>
      </tr>

      <?php
      $no= 1;
      foreach ($pembayaran as $mhs): ?>

      <tr>
        <td><?php echo $mhs->id_pembayaran ?></td>
        <td><?php echo $mhs->id_petugas ?></td>
        <td><?php echo $mhs->nama_siswa ?></td>
        <td><?php echo $mhs->nisn ?></td>
        <td><?php echo $mhs->tgl_bayar ?></td>
        <td><?php echo $mhs->id_spp ?></td>
        <td><?php echo $mhs->nominal ?></td>

      </tr>

    <?php endforeach; ?>
  </table>

  </body>
  </html>