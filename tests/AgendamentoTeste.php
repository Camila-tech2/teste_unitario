<?php

namespace tests;
    
    use PHPUnit\Framework\TestCase;

    /*
    private float $numeroAgendamento;
  private string $dataAgendamento;
  private string $horaAgendamento;
  private string $queixa;
  private string $gravidade;
    */

    class AgendamentoTest extends TestCase
    {
        public function testAgendamentoNumero(){
            $AgendamentoNumero = new Product(130, "10/12/2023", "12:20", "Não Tem", "Não Tem");
            
            $this->assertEquals(130, $AgendamentoNumero->getAgendamento());
        }

        public function testAgendamentoData(){
            $AgendamentoData = new Product(130, "10/12/2023", "12:20", "Não Tem", "Não Tem");
            
            $this->assertEquals("10/12/2023", $AgendamentoData->getData());
        }

        public function testAgendamentoHora(){
            $AgendamentoHora = new Product(130, "10/12/2023", "12:20", "Não Tem", "Não Tem");
            
            $this->assertEquals("12:20", $AgendamentoHora->getHora());
        }

        public function testAgendamentoQueixa(){
            $AgendamentoQueixa = new Product(130, "10/12/2023", "12:20", "Não Tem", "Não Tem");
            
            $this->assertEquals("Não Tem", $AgendamentoQueixa->getQueixa());
        }

        public function testAgendamentoGravidade(){
            $AgendamentoGravidade = new Product(130, "10/12/2023", "12:20", "Não Tem", "Não Tem");
            
            $this->assertEquals("Não Tem", $AgendamentoGravidade->getGravidade());
        }

        public function testVerificarTrue(){
            $this->assertTrue(true);
        }

        public function testVerificarFalse(){
            $this->assertFalse(false);
        }

        public function testSetAgendamentoNumero(){
            $AgendamentoNumero = new Product(130, "10/12/2023", "12:20", "Não Tem", "Não Tem");
            $AgendamentoNumero->setNumero(145);
            $this->assertEquals(145, $AgendamentoNumero->getNumero());
        }

        public function testSetAgendamentoData(){
            $AgendamentoData = new Product(130, "10/12/2023", "12:20", "Não Tem", "Não Tem");
            $AgendamentoData->setData("02/01/2024");
            $this->assertEquals("02/01/2024", $AgendamentoData->getData());
        }

        public function testSetAgendamentoHora(){
            $AgendamentoHora = new Product(130, "10/12/2023", "12:20", "Não Tem", "Não Tem");
            $AgendamentoHora->setHora("20:50");
            $this->assertEquals("20:50", $AgendamentoHora->getHora());
        }

        public function testSetAgendamentoQueixa(){
            $AgendamentoQueixa = new Product(130, "10/12/2023", "12:20", "Não Tem", "Não Tem");
            $AgendamentoQueixa->setQueixa("Dor de Cabeça");
            $this->assertEquals("Dor de Cabeça", $AgendamentoQueixa->getQueixa());
        }

        public function testSetAgendamentoGravidade(){
            $AgendamentoGravidade = new Product(130, "10/12/2023", "12:20", "Não Tem", "Não Tem");
            $AgendamentoGravidade->setGravidade("Média");
            $this->assertEquals("Média", $AgendamentoGravidade->getGravidade());
        }
 
    }

?>