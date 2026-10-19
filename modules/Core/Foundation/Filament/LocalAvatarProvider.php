<?php

namespace LaraCoreKit\Core\Filament;

use Filament\AvatarProviders\Contracts\AvatarProvider;
use Filament\Facades\Filament;
use Illuminate\Database\Eloquent\Model;

class LocalAvatarProvider implements AvatarProvider
{
    public function get(Model $record): string
    {
        $initials = str(Filament::getNameForDefaultAvatar($record))->trim()->explode(' ')
            ->filter()->take(2)->map(fn (string $part): string => mb_strtoupper(mb_substr($part, 0, 1)))->implode('');
        $initials = htmlspecialchars($initials, ENT_QUOTES | ENT_XML1, 'UTF-8');
        $svg = '<svg xmlns="http://www.w3.org/2000/svg" width="128" height="128" viewBox="0 0 128 128">'
            .'<rect width="128" height="128" rx="64" fill="#4f46e5"/>'
            .'<text x="64" y="69" text-anchor="middle" dominant-baseline="middle" font-family="sans-serif" font-size="46" fill="white">'
            .$initials.'</text></svg>';

        return 'data:image/svg+xml;base64,'.base64_encode($svg);
    }
}
