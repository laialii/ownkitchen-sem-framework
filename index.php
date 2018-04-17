<?php require_once 'config.php'; ?>
<?php require_once DBAPI; ?>

<?php include(HEADER_TEMPLATE); ?>
<?php $db = open_database(); ?>


<div id="content">
	<div class="outer">
		<div class="inner bg-light lter">
			<br>
			<div class="col-lg-6">
				<a href="products"><img src="<?php echo BASEURL; ?>assets/img/coxinha.jpg" alt=""></a>
			</div><div class="col-lg-6">
				<a href="companies"><img src="<?php echo BASEURL; ?>assets/img/pipoqueira.jpg" alt=""></a>
			</div>
		</div>
		<!-- /.inner -->
	</div>
	<!-- /.outer -->
</div>


<?php include(FOOTER_TEMPLATE); ?>
