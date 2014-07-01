<?php
/**
 * meSQLDB Open Source Project - http://www.edersonmelo.com/ 
 *
 * @filesource  index.php
 * @package     meSQLDB
 * @copyright   2014, meSQLDB 
 * @link        http://www.edersonmelo.com
 *
 * @internal revisions
 * @since 1.0.0
 * 
 */
include_once('Registry.php');
include_once('connPDO.php');
include_once('model/Usuario.php');
include_once('dao/UsuarioDAO.php');


$connPDO = new connPDO();
$conn = $connPDO->open();			

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Armazenar essa instância no Registry
$registry = Registry::getInstance();
$registry->set('Connection', $conn);

$primeiroPost = new Usuario();
$primeiroPost->setEmail_usuario('setandoMeuEmail');
$primeiroPost->setSenha_usuario('setandoMinhaSenha');

// Instanciar o DAO e trabalhar com os métodos
$usuarioDAO = new UsuarioDAO();

// Resgatar todos os registros e iterar
$results = $usuarioDAO->getSelecionaUsuario($primeiroPost);
foreach($results as $usuario) {
    echo $usuario->getNome_usuario() . '<br />';
    echo $usuario->getEmail_usuario() . '<br />';
    echo '<br />';
}

