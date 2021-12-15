<?php include("../template/header.php"); ?>
<?php

$txtID=(isset($_POST['txtID']))?$_POST['txtID']:"";
$txtNombre=(isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
$txtImagen=(isset($_FILES['txtImagen']['name']))?$_FILES['txtImagen']['name']:"";
$accion=(isset($_POST['accion']))?$_POST['accion']:"";


include("../config/bd.php");


switch($accion){

        case "Agregar":


           
            $sentenciaSQL= $conexion->prepare("INSERT INTO sillas (nombre,imagen ) VALUES (:nombre,:imagen );");
            $sentenciaSQL->bindParam(':nombre',$txtNombre);

            $fecha= new DateTime();
            $nombreArchivo=($txtImagen!="")?$fecha->getTimestamp()."_".$_FILES["txtImagen"]["name"]:"imagen.jpg";


            $tmpImagen=$_FILES["txtImagen"]["tmp_name"];

            if($tmpImagen!=""){
                
                move_uploaded_file($tmpImagen,"../../images/".$nombreArchivo);

            }

            $sentenciaSQL->bindParam(':imagen',$nombreArchivo);
            $sentenciaSQL->execute();

            echo "Pulsado el botón Agregar";
            break;


        case "Modificar":

            $sentenciaSQL= $conexion->prepare("UPDATE sillas SET nombre=:nombre WHERE id=:id");
            $sentenciaSQL->bindParam(':nombre',$txtNombre);
            $sentenciaSQL->bindParam(':id',$txtID);
            $sentenciaSQL->execute();

            if($txtImagen!=""){

                $fecha= new DateTime();
                $nombreArchivo=($txtImagen!="")?$fecha->getTimestamp()."_".$_FILES["txtImagen"]["name"]:"imagen.jpg";
                $tmpImagen=$_FILES["txtImagen"]["tmp_name"];

                move_uploaded_file($tmpImagen,"../../images/".$nombreArchivo);


                $sentenciaSQL= $conexion->prepare("SELECT imagen FROM sillas WHERE id=:id");
                $sentenciaSQL->bindParam(':id',$txtID);
                $sentenciaSQL->execute();
                $silla=$sentenciaSQL->fetch(PDO::FETCH_LAZY); 

                if(isset($libro["imagen"]) &&($libro["imagen"]!="imagen.jpg") ){

                if(file_exists("../../images/".$libro["imagen"])){
                    unlink("../../images/".$libro["imagen"]);
                }


            }


                $sentenciaSQL= $conexion->prepare("UPDATE sillas SET imagen=:imagen WHERE id=:id");
                $sentenciaSQL->bindParam(':imagen',$nombreArchivo);
                $sentenciaSQL->bindParam(':id',$txtID);
                $sentenciaSQL->execute();

        }
            header("Location:productos.php");
            break;

            

        case "Cancelar":
            header("Location:productos.php");
            break;

        case "Seleccionar":

            $sentenciaSQL= $conexion->prepare("SELECT * FROM sillas WHERE id=:id");
            $sentenciaSQL->bindParam(':id',$txtID);
            $sentenciaSQL->execute();
            $silla=$sentenciaSQL->fetch(PDO::FETCH_LAZY); 

            $txtNombre=$silla['nombre'];
            $txtImagen=$silla['imagen'];

            //echo "Pulsado el botón Seleccionar";
            break;

        case "Borrar":

            $sentenciaSQL= $conexion->prepare("SELECT imagen FROM sillas WHERE id=:id");
            $sentenciaSQL->bindParam(':id',$txtID);
            $sentenciaSQL->execute();
            $silla=$sentenciaSQL->fetch(PDO::FETCH_LAZY); 

            if(isset($libro["imagen"]) &&($libro["imagen"]!="imagen.jpg") ){

                if(file_exists("../../images/".$libro["imagen"])){
                    unlink("../../images/".$libro["imagen"]);
                }


            }


            $sentenciaSQL= $conexion->prepare("DELETE FROM sillas WHERE id=:id");
            $sentenciaSQL->bindParam(':id',$txtID);
            $sentenciaSQL->execute();
            header("Location:productos.php");
            
            break;
            

}

$sentenciaSQL= $conexion->prepare("SELECT * FROM sillas");
$sentenciaSQL->execute();
$listaSillas=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

?>

<div class="col-md-5">

    <div class="card">
        <div class="card-header">
            Datos de Silla
        </div>

        <div class="card-body">

        <form method="POST" enctype="multipart/form-data" >

        <div class = "form-group">
        <label for="txtID">ID:</label>
        <input type="text" class="form-control" value="<?php echo $txtID; ?>" name="txtID" id="txtID" placeholder="ID">
        </div>

        <div class = "form-group">
        <label for="txtNombre">Nombre:</label>
        <input type="text" required class="form-control" value="<?php echo $txtNombre; ?>" name="txtNombre" id="txtNombre" placeholder="Nombre">
        </div>

        <div class = "form-group">
        <label for="txtNombre">Imagen:</label>
        <br/>

        <?php if($txtImagen!=""){ ?>

            <img class="img-thumbnail rounded" src="../../images/<?php echo $txtImagen; ?>" width="50" alt="" srcset="">
        <?php } ?>

        <input type="file" required class="form-control" name="txtImagen" id="txtImagen" placeholder="ID">
        </div>
 
        <div class="btn-group" role="group" aria-label="">
            <button type="submit" name="accion" <?php echo ($accion=="Seleccionar")?"disabled":""; ?> value="Agregar" class="btn btn-success">Agregar</button>
            <button type="submit" name="accion" <?php echo ($accion!="Seleccionar")?"disabled":""; ?> value="Modificar" class="btn btn-warning">Modificar</button>
            <button type="submit" name="accion" <?php echo ($accion!="Seleccionar")?"disabled":""; ?> value="Cancelar" class="btn btn-info">Cancelar</button>
        </div>

        </form>
        </div>

    </div>

</div>

<div class="col-md-7">
    <table class="table table-bordered ">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($listaSillas as $silla){ ?> 
            <tr>
                <td><?php echo $silla['id'] ?></td>
                <td><?php echo $silla['nombre'] ?></td>
                <td>
                <img class="img-thumbnail rounded" src="../../images/<?php echo $silla['imagen'] ?>" width="50" alt="" srcset="">
                    
                
                </td>
                <td>
                    <form method="post">
                        <input type="hidden" name="txtID" id="txtID" value="<?php echo $silla['id']; ?>" />
                        <input type="submit" name="accion" value="Seleccionar" class="btn btn-primary" />
                        <input type="submit" name="accion" value="Borrar" class="btn btn-danger" />

                    </form>

                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>


<?php include("../template/footer.php"); ?>