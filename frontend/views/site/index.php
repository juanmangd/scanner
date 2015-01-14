

<?php
use yii\helpers\Html;
/* @var $this yii\web\View */
$this->title = 'PixWeb';

$boton1 = 'reportes/index';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>PixWeb le da la bienvenida!</h1>
   </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-6">
				<center>
					<h2>Crear administradores</h2> 	 	
                </center>

                <p>Presionando el boton mas abajo podrá acceder a la página de creación de usuarios. La página mostrará los usuarios
                actualmente creados y la opción de crear nuevos. Solo el super Admin podrá acceder a esta opción y solo un usuario
                con privilegios de super Admin existirá.</p>
			    <center>
                    <p><a class="btn btn-lg btn-success" href="/site/signup">CREAR ADMNISTRADORES</a></p>
                </center>
            </div>            
            <div class="col-lg-6">
				<center>
					<h2>Ver Reportes</h2>
                </center>
                <p>Presionando el boton mas abajo podrá acceder a página donde se mostrarán los reportes enviados por los usuarios,
                debe ser un usuario registrado para poder ver esta sección. Si quiere registrarse contacte con el super Admin, por
                motivos de seguridad solo el podrá crearle la cuenta</p>
                <center>
                    <p>	<a class="btn btn-lg btn-success" href="/eventos/" >  VER LOS EVENTOS </a></p>
                </center>
            </div>
        </div>

    </div>
</div>
