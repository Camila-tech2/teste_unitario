<?php
namespace app\libraries;

class Medico
{
  private string $nomeMedico;
  private float $telefoneMedico;
  private string $enderecoMedico;
  private string $crm;
  private Especialidade $especialidadeMedico;

  public function __construct(string $nomeMedico, float $telefoneMedico, string $enderecoMedico, string $crm, Especialidade $especialidadeMedico)
  {
    $this->nomeMedico = $nomeMedico;
    $this->telefoneMedico = $telefoneMedico;
    $this->enderecoMedico = $enderecoMedico;
    $this->crm = $crm;
    $this->especialidadeMedico = $especialidadeMedico;
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
}


class Paciente
{
  private string $nomePaciente;
  private string $enderecoPaciente;
  private float $telefonePaciente;
  private float $numeroBeneficiario;
  private string $doencasPrevias;
  private string $remedioDeUsoContinuo;

  public function __construct(string $nomePaciente, string $enderecoPaciente, float $telefonePaciente, float $numeroBeneficiario, string $doencasPrevias, string $remedioDeUsoContinuo)
  {
    $this->nomePaciente = $nomePaciente;
    $this->enderecoPaciente = $enderecoPaciente;
    $this->telefonePaciente = $telefonePaciente;
    $this->numeroBeneficiario = $numeroBeneficiario;
    $this->doencasPrevias = $doencasPrevias;
    $this->remedioDeUsoContinuo = $remedioDeUsoContinuo;
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
}

class Especialidade
{
  private string $nomeEspecialidade;
  private float $numeroRegistro;
  private string $publicoAlvo;



  public function __construct(string $nomeEspecialidade, float $numeroRegistro, string $publicoAlvo)
  {
    $this->nomeEspecialidade = $nomeEspecialidade;
    $this->numeroRegistro = $numeroRegistro;
    $this->publicoAlvo = $publicoAlvo;

  }

  public function setNomeEspecialidade($nomeEspecialidade)
  {
    $this->nomeEspecialidade = $nomeEspecialidade;
  }

  public function getNomeEspecialidade()
  {
    return $this->nomeEspecialidade;
  }

  public function setRegistro($numeroRegistro)
  {
    $this->numeroRegistro = $numeroRegistro;
  }

  public function getRegistro()
  {
    return $this->numeroRegistro;
  }

  public function setPublico($publicoAlvo)
  {
    $this->publicoAlvo = $publicoAlvo;
  }

  public function getPublico()
  {
    return $this->publicoAlvo;
  }

}

class Consulta
{  
  private float $numeroConsulta;
  private string $dataConsulta;

  private string $horaConsulta;


  public function __construct(float $numeroConsulta, String $dataConsulta, string $horaConsulta)
  {
    $this->numeroConsulta = $numeroConsulta;
    $this->dataConsulta = $dataConsulta;
    $this->horaConsulta = $horaConsulta;

  }

  public function setConsulta($numeroConsulta)
  {
    $this->numeroConsulta = $numeroConsulta;
  }

  public function getConsulta()
  {
    return $this->numeroConsulta;
  }

  public function setData($dataConsulta)
  {
    $this->dataConsulta = $dataConsulta;
  }

  public function getData()
  {
    return $this->dataConsulta;
  }


  public function setHora($horaConsulta)
  {
    $this->horaConsulta = $horaConsulta;
  }

  public function getHora()
  {
    return $this->horaConsulta;
  }


}

class Agendamento
{
  private string $nomeMedico;
  private float $telefoneMedico;
  private string $enderecoMedico;
  private string $crm;


  public function __construct(string $nomeMedico, float $telefoneMedico, string $enderecoMedico, string $crm)
  {
    $this->nomeMedico = $nomeMedico;
    $this->telefoneMedico = $telefoneMedico;
    $this->enderecoMedico = $enderecoMedico;
    $this->crm = $crm;
  }

  public function setNome($nomeMedico)
  {
    $this->nomeMedico = $nomeMedico;
  }

  public function getNome()
  {
    return $this->nomeMedico;
  }



}
?>