<?php

namespace App\Providers;

use App\Repository\Interfaces\TeamMemberInterface;
use App\Repository\TeamMemberRepository;
use Illuminate\Support\ServiceProvider;

class MemberServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(TeamMemberInterface::class,TeamMemberRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
