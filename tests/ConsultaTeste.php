<?php

namespace tests;
    
    use PHPUnit\Framework\TestCase;

    class ConsultaTest extends TestCase
    {
        public function testConsultaNumero(){
            $consultaNumero = new Product(77, "22/10/2023", "10:40", "Possui");
            
            $this->assertEquals(77, $consultaNumero->getConsulta());
        }

        public function testConsultaData(){
            $consultaData = new Product(77, "22/10/2023", "10:40", "Possui");
            
            $this->assertEquals("22/10/2023", $consultaData->getData());
        }

        public function testConsultaHora(){
            $consultaHora = new Product(77, "22/10/2023", "10:40", "Possui");
            
            $this->assertEquals("10:40", $consultaHora->getHora());
        }

        public function testConsultaAgendamento(){
            $consultaAgendamento = new Product(77, "22/10/2023", "10:40", "Possui");
            
            $this->assertEquals("Possui", $consultaAgendamento->getAgendamento());
        }

        public function testVerificarTrue(){
            $this->assertTrue(true);
        }

        public function testVerificarFalse(){
            $this->assertFalse(false);
        }

        public function testSetConsultaNumero(){
            $consultaNumero = new Product(77, "22/10/2023", "10:40", "Possui");
            $consultaNumero->setNumero(66);
            $this->assertEquals(66, $consultaNumero->getNumero());
        }

        public function testSetConsultaData(){
            $consultaData = new Product(77, "22/10/2023", "10:40", "Possui");
            $consultaData->setData("13/11/2023");
            $this->assertEquals("13/11/2023", $consultaData->getData());
        }

        public function testSetConsultaHora(){
            $consultaHora = new Product(77, "22/10/2023", "10:40", "Possui");
            $consultaHora->setHora("13:45");
            $this->assertEquals("13:45", $consultaHora->getHora());
        }

        public function testSetConsultaDataAgendamento(){
            $consultaAgendamento = new Product(77, "22/10/2023", "10:40", "Possui");
            $consultaAgendamento->setAgendamento("Não Possui");
            $this->assertEquals("Não Possui", $consultaAgendamento->getAgendamento());
        }
 
    }

?>