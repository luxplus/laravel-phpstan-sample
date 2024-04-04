<?php

namespace App\Http\Views;

use App\Models\User;

class PageData
{
    public function __construct(
        /** @var iterable<string|User> */
        public readonly iterable $users,
        public readonly ?string $meetingTitle,
    ) {}
}
