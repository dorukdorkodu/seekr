<?php

declare(strict_types=1);

namespace Dorkodu\Seekr\Exceptions;

use InvalidArgumentException;

/**
 * @internal
 */
final class TestAlreadyExist extends InvalidArgumentException
{
  /**
   * Creates a new instance of test already exist.
   */
  public function __construct(string $fileName, string $description)
  {
    parent::__construct(sprintf(
      'A test with the description `%s` already exist in the filename `%s`.',
      $description,
      $fileName
    ));
  }
}
