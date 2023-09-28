<?php 

namespace tests;
    
    use PHPUnit\Framework\TestCase;
    use app\libraries\Consulta;
    use app\libraries\Especialidade;

    class MedicoTest extends TestCase
    {
        public function testMedicoNome(){
            $medicoNome = new Product("Willian Ferrero", 11956238745, "Castelo Branco", 12345,"Clinico Geral", "Tem");
            
            $this->assertEquals("Willian Ferrero", $medicoNome->getNome());
        }

        public function testMedicoTelefone(){
            $medicoTelefone = new Product("Willian Ferrero", 11956238745, "Castelo Branco", 12345, "Clinico Geral", "Tem");
            
            $this->assertEquals(11956238745, $medicoTelefone->getTelefone());
        }

        public function testMedicoEndereco(){
            $medicoEndereco = new Product("Willian Ferrero", 11956238745, "Castelo Branco", 12345,"Clinico Geral", "Tem" );
            
            $this->assertEquals("Castelo Branco", $medicoEndereco->getEndereco());
        }

        public function testMedicoCrm(){
            $medicoCrm = new Product("Willian Ferrero", 11956238745, "Castelo Branco", 12345, "Clinico Geral", "Tem");
            
            $this->assertEquals(12345, $medicoCrm->getCrm());
        }

        public function testMedicoEspecialidade(){
            $medicoEspecialidade = new Product("Willian Ferrero", 11956238745, "Castelo Branco", 12345, "Clinico Geral", "Tem");
            
            $this->assertEquals("Clinico Geral", $medicoEspecialidade->getEspecialidade());
        }

        public function testMedicoConsulta(){
            $medicoConsulta = new Product("Willian Ferrero", 11956238745, "Castelo Branco", 12345, "Clinico Geral", "Tem");
            
            $this->assertEquals("Tem", $medicoConsulta->getConsulta());
        }


        public function testVerificarTrue(){
            $this->assertTrue(true);
        }

        public function testVerificarFalse(){
            $this->assertFalse(false);
        }

        public function testSetMedicoNome(){
            $medicoNome = new Product("Willian Ferrero", 11956238745, "Castelo Branco", 12345, "Clinico Geral", "Tem");
            $medicoNome->setNome("Raimundo Silva");
            $this->assertEquals("Raimundo Silva", $medicoNome->getNome());
        }

        public function testSetMedicoTelefone(){
            $medicoTelefone = new Product("Willian Ferrero", 11956238745, "Castelo Branco", 12345, "Clinico Geral", "Tem");
            $medicoTelefone->setTelefone(1398099234);
            $this->assertEquals(1398099234, $medicoTelefone->getTelefone());
        }

        public function testSetMedicoEndereco(){
            $medicoEndereco = new Product("Willian Ferrero", 11956238745, "Castelo Branco", 12345, "Clinico Geral", "Tem");
            $medicoEndereco->setEndereco("Avenida Brasil");
            $this->assertEquals("Avenida Brasil", $medicoEndereco->getEndereco());
        }

        public function testSetMedicoCrm(){
            $medicoCrm = new Product("Willian Ferrero", 11956238745, "Castelo Branco", 12345, "Clinico Geral", "Tem");
            $medicoCrm->set(69246);
            $this->assertEquals(69246, $medicoCrm->getCrm());
        }

        public function testSetMedicoEspecialidade(){
            $medicoEspecialidade = new Product("Willian Ferrero", 11956238745, "Castelo Branco", 12345, "Clinico Geral", "Tem");
            $medicoEspecialidade->setEspecialidade("Cirurgião Geral");
            $this->assertEquals("Cirurgião Geral", $medicoEspecialidade->getEspecialidade());
        }

        public function testSetMedicoConsulta(){
            $medicoConsulta = new Product("Willian Ferrero", 11956238745, "Castelo Branco", 12345, "Clinico Geral", "Tem");
            $medicoConsulta->set("Não Tem");
            $this->assertEquals("Não Tem", $medicoConsulta->getConsulta());
        }
    }

?>