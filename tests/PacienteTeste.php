<?php
    namespace tests;
    
    use PHPUnit\Framework\TestCase;
    use app\libraries\Consulta;

    class PacienteTest extends TestCase
    {
        
        public function testPacienteNome()
        {
            $pacienteNome = new Product("Fernanda Silva", "Rua do Pastel", 11935849635, 258741, "Covid-19", "Vitaminas", );
            
            $this->assertEquals("Fernanda Silva", $pacienteNome->getName());
        }

        public function testPacienteEndereco(){
            $pacienteEndereco = new Product("Fernanda Silva", "Rua do Pastel", 11935849635, 258741, "Covid-19", "Vitaminas", );
            
            $this->assertEquals("Rua do Pastel", $pacienteEndereco->getEndereco());
        }

        public function testPacienteTelefone(){
            $pacienteTelefone = new Product("Fernanda Silva", "Rua do Pastel", 11935849635, 258741, "Covid-19", "Vitaminas", );
            
            $this->assertEquals(11935849635, $pacienteTelefone->getTelefone());
        }

        
        public function testPacienteBeneficiario(){
            $pacienteTelefone = new Product("Fernanda Silva", "Rua do Pastel", 11935849635, 258741, "Covid-19", "Vitaminas", );
            
            $this->assertEquals(258741, $pacienteBeneficiario->getBeneficiario());
        }

        public function testPacienteDoencas(){
            $pacienteTelefone = new Product("Fernanda Silva", "Rua do Pastel", 11935849635, 258741, "Covid-19", "Vitaminas", );
            
            $this->assertEquals("Covid-19", $pacienteDoencas->getDoencas());
        }
        
        public function testPacienteRemedio(){
            $pacienteTelefone = new Product("Fernanda Silva", "Rua do Pastel", 11935849635, 258741, "Covid-19", "Vitaminas", );
            
            $this->assertEquals("Vitaminas", $pacienteRemedio->getRemedio());
        }


        public function testVerificarTrue(){
            $this->assertTrue(true);
        }

        public function testVerificarFalse(){
            $this->assertFalse(false);
        }

        public function testSetPreco(){
            $p1 = new Product("Celular IPHONE 8", 10000.00);
            $p1->setPreco(10.00);
            $this->assertEquals(10.00, $p1->getPreco());
        }

        public function testSetName()
        {
            $p1 = new Product("Celular IPHONE 8", 10000.00);
            $p1->setName('cel');
            $this->assertEquals("cel", $p1->getName());
        }
    }
?>

