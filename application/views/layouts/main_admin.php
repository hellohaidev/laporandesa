
<?php if ($this->session->userdata('logged_in')) { ?>
 
 <?php
 
 if ( function_exists( 'date_default_timezone_set' ) ) {
     date_default_timezone_set('Asia/Jakarta');
 }
 
 ?>	
 
     
     
 <!DOCTYPE html>
 <html>
 <head>
     <title>Admin Dashboard</title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- CSS Global Compulsory -->
       <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
 
       <!-- CSS Unify -->
       <link rel="stylesheet" href="<?php echo base_url();?>assets/css/unify.css">
 
      
 
       <!-- CSS Unify -->
       <link rel="stylesheet" href="<?php echo base_url();?>assets/css/unify-core.css">
       <link rel="stylesheet" href="<?php echo base_url();?>assets/css/unify-components.css">
       <link rel="stylesheet" href="<?php echo base_url();?>assets/css/unify-globals.css">
 
 
       <!-- plugin css -->
       <link  rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery.fancybox.min.css">
       <link rel="stylesheet" href="<?php echo base_url();?>assets/css/animate.css">
       <link rel="stylesheet" href="<?php echo base_url();?>assets/css/icon-hs/style.css">
       <link rel="stylesheet" href="<?php echo base_url();?>assets/css/hs.megamenu.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/hamburgers.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/typed.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
        <link  rel="stylesheet" href="<?php echo base_url()?>assets/css/jquery-ui.min.css">
        <link  rel="stylesheet" href="<?php echo base_url();?>assets/css/custombox.min.css">
        <link  rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
        
     
   
 </head>
 <body>
  
     <div class="container g-mt-100">
         <div class="col-md-12">
             <?php  $this->load->view($view_admin); ?>
         </div>
     </div>
 
 
     <!-- JS Global Compulsory -->
       <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
       <script src="<?php echo base_url();?>assets/js/jquery-migrate.min.js"></script>
       <script src="<?php echo base_url();?>assets/js/jquery.easing.js"></script>
       <script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
       <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
 
       <!-- jQuery UI Core -->
       <script  src="<?php echo base_url();?>assets/js/widget.js"></script>
       
 
         <!-- JS Implementing Plugins -->
       <script  src="<?php echo base_url();?>assets/js/appear.js"></script>
       <script  src="<?php echo base_url();?>assets/js/jquery.fancybox.min.js"></script>
         <script src="<?php echo base_url();?>assets/js/hs.megamenu.js"></script>
         <script src="<?php echo base_url();?>assets/js/typed.min.js"></script>
         <script  src="<?php echo base_url();?>assets/js/custombox.min.js"></script>
 
       <!-- JS Unify -->
       <script src="<?php echo base_url();?>assets/js/hs.core.js"></script>
       <script src="<?php echo base_url();?>assets/js/hs.header.js"></script>
       <script src="<?php echo base_url();?>assets/js/hs.hamburgers.js"></script>
       <script src="<?php echo base_url();?>assets/js/hs.onscroll-animation.js"></script>
       <script  src="<?php echo base_url();?>assets/js/hs.counter.js"></script>
        <script  src="<?php echo base_url();?>assets/js/hs.popup.js"></script>
        <script  src="<?php echo base_url();?>assets/js/hs.datepicker.js"></script>
        <script  src="<?php echo base_url();?>assets/js/hs.modal-window.js"></script>
        <script  src="<?php echo base_url();?>assets/js/hs.tabs.js"></script>
        <!-- jQuery UI Widgets -->
        
 
 
       <!-- plugin commons -->
       <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
       <script src="<?php echo base_url();?>assets/js/hs.text-slideshow.js"></script>
 
       <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.slimscroll.min.js"></script>
     
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
     <script type="text/javascript" src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
     

     <script>
        $(document).ready( function () {
            $('#Tabledata').DataTable();
        });
     </script>
     <script>
     jQuery('.statistic-counter').counterUp({
                 delay: 10,
                 time: 2000
             });
     </script>
     <!-- JS Plugins Init. -->
     <script type="text/javascript">
         $(function(){
             $('#inner-content-div').slimScroll({
                 height: '200px'
             });
         });
     </script>
     <script type="text/javascript">
               $(document).on('ready', function () {
                 // initialization of scroll animation
                 $.HSCore.components.HSOnScrollAnimation.init('[data-animation]');
                 // initialization of popups
                 $.HSCore.components.HSPopup.init('.js-fancybox');
                 
                 // initialization of counters
                 var counters = $.HSCore.components.HSCounter.init('[class*="js-counter"]');
                  $.HSCore.components.HSModalWindow.init('[data-modal-target]');
 
                 // initialization of tabs
                  $.HSCore.components.HSTabs.init('[role="tablist"]');
                           });
 
                   $(window).on('resize', function () {
                     setTimeout(function () {
                       $.HSCore.components.HSTabs.init('[role="tablist"]');
                     }, 200);
 
               });
 
                $(window).on('load', function () {
                   // initialization of header
                   $.HSCore.components.HSHeader.init($('#js-header'));
                   $.HSCore.helpers.HSHamburgers.init('.hamburger');
                   $('.js-mega-menu').HSMegaMenu({
                     event: 'hover',
                     pageContainer: $('.container'),
                     breakpoint: 991
                   });
                  
                 });
 
       </script>
  
 </body>
 </html>
 
 
 <?php } ?>