<?php
declare(strict_types = 1);

namespace BigHeads\Properties;

use MyCLabs\Enum\Enum;

final class Eyebrows extends Enum {
  private const RAISED       = 'raised';
  private const LEFT_LOWERED = 'leftLowered';
  private const SERIOUS      = 'serious';
  private const ANGRY        = 'angry';
  private const CONCERNED    = 'concerned';
}
