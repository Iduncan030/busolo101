<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    // Show all people
    public function index()
    {
        $people = Person::all();
        return view('people.index', compact('people'));
    }

    // Show create form
    public function create()
    {
        return view('people.create');
    }

    // Store new person
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer'
        ]);
        Person::create($validated);
        return redirect()->route('people.index')->with('success', 'Person added!');
    }

    // Show edit form
    public function edit(Person $person)
    {
        return view('people.edit', compact('person'));
    }

    // Update person
    public function update(Request $request, Person $person)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer'
        ]);
        $person->update($validated);
        return redirect()->route('people.index')->with('success', 'Person updated!');
    }

    // Delete person
    public function destroy(Person $person)
    {
        $person->delete();
        return redirect()->route('people.index')->with('success', 'Person deleted!');
    }
}