<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum ProjectMetaKey: string implements HasLabel
{
    case Live = 'live';
    case VCS = 'vcs';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::Live => 'Live URL',
            self::VCS => 'Link to code'
        };
    }
}
