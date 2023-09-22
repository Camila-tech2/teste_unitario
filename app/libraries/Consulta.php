<?php 

class Consulta
{  
  private float $numeroConsulta;
  private string $dataConsulta;
  private string $horaConsulta;

  private Agendamento $agendamentoConsulta;


  public function __construct(float $numeroConsulta, String $dataConsulta, string $horaConsulta, Agendamento $agendamentoConsulta)
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

  public function setAgendamento($agendamentoConsulta)
  {
    $this->agendamentoConsulta = $agendamentoConsulta;
  }

  public function getAgendameto()
  {
    return $this->agendamentoConsulta;
  }

  
}

?>