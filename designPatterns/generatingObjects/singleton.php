<?php
// Singleton
// one—and only one—object instance
//один и только один экземпляр объекта

class Singleton
{
  protected static $instance;

  public static function getInstance(): Singleton {
    if(!isset(self::$instance)) {
      $class = __CLASS__;
      self::$instance = new $class();
      echo "<p>first initialization</p>";
    } else
        echo "<p>... initialization</p>";
    return self::$instance;
  }

  private function __construct() {}
  private function __clone() {}
  private function __wakeup() {}

}

Singleton::getInstance();
Singleton::getInstance();
Singleton::getInstance();


class getSetPropery
{
  private $props = [];
  private static $instance;

  public static function getInstance() {

    if (empty(self::$instance)) {
      self::$instance = new getSetPropery();
    }

    return self::$instance;
    }

    public function setProperty(string $k, string $v) {
        $this->props[$k] = $v;
    }

    public function getProperty(string $k): string {
        return $this->props[$k];
    }

    private function __construct() {}
    private function __clone() {}
    private function __wakeup() {}

}

$test = getSetPropery::getInstance();
$test->setProperty("car", "white");
unset($test);
$test2 = getSetPropery::getInstance();
print $test2->getProperty("car") ."\n"; // demonstrate value is not lost
