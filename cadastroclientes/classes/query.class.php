<?php class query extends bd{

	private function criptografar($senha){
			return md5($senha);
		}

	private function existeUsuario($email){
		$selecionar = self::conn()->prepare("SELECT * FROM 'usuarios' WHERE email = '$email'");
		$selecionar->execute();

			if ($selecionar->rowCount() >= 1 ){
				return true;
			}else{
				return false;
			}
		} //verifica a existencia de usuario no bd

	public function cadastraruser($dados -> array()){
		if ($this->existeUsuario($dados[1])){
			return false;
		}else{
			$dados[3] = $this->criptografar($dados[3]);
			$sqlInserir("INSERT INTO 'usuarios' (nome, email, site, senha, descricao, status) VALUES (?,?,?,?,?,?)");
			$stmt = self::conn()->prepare($sqlInserir);

			if($stmt->execute($dados)){
				return true;
			}else{
				return false;
			}
		}
	}

	} 
?>