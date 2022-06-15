<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/admin_page.css">
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/custom.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
</head>
<body>
   
    <div class="wrapper">


<div class="body-overlay"></div>


        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3><img src="<?php echo URLROOT ?>/public/img/reg4.png" class="img-fluid"/><a href="<?php echo URLROOT ?>/admins/index">TEM</a></h3>
            </div>
            <ul class="list-unstyled components">
			<li  class="active">
                    <a href="<?php echo URLROOT ?>/admins/index" class="dashboard"><i class="material-icons">dashboard</i><span>Dashboard</span></a>
                </li>
		
		      <div class="small-screen navbar-display">
                
				</div>
			
			
                <li class="dropdown">
                    <a href="<?php echo URLROOT; ?>/admins/viewmore" data-toggle="collapse" aria-expanded="false" class="">
					<i class="material-icons">aspect_ratio</i><span>Manage Post</span></a>
                </li>
                
                <li class="dropdown">
                    <a href="<?php echo URLROOT ?>/admins/create" data-toggle="collapse" aria-expanded="false" class="">
					<i class="material-icons">apps</i><span>Create Post</span></a>
                </li>
               
            </ul>

           
        </nav>
		
		

        <!-- Page Content  -->
        <div id="content">
		
		<div class="top-navbar">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="d-xl-block d-lg-block d-md-mone d-none">
                        <span class="material-icons">arrow_back_ios</span>
                    </button>
					
					<a class="navbar-brand" href="<?php echo URLROOT ?>/admins/index"> Dashboard </a>
					
                    <button class="d-inline-block d-lg-none ml-auto more-button" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="material-icons">more_vert</span>
                    </button>

                    <div class="collapse navbar-collapse d-lg-block d-xl-block d-sm-none d-md-none d-none" id="navbarSupportedContent">
                    <?php if(isset($_SESSION['id'])) : ?>
                        <ul class="nav navbar-nav ml-auto">   
                            <li class="nav-item">
                                <a class="nav-link" href="#">
								    Admin-<?php echo $_SESSION['username'] ?>
								</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo URLROOT ?>/admins/logout">
								    Logout
								</a>
                            </li>
                        </ul>
                    <?php else : ?>
                        <ul class="nav navbar-nav ml-auto">   
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo URLROOT ?>/admins/admin_login">
								    Sign In
								</a>
                            </li>
                        </ul>
                    <?php endif; ?>
                    </div>
                </div>
            </nav>
	    </div>

        