<?php

use App\Models\Student;
use Illuminate\Support\Facades\Route;


Route::get('/students', function () {
    return Student::all();
});

Route::get('/students/add', function (){
    return Student::create([
        'name' => 'Anna',
        'age' => 25,
        'email' => 'anna@tms.com',
    ]);
});

Route::get('/students/{id}', function($id){
    return Student::findOrFail($id);
});

Route::get('/students/{id}/update', function($id){
    return Student::where('id', $id)
        ->update([
            'name'=>'Kate',
        ]);
});

Route::get('/students/{id}/delete', function ($id) {
    Student::findOrFail($id)->delete();
});
