<?php

class Login
{
  private string $email;
  private string $senha;


  public function getEmail()
  {
    return  $this->email;
  }

  public function setEmail( string $email)
  {
    $email = filter_var($email, FILTER_SANITIZE_EMAIL) ;
    $this->email = $email;
  }

  public function getSenha()
  {
    return $this->senha;
  }

  public function setSenha(string $senha)
  {
    $this->senha = $senha;
  }
  public function Logar()
  {
    if($this->email == "test@teste.com" and $this->senha == "12345")
    {
      echo "logado com sucesso!";
    }else{
      echo "dados inválidos";
    };
  }

}

$logar = new Login();
$logar->setEmail("test@teste.com");
$logar->setSenha("12345");
$logar->Logar();
echo "\n";
echo $logar->getEmail();
echo "\n";
echo $logar->getSenha();
echo "\n";
