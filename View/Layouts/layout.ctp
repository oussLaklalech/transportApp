<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pl" xml:lang="pl">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="Paweł 'kilab' Balicki - kilab.pl" />
<title>OneClick</title>
<?php   echo  $this->Html->css('login');
	echo $this->Html->script('jquery');
?>
<script src="../../jquery-1.10.2.js"></script>
	<script src="../../ui/jquery.ui.core.js"></script>
	<script src="../../ui/jquery.ui.widget.js"></script>
	<script src="../../ui/jquery.ui.button.js"></script>
	<script src="../../ui/jquery.ui.position.js"></script>
	<script src="../../ui/jquery.ui.menu.js"></script>
	<script src="../../ui/jquery.ui.autocomplete.js"></script>
	<script src="../../ui/jquery.ui.tooltip.js"></script>

</head>
<body>
	
		<!--<button type="button" class="close" data-dismiss="alert">×</button>-->
	
<div class="wrap">
	<div id="content">
		<div id="main">
			<div class="full_w">
				<p><?php 
    			$this -> layout = 'ajax';
    			echo $this -> render ('/Transports/search',null,null);
    			$this -> layout = 'default';?>
    			<?php echo $this->Session->flash(); ?>
    			</p>
			</div>
		</div>
	</div>
</div>

</body>
</html>
