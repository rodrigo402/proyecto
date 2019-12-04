<?php
include_once('php/validacion_reg.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<title>REGISTRARSE</title>
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
                        	<h2 class="bradcaump-title">INICIAR SESSION</h2>
                            <nav class="bradcaump-content">
                              <a class="breadcrumb_item" href="index.php">Home</a>
                              <span class="brd-separetor">/</span>
                              <span class="breadcrumb_item active">REGISTRARSE</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
<!-- Sign up form -->
<section class="signup">
    <div class="container">
        <div class="signup-content">
            <div class="signup-form">
                <h2 class="form-title">Registrarse</h2>
                <form method="POST" class="register-form" id="register-form" action="registrarse.php">
                    <div class="form-group">
                        <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name="username" id="name" placeholder="Your Name"/>
                    </div>
                    <div class="form-group">
                        <label for="email"><i class="zmdi zmdi-email"></i></label>
                        <input type="email" name="email" id="email" placeholder="Your Email"/>
                    </div>
                    <div class="form-group">
                        <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" name="password" id="pass" placeholder="Password"/>
                    </div>
                    <div class="form-group">
                        <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                        <input type="password" name="re_password" id="re_pass" placeholder="Repeat your password"/>
                    </div>
                    <div class="form-group">
                        <label for="imagen"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="file" name="imagen" id="imagen" placeholder="Seleccionar imagen"/>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                        <label for="agree-term" class="label-agree-term"><span><span></span></span>Acepto todas las declaraciones en los  <a href="#" class="term-service">Términos de servicio</a></label>
                    </div>
                    <div class="form-group form-button">
                       <!-- Mostramos errores por HTML -->
											<?php if (isset($errores)): ?>
						
                        <ul class="errores" style="background-color: #FFABB6;">
                            <?php 
                                foreach ($errores as $error) {
                                    echo '<li>' . $error . '</li>';
                                } 
                            ?> 
                        </ul>
                    <?php endif; ?>
                    <!-- Mostramos errores por HTML -->
                        <input type="submit" name="signup" id="signup" class="form-submit" value="Registrarme"/>
                    </div>
                </form>
            </div>
            <div class="signup-image">
                <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                <a href="index.php" class="signup-image-link">Ya soy miembro</a>
            </div>
        </div>
    </div>
</section>
<!-- FOOTER -->
<?php include_once('footer.php') ?>
    <!-- /FOOTER -->
</body>
</html>
