yii2-amazon-ses
===================

Widget from send email amazon ses.

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either add

```
"require": {
    "keygenqt/yii2-amazon-ses": "*"
}
```

of your `composer.json` file.

## Latest Release

The latest version of the module is v0.5.0 `BETA`.

## Usage


Config:

```php
'amazonSes' => [
    'class' => 'keygenqt\amazonSes\AmazonSes',
    'email' => '...',
    'access' => '...',
    'secret' => '...',
    'host' => '...', // (optional - default email.eu-west-1.amazonaws.com)
]
```

Upload:

```php
$result = Yii::$app->amazonSes->send(['email@email.com'], 'Subject', 'Body');
```

## License

**yii2-amazon-ses** is released under the BSD 3-Clause License. See the bundled `LICENSE.md` for details.


