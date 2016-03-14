# Discogs Provider for OAuth 2.0 Client

[![Build Status](https://travis-ci.org/chrismou/oauth2-discogs.svg?branch=master)](https://travis-ci.org/chrismou/oauth2-discogs)
[![Test Coverage](https://codeclimate.com/github/chrismou/oauth2-discogs/badges/coverage.svg)](https://codeclimate.com/github/chrismou/oauth2-discogs/coverage)
[![Code Climate](https://codeclimate.com/github/chrismou/oauth2-discogs/badges/gpa.svg)](https://codeclimate.com/github/chrismou/oauth2-discogs)

#### This is an early days version. I'd probably advise not using it just yet, mostly because it won't work. Once I'm happy it's stable, I'll tag a version.

## Tests

To run the unit test suite:

```
curl -s https://getcomposer.org/installer | php
php composer.phar install
./vendor/bin/phpunit
```

If you use docker, you can also run the test suite against all supported PHP versions:
```
./vendor/bin/dunit
```

## License

Released under the MIT License. See [LICENSE](LICENSE.md).
