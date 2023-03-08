<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Models\Dog;

class DogController extends Controller
{
    
    public function index()
    {
        return Dog::all();
    }
   
    public function store(Request $request)
    {
        Dog::create($request->all());
    }

      public function show($id)
    {
        return Dog::findOrfail($id);
    }
    
    public function update(Request $request, $id)
    {
        $dog = Dog::findOrfail($id);
        $dog->update($request->all());
    }

    
    public function destroy($id)
    {
        $dog = Dog::findOrfail($id);
        $dog->delete();
    }
}
?>
