<?php
declare(strict_types = 1);

namespace BigHeads\Properties;

use MyCLabs\Enum\Enum;

final class Clothing extends Enum {
  private const NAKED       = 'naked';
  private const SHIRT       = 'shirt';
  private const DRESS_SHIRT = 'dressShirt';
  private const VNECK       = 'vneck';
  private const TANK_TOP    = 'tankTop';
  private const DRESS       = 'dress';
}
