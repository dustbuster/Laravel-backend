<?php

include_once("IntegerContainerInterface.php");

class IntegerContainer extends IntegerContainerInterface
{
  private array $container = [];

  function add(int $value): int
  {
    $this->container[] = $value;
    return count($this->container);
  }

  function delete(int $value): bool
  {
    $key = array_search($value, $this->container);
    if ($key === false) {
      return false;
    }
    unset($this->container[$key]);
    return true;
  }

  public function getMedian(): ?int
  {
    sort($this->container);

    if (count($this->container) == 0) {
      return null;
    }

    if (count($this->container) == 1) {
      return $this->container[0];
    }

    $count = count($this->container);
    $middle_index = intdiv($count, 2);

    if ($count % 2 != 0) {
      return $this->container[$middle_index];
    }

    return $this->container[$middle_index - 1];
  }
}
