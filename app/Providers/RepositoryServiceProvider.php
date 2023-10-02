<?php

namespace App\Providers;

use App\Domain\AlunoDisciplina\Contracts\AlunoDisciplinaInterface;
use App\Domain\Alunos\Contracts\AlunoInterface;
use App\Domain\Disciplinas\Contracts\DisciplinaInterface;
use App\Domain\Notas\Contracts\NotaInterface;
use App\Infra\Repositories\AlunoDisciplinaRepository;
use App\Infra\Repositories\AlunoRepository;
use App\Infra\Repositories\DisciplinaRepository;
use App\Domain\Periodos\Contracts\PeriodoInterface;
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
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
