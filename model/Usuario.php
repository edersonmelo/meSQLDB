<?php
/**
 * meSQLDB Open Source Project - http://www.edersonmelo.com/ 
 *
 * @filesource  Usuario.php
 * @package     model
 * @copyright   2014, meSQLDB 
 * @link        http://www.edersonmelo.com
 *
 * @internal revisions
 * @since 1.0.0
 * 
 */
class Usuario {

    private $nome_usuario;
    private $email_usuario;
	private $senha_usuario;
	
	
	/*Add opcoes variaveis*/
	private $class; # nome da classe manipulada pelo repositório
	private $pk;	# chave primaria para retornar objetos Records passiveis de alterações
	private $ident; # campo auto increment
	
	private $where; # Clausula WHERE
	private $order; # Clausula ORDER BY
	private $field; # Campos a serem selecionados
	private $group; # Clausula Group BY
	private $having; # Clausula HAVING
	private $join; # Clausula JOIN
	private $limit; # Clausula LIMIT


    public function getNome_usuario() {
        return $this->nome_usuario;
    }

    public function setNome_usuario($nome_usuario) {
        $this->nome_usuario = $nome_usuario;
        return $this;
    }

    public function getEmail_usuario() {
        return $this->email_usuario;
    }

    public function setEmail_usuario($email_usuario) {
        $this->email_usuario = $email_usuario;
        return $this;
    }

		
	public function getSenha_usuario() {
        return $this->senha_usuario;
    }

    public function setSenha_usuario($senha_usuario) {
        $this->senha_usuario = $senha_usuario;
        return $this;
    }
	
	public function setClass($class) {
		$this->class = $class;
		return $this;
	}

	public function getClass() {
		return $this->class;
	}

	public function setPk($pk) {
	   $this->pk = $pk;
	   return $this;
	}

	public function getPk() {
		return $this->pk;
	}

	public function setIdent($ident) {
	   $this->ident = $ident;
	   return $this;
	}

	public function getIdent() {
		return $this->ident;
	}

	public function setWhere($where) {
	   $this->where = $where;
	   return $this;
	}

	public function getWhere() {
		return $this->where;
	}

	public function setOrder($order) {
	   $this->order = $order;
	   return $this;
	}

	public function getOrder() {
		return $this->order;
	}

	public function setField($field) {
	   $this->field = $field;
	   return $this;
	}

	public function getField() {
		return $this->field;
	}

	public function setGroup($group) {
	   $this->group = $group;
	   return $this;
	}

	public function getGroup() {
		return $this->group;
	}

	public function setHaving($having) {
	   $this->having = $having;
	   return $this;
	}

	public function getHaving() {
		return $this->having;
	}

	public function setJoin($join) {
	   $this->join = $join;
	   return $this;
	}

	public function getJoin() {
		return $this->join;
	}

	public function setLimit($limit) {
	   $this->limit = $limit;
	   return $this;
	}

	public function getLimit() {
		return $this->limit;
	}


}

