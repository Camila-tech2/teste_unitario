<?php
namespace app\libraries;

class Medico{
    private string $nomeMedico;
    private float $telefoneMedico;
    private string $enderecoMedico;
    private string $crm;


    public function __construct(String $nomeMedico, float $telefoneMedico, String $enderecoMedico, String $crm)
    {
        $this->nomeMedico = $nomeMedico;
        $this->telefoneMedico = $telefoneMedico;
        $this->enderecoMedico = $enderecoMedico;
        $this->crm = $crm;
    }

        public function setNome($nomeMedico){
            $this->nomeMedico = $nomeMedico;
        }

        public function getNome(){
            return $this->nomeMedico;
        }

        public function setTelefone($telefoneMedico){
            $this->telefoneMedico = $telefoneMedico;
        }

        public function getTelefone(){
            return $this->telefoneMedico;
        }

        public function setEndereco($enderecoMedico){
            $this->enderecoMedico = $enderecoMedico;
        }

        public function getEndereco(){
            return $this->enderecoMedico;
        }

        public function setCrm($crm){
            $this->crm = $crm;
        }

        public function getCrm(){
            return $this->crm;
        }
    } 


    class Paciente{
        private string $nomePaciente; 
        private string $enderecoPaciente;
        private float $telefonePaciente;
        private float $numeroBeneficiario;
        private string $doencasPrevias;
        private string $remedioDeUsoContinuo;
    
        public function __construct(String $nomePaciente, String $enderecoPaciente, float $telefonePaciente, float $numeroBeneficiario, String $doencasPrevias, String $remedioDeUsoContinuo)
        {
            $this->nomePaciente = $nomePaciente;
            $this->enderecoPaciente = $enderecoPaciente;
            $this->telefonePaciente = $telefonePaciente;
            $this->numeroBeneficiario = $numeroBeneficiario;
            $this->doencasPrevias = $doencasPrevias;
            $this->remedioDeUsoContinuo = $remedioDeUsoContinuo;
        }
    
            public function setNome($nomePaciente){
                $this->nomePaciente = $nomePaciente;
            }
    
            public function getNome(){
                return $this->nomePaciente;
            }
    
            public function setEndereco($enderecoPaciente){
                $this->enderecoPaciente = $enderecoPaciente;
            }
    
            public function getEndereco(){
                return $this->enderecoPaciente;
            }

            public function setTelefone($telefonePaciente){
                $this->telefonePaciente = $telefonePaciente;
            }
    
            public function getTelefone(){
                return $this->telefonePaciente;
            }

            public function setBeneficiario($numeroBeneficiario){
                $this->numeroBeneficiario = $numeroBeneficiario;
            }
    
            public function getBeneficiario(){
                return $this->numeroBeneficiario;
            }

            public function setDoencas($doencasPrevias){
                $this->doencasPrevias = $doencasPrevias;
            }
    
            public function getDoencas(){
                return $this->doencasPrevias;
            }

            public function setRemedio($remedioDeUsoContinuo){
                $this->remedioDeUsoContinuo = $remedioDeUsoContinuo;
            }
    
            public function getRemedio(){
                return $this->remedioDeUsoContinuo;
            }
        } 
?>