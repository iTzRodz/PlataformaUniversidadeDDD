<?php

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\AlunoDisciplinaController;
use App\Http\Controllers\BoletimController;
use App\Http\Controllers\DisciplinaController;
use App\Http\Controllers\NotaController;
use App\Http\Controllers\PeriodoController;
use App\Models\Disciplina;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('aluno')->group(function () {
    Route::get('/getAllAlunos', [AlunoController::class, 'getAlunos']);
    Route::post('/insert', [AlunoController::class, 'insertAluno']);
    Route::put('/update/{id}', [AlunoController::class, 'update']);
    Route::delete('/delete/{id}', [AlunoController::class, 'delete']);
    Route::get('/getAlunosById/{id}', [AlunoController::class, 'getAlunosbyId']);
});

Route::prefix('disciplina')->group(function () {
    Route::get('/getAllDisciplinas', [DisciplinaController::class, 'getAllDisciplinas']);
    Route::post('/store', [DisciplinaController::class, 'insertDisciplina']);
    Route::put('/update/{id}', [DisciplinaController::class, 'updateDisciplina']);
    Route::get('/getDisciplinaById/{id}', [DisciplinaController::class, 'getDisciplinaById']);
    Route::delete('/delete/{id}', [DisciplinaController::class, 'deleteDisciplina']);
    Route::get('/disciplinasByIdAluno/{idAluno}', [DisciplinaController::class, 'disciplinasByIdAluno']);
});

Route::prefix('periodo')->group(function () {
    Route::post('store', [PeriodoController::class, 'store']);
});

Route::prefix('nota')->group(function () {
    Route::post('store', [NotaController::class, 'store']);
    Route::get('getNotasByAlunoDisciplina/{aluno_disciplina}', [NotaController::class, 'getNotasByAlunoDisciplina']);
});

Route::prefix('boletim')->group(function () {
    Route::get('getByIdAluno/{aluno_id}', [BoletimController::class, 'getBoletimByAluno']);
});

Route::prefix('aluno_disciplina')->group(function () {
    Route::post('/store', [AlunoDisciplinaController::class, 'store']);
});
