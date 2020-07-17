<?php
declare(strict_types = 1);

namespace BigHeads\Properties;

use MyCLabs\Enum\Enum;

final class Hair extends Enum {
  private const NONE    = 'none';
  private const LONG    = 'long';
  private const BUN     = 'bun';
  private const SHORT   = 'short';
  private const PIXIE   = 'pixie';
  private const BALDING = 'balding';
  private const BUZZ    = 'buzz';
  private const AFRO    = 'afro';
  private const BOB     = 'bob';
}
