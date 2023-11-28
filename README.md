# PHP - Bytes to human readable

## Install:

```
composer require siestacat/bytes-to-human-readable
```

## Usage:

```
use Siestacat\BytesToHumanReadable\BytesToHumanReadable;

var_dump(BytesToHumanReadable::convert(1104)); //1.10 kB
var_dump(BytesToHumanReadable::convert(67229, true, 1)); //65.6 KiB

```


## Tests:

```
git clone https://github.com/SiestaCat/php-bytes-to-human-readable.git
cd php-bytes-to-human-readable
composer install
composer run-script test
```

## Credits

https://stackoverflow.com/a/2510455