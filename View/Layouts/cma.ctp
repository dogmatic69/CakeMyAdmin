<!DOCTYPE html>
<html>
	<head>
		<?php echo $this->Html->charset(); ?>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>
			<?php echo $title_for_layout; ?>
		</title>
		<?php
			echo $this->Html->meta('icon');

			echo $this->Html->css('bootstrap');
			echo $this->Html->css('bootstrap-theme');
			echo $this->Html->css('Cma.cma');
			echo $this->Html->script('jquery');
			echo $this->Html->script('jquery-ui-1.10.4.custom.min');
			echo $this->Html->script('bootstrap');
			echo $this->Html->script('Cma.cma');

			echo $this->fetch('meta');
			echo $this->fetch('css');
			echo $this->fetch('script');
		?>
	</head>
	<body>
		<?php
			echo $this->element('Cma.nav');
			echo $this->Html->tag('div', implode('', array(
				$this->Html->tag('div', implode('', array(
					$this->Html->tag('div', $this->element('Cma.side_nav'), array('class' => 'col-lg-2 side-nav hidden-print')),
					$this->Html->tag('div', implode('', array(
						$this->Session->flash(),
						$this->fetch('content'),
					)), array('class' => 'col-lg-10'))
				)), array('class' => 'row'))
			)), array('class' => 'container-fluid'));
		?>
	</body>
</html>
