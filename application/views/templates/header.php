<!DOCTYPE html>
<!--[if IE 7]> <html lang="fr" class="ie7"> <![endif]-->  
<!--[if IE 8]> <html lang="fr" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="fr" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="fr"> <!--<![endif]-->  
<head>
    <title>GED sarl | Bienvenue...</title>

    <!-- Meta -->
    
    <!--<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!-- CSS Global Compulsory-->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css" />
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/headers/header1.css" />
    <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/bootstrap/css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style_responsive.css" />
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/essoa.css" />
    <link rel="shortcut icon" href="favicon.ico" />        
    <!-- CSS Implementing Plugins -->    
    <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/font-awesome/css/font-awesome.css" />
    <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/flexslider/flexslider.css" type="text/css" media="screen" />      
    <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/parallax-slider/css/parallax-slider.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/bxslider/jquery.bxslider.css" />
    <!-- CSS Theme -->    
    <!--<link rel="stylesheet" href="<?php //echo base_url()?>assets/css/themes/default.css" id="style_color" />-->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/themes/headers/default.css" id="style_color-header-1" />    

    <!-- CSS et js  supplementaire administration -->  
     <link rel="stylesheet" href="<?php echo base_url()?>assets/css/summernote.css" id="style_color" />  
    


</head> 

<body class="">

<!--=== End Style Switcher ===-->    

<!--=== Top ===-->    
<div class="top">
    <div class="container">			
        <ul class="loginbar pull-right">
            <li><i class="icon-globe"></i><a>Demander un Devis <i class="icon-sort-up"></i></a>
            	<ul class="nav-list">
                	<li class="active"><a href="#">Commercial 1</a> <i class="icon-ok"></i></li>
                	<li><a href="#">Commercial 2</a></li>
                	<li><a href="#">Commercial 3</a></li>
                	<li><a href="#">Commercial 4</a></li>
                </ul>
            </li>
	    <!--
            <li class="devider">&nbsp;</li>
            <li><a href="page_faq.html" class="login-btn">Help</a></li>	
            <li class="devider">&nbsp;</li>
            <li><a href="login.html" class="login-btn">Login</a></li>
	    -->
        </ul>
    </div>		
</div><!--/top-->
<!--=== End Top ===-->    

<!--=== Header ===-->
<div class="header">               
    <div class="container"> 
        <!-- Logo -->       
        <div class="logo">                                             
            <a href="<?php echo base_url()?>"><img id="logo-header" src="<?php echo base_url()?>assets/img/logo1-default.png" alt="Logo" /></a>
        </div><!-- /logo -->        
                                    
        <!-- Menu -->       
        <div class="navbar">                                
            <div class="navbar-inner">                                  
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a><!-- /nav-collapse -->                                  
                <div class="nav-collapse collapse">                                     
                    <ul class="nav top-2">
                        <li class="active">
                            <a href="<?php echo base_url('/index')?>" >Accueil </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">Présentation
                                <b class="caret"></b>                            
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url('/presentation')?>">A propos de nous</a></li>
                                <li><a href="<?php echo base_url('/notre_politique_qualite')?>">Notre politique qualité</a></li>
				                <li><a href="<?php echo base_url('/actualite')?>">Notre actualité</a></li>
                            </ul>
                            <b class="caret-out"></b>                        
                        </li>
                        <li>
                            <a href="<?php echo base_url('/services')?>">Nos services </a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Catalogue
                                <b class="caret"></b>                            
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Industrie</a></li>
                                <li><a href="#">Domestique</a></li>
                                <li><a href="#">Tertiaire</a></li>
                                <li><a href="#">Informatique</a></li>
                                <li><a href="#">Domotique</a></li>
                            </ul>
                            <b class="caret-out"></b>                        
                        </li>
			<!--
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog
                                <b class="caret"></b>                            
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="blog_item.html">Blog Item</a></li>
                                <li><a href="blog_left_sidebar.html">Blog Left Sidebar</a></li>
                                <li><a href="blog_item_left_sidebar.html">Blog Item Left Sidebar</a></li>
                            </ul>
                            <b class="caret-out"></b>                        
                        </li>
			-->
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Nous contacter
                                <b class="caret"></b>                            
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url('/nous_contacter')?>">Nous écrire</a></li>
                                <li><a href="<?php echo base_url('/demander_devis')?>">Demander un dévis</a></li>
                            </ul>
                            <b class="caret-out"></b>                        
                        </li>
                        <li><a class="search"><i class="icon-search search-btn"></i></a></li>                               
                    </ul>
                    <div class="search-open">
                        <div class="input-append">
                            <form >
                                <input type="text" class="span3" placeholder="Search" />
                                <button type="submit" class="btn-u">Go</button>
                            </form>
                        </div>
                    </div>
                </div><!-- /nav-collapse -->                                
            </div><!-- /navbar-inner -->
        </div><!-- /navbar -->                          
    </div><!-- /container -->               
</div><!--/header -->      
<!--=== End Header ===-->