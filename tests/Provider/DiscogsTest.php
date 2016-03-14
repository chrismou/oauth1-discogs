<?php

namespace Chrismou\OAuth2Discogs\Tests\Provider;

use Chrismou\OAuth2Discogs\Provider\Discogs;
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