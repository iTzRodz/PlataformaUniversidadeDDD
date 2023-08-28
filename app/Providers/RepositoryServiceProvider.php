<?php

namespace App\Providers;

use App\Domain\Alunos\Contracts\AlunoInterface;
use App\Domain\Disciplinas\Contracts\DisciplinaInterface;
use App\Infra\Repositories\AlunoRepository;
use App\Infra\Repositories\DisciplinaRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(AlunoInterface::class, AlunoRepository::class);
        $this->app->bind(DisciplinaInterface::class, DisciplinaRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
