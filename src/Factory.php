<?php
declare(strict_types = 1);

namespace BigHeads;

use BigHeads\Properties\Accessory;
use BigHeads\Properties\Body;
use BigHeads\Properties\CircleColor;
use BigHeads\Properties\Clothing;
use BigHeads\Properties\ClothingColor;
use BigHeads\Properties\Eyebrows;
use BigHeads\Properties\Eyes;
use BigHeads\Properties\FaceMaskColor;
use BigHeads\Properties\FacialHair;
use BigHeads\Properties\Graphic;
use BigHeads\Properties\Hair;
use BigHeads\Properties\HairColor;
use BigHeads\Properties\Hat;
use BigHeads\Properties\HatColor;
use BigHeads\Properties\LipColor;
use BigHeads\Properties\Mouth;
use BigHeads\Properties\SkinTone;
use MyCLabs\Enum\Enum;

final class Factory {
  private static function randEnabled(): bool {
    return mt_rand(1, 10) >= 5;
  }

  private static function randSelect(array $properties): Enum {
    $opts = array_keys($properties);
    shuffle($opts);
    $max = count($opts) - 1;

    return $properties[$opts[mt_rand(0, $max)]];
  }

  public static function create(): BigHead {
    $bigHead = new BigHead();
    if (self::randEnabled()) {
      $bigHead->setAccessory(self::randSelect(Accessory::values()));
    }

    if (self::randEnabled()) {
      $bigHead->setBody(self::randSelect(Body::values()));
    }

    if (self::randEnabled()) {
      $bigHead->setCircleColor(self::randSelect(CircleColor::values()));
    }

    if (self::randEnabled()) {
      $bigHead->setClothing(self::randSelect(Clothing::values()));
    }

    if (self::randEnabled()) {
      $bigHead->setClothingColor(self::randSelect(ClothingColor::values()));
    }

    if (self::randEnabled()) {
      $bigHead->setEyebrows(self::randSelect(Eyebrows::values()));
    }

    if (self::randEnabled()) {
      $bigHead->setEyes(self::randSelect(Eyes::values()));
    }

    if (self::randEnabled()) {
      $bigHead->withoutFaceMask();
      if (self::randEnabled()) {
        $bigHead->withFaceMask();
        $bigHead->setFaceMaskColor(self::randSelect(FaceMaskColor::values()));
      }
    }

    if (self::randEnabled()) {
      $bigHead->setFacialHair(self::randSelect(FacialHair::values()));
    }

    if (self::randEnabled()) {
      $bigHead->setGraphic(self::randSelect(Graphic::values()));
    }

    if (self::randEnabled()) {
      $bigHead->setHair(self::randSelect(Hair::values()));
    }

    if (self::randEnabled()) {
      $bigHead->setHairColor(self::randSelect(HairColor::values()));
    }

    if (self::randEnabled()) {
      $bigHead->setHat(self::randSelect(Hat::values()));
    }

    if (self::randEnabled()) {
      $bigHead->setHatColor(self::randSelect(HatColor::values()));
    }

    if (self::randEnabled()) {
      $bigHead->setLipColor(self::randSelect(LipColor::values()));
    }

    if (self::randEnabled()) {
      $bigHead->setMouth(self::randSelect(Mouth::values()));
    }

    if (self::randEnabled()) {
      $bigHead->setSkinTone(self::randSelect(SkinTone::values()));
    }

    if (self::randEnabled()) {
      $bigHead->withoutMask();
      if (self::randEnabled()) {
        $bigHead->withMask();
      }
    }

    if (self::randEnabled()) {
      $bigHead->withoutLashes();
      if (self::randEnabled()) {
        $bigHead->withLashes();
      }
    }

    return $bigHead;
  }
}
