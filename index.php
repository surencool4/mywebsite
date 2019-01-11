<!DOCTYPE html>
<html>
	<?php include('inc/headcode.php'); ?>
	<body>
	 <div class="body-site"> 
		 <div class="navbar-header background-2">
		    <?php 
		    	include('inc/tool.php');
		    	include('inc/nav.php'); 
		    	include('inc/header.php'); 
		    ?>
		</div>
		<?php 
			include("inc/services.php");
			include("inc/about.php");
			include("inc/skills.php");
			include("inc/resume.php");
			include("inc/client.php");
			include("inc/workstation.php");
			include("inc/contact.php");
		 ?>
	</div> 

	<?php 
		include('inc/footer.php'); 
		include('inc/footertool.php');
	?>
	</body>
</html>