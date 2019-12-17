<?php include_once('funciones/funcLoguearse.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<title>INICIAR SESSION</title>
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
                              <span class="breadcrumb_item active">INICIAR SESSION</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
<!-- Sing in  Form -->
 <section class="sign-in2">
    <div class="containerlogin">
        <div class="signin-content">
            <div class="signin-image">
                <figure><img src="images/signin-image.jpg" alt="sing up image"></figure>
                <a href="registrarse.php" class="signup-image-link">Create una cuenta</a>
            </div>

            <div class="signin-form">
                <h2 class="form-title">Iniciar Sesión</h2>
                <form method="POST" enctype="multipart/form-data" class="register-form" id="login-form" action="login.php">
                    <div class="form-group">
                        <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name="usuario" id="your_name" placeholder="Your Name" <?php if(isset($_COOKIE['usuario'])) { echo "value='{$_COOKIE['usuario']}'";} ?>/>
                    </div>
                    <div class="form-group">
                        <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" name="password" id="your_pass" placeholder="Password" <?php if(isset($_COOKIE['password'])) { echo "value='{$_COOKIE['password']}'";} ?>/>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="recordarme" id="remember-me" class="agree-term"  <?php if(isset($_COOKIE['checked'])) { echo "{$_COOKIE['checked']}";} ?>/>
                        <label for="remember-me" class="label-agree-term"><span><span></span></span>Recuerdame</label>
                    </div>
                    <div class="form-group form-button">
                       <!-- Mostramos errores por HTML -->
                       <?php if (isset($errorLogin)) : ?>
                        <ul class="errores" style="background-color: #FFABB6;">
                                <?php
                                    foreach ($errorLogin as $error) {
                                        echo '<li>' . $error . '</li>';
                                    }
                                    ?>
                            </ul>
                        <?php endif; ?>
                        
                        <!-- Mostramos errores por HTML -->
                        <input type="submit" name="signin" id="signin" class="form-submit" value="Iniciar sessión"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- FOOTER -->
<?php include_once('footer.php') ?>
    <!-- /FOOTER -->
</body>
</html>