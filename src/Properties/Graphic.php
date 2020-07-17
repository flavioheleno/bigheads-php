<?php
declare(strict_types = 1);

namespace BigHeads\Properties;

use MyCLabs\Enum\Enum;

final class Graphic extends Enum {
  private const NONE    = 'none';
  private const REDWOOD = 'redwood';
  private const GATSBY  = 'gatsby';
  private const VUE     = 'vue';
  private const REACT   = 'react';
  private const GRAPHQL = 'graphQL';
}
