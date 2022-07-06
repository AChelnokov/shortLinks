<?php

namespace App\GraphQL\Mutations;

use App\Models\Links;
use Illuminate\Support\Str;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;

final class LinksMutator
{
    public function create($rootValue, array $args, GraphQLContext $context)
    {
        return Links::firstOrCreate([
            'full_link' => $args['full_link']
        ],[
            'short_link' => Str::random(config('short_link.lenght')),
            'full_link' => trim($args['full_link']),
            'counter' => 0
        ]);
    }
}
