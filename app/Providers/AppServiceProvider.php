<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // Auto-detect Cloudflare tunnel URL & force HTTPS (buat presentasi, aman)
        if (app()->environment('local')) {
            if (request()->isSecure()) {
                URL::forceRootUrl(request()->getSchemeAndHttpHost());
                URL::forceScheme('https');
            }
        }
    }
}
