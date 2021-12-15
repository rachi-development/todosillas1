<?php include("template/header.php"); ?>

<?php 
include("administrador/config/bd.php");
$sentenciaSQL= $conexion->prepare("SELECT * FROM sillas");
$sentenciaSQL->execute();
$listaSillas=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

?>



<div class="main">
      <div class="shop_top">
		<div class="container">
			<div class="row shop_box-top">
			<?php foreach($listaSillas as $silla){ ?>
			<div class="col-md-4 "><a href="single.html">
					<img src="./images/<?php echo $silla['imagen'];  ?>" class="img-responsive" alt=""/>
					<span class="new-box">
						<span class="new-label">New</span>
					</span>
					<div class="shop_desc">
						<h3><a href="#"><?php echo $silla['nombre']; ?></a></h3>
						<p>Lorem ipsum consectetuer adipiscing </p>
						<ul class="buttons">
							<div class="clear"> </div>
					    </ul>
				    </div>
				</a></div>
				<?php } ?>
			</div>
		 </div>
	   </div>
	  </div>





<?php include("template/footer.php"); ?>