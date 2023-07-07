<?php session_start(); 
//aqui empieza el carrito

	if(isset($_SESSION['carrito'])){
		$carrito_mio=$_SESSION['carrito'];
		$idC = $_GET['idC']; 
                $nombre=$_GET['nombre'];
			$precio=$_GET['precio'];
			$estado=$_GET['estado'];
                        $categoria=$_GET['categoria'];
                        $cntd=$_GET['cntd'];
			
$carrito_mio[]=array("idC"=>$idC,"nombre"=>$nombre,"precio"=>$precio,"estado"=>$estado,"categoria"=>$categoria,"cntd"=>$cntd);
	}
	

$_SESSION['carrito']=$carrito_mio;

//aqui termina el carrito


header("Location: ".$_SERVER['HTTP_REFERER']."");
?>

