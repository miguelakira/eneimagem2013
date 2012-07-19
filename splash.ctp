<?php
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.libs.view.templates.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php __('III Eneimagem'); ?>
	</title>
<meta name="title" content="III ENEIMAGEM - Encontro Nacional de Estudos da Imagem." />
<meta name="description" content="Esta é a página do 3o. Encontro Nacional de Estudos da Imagem." />
<meta name="keywords" content="historia, ledi, uel, eneimagem, evento nacional" />

	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('reset'); 
		echo $this->Html->css('splash');
		echo $scripts_for_layout;
	?>
</head>
<body>
		<div id="header">
			<?php echo $html->link("ENTRAR NO SITE >", array('controller'=>'Pages' ,'action'=>'display', 'principal')); ?>
			
		</div>
		<div id="content">
			<a title="III ENEIMAGEM" href="http://www.uel.br/eventos/eneimagem/2011/index.php/Pages/display/principal"><div id="content-imagem" class = "rounded-corners"></div></a>		
			<?php echo $this->Session->flash(); ?>
			<?php echo $content_for_layout; ?>

		</div>
		<div id="footer">
			
		</div>
	
</body>
</html>
