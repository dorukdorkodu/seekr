<?php

declare(strict_types=1);

namespace Dorkodu\Seekr\Utils;

use Dorkodu\Seekr\Exceptions\ShouldNotHappen;
use Dorkodu\Utils\Str;

/**
 * @internal
 */
final class Backtrace
{
  /**
   * @var string
   */
  private const FILE = 'file';

  private const BACKTRACE_OPTIONS = DEBUG_BACKTRACE_IGNORE_ARGS;

  /**
   * Returns the current test file.
   */
  public static function testFile(): string
  {
    $current = null;

    foreach (debug_backtrace(self::BACKTRACE_OPTIONS) as $trace) {
      $current = $trace;
    }

    if ($current === null) {
      throw ('Test file not found.');
    }

    return $current[self::FILE];
  }

  /**
   * Returns the filename that called the current function/method.
   */
  public static function file(): string
  {
    return debug_backtrace(self::BACKTRACE_OPTIONS)[1][self::FILE];
  }

  /**
   * Returns the dirname that called the current function/method.
   */
  public static function dirname(): string
  {
    return dirname(debug_backtrace(self::BACKTRACE_OPTIONS)[1][self::FILE]);
  }

  /**
   * Returns the line that called the current function/method.
   */
  public static function line(): int
  {
    return debug_backtrace(self::BACKTRACE_OPTIONS)[1]['line'];
  }
}
