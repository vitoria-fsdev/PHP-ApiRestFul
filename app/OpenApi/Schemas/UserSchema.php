<?php

namespace App\OpenApi\Schemas;

use OpenApi\Attributes as OA;

#[OA\Schema(
    schema: 'User',
    type: 'object',
    properties: [
        new OA\Property(property: 'id', type: 'integer', example: 1, nullable: true),
        new OA\Property(property: 'name', type: 'string', example: 'João Silva'),
        new OA\Property(property: 'email', type: 'string', example: 'joao@email.com'),
        new OA\Property(property: 'password', type: 'string', example: 'senha123'),
        new OA\Property(property: 'date_of_birth', type: 'string', format: 'date-time', nullable: true),
        new OA\Property(property: 'created_at', type: 'string', format: 'date-time', nullable: true),
        new OA\Property(property: 'updated_at', type: 'string', format: 'date-time', nullable: true),
    ]
)]
class UserSchema {}
