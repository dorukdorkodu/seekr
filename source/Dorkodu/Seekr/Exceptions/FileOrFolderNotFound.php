<?php

declare(strict_types=1);

namespace Dorkodu\Seekr\Exceptions;

use InvalidArgumentException;

/**
 * @internal
 */
final class FileOrFolderNotFound extends InvalidArgumentException
{
  /**
   * Creates a new instance of file not found.
   */
  public function __construct(string $filename)
  {
    parent::__construct(sprintf('The file or folder with the name `%s` not found.', $filename));
  }
}
