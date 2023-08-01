<?php

session_start();
if (!$_SESSION['validar']) {
	print"<script>alert (\"Esta pagina es solo para usarios registrados\");window.location='../../index.php';</script>";
}
$now=time();
if ($now > $_SESSION['expire']) {
	session_destroy();
	print"<script>alert (\"Inicie sesion nuevamente\");window.location='../../index.php';</script>";
}

?>