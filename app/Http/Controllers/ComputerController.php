<?php

namespace App\Http\Controllers;

use App\Models\Computer;
use Illuminate\Http\Request;

class ComputerController extends Controller
{
    public function index()
    {
        return view('computers.index', [
            'computers' => Computer::paginate(12)
        ]);
    }


    public function create()
    {
        return view('computers.create');
    }


    public function store(Request $request)
    {
        Computer::create($request->all());
        return redirect()->route('computers.index');
    }


    public function show(Computer $computer)
    {
        return view('computers.show', compact('computer'));
    }


    public function edit(Computer $computer)
    {
        return view('computers.edit', compact('computer'));
    }


    public function update(Request $request, Computer $computer)
    {
        $computer->update($request->all());
        return redirect()->route('computers.index');
    }


    public function destroy(Computer $computer)
    {
        $computer->delete();

        return redirect()->route('computers.index');
    }
}
