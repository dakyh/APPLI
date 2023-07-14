<?php

namespace App\Services;

use nusoap_client;

class UserService
{
    protected $soapClient;

    public function __construct()
    {
        $this->soapClient = new nusoap_client('http://localhost:8000/soap-service');
    }

    public function getUsers()
    {
        $response = $this->soapClient->call('getUsers');
        return $response;
    }

    public function addUser($userData)
    {
        $response = $this->soapClient->call('addUser', [$userData]);
        return $response;
    }

    public function deleteUser($userId)
    {
        $response = $this->soapClient->call('deleteUser', [$userId]);
        return $response;
    }

    public function updateUser($userId, $userData)
    {
        $response = $this->soapClient->call('updateUser', [$userId, $userData]);
        return $response;
    }

    public function authenticateUser($login, $password)
    {
        $response = $this->soapClient->call('authenticateUser', [$login, $password]);
        return $response;
    }
}
