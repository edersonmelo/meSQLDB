<?php
/**
 * meSQLDB Open Source Project - http://www.edersonmelo.com/ 
 *
 * @filesource  UsuarioDAO.php
 * @package     dao
 * @copyright   2014, meSQLDB 
 * @link        http://www.edersonmelo.com
 *
 * @internal revisions
 * @since 1.0.0
 * 
 */
class UsuarioDAO {

    private $conn;

    public function __construct() {
        $registry = Registry::getInstance();
        $this->conn = $registry->get('Connection');
    }
	
	/*SELECIONA USUARIOS*/
	public function getSelecionaUsuario(Usuario $usuario) {
        $statement = 'SELECT nome_usuario, email_usuario FROM usuario WHERE email_usuario = :email_usuario AND senha_usuario = :senha_usuario LIMIT 1';
		$statement = $this->conn->prepare($statement);
		$statement->bindValue(':email_usuario', $usuario->getEmail_usuario());
        $statement->bindValue(':senha_usuario', $usuario->getSenha_usuario());
		$results = $statement->execute();
        return $this->processResults($statement);
    }
	
	/*SELECIONA TODOS OS USUARIOS*/
    public function getAll() {
        $statement = $this->conn->query(
            'SELECT * FROM usuario'
        );

        return $this->processResults($statement);
    }
	
	
	/*PROCESSA RESULTADOS*/
    private function processResults($statement) {
        $results = array();

        if($statement) {
            while($row = $statement->fetch(PDO::FETCH_OBJ)) {
                $usuario = new Usuario();
                $usuario->setNome_usuario($row->nome_usuario);
                $usuario->setEmail_usuario($row->email_usuario);
                $results[] = $usuario;
            }
        }

        return $results;
    }

}

