<?php

namespace App\DTO;

use Illuminate\Http\Request;

class EmailMessage
{
    public function __construct(
        public string $fromAddress,
        public string $message,
        public string $userAgent,
        public string $ip
    ) {}

    public static function fromRequest(Request $request): static
    {
        return new static(
            fromAddress: $request->get('email'),
            message: $request->get('message'),
            userAgent: $request->userAgent(),
            ip: $request->getClientIp(),
        );
    }
}
