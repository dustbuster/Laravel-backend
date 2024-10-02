<?php


/**
 * `IntegerContainer` interface.
 */
abstract class IntegerContainerInterface
{

  /**
   * Should add the specified integer `$value` to the container
   * and return the number of integers in the container after the
   * addition.
   *
   * @param int $value
   * @return int
   */
  function add(int $value): int
  {
    // default implementation
    return 0;
  }

  /**
   * Should attempt to remove the specified integer `$value` from
   * the container.
   * If the `$value` is present in the container, remove it and
   * return `true`, otherwise, return `false`.
   *
   * @param int $value
   * @return bool
   */
  function delete(int $value): bool
  {
    // default implementation
    return false;
  }

  /**
   * Should return the median integer - the integer in the middle
   * of the sequence after all integers stored in the container
   * are sorted in ascending order.
   * If the length of the sequence is even, the leftmost integer
   * from the two middle integers should be returned.
   * If the container is empty, this method should return `null`.
   *
   * @return ?int
   */
  function getMedian(): ?int
  {
    // default implementation
    return null;
  }
}
