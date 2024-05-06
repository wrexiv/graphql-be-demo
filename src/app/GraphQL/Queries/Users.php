<?php

namespace App\GraphQL\Queries;

use GraphQL\Type\Definition\ResolveInfo;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;

class Users
{
    public function __invoke($rootValue, array $args, GraphQLContext $context, ResolveInfo $resolveInfo)
    {
        return [
            [
                'id' => '1',
                'name' => 'John Doe',
                'email' => 'john@example.com',
            ],
            [
                'id' => '2',
                'name' => 'Jane Smith',
                'email' => 'jane@example.com',
            ],
        ];
    }
}
