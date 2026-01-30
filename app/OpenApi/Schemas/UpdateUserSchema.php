<?php

namespace App\OpenApi\Schemas;

use OpenApi\Attributes as OA;

#[OA\Schema(
    schema: 'UpdateUserSchema',
    type: 'object',
    properties: [
        new OA\Property(property: 'name', type: 'string', example: 'Novu Nome'),
        new OA\Property(property: 'email', type: 'string', example: 'novo@email.com'),
        new OA\Property(property: 'password', type: 'string', example: 'novaSenha123'),
        new OA\Property(property: 'date_of_birth', type: 'string', format: 'date'),
    ]
)]
class UpdateUserSchema {}