<?php

class conexion{
  private static $conexion;

  public static function abrir_conexion(){
    //isset booleano comprueba si esta iniciado conexion
    if(!isset(self::$conexion)){
      try {
        //include nos ayuda a traer todo el codigo del archivo que le pongamos, si no tiene el archivo lanza una advertencia
        //once php se asegura que solo se incluya una vez
        //requiere si no obtiene el archivo detiene la ejecucion
        include_once 'config.inc.php';
        //mysqli trabaja solo con mysql es mar rapido que pdo (ms)
        //pdo es mas lento pero es compatible con mas de 20 DBs, al momento de migrar de DB es mejor
        self::$conexion = new PDO("mysql:host$nombre_servidor; dbname=$jornada", $nombre_usuario, $password, $puerto);
        self::$conexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        self::$conexion -> exec("SET CHARACTER SET utf8");

        print "conexion abierta";
      } catch (PDOexception $ex) {
        print "ERROR: " . $ex -> getMessage() . "<br>";
        die();

      }

    }
  }

  public static function cerrar_conexion(){
    if(isset(self::$conexion)){
      self::$conexion =null;

      print "conexion cerrada";
    }
  }

//obtenermos una instancia de conexion
  public static function obtener_conexion(){
    return self::$conexion;
  }
}
