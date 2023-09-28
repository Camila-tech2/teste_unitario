<?php

namespace tests;
    
    use PHPUnit\Framework\TestCase;

    class EspecialidadeTest extends TestCase
    {
        public function testEspecialidadeNome(){
            $especialidadeNome = new Product("Clinico Geral", 90876, "Adulto");
            
            $this->assertEquals("Clinico Geral", $especialidadeNome->getNomeEspecialidade());
        }

        public function testEspecialidadeRegistro(){
            $especialidadeRegistro = new Product("Clinico Geral", 90876, "Adulto");
            
            $this->assertEquals("Clinico Geral", $especialidadeRegistro->getRegistro());
        }

        public function testEspecialidadePublico(){
            $especialidadePublico = new Product("Clinico Geral", 90876, "Adulto");
            
            $this->assertEquals("Adulto", $especialidadePublico->getPublico());
        }

        public function testVerificarTrue(){
            $this->assertTrue(true);
        }

        public function testVerificarFalse(){
            $this->assertFalse(false);
        }

        public function testSetEspecialidadeNome(){
            $especialidadeNome = new Product("Clinico Geral", 90876, "Adulto");
            $especialidadeNome->setEspecialidade("Cirurgião Geral");
            $this->assertEquals("Cirurgião Geral", $especialidadeNome->getNomeEspecialidade());
        }

        public function testSetRegistro(){
            $especialidadeRegistro = new Product("Clinico Geral", 90876, "Adulto");
            $especialidadeRegistro->testSetRegistro(56789);
            $this->assertEquals("Cirurgião Geral", $especialidadeRegistro->getRegistro());
        }

        public function testSetEspecialidadePublico(){
            $especialidadePublico = new Product("Clinico Geral", 90876, "Adulto");
            $especialidadePublico->setPublico("Todos");
            $this->assertEquals("Todos", $especialidadePublico->getPublico());
        }
    }

?>