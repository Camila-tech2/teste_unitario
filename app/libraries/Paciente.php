<?php 

use app\libraries\Consulta;

class Paciente
{
  private string $nomePaciente;
  private string $enderecoPaciente;
  private float $telefonePaciente;
  private float $numeroBeneficiario;
  private string $doencasPrevias;
  private string $remedioDeUsoContinuo;
  private Consulta $consultaPaciente;

  public function __construct(string $nomePaciente, string $enderecoPaciente, float $telefonePaciente, float $numeroBeneficiario, string $doencasPrevias, string $remedioDeUsoContinuo, Consulta $consultaPaciente)
  {
    $this->nomePaciente = $nomePaciente;
    $this->enderecoPaciente = $enderecoPaciente;
    $this->telefonePaciente = $telefonePaciente;
    $this->numeroBeneficiario = $numeroBeneficiario;
    $this->doencasPrevias = $doencasPrevias;
    $this->remedioDeUsoContinuo = $remedioDeUsoContinuo;
    $this->consultaPaciente = $consultaPaciente;
  }

  public function setNome($nomePaciente)
  {
    $this->nomePaciente = $nomePaciente;
  }

  public function getNome()
  {
    return $this->nomePaciente;
  }

  public function setEndereco($enderecoPaciente)
  {
    $this->enderecoPaciente = $enderecoPaciente;
  }

  public function getEndereco()
  {
    return $this->enderecoPaciente;
  }

  public function setTelefone($telefonePaciente)
  {
    $this->telefonePaciente = $telefonePaciente;
  }

  public function getTelefone()
  {
    return $this->telefonePaciente;
  }

  public function setBeneficiario($numeroBeneficiario)
  {
    $this->numeroBeneficiario = $numeroBeneficiario;
  }

  public function getBeneficiario()
  {
    return $this->numeroBeneficiario;
  }

  public function setDoencas($doencasPrevias)
  {
    $this->doencasPrevias = $doencasPrevias;
  }

  public function getDoencas()
  {
    return $this->doencasPrevias;
  }

  public function setRemedio($remedioDeUsoContinuo)
  {
    $this->remedioDeUsoContinuo = $remedioDeUsoContinuo;
  }

  public function getRemedio()
  {
    return $this->remedioDeUsoContinuo;
  }

  public function setConsulta($consultaPaciente)
  {
    $this->consultaPaciente = $consultaPaciente;
  }

  public function getConsulta()
  {
    return $this->consultaPaciente;
  }
}


?>  