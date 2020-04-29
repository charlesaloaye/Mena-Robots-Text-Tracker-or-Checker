<?php include 'includes/header.php'; ?>
<body>

	<div class="container">

		<form action="" method="post" class="mt-5">

			<h3 class="card-title text-center" title="<?php echo APPNAME;?>"><?php echo APPNAME;?></h3>

			<div class="form-group">
				<input type="text" name="url" placeholder="e.g http://charlestechy.com.ng" class="form-control" title="http://charlestechy.com.ng" value="<?php echo $url;?>">
			</div>

			<div class="form-group">
				<button class="btn btn-success btn-block" title="Track Web Site" name="track">Track</button>
			</div>
		</form>

<?php echo $status; ?>
	</div>

	<footer class="fixed-bottom" title="Developed by Charles Sedenu">
		<div class="text-center">
			Developed By Charlestechy
		</div>
	</footer>

</body>
</html>