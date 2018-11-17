<?php
/**
 *
 */
class ImagenesModel
{
  //Atributos
  private $db;

  function __construct()
  {
    //Conectamos a la base de datos cuando instanciamos
    $this->db = $this->connect();
  }

  //Conectarse a la base de datos mediante PDO (PHP DATA OBJECT)
  private function connect(){

    return new PDO('mysql:host=localhost;'
    .'dbname=db_rolling;charset=utf8'
    , 'root', '');
  }

  function insert($url, $id_recital){
    $sentencia = $this->db->prepare("INSERT INTO imagen(url, id_recital) VALUES (?,?)");
    $sentencia->execute(array($url, $id_recital));
  }

  function getByRecital($id_recital){
    $sentencia = $this->db->prepare("SELECT * FROM imagen i, recital r WHERE i.id_recital=r.id_recital and r.id_recital=?");
    $sentencia->execute(array($id_recital[0]));
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  //Asigna un codigo unico a la imagen y la mueve al servidor
  function subirImagen($imagen){
       $destino_final = 'images/' . uniqid() . '.jpg';
       // echo "destino_final: ".$destino_final;
       move_uploaded_file($imagen, $destino_final);
       return $destino_final;
   }

   //Se le pasa un ID de imagen a la funcion y devuelve la URL.
   function getUrl($id_img){
     $sentencia = $this->db->prepare("SELECT url FROM imagen WHERE id_imagen = ?");
     $sentencia->execute(array($id_img[0]));
     return $sentencia->fetch(PDO::FETCH_ASSOC);
   }

   //Funcion para eliminar una imagen, también se debe eliminar el archivo del servidor
   //Alojado en images
   function delete($id_img){
     $url = $this->getUrl($id_img);
     unlink($url['url']);
     $sentencia = $this->db->prepare("DELETE FROM imagen WHERE id_imagen=?");
     $sentencia->execute(array($id_img[0]));
   }


}





 ?>
