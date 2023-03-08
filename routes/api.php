<?php
use App\Models\Models\Dog;
use App\Http\Controllers\Api\DogController;

Route::resource('dogs', DogController::class);

?>