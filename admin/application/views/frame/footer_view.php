

<div class="col-lg-12 text-center" style="padding:5px;"><small>&copy; 2017-2018 by <a target="_blank" href="github.com/irvanfh27">Irvanfh</a></small></div>
</div>
<!-- /#wrapper -->

<!-- jQuery -->


<script src="<?=base_url()?>assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/jquery-ui-1.11.4.custom/jquery-ui.js"></script>


<!-- Bootstrap Core JavaScript -->

<!-- Metis Menu Plugin JavaScript -->

<!-- DataTables JavaScript -->
<script src="<?=base_url()?>assets/js/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>assets/js/dataTables.bootstrap.min.js"></script>
<script src="<?=base_url()?>assets/js/bootstrap-editable.min.js"></script>
<script src="<?=base_url()?>assets/js/bootstrap-editable.js"></script>

<!-- Custom Theme JavaScript -->
<?php 
if(isset($css_files)){
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; }?>

<?php if(isset($js_files)){foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; }?>
<script src="<?=base_url()?>assets/js/metisMenu.min.js"></script>
<script src="<?=base_url()?>assets/js/sb-admin-2.js"></script>
<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>

</body>


</html>