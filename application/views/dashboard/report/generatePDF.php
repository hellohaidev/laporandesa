<?php
 
 if ( function_exists( 'date_default_timezone_set' ) ) {
     date_default_timezone_set('Asia/Jakarta');
 }
 
 ?>	

<style>
    table {
        padding: 5px;
    }
     th {
        border: 1px solid #444;
    }
    td {
        border: 1px solid #444;
    }

</style>

<img src="assets/img/logo.png" style="margin-left:32%;"/>
<h1 style="text-align: center;">Laporan Update Desa Kabupaten Bogor</h1>

<table>
    <thead>
        <tr>
            <th>Tanggal Laporan</th>
            <th>Nama Desa</th>
            <th>Link Desa</th>
            <th>Status Desa</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($report_pdf as $item) 
    {  
        $tgl = $item->tgl_laporan;
        $tanggal = date('d-m-Y',strtotime($tgl));
        if($item->status_desa == 1){
            $statusLaporan = "Sudah di Update";
        }
        if($item->status_desa == 2){
            $statusLaporan = "Belum di Update";
        }
    ?>
			
		<tr>
			<td><?php echo $tanggal ?></td>
            <td><?php echo $item->nama_desa; ?></td>
            <td><?php echo $item->link_desa; ?></td>
			<td><?php echo $statusLaporan; ?></td>
			
		</tr>

    <?php } ?>
    </tbody>
	
</table>