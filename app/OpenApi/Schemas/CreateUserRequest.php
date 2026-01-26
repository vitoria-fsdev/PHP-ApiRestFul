<?php

namespace App\OpenApi\Schemas;

use OpenApi\Attributes as OA;

#[OA\Schema(
    schema: 'CreateUserRequest',
    type: 'object',
    required: ['name', 'email'],
    properties: [
        new OA\Property(property: 'name', type: 'string', example: 'João Silva'),
        new OA\Property(property: 'email', type: 'string', example: 'joao@email.com'),
        new OA\Property(property: 'password', type: 'string', example: 'senha123'),
        new OA\Property(property: 'date_of_birth', type: 'string', format: 'date-time'),
    ]
)]
class CreateUserRequest {}
