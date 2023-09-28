<?php
    namespace tests;
    
    use PHPUnit\Framework\TestCase;
    use app\libraries\Consulta;

    class PacienteTest extends TestCase
    {
        
        public function testPacienteNome()
        {
            $pacienteNome = new Product("Fernanda Silva", "Rua do Pastel", 11935849635, 258741, "Covid-19", "Vitaminas", "Não Tem");
            
            $this->assertEquals("Fernanda Silva", $pacienteNome->getName());
        }

        public function testPacienteEndereco(){
            $pacienteEndereco = new Product("Fernanda Silva", "Rua do Pastel", 11935849635, 258741, "Covid-19", "Vitaminas", "Não Tem");
            
            $this->assertEquals("Rua do Pastel", $pacienteEndereco->getEndereco());
        }

        public function testPacienteTelefone(){
            $pacienteTelefone = new Product("Fernanda Silva", "Rua do Pastel", 11935849635, 258741, "Covid-19", "Vitaminas", "Não Tem");
            
            $this->assertEquals(11935849635, $pacienteTelefone->getTelefone());
        }

        
        public function testPacienteBeneficiario(){
            $pacienteBeneficiario = new Product("Fernanda Silva", "Rua do Pastel", 11935849635, 258741, "Covid-19", "Vitaminas", "Não Tem");
            
            $this->assertEquals(258741, $pacienteBeneficiario->getBeneficiario());
        }

        public function testPacienteDoencas(){
            $pacienteDoencas = new Product("Fernanda Silva", "Rua do Pastel", 11935849635, 258741, "Covid-19", "Vitaminas", "Não Tem");
            
            $this->assertEquals("Covid-19", $pacienteDoencas->getDoencas());
        }
        
        public function testPacienteRemedio(){
            $pacienteRemedio = new Product("Fernanda Silva", "Rua do Pastel", 11935849635, 258741, "Covid-19", "Vitaminas", "Não Tem");
            
            $this->assertEquals("Vitaminas", $pacienteRemedio->getRemedio());
        }

        public function testPacienteConsulta(){
            $pacienteConsulta = new Product("Fernanda Silva", "Rua do Pastel", 11935849635, 258741, "Covid-19", "Vitaminas", "Não Tem");
            
            $this->assertEquals("Não Tem", $pacienteConsulta->getConsulta());
        }


        public function testVerificarTrue(){
            $this->assertTrue(true);
        }

        public function testVerificarFalse(){
            $this->assertFalse(false);
        }

        public function testSetPacienteNome(){
            $pacienteNome = new Product("Fernanda Silva", "Rua do Pastel", 11935849635, 258741, "Covid-19", "Vitaminas", "Não Tem");
            $pacienteNome->setNome("Silvio Santos");
            $this->assertEquals("Silvio Santos", $pacienteNome->getNome());
        }

        public function testSetPacienteEndereco()
        {
            $pacienteEndereco = new Product("Fernanda Silva", "Rua do Pastel", 11935849635, 258741, "Covid-19", "Vitaminas", "Não Tem");
            $pacienteEndereco->setEndereco("Rua da Alegria");
            $this->assertEquals("Rua da Alegria", $pacienteEndereco->getEndereco());
        }

        public function testSetPacienteTelefone()
        {
            $pacienteTelefone = new Product("Fernanda Silva", "Rua do Pastel", 11935849635, 258741, "Covid-19", "Vitaminas", "Não Tem");
            $pacienteTelefone->setTelefone(11958743256);
            $this->assertEquals(11958743256, $pacienteTelefone->getTelefone());
        }

        public function testSetPacienteBeneficiario()
        {
            $pacienteBeneficiario = new Product("Fernanda Silva", "Rua do Pastel", 11935849635, 258741, "Covid-19", "Vitaminas", "Não Tem");
            $pacienteBeneficiario->setBeneficiario(147852);
            $this->assertEquals(147852, $pacienteBeneficiario->getBeneficiario());
        }

        public function testSetDoencas()
        {
            $pacienteDoencas = new Product("Fernanda Silva", "Rua do Pastel", 11935849635, 258741, "Covid-19", "Vitaminas", "Não Tem");
            $pacienteDoencas->setDoencas("Catapora");
            $this->assertEquals("Catapora", $pacienteDoencas->getDoencas());
        }

        public function testSetRemedio()
        {
            $pacienteRemedio = new Product("Fernanda Silva", "Rua do Pastel", 11935849635, 258741, "Covid-19", "Vitaminas", "Não Tem");
            $pacienteRemedio->setRemedio("Loratadina");
            $this->assertEquals("Loratadina", $pacienteRemedio->getRemedio());
        }

        public function testSetConsulta()
        {
            $pacienteConsulta = new Product("Fernanda Silva", "Rua do Pastel", 11935849635, 258741, "Covid-19", "Vitaminas", "Não Tem");
            $pacienteConsulta->setConsulta("Tem");
            $this->assertEquals("Tem", $pacienteConsulta->getConsulta());
        }
    }
?>

