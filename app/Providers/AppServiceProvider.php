<?php

namespace App\Providers;

use App\Domain\Alunos\Contracts\AlunoInterface;
use app\Infra\Repositories\AlunoRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
