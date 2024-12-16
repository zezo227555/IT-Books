<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ScintificJournalController;
use App\Http\Controllers\UserController;
use App\Models\Book;
use App\Models\ScientificPaper;
use App\Models\ScintificJournal;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth-check'])->group(function () {

    Route::get('/', function () {

        $students = count(User::where('role', '=', 'طالب')->get());
        $teachers = count(User::where('role', '=', 'عضو هيئة تدريس')->get());
        $admin = count(User::where('role', '=', 'مسؤول نظام')->get());

        $books = count(Book::all());
        $scintificJournals = count(ScintificJournal::all());
        $scientificPapers = count(ScientificPaper::all());

        return view('main', [
            'students' => $students,
            'teachers' => $teachers,
            'admin' => $admin,
            'books' => $books,
            'scintificJournals' => $scintificJournals,
            'scientificPapers' => $scientificPapers,

        ]);
    })->name('main');

    Route::resource('user', UserController::class);
    Route::resource('book', BookController::class);
    Route::resource('scintific-journals', ScintificJournalController::class);

});


require __DIR__.'/auth.php';
