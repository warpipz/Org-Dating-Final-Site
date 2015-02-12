<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
    
	<?php
		echo $this->Html->script('jquery.js');
		echo $this->Html->script('bootstrap.min.js');
		echo $this->Html->script('bootstrap-modalmanager.js');
		echo $this->Html->script('bootstrap-modal.js');
		echo $this->Html->script('bootstrap-select.min.js');
		echo $this->Html->script('script.js');
		echo $this->Html->script('extended.js');
		echo $this->Html->script('notification.js');
		echo $this->Html->css('bootstrap.min.css');
		echo $this->Html->css('bootstrap-modal.css');
		echo $this->Html->css('font-awesome.min.css');
		echo $this->Html->css('style.css');
		
	?>
    <script type="text/javascript">
		var FOLDER = '<?php echo FOLDER?>';
	</script>
</head>
<body>
	<?php 
		if($this->Session->check('LOGGED')){
			echo $this->element('navigation');
		}
	?>
	<div id="container">
		<div id="content"> 
			<?php echo $this->Session->flash(); ?> 
            
			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			
		</div>
	</div>
	<?php //echo $this->element('sql_dump'); ?>
</body>
</html>
