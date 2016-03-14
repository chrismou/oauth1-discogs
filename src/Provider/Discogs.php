<?php

namespace Chrismou\OAuth1\Discogs\Provider;

use League\OAuth1\Client\Credentials\TokenCredentials;
use League\OAuth1\Client\Server\Server;
use League\OAuth1\Client\Server\User;

class Discogs extends Server
{
    protected $responseType = 'json';

    public function urlTemporaryCredentials()
    {
        return 'https://api.discogs.com/oauth/request_token';
    }

    public function urlAuthorization()
    {
        return 'https://discogs.com/oauth/authorize';
    }

    public function urlTokenCredentials()
    {
        return 'https://api.discogs.com/oauth/access_token';
    }

    public function urlUserDetails()
    {
        return 'https://api.discogs.com/oauth/identity';
    }

    public function userDetails($data, TokenCredentials $tokenCredentials)
    {
        /*$user = new User;

        $user->firstName = (string) $data->User->FirstName;
        $user->lastName  = (string) $data->User->LastName;
        $user->name      = $user->firstName . ' ' . $user->lastName;
        $user->email     = (string) $data->User->EmailAddress;

        $verified = filter_var((string) $data->User->IsVerified, FILTER_VALIDATE_BOOLEAN);

        $user->extra = compact('verified');

        return $user;*/
        var_dump($data);
        var_dump($tokenCredentials);
        die;
        return $data;
    }

    public function userUid($data, TokenCredentials $tokenCredentials)
    {
        return;
    }

    public function userEmail($data, TokenCredentials $tokenCredentials)
    {
        return (string) $data->User->EmailAddress;
    }

    public function userScreenName($data, TokenCredentials $tokenCredentials)
    {
        return;
    }
}