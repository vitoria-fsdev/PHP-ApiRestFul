<?php

namespace App\OpenApi;

use OpenApi\Attributes as OA;

#[OA\Info(
    title: 'CRUD de Usuários',
    version: '0.1'
)]
#[OA\Server(
    url: 'http://localhost:8000',
    description: 'Servidor Local'
)]
class OpenApiSpec
{
}
