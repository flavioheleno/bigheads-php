<?php
declare(strict_types = 1);

namespace BigHeads\Properties;

use MyCLabs\Enum\Enum;

final class Eyes extends Enum {
  private const NORMAL      = 'normal';
  private const LEFT_TWITCH = 'leftTwitch';
  private const HAPPY       = 'happy';
  private const CONTENT     = 'content';
  private const SQUINT      = 'squint';
  private const SIMPLE      = 'simple';
  private const DIZZY       = 'dizzy';
  private const WINK        = 'wink';
  private const HEART       = 'heart';
}
