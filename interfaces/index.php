<?php

// Interface 
interface PersonInterface {
  public function fly();
}
// Classe concreta 
class Person  implements PersonInterface {

  public function walk()
  {
    var_dump("walking");
  }

  public function run(){
    var_dump("running");
  }

  public function fly()
  {
    var_dump("flying");
  }
}


class Client
{
  // Action deve receber um objeto que implementa a interface PersonInterface 
  public function action(PersonInterface $person)
  {
    $person -> walk();
    $person ->run();
    $person->fly();
  }
}


$cliente = new Client;
$cliente-> action(new Person);



interface LoggerInterface 
{
  public function create();
}

class LoggerFile implements LoggerInterface
{ 

  public function init()
  {}
  public function create()
  {
    var_dump("create file logger");
  }
}

class LoggerDatabase implements LoggerInterface{
  
  private function teste()
  {}
  public function create()
  {
    var_dump("create file logger");
  }
}
class Logger 
{
  public function create(LoggerInterface $logger)
  {
    $logger->create();  
  }
} 

$logger = new Logger;
$logger->create(new LoggerFile);