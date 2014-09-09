</div>
    <footer>
        Fenix Repuestos
    </footer>
</body>
<?php foreach($js_files as $file): ?>
    <script src="<?php echo $file; ?>"></script>
<?php endforeach; ?> 
<script src="<?=base_url()?>assets/js/jquery.nicescroll.js" type="text/javascript"></script>
<script type="text/javascript" src="<?=base_url()?>assets/jquery-slimscroll/jquery-ui-1.9.2.custom.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/jquery-slimscroll/jquery.slimscroll.min.js"></script>
 
 <!-- ie8 fixes -->
 <!--[if lt IE 9]>
 <script src="js/excanvas.js"></script>
 <script src="js/respond.js"></script>
 <![endif]-->
 
<script src="<?=base_url()?>assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js" type="text/javascript"></script>
<script src="<?=base_url()?>assets/js/jquery.sparkline.js" type="text/javascript"></script>
<script src="<?=base_url()?>assets/js/chart-master/Chart.js"></script>
 
<!--common script for all pages-->
<script src="<?=base_url()?>assets/js/common-scripts.js"></script>
<!-- END JAVASCRIPTS -->
</html>
<script>
function addMotivo(valor)
{
    $('#aviso').val(valor);
    $('#myModal').modal('show');
}
</script>