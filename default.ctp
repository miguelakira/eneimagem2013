<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<head>
<title>III ENEIMAGEM - <?php echo $title_for_layout?></title>
<!-- Include external files and scripts here (See HTML helper for more info.) -->
<?php echo $scripts_for_layout ?>
<meta name="title" content="III ENEIMAGEM - Encontro Nacional de Estudos da Imagem." />
<meta name="description" content="Esta é a página do 3o. Encontro Nacional de Estudos da Imagem." />
<meta name="keywords" content="historia, ledi, uel, eneimagem, evento nacional" />
<link rel="stylesheet" type="text/css" href="/eventos/eneimagem/2011/webroot/css/reset.css" /> 
<link rel="stylesheet" type="text/css" href="/eventos/eneimagem/2011/webroot/css/default.css" /> 

<?php  echo $html->meta('icon','../img/uel-favicon.png', array
('type' =>'icon')); ?>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-19202271-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head>
<body>
	<div id="container">
	<div id="header">
		<div id="header-imagem" class = "rounded-corners">
		</div>
		<br /><br />
			<?php echo $html->image("/img/eneimagem-red-grad-data.jpg", array( "alt" => "III Eneimagem", 'url' => array('controller' => 'pages', 'action' => 'display', 'principal'))); ?>         
	</div>
	<div id="navigation">
		<ul>
			<li><?php echo $html->link('Apresentaçao', array('controller' => 'pages', 'action' => 'display', 'principal')); ?> </li>
			<li><?php echo $html->link('LEDI',   array('controller'=> 'pages', 'action' => 'display', 'ledi')); ?> </li>
			<li><?php echo $html->link('Revista Domínios da Imagem', 'http://www.uel.br/revistas/dominiosdaimagem/'); ?></li>
			<li><?php echo $html->link('Eneimagem II','http://www.uel.br/eventos/eneimagem/home.htm'); ?> </li>
			<li><?php echo $html->link('Contato', array('controller' => 'pages', 'action' => 'display', 'contato')); ?> </li>
		</ul>
	</div>
			<div id="content-container" class = "top-rounded-corners">
			<div id="section-navigation" class = "rounded-corners">

			<ul>
        		<li><a href="/eventos/eneimagem/2011/index.php/pages/conselho">Conselho Científico</a></li>
				<li><?php echo $html->link('Comissão Organizadora', array('controller' => 'pages', 'action' => 'display', 'comissao')); ?></li>
				<li><a href="/eventos/eneimagem/2011/index.php/pages/programacao">Programação</a></li>
				<!--<li><?php echo $html->link('Certificados',  array('controller' => 'pages', 'action' => 'certificados')); ?> </li>-->
				<li><a href="/eventos/eneimagem/2011/index.php/pages/transmissao">Transmissão Online </a> </li>
    			<li><a href="/eventos/eneimagem/2011/index.php/gallery/">Fotos do Evento </a> </li>
    		    <li><a href="/eventos/eneimagem/2011/index.php/pages/resumos">Caderno de Resumos </a> </li>
				<li><a href="/eventos/eneimagem/2011/index.php/pages/anais">Anais do Evento </a> </li>
				<li><a href="/eventos/eneimagem/2011/index.php/pages/etiqueta">Etiqueta CD Anais <img src="/eventos/eneimagem/2011/webroot/img/novo.gif"></a> </li>

			</ul>


		<div id = "counter">
<!-- Histats.com  START  (standard)-->
<script type="text/javascript">document.write(unescape("%3Cscript src=%27http://s10.histats.com/js15.js%27 type=%27text/javascript%27%3E%3C/script%3E"));</script>
<a href="http://www.histats.com" target="_blank" title="hit counter code" ><script  type="text/javascript" >
try {Histats.start(1,1284363,4,139,85,17,"00001000");
Histats.track_hits();} catch(err){};
</script></a>
<noscript><a href="http://www.histats.com" target="_blank"><img  src="http://sstatic1.histats.com/0.gif?1284363&101" alt="hit counter code" border="0"></a></noscript>
<!-- Histats.com  END  -->

		</div>


		</div>
		
		
		
		<div id="content" class = "rounded-corners">
			<?php echo $content_for_layout ?>
		</div>
		</div>
	</div>
	</div>
<div id="footer" class = "bottom-rounded-corners">
			<!-- <small>Web Developer: Miguel Akira</small><br /> -->
</div>


</body>
</html>
