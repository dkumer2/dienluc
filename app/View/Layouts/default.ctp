<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
        echo $this->Html->css('cake.generic');
		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('font-awesome.min');
		echo $this->Html->css('ionicons.min');
		echo $this->Html->css('AdminLTE');

		echo $this->fetch('meta');
		echo $this->fetch('css');
        $username = $this->Session->read('username');
        $role = $this->Session->read('role');
	?>
</head>
<body class="wysihtml5-supported  pace-done skin-black">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="<?php echo $this->Html->url(array('controller'=>'dashboard','action'=>'index')) ?>" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                Điện lực Bình Đại
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span><?php echo $username; ?> <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="<?php echo Router::url('/'); ?>img/avatar5.png" class="img-circle" alt="User Image" />
                                    <p>
                                        <?php echo $username; if($role == 1) echo " - Admin"; else echo " - User" ?>
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-right">
                                        <a href="<?php echo $this->Html->url(array('controller'=>'users','action'=>'logout')) ?>" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">                
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?php echo Router::url('/'); ?>img/avatar5.png" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Hello, <?php echo $this->Session->read('username') ?></p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li <?php if($current_controller=='dashboard'): ?> class="active"<?php endif; ?>>
                            <a href="<?php echo $this->Html->url(array('controller'=>'dashboard','action'=>'index')) ?>">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li<?php if($current_controller=='pools'): ?> class="active"<?php endif; ?>>
                            <a href="<?php echo $this->Html->url(array('controller'=>'pools','action'=>'index')) ?>">
                                <i class="fa fa-th"></i> <span>Pools</span>
                            </a>
                        </li>
                        <li<?php if($current_controller=='poolusers'): ?> class="active"<?php endif; ?>>
                            <a href="<?php echo $this->Html->url(array('controller'=>'poolusers','action'=>'index')) ?>">
                                <i class="fa fa-user"></i> <span>Users</span>
                            </a>
                        </li>
                        <li<?php if($current_controller=='workers'): ?> class="active"<?php endif; ?>>
                            <a href="<?php echo $this->Html->url(array('controller'=>'workers','action'=>'index')) ?>">
                                <i class="fa fa-laptop"></i> <span>Workers</span>
                            </a>
                        </li>
                        <li<?php if($current_controller=='clients'): ?> class="active"<?php endif; ?>>
                            <a href="<?php echo $this->Html->url(array('controller'=>'clients','action'=>'index')) ?>">
                                <i class="fa fa-users"></i> <span>Clients</span>
                            </a>
                        </li>
                        <?php if($role == 1): ?>
                        <li<?php if($current_controller=='tasks'): ?> class="active"<?php endif; ?>>
                            <a href="<?php echo $this->Html->url(array('controller'=>'tasks','action'=>'index')) ?>">
                                <i class="fa fa-calendar"></i> <span>Taskboard</span>
                            </a>
                        </li>
                        <li class="treeview <?php if($current_controller=='users') echo "active"; ?>">
                            <a href="#">
                                <i class="fa fa-table"></i> <span>Admin</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo $this->Html->url(array('controller'=>'users','action'=>'index')) ?>"><i class="fa fa-angle-double-right"></i> Users</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Worker</a></li>
                            </ul>
                        </li>
                        <li<?php if($current_controller=='calendar'): ?> class="active"<?php endif; ?>>
                            <a href="<?php echo $this->Html->url(array('controller'=>'calendar','action'=>'index')) ?>">
                                <i class="fa fa-calendar"></i> <span>Calendar</span>
                                <small class="badge pull-right bg-red">3</small>
                            </a>
                        </li>                        
                        <?php endif ?>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        <?php echo $title_for_layout; ?>
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo $this->Html->url(array('controller'=>'Dashboard','action'=>'index')) ?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active"><?php echo $title_for_layout; ?></li>
                    </ol>
                </section>                
                <!-- Main content -->
                <section class="content">
                    
                <?php echo $this->Session->flash(); ?>

				<?php echo $content_for_layout ?>

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

    </body>
    <?php 
        // jQuery 2.0
        echo $this->Html->script('jquery.min');
        //Jquery 1.10.3
        echo $this->Html->script('jquery-ui-1.10.3.min');
        // Bootstrap -->
        echo $this->Html->script('bootstrap');
    ?>
    <?php
        // AdminLTE App -->
        echo $this->Html->script('AdminLTE/app');
        echo $this->fetch('script');
        echo $this->fetch('botscript');
    ?>                   
</html>