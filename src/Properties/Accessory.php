<?php
declare(strict_types = 1);

namespace BigHeads\Properties;

use MyCLabs\Enum\Enum;

final class Accessory extends Enum {
  private const NONE          = 'none';
  private const ROUND_GLASSES = 'roundGlasses';
  private const TINY_GLASSES  = 'tinyGlasses';
  private const SHADES        = 'shades';
}
