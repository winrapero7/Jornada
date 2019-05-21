<?php
/**
 *
 */
class Usuario{
  private $id;
  private $nombre;
  private $aPaterno;
  private $aMaterno;
  private $sexo;
  private $telefono;
  private $email;
  private $pass;
  private $tipo;

  public function __construct($id, $nombre, $aPateno, $aMaterno, $sexo, $telefono, $email, $pass ,$tipo){
    $this -> id=$id;
    $this -> nombre=$nombre;
    $this -> aPaterno=$aPaterno;
    $this -> aMateno=$aMaterno;
    $this -> sexo=$sexo;
    $this -> telefono=$telefono;
    $this -> email=$email;
    $this -> pass=$pass;
    $this -> tipo=$tipo;
  }

  public function get_id(){
    return $this -> id;
  }

  public function get_nombre(){
    return $this -> nombre;
  }

  public function get_aPaterno(){
    return $this -> aPaterno;
  }

  public function get_aMaterno(){
    return $this -> aMaterno;
  }

  public function get_sexo(){
    return $this -> sexo;
  }

  public function get_telefono(){
    return $this -> telefono;
  }

  public function get_email(){
    return $this -> email;
  }

  public function get_pass(){
    return $this -> pass;
  }

  public function get_tipo(){
    return $this -> tipo;
  }

  public function set_id($id){
    $this -> id=$id;
  }

  public function set_nombre($nombre){
    $this -> nombre=$nombre;
  }

  public function set_aPaterno($aPateno){
    $this -> aPaterno=$aPateno;
  }

  public function set_aMaterno($aMaterno){
    $this -> aMaterno=$aMaterno;
  }

  public function set_sexo($sexo){
    $this -> sexo=$sexo;
  }

  public function set_telefono($telefono){
    $this -> telefono=$telefono;
  }

  public function set_email($email){
    $this -> email=$email;
  }

  public function set_pass($pass){
    $this -> pass=$pass;
  }

  public function set_tipo($tipo){
    $this -> tipo=$tipo;
  }

}
