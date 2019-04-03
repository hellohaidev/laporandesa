
<?php if ($this->session->flashdata('report_delete')): ?>
  <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>
      <?php echo $this->session->flashdata('report_delete'); ?>
    </strong> 
  </div>
  <?php endif; ?>
  <?php if ($this->session->flashdata('report_edit')): ?>
  <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>
      <?php echo $this->session->flashdata('report_edit'); ?>
    </strong> 
  </div>
  <?php endif; ?>

<a href="<?php echo base_url()?>Dashboard" class="btn btn-primary">Home</a>

<table id="Tabledata" class="table">
    <thead>
        <tr>
            <th>Tanggal Laporan</th>
            <th>Nama Desa</th>
            <th>Status Laporan</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>
        <?php 
            foreach($data_laporan as $itemLaporan)
            {
                if($itemLaporan->status_desa == 1){
                    $statusLaporan = "Sudah di Update";
                }
                if($itemLaporan->status_desa == 2){
                    $statusLaporan = "Belum di Update";
                }
                
        ?>
        <tr>
            <td><?php echo $itemLaporan->tgl_laporan?></td>
            <td><?php echo $itemLaporan->nama_desa?></td>
            <td><?php echo $statusLaporan?></td>
            <td>
                <a href="<?php echo base_url() ?>Dashboard/editLaporan/<?php echo $itemLaporan->id_laporan ?>" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                <a href="<?php echo base_url() ?>Dashboard/deleteLaporan/<?php echo $itemLaporan->id_laporan ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
            </td>
        </tr>
        <?php
            }
        ?>
    </tbody>


</table>