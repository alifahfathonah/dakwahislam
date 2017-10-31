
      </div>
      <nav class="be-right-sidebar">
      </nav>
    </div>
    <script src="<?php echo base_url()?>assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>assets/js/main.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>assets/lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>assets/lib/parsley/parsley.min.js" type="text/javascript"></script>

    <!-- DATATABLES-->
    <script src="<?php echo base_url()?>assets/lib/datatables/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>assets/lib/datatables/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>assets/lib/datatables/plugins/buttons/js/dataTables.buttons.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>assets/lib/datatables/plugins/buttons/js/buttons.html5.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>assets/lib/datatables/plugins/buttons/js/buttons.flash.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>assets/lib/datatables/plugins/buttons/js/buttons.print.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>assets/lib/datatables/plugins/buttons/js/buttons.colVis.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>assets/lib/datatables/plugins/buttons/js/buttons.bootstrap.js" type="text/javascript"></script>

    <script src="<?php echo base_url()?>assets/lib/summernote/summernote.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>assets/lib/summernote/summernote-ext-beagle.js" type="text/javascript"></script>
    <!--END DATATABLES-->


    <script type="text/javascript">
      $(document).ready(function(){
      	//initialize the javascript
      	App.init();
        $('form').parsley();
        App.dataTables();
        App.textEditors();
      });
      
    </script>
  </body>

<!-- Mirrored from foxythemes.net/preview/products/beagle2/pages-blank-header.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Sep 2017 16:09:10 GMT -->
</html>