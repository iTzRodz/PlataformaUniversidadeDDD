<?php

namespace App\Providers;

use App\Infra\Contracts\AlunoDisciplinaInterface;
use App\Infra\Repositories\AlunoDisciplinaRepository;
use App\Infra\Repositories\AlunoRepository;
use App\Infra\Repositories\DisciplinaRepository;
use App\Infra\Contracts\AlunoInterface;
use App\Infra\Contracts\BoletimInterface;
use App\Infra\Contracts\DisciplinaInterface;
use App\Infra\Contracts\NotaInterface;
use App\Infra\Contracts\PeriodoInterface;
use App\Infra\Repositories\BoletimRepository;
use App\Infra\Repositories\NotaRepository;
use App\Infra\Repositories\PeriodoRepository;
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
        $this->app->bind(AlunoDisciplinaInterface::class, AlunoDisciplinaRepository::class);
        $this->app->bind(PeriodoInterface::class, PeriodoRepository::class);
        $this->app->bind(NotaInterface::class, NotaRepository::class);
        $this->app->bind(BoletimInterface::class, BoletimRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
