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
use Serializable;

final class BigHead implements Serializable {
  /**
   * @var string
   */
  private const BASE_URL = 'https://bigheads.io';

  /**
   * @var null|\BigHeads\Properties\Accessory
   */
  private ?Accessory $accessory = null;
  /**
   * @var null|\BigHeads\Properties\Body
   */
  private ?Body $body = null;
  /**
   * @var null|\BigHeads\Properties\CircleColor
   */
  private ?CircleColor $circleColor = null;
  /**
   * @var null|\BigHeads\Properties\Clothing
   */
  private ?Clothing $clothing = null;
  /**
   * @var null|\BigHeads\Properties\ClothingColor
   */
  private ?ClothingColor $clothingColor = null;
  /**
   * @var null|\BigHeads\Properties\Eyebrows
   */
  private ?Eyebrows $eyebrows = null;
  /**
   * @var null|\BigHeads\Properties\Eyes
   */
  private ?Eyes $eyes = null;
  /**
   * @var null|\BigHeads\Properties\FacialHair
   */
  private ?FacialHair $facialHair = null;
  /**
   * @var null|\BigHeads\Properties\Graphic
   */
  private ?Graphic $graphic = null;
  /**
   * @var null|\BigHeads\Properties\Hair
   */
  private ?Hair $hair = null;
  /**
   * @var null|\BigHeads\Properties\HairColor
   */
  private ?HairColor $hairColor = null;
  /**
   * @var null|\BigHeads\Properties\Hat
   */
  private ?Hat $hat = null;
  /**
   * @var null|\BigHeads\Properties\HatColor
   */
  private ?HatColor $hatColor = null;
  /**
   * @var null|bool
   */
  private ?bool $lashes = null;
  /**
   * @var null|\BigHeads\Properties\LipColor
   */
  private ?LipColor $lipColor = null;
  /**
   * @var null|bool
   */
  private ?bool $mask = null;
  /**
   * @var null|\BigHeads\Properties\Mouth
   */
  private ?Mouth $mouth = null;
  /**
   * @var int
   */
  private int $size = 100;
  /**
   * @var null|\BigHeads\Properties\SkinTone
   */
  private ?SkinTone $skinTone = null;

  public static function new(): self {
    return new self();
  }

  public function setAccessory(Accessory $accessory): self {
    $this->accessory = $accessory;

    return $this;
  }

  public function setBody(Body $body): self {
    $this->body = $body;

    return $this;
  }

  public function setCircleColor(CircleColor $circleColor): self {
    $this->circleColor = $circleColor;

    return $this;
  }

  public function setClothing(Clothing $clothing): self {
    $this->clothing = $clothing;

    return $this;
  }

  public function setClothingColor(ClothingColor $clothingColor): self {
    $this->clothingColor = $clothingColor;

    return $this;
  }

  public function setEyebrows(Eyebrows $eyebrows): self {
    $this->eyebrows = $eyebrows;

    return $this;
  }

  public function setEyes(Eyes $eyes): self {
    $this->eyes = $eyes;

    return $this;
  }

  public function setFacialHair(FacialHair $facialHair): self {
    $this->facialHair = $facialHair;

    return $this;
  }

  public function setGraphic(Graphic $graphic): self {
    $this->graphic = $graphic;

    return $this;
  }

  public function setHair(Hair $hair): self {
    $this->hair = $hair;

    return $this;
  }

  public function setHairColor(HairColor $hairColor): self {
    $this->hairColor = $hairColor;

    return $this;
  }

  public function setHat(Hat $hat): self {
    $this->hat = $hat;

    return $this;
  }

  public function setHatColor(HatColor $hatColor): self {
    $this->hatColor = $hatColor;

    return $this;
  }

  public function setLipColor(LipColor $lipColor): self {
    $this->lipColor = $lipColor;

    return $this;
  }

  public function setMouth(Mouth $mouth): self {
    $this->mouth = $mouth;

    return $this;
  }

  public function setSize(int $size): self {
    $this->size = $size;

    return $this;
  }

  public function setSkinTone(SkinTone $skinTone): self {
    $this->skinTone = $skinTone;

    return $this;
  }

  public function withMask(): self {
    $this->mask = true;

    return $this;
  }

  public function withoutMask(): self {
    $this->mask = false;

    return $this;
  }

  public function withLashes(): self {
    $this->lashes = true;

    return $this;
  }

  public function withoutLashes(): self {
    $this->lashes = false;

    return $this;
  }

  public function getUrl(): string {
    $props = array_map(
      function ($item) {
        if ($item instanceOf Enum) {
          return $item->getValue();
        }

        return $item ? 'true' : 'false';
      },
      self::toArray()
    );

    return sprintf(
      '%s/svg?%s',
      self::BASE_URL,
      http_build_query(
        $props,
        '',
        '&',
        PHP_QUERY_RFC1738
      )
    );
  }

  /**
   * @return array<string, string|bool>
   */
  public function toArray(): array {
    $arr = [
      'accessory'     => $this->accessory,
      'body'          => $this->body,
      'circleColor'   => $this->circleColor,
      'clothing'      => $this->clothing,
      'clothingColor' => $this->clothingColor,
      'eyebrows'      => $this->eyebrows,
      'eyes'          => $this->eyes,
      'facialHair'    => $this->facialHair,
      'graphic'       => $this->graphic,
      'hair'          => $this->hair,
      'hairColor'     => $this->hairColor,
      'hat'           => $this->hat,
      'hatColor'      => $this->hatColor,
      'lashes'        => $this->lashes,
      'lipColor'      => $this->lipColor,
      'mask'          => $this->mask,
      'mouth'         => $this->mouth,
      'size'          => $this->size,
      'skinTone'      => $this->skinTone
    ];

    return array_filter($arr);
  }

  public function serialize(): string {
    return serialize(
      [
        $this->accessory,
        $this->body,
        $this->circleColor,
        $this->clothing,
        $this->clothingColor,
        $this->eyebrows,
        $this->eyes,
        $this->facialHair,
        $this->graphic,
        $this->hair,
        $this->hairColor,
        $this->hat,
        $this->hatColor,
        $this->lashes,
        $this->lipColor,
        $this->mask,
        $this->mouth,
        $this->size,
        $this->skinTone
      ]
    );
  }

  public function unserialize($serialized) {
    [
      $this->accessory,
      $this->body,
      $this->circleColor,
      $this->clothing,
      $this->clothingColor,
      $this->eyebrows,
      $this->eyes,
      $this->facialHair,
      $this->graphic,
      $this->hair,
      $this->hairColor,
      $this->hat,
      $this->hatColor,
      $this->lashes,
      $this->lipColor,
      $this->mask,
      $this->mouth,
      $this->size,
      $this->skinTone
    ] = unserialize($serialized);
  }
}
