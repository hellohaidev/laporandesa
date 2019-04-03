<?php if ($this->session->flashdata('errors')): ?>
	<div class="alert alert-danger">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<strong>
			<?php echo $this->session->flashdata('errors'); ?>
		</strong> 
	</div>
	<?php endif; ?>

<a href="<?php echo base_url()?>Dashboard/dataLaporan" class="btn btn-danger">Data</a>

<h1 class="text-center">Form Edit Laporan</h1>

<div class="container">
	<?php $attributes = array('class'=>'form-horizontal'); ?>

	<?php echo form_open('Dashboard/editLaporan/'.$laporan_data->id_laporan.'',$attributes); ?>


    <div class="form-group">
            
                <?php echo form_label('Tanggal Laporan'); ?>

                <input class="form-control" type="date" name="tgl_laporan" value="<?php echo $laporan_data->tgl_laporan ?>">
            
    </div>
	
    <div class="form-group">

    <?php echo form_label('Nama Desa'); ?>
    <select name="id_desa" class="form-control">
                  <option value="">Silahkan Pilih</option>
                  <?php foreach ($list_desa as $row): ?>
                    <option value="<?php echo $row->id_desa; ?>"
                      <?php if ($row->id_desa == $laporan_data->id_desa): ?>
                            selected="selected"
                      <?php endif; ?> >

                      <?php echo $row->nama_desa; ?>
                    </option>
                  <?php endforeach; ?>
</select>
    </div>


	<div class="form-group">

		<?php echo form_label('Modul Kategori'); ?>
		<?php 

			$data = array(
				'1' => 'Sudah di Update',
				'2' => 'Belum di Update'
            );
            $class = 'class="form-control"';
			echo form_dropdown('status_desa',$data,set_value('status_desa',$laporan_data->status_desa),$class);
		?>

	</div>
	<div class="form-group">

		<?php 

			$data = array(
				'class' => 'btn btn-warning',
				'name' => 'submit',
				'value' => 'Update'

			);

		?>
		<?php echo form_submit($data); ?>

	</div>	
	<?php echo form_hidden('slug',$laporan_data->id_laporan); ?>

	<?php echo form_close(); ?>
</div>