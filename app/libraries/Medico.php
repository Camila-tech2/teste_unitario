<?php 
use app\libraries\Especialidade;

class Medico
{
  private string $nomeMedico;
  private float $telefoneMedico;
  private string $enderecoMedico;
  private string $crm;
  private Especialidade $especialidadeMedico;
  private Consulta $consultaMedico;

  public function __construct(string $nomeMedico, float $telefoneMedico, string $enderecoMedico, string $crm, Especialidade $especialidadeMedico, Consulta $consultaMedico)
  {
    $this->nomeMedico = $nomeMedico;
    $this->telefoneMedico = $telefoneMedico;
    $this->enderecoMedico = $enderecoMedico;
    $this->crm = $crm;
    $this->especialidadeMedico = $especialidadeMedico;
    $this->consultaMedico = $consultaMedico;
  }

  public function setNome($nomeMedico)
  {
    $this->nomeMedico = $nomeMedico;
  }

  public function getNome()
  {
    return $this->nomeMedico;
  }

  public function setTelefone($telefoneMedico)
  {
    $this->telefoneMedico = $telefoneMedico;
  }

  public function getTelefone()
  {
    return $this->telefoneMedico;
  }

  public function setEndereco($enderecoMedico)
  {
    $this->enderecoMedico = $enderecoMedico;
  }

  public function getEndereco()
  {
    return $this->enderecoMedico;
  }

  public function setCrm($crm)
  {
    $this->crm = $crm;
  }

  public function getCrm()
  {
    return $this->crm;
  }

  public function setEspecialidade($especialidadeMedico)
  {
    $this->especialidadeMedico = $especialidadeMedico;
  }

  public function getEspecialidade()
  {
    return $this->especialidadeMedico;
  }

  public function setConsulta($consultaMedico)
  {
    $this->consultaMedico = $consultaMedico;
  }

  public function getConsulta()
  {
    return $this->consultaMedico;
  }
}




?>