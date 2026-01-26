<?php

namespace App\OpenApi\Parameters;

use OpenApi\Attributes as OA;

#[OA\Parameter(
    parameter: 'UserId',
    name: 'id',
    description: 'ID do usuário',                           
    in: 'path',
    required: true,
    schema: new OA\Schema(type: 'integer')
)]
class UserParameter {}
