<?php

namespace Imv\Gateway;

use Imv\Gateway\Auth\GatewayAuthenticator;
use Imv\Gateway\Connectors\GatewayConnector;
use Imv\Gateway\Exceptions\GatewayException;
use Imv\Gateway\Requests\OrganInfoRequest;
use Saloon\Http\Response;

class Gateway
{
    protected GatewayConnector $connector;

    public function __construct()
    {
        $this->connector = new GatewayConnector;
        $this->connector->authenticate(new GatewayAuthenticator);
    }

    public function getOrganInfo(int $tin): Response
    {
        $response = $this->connector->send(new OrganInfoRequest($tin));

        if ($response->failed()) {
            throw GatewayException::fromResponse($response);
        }

        return $response;
    }
}
