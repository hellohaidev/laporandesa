<?php if ($this->session->flashdata('report_create')): ?>
  <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>
      <?php echo $this->session->flashdata('report_create'); ?>
    </strong> 
  </div>
  <?php endif; ?>

<div class="row">
    <div class="col-md-4">
        <div class="shortcode-html">
            <!-- Box Shadow -->
            <div class="u-shadow-v1-5 g-line-height-2 g-pa-40 g-mb-30 text-center" role="alert">
                <h3 class="h2 g-font-weight-300 g-mb-20">Add Data</h3>
                <p class="mb-0">
                    <a  href="#add" data-modal-target="#add" data-modal-effect="fadein">
                        <i class="fas fa-plus-square fa-5x" style="color:seagreen;"></i>
                    </a>
                </p>
            </div>
            <!-- End Box Shadow -->
        </div>
    </div>
    <div class="col-md-4">
        <div class="shortcode-html">
            <!-- Box Shadow -->
            <div class="u-shadow-v1-5 g-line-height-2 g-pa-40 g-mb-30 text-center" role="alert">
                <h3 class="h2 g-font-weight-300 g-mb-20">Data</h3>
                <p class="mb-0">
                    <a href="<?php echo base_url()?>Dashboard/dataLaporan">
                        <i class="fas fa-clipboard-list fa-5x" style="color:blue;"></i>
                    </a>
                </p>
            </div>
            <!-- End Box Shadow -->
        </div>
    </div>
    <div class="col-md-4">
        <div class="shortcode-html">
            <!-- Box Shadow -->
            <div class="u-shadow-v1-5 g-line-height-2 g-pa-40 g-mb-30 text-center" role="alert">
                <h3 class="h2 g-font-weight-300 g-mb-20">Report</h3>
                <p class="mb-0">
                    <a href="<?php echo base_url() ?>Dashboard/generateReportPDF">
                        <i class="fas fa-file-pdf fa-5x" style="color:red;"></i>
                    </a>
                </p>
            </div>
            <!-- End Box Shadow -->
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="shortcode-html">
            <!-- Box Shadow -->
            <div class="u-shadow-v1-5 g-line-height-2 g-pa-40 g-mb-30 text-center" role="alert">
                <h3 class="h2 g-font-weight-300 g-mb-20">Logout</h3>
                <p class="mb-0">
                    <a href="<?php echo base_url()?>Login/logout">
                        <i class="fas fa-sign-out-alt fa-5x" style="color:black;"></i>
                    </a>
                </p>
            </div>
            <!-- End Box Shadow -->
        </div>
    </div>    
</div>


<!-- Modal Area -->


<!-- Demo modal window -->
<div id="add" class="text-left g-max-width-600 g-bg-white g-overflow-y-auto g-pa-20" style="display: none;">
  <button type="button" class="close" onclick="Custombox.modal.close();">
    <i class="hs-icon hs-icon-close"></i>
  </button>
        
        <h4>Form Laporan</h4>



        <?php $attributes = array('class'=>'form-horizontal'); ?>


        <?php echo form_open('dashboard/addLaporan',$attributes); ?>

        <?php echo validation_errors("<p class='bg-danger'>"); ?>


        <div class="form-group">
            
                <?php echo form_label('Tanggal Laporan'); ?>

                <input class="form-control" type="date" name="tgl_laporan" value="<?php echo date('Y-m-d') ?>">
            
        </div>
        
        <div class="form-group">
            
                <?php echo form_label('Nama Desa'); ?>

                <select class="form-control" name="id_desa">
                    <?php 

                    foreach($data_desa as $item)
                    {
                    ?>
                        <option value="<?php echo $item->id_desa ?>"><?php echo $item->nama_desa ?></option>
                    <?php  
                    }
                    ?>

                    
                </select>
        </div>
        <div class="form-group">
            
            <?php echo form_label('Status Laporan'); ?>

            <select class="form-control" name="status_desa">
                <option value="1">Sudah di Update</option>               
                <option value="2">Belum di Update</option>               
            </select>
        </div>


        <div class="form-group">
            
            <?php 

                $data  = array(
                    'class' => 'btn btn-md u-btn-outline-orange g-mr-10 g-mb-15',
                    'name' => 'submit',
                    'value' => 'Simpan'

                );



            ?>
            
            <?php echo form_submit($data); ?>
            
        </div>


        <?php echo form_close(); ?>
    
</div>