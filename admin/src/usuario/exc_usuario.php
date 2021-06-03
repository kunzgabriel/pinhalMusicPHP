<?php
require "../../conecta.php";

$id_exc = (isset($_GET['id_exc']))?$_GET['id_exc']: 0;


	mysqli_query($con,"delete from usuarios where id = {$id_exc} ") or die (mysqli_error($con));


header("Location: list_usu.php");

?>