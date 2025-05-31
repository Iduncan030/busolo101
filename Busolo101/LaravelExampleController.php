<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ExampleController extends Controller
{
    public function show()
    {
        $people = DB::table('people')->get();
        return view('people.index', compact('people'));
    }
}