<?php
namespace app\libraries;

class Medico{
    private string $nome;
    private float $telefone;
    private string $endereco;
    private string $crm;


    public function __construct(String $nome, float $telefone, String $endereco, String $crm)
    {
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->endereco = $endereco;
        $this->crm = $crm;
    }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getNome(){
            return $this->nome;
        }

        public function setTelefone($telefone){
            $this->telefone = $telefone;
        }

        public function getTelefone(){
            return $this->telefone;
        }

        public function setEndereco($endereco){
            $this->endereco = $endereco;
        }

        public function getEndereco(){
            return $this->endereco;
        }

        public function setCrm($crm){
            $this->crm = $crm;
        }

        public function getCrm(){
            return $this->crm;
        }
    } 


    class Paciente{
        private string $name;
        private float $preco;
    
        public function __construct(String $name, float $preco)
        {
            $this->name = $name;
            $this->preco = $preco;
        }
    
            public function setName($name){
                $this->name = $name;
            }
    
            public function getName(){
                return $this->name;
            }
    
            public function setPreco($preco){
                $this->preco = $preco;
            }
    
            public function getPreco(){
                return $this->preco;
            }
        } 
?>