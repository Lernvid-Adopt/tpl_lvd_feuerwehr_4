<?php
defined( '_JEXEC' ) or die( 'Access to this location is RESTRICTED.' );
echo '<?xml version="1.0" encoding="utf-8"?'.'>'; 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
<jdoc:include type="head" />
<?php
	// inserting mootools
		JHTML::_('behavior.mootools');
?>
<meta name="designer" content="Juergen Koller - http://www.lernvid.com" />
<meta name="licence" content="Copyright LernVid.com - Creative Commons Sharalike 3.0" />
<link href="templates/<?php echo $this->template ?>/css/reset.css" rel="stylesheet" type="text/css" media="all" />
<link href="templates/<?php echo $this->template ?>/css/template.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="templates/<?php echo $this->template ?>/js/hover.js"></script>
<script type="text/javascript" src="templates/<?php echo $this->template ?>/js/up.js"></script>
<!--[if IE 7]>
	<link href="templates/<?php echo $this->template ?>/css/ie7.css" rel="stylesheet" type="text/css" media="all" />
<![endif]-->
<!--[if lt IE 7]>
	<link href="templates/<?php echo $this->template ?>/css/ie5x6x.css" rel="stylesheet" type="text/css" media="all" />
<![endif]-->
<?php
	if($this->countModules("left")&&!$this->countModules("right")){ $contentwidth="left";}
	if($this->countModules("right")&&!$this->countModules("left")){ $contentwidth="right";}
	if($this->countModules("left")&&$this->countModules("right")) {$contentwidth="middle"; }
?>
</head>
<body>
<div id="wrapper">
	<div id="spacer"></div>
	<div id="masthead_container">
		<div id="masthead">
			<div id="logo"></div>
			<div id="searchbox">
				<div id="search">
					<div id="search_inner">
			             <jdoc:include type="modules" name="user4" style="xhtml" />
					</div>
				</div>
			</div>	
			<?php if (($this->params->get('showFeuerwehr')) !=0) : ?>
				<div id="feuerwehr">
					<a href=""><p><?php echo  $this->params->get('FeuerwehrName');  ?></p></a>
				</div>
			<?php endif; ?>
			<?php if (($this->params->get('showSlogan')) !=0) : ?>
				<div id="slogan">
					<p><?php echo  $this->params->get('Slogan');  ?></p>
				</div>
			<?php endif; ?>
		</div>
	</div>
	<div id="container">
	<!-- Begin Container -->
		<?php if($this->countModules('user3')) : ?>
			<div id="navigation">
	             <jdoc:include type="modules" name="user3" style="xhtml" />
			</div>
		<?php endif; ?>
		<div class="clr"></div>
		<?php if($this->countModules('user5 or use6 or user7')) : ?>
			<div id="user_modules2">
					<?php if($this->countModules('user5')) : ?>
						<div id="user5">
							<jdoc:include type="modules" name="user5" style="rounded" />
						</div>
					<?php endif; ?>				
					<?php if($this->countModules('user6')) : ?>
						<div id="user6">
							<jdoc:include type="modules" name="user6" style="rounded" />
						</div>
					<?php endif; ?>				
					<?php if($this->countModules('user7')) : ?>
						<div id="user7">
							<jdoc:include type="modules" name="user7" style="rounded" />
						</div>
					<?php endif; ?>				
			</div>
		<?php endif; ?>				
		<div class="clr"></div>
		<?php if($this->countModules('top')) : ?>
			<div id="top">
				<div id="top_inner">
		             <jdoc:include type="modules" name="top" style="rounded" />
				</div>	
			</div>
		<?php endif; ?>					
		<div class="clr"></div>
		<div id="breadcrumb">
			<?php if($this->countModules('breadcrumb')) : ?>
				<div id="breadcrumbs">
	            	<img src="images/M_images/arrow.png"/><jdoc:include type="module" name="breadcrumbs" />
			    </div>
			<?php endif; ?>	
		</div>
		<div id="page_content">
				<?php if($this->countModules('left')) : ?>
					<div id="sidebar_left">
			             <jdoc:include type="modules" name="left" style="rounded" />
					</div>
				<?php endif; ?>		
				<?php if($this->countModules('right')) : ?>
					<div id="sidebar_right">
			             <jdoc:include type="modules" name="right" style="rounded" />
					</div>
				<?php endif; ?>		
			    <div id="content_out<?php echo $contentwidth; ?>">
					<div id="content">
						<jdoc:include type="message" />
						 <jdoc:include type="component" />
					</div>
				</div>
		</div>	
		<div class="clr"></div>
		<div id="container2">
			<?php if($this->countModules('user1 or user2')) : ?>
				<div id="user_modules1">
					<?php if($this->countModules('user1')) : ?>
						<div id="user1">
				           <jdoc:include type="modules" name="user1" style="rounded" />
						</div>
					<?php endif; ?>			
					<?php if($this->countModules('user2')) : ?>
						<div id="user2">
					           <jdoc:include type="modules" name="user2" style="rounded" />
						</div>
					<?php endif; ?>			
			</div>
			<?php endif; ?>			
			<div class="clr"></div>
			<?php if($this->countModules('user8 or user9 or user10')) : ?>
				<div id="user_modules0">
					<?php if($this->countModules('user8')) : ?>
						<div id="user8">
							<jdoc:include type="modules" name="user8" style="rounded" />
						</div>
					<?php endif; ?>				
					<?php if($this->countModules('user9')) : ?>
						<div id="user9">
							<jdoc:include type="modules" name="user9" style="rounded" />
						</div>
					<?php endif; ?>				
					<?php if($this->countModules('user10')) : ?>
						<div id="user10">
							<jdoc:include type="modules" name="user10" style="rounded" />
						</div>
					<?php endif; ?>				
				</div>
			<?php endif; ?>				
			<div class="clr"></div>
			<div id="footer">
				<jdoc:include type="modules" name="footer" />
			</div>
			<div id="bottom">
				<div id="date"><?php echo JHTML::Date($this->date_field, "%A, %d. %B %Y"); ?></div>
				<div id="go_top"><p><a href="#">TOP</a></p></div>
			</div>
			<div class="clr"></div>
			<div id="copyright_info">
				<p>&copy; <?php echo $mainframe->getCfg('sitename');?> - 2010 - all rights reserved</p>
			</div>
		</div>
	</div>
	<div class="clr"></div>
	<div id="designed_by">
		<p>Design by: <a href="http://www.lernvid.com" target="_blank">LernVid.com</a></p>
	</div>
</div>
<jdoc:include type="modules" name="debug" style="xhtml" />
</body>
</html>