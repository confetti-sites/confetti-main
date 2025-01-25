<?php

declare(strict_types=1);

namespace App\Http\Routes;

use App\Http\Entity\View;

class Admin
{
    public static function canRender(): bool
    {
        // Ensure /admin_frontend does not match
        return request()->uri() === '/admin' || str_starts_with(request()->uri(), '/admin/');
    }

    public static function render(): View
    {
        return new View('admin.index');
    }
}