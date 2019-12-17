<?php include_once('funciones/funcRegistrar.php'); ?>
<?php session_start(); ?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>

<title>Perfil</title>
<?php include_once('head.php')?>
<link rel="stylesheet" href="css/login/stylelogin.css"> 

</head>
<body>
	<!-- HEADER -->
	<?php include_once('header.php') ?>
	<!-- /HEADER -->
		<!-- Start Search Popup -->
		<div class="box-search-content search_active block-bg close__top">
			<form id="search_mini_form" class="minisearch" action="#">
				<div class="field__search">
					<input type="text" placeholder="Search entire store here...">
					<div class="action">
						<a href="#"><i class="zmdi zmdi-search"></i></a>
					</div>
				</div>
			</form>
			<div class="close__wrap">
				<span>close</span>
			</div>
		</div>
		<!-- End Search Popup -->
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                        	<h2 class="bradcaump-title">Mi Perfil</h2>
                            <nav class="bradcaump-content">
                              <a class="breadcrumb_item" href="index.php">Home</a>
                              <span class="brd-separetor">/</span>
                              <span class="breadcrumb_item active">Datos Personales</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start Contact Area -->
        <section class="wn_contact_area bg--white pt--80 pb--80">
		
        	<div class="container">
        		<div class="row">
        			<div class="col-lg-8 col-12">
        				<div class="contact-form-wrap">
                            <h4>Bienvenido: <?=$_SESSION['usuario']?></h4>
                            <div class="img-perfil">
                            <img <?php if($_SESSION) {echo "src=archivos/{$_SESSION['imagen']}";}?> width="200">
                            </div><br>

                            <form method="POST" class="register-form" id="register-form" action="perfil.php">
                            <br><div class="form-group">
                    
                        <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        
                        <input type="text" name="usuario" id="usaurio" value="<?=$_SESSION['usuario']?>" />
                    </div>
                    <div class="form-group">
                        <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name="nombre" id="name" value="<?=$_SESSION['nombre']?>" />
                    </div>
                    <div class="form-group">
                        <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name="apellido" id="apellido" value="<?=$_SESSION['apellido']?>"/>
                    </div>
                    <div class="form-group">
                        <label for="email"><i class="zmdi zmdi-email"></i></label>
                        <input type="email" name="email" id="email" value="<?=$_SESSION['email']?>"/>
                    </div>
                    <div class="form-group">
                        <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" name="password" id="pass" value="<?=$_SESSION['password']?>" />
                    </div>
                    <div class="form-group">
                        <label for="imagen"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="file" name="imagen" id="imagen"/>
                    </div>

                    <div class="form-group form-button">
                       <!-- Mostramos errores por HTML -->
                       <?php if (isset($errorRegistro)) : ?>
                        <ul class="errores" style="background-color: #FFABB6;">
                                <?php
                                    foreach ($errorRegistro as $error) {
                                        echo '<li>' . $error . '</li>';
                                    }
                                    ?>
                            </ul>
                        <?php endif; ?>
                    <!-- Mostramos errores por HTML -->
                        <input type="submit" name="signup" id="signup" class="form-submit" value="Guardar Cambios"/>
                    </div>
                </form>
            </div>   
        </section>
        <!-- End Contact Area -->

<!-- FOOTER -->
<?php include_once('footer.php') ?>
	<!-- /FOOTER -->
</body>
</html>