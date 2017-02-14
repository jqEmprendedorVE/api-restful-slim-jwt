<?php
    
class Usuarios extends ActiveRecord\Model{
    public static $table_name = 'usuarios';
    public static $primary_key = 'idusuario';

    public static function login($usuario,$password){
    	$u = $usuario;
    	$p = md5($password);

    	$usuario = Usuarios::find(array(
    		'conditions'=>"nombreusuario='$u' and passwordusuario='$p'"
    		));

    	if(!empty($usuario)){
    		return $usuario;
    	}else{
    		return false;
    	}
    }
}