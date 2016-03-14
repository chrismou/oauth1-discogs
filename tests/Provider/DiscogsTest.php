<?php

namespace Chrismou\OAuth1\Discogs\Tests\Provider;

use Chrismou\OAuth1\Discogs\Provider\Discogs;
use Mockery as m;

class DiscogsTest extends \PHPUnit_Framework_TestCase
{
    protected $provider;

    protected function setUp()
    {
        $this->provider = new Discogs([
            'clientId' => 'mock_client_id',
            'clientSecret' => 'mock_secret',
            'redirectUri' => 'none',
        ]);
    }
}