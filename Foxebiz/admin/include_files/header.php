<?php
require_once 'core/Header.php';
$id = $_SESSION['id'];
$user_rule = $_SESSION['rule'];
$header_object = new Header($connect,$id);
?>
<div class="main-menu">
	<header class="header">
		<a href="<?php echo $config_name['home_name'][1] ?>" class="logo">Foxebiz</a>
		<button type="button" class="button-close fa fa-times js__menu_close"></button>
		<div class="user">
			<h5 class="name"><?php echo $header_object->getLogin()?></h5>
			<h5 class="position"><?php $header_object->getRule();?></h5>
		</div>
		<!-- /.user -->
	</header>
	<!-- /.header -->
	<div class="content">

		<div class="navigation">
			<h5 class="title">Foxebiz</h5>
			<!-- /.title -->
			<ul class="menu js__accordion">
				<li>
					<a class="waves-effect" href="<?php echo $config_name['home_name'][1] ?>"><i class="menu-icon fa fa-home"></i><span>Main page control</span></a>
				</li>
                <li>
                    <?php
                    if($user_rule == 'admin'){
                        ?>
                        <a class="waves-effect" href="<?php echo $config_name['users'][1] ?>"><i class="menu-icon fa fas fa-users"></i><span><?php echo $config_name['users'][0]; ?></span></a>
                        <?php
                    }
                    ?>
                </li>
                <li>
                    <?php
                    if($user_rule == 'admin' or $user_rule == 'Manager'){
                        ?>
                        <a class="waves-effect" href="<?php echo $config_name['category'][1] ?>"><i class="menu-icon fa fa-list"></i><span><?php echo $config_name['category'][0]; ?></span></a>
                        <?php
                    }
                    ?>
                </li>
                <li>
                    <?php
                    if($user_rule == 'admin' or $user_rule == 'Writer' or $user_rule == 'Manager'){
                        ?>
                        <a class="waves-effect" href="<?php echo $config_name['move_to_site'][1] ?>"><i class="menu-icon fa fa-home"></i><span><?php echo $config_name['move_to_site'][0]; ?></span></a>
                        <?php
                    }
                    ?>
                </li>
			</ul>
			<!-- /.menu js__accordion -->
		</div>
		<!-- /.navigation -->
	</div>
	<!-- /.content -->
</div>