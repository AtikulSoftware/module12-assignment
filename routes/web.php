<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\TripController;
use Illuminate\Support\Facades\Route;



//user
Route::get('/', [TripController::class, 'index'])->name('index');
Route::get('/search', [TripController::class, 'search'])->name('search');

// book tickit
Route::get('/order/{id}', [TicketController::class, 'order'])->name('order');
Route::post('/order/{id}/confirm', [TicketController::class, 'orderConfirm'])->name('orderConfirm');

// manage tickit
Route::get('/myTickit', [TicketController::class, 'tickitShow'])->name('tickitShow');
Route::delete('/myTickit/{id}', [TicketController::class, 'tickitCancel'])->name('tickitCancel');


// admin create bus schedule
Route::get('/admin/create', [AdminController::class, 'sotre'])->name('create');
Route::post('/admin/create/post', [AdminController::class, 'sotrePost'])->name('post');

// admin manage edit, update, delete
Route::get('/admin/schedule', [AdminController::class, 'schedule'])->name('schedule');
Route::get('/admin/schedule/{id}/edit', [AdminController::class, 'scheduleEdit'])->name('edit');
Route::post('/admin/schedule/{id}/update', [AdminController::class, 'scheduleUpdate'])->name('update');
Route::delete('/admin/schedule/{id}', [AdminController::class, 'scheduleDelete'])->name('scheduleDelete');


