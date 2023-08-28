<?php

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\DisciplinaController;
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
    Route::get('/getAlunosById/{id}', [AlunoController::class, 'getAlunosbyId']);
});

Route::prefix('disciplina')->group(function () {
    Route::get('/getAllDisciplinas', [DisciplinaController::class, 'getAllDisciplinas']);
    Route::get('/getAlunosById/{id}', [DisciplinaController::class, 'getAlunosbyId']);
    Route::delete('/delete/{id}', [DisciplinaController::class, 'deleteDisciplina']);
    Route::get('/disciplinasByIdAluno/{idAluno}', [DisciplinaController::class, 'disciplinasByIdAluno']);
});
