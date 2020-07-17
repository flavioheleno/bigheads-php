# bigheads-php [![Build Status](https://travis-ci.com/flavioheleno/bigheads-php.svg?branch=master)](https://travis-ci.com/flavioheleno/bigheads-php) [![Maintainability](https://api.codeclimate.com/v1/badges/14b99f8c558560f99abb/maintainability)](https://codeclimate.com/github/flavioheleno/bigheads-php/maintainability)
Easily generate avatars for your projects with [Big Heads](https://bigheads.io).

This is a PHP Library that helps you build Big Heads (original project: [RobertBroersma/bigheads](https://github.com/RobertBroersma/bigheads)).

## Install with composer

```shell
composer require flavioheleno/bigheads-php
```

## Creating a random Big Head

The Factory class can be used to generate a Big Head with randomized properties.

```php
$bigHead = BigHeads\Factory::create();
```

## Getting the Big Head URL

Retrieve the URL to use on an `<img />` tag, for example.

```php
$bigHead->getUrl();
```

## Storing/Recoving

Whenever the original class is required, it can be serialized and stored in plain text.

```php
$serialized = serialize($bigHead);

$bigHead2 = unserialize($serialized);
```

## Property Reference

Name                                              | Type    | Default
--------------------------------------------------|---------|-------
[Accessory](src/Properties/Accessory.php)         | Enum    | `null`
[Body](src/Properties/Body.php)                   | Enum    | `null`
[CircleColor](src/Properties/CircleColor.php)     | Enum    | `null`
[Clothing](src/Properties/Clothing.php)           | Enum    | `null`
[ClothingColor](src/Properties/ClothingColor.php) | Enum    | `null`
[Eyebrows](src/Properties/Eyebrows.php)           | Enum    | `null`
[Eyes](src/Properties/Eyes.php)                   | Enum    | `null`
[FacialHair](src/Properties/FacialHair.php)       | Enum    | `null`
[Graphic](src/Properties/Graphic.php)             | Enum    | `null`
[Hair](src/Properties/Hair.php)                   | Enum    | `null`
[HairColor](src/Properties/HairColor.php)         | Enum    | `null`
[Hat](src/Properties/Hat.php)                     | Enum    | `null`
[HatColor](src/Properties/HatColor.php)           | Enum    | `null`
Lashes                                            | Boolean | `false`
[LipColor](src/Properties/LipColor.php)           | Enum    | `null`
Mask                                              | Boolean | `false`
[Mouth](src/Properties/Mouth.php)                 | Enum    | `null`
Size                                              | Integer | `100`
[SkinTone](src/Properties/SkinTone.php)           | Enum    | `null`

## Contributing

There are a few helper scripts that can be called by composer, such as:

- Static Code Analysis: `php composer.phar run check`
- Code Linting: `php composer.phar run lint`
- Tests: `php composer.phar run test`

**NOTE:** to run the *Code Linting*, you must download the ruleset from [here](https://github.com/flavioheleno/phpcs-ruleset/blob/master/ruleset.xml) first.

## License

This library is licensed under the [MIT License](LICENSE).
