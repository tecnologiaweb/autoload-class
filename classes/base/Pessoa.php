<?php
/**
 * Description of Pessoa
 *
 * @author henriqueoliveira
 */
class Pessoa extends Util{
    
    private $documento;
    private $nome;
    private $email;
    
    function __construct($documento=NULL,$nome=NULL,$email=NULL) {
        $this->setDocumento($documento);
        $this->setNome($nome);
        $this->setEmail($email);
    }
    
    public function getDocumento() {
        return $this->documento;
    }
    public function setDocumento($documento) {
        $this->documento = $documento;
    }
    public function getNome() {
        return $this->nome;
    }
    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function getEmail() {
        return $this->email;
    }
    public function setEmail($email) {
        $this->email = $email;
    }
    
}
