<?php

class TypePerson {
  protected string $type;

  function __construct(string $type )
  {
    $this->type = $type;
  }

}
class Person extends TypePerson {
  private string $name;
  private string $cep;

  function __construct(string $name, string $cep, string $type)
  {
    $this->name = $name;
    $this->cep  = $cep;

    parent::__construct($type);

  }

  function getName()
  {
    return $this->name;
  }

  function getCEP()
  {
    return $this->cep;
  }

  function getType()
  {
    return $this->type;
  }
}

$person = new Person("Eduardo","00000","0000000000");
echo "\n";
echo $person->getName();
echo "\n";
echo $person->getCEP();
echo "\n";
echo $person->getType();



