<?php

namespace App\Http\Controllers;

use App\Models\Assembler;
use Illuminate\Http\Request;

class AssemblersController extends Controller
{
    public function index ()
    {
        return view('assemblers.index', [
            'assemblers' => Assembler::paginate(10)
        ]);
    }

    public function create ()
    {
        return view('assemblers.create');
    }

    public function store (Request $request)
    {
        Assembler::create($request->all());

        return redirect()->route('assemblers.index');
    }

    public function edit ()
    {
        return view('assemblers.edit');
    }

    public function update (Request $request, Assembler $assembler)
    {
        $assembler->update($request->all());

        return redirect()->route('assemblers.index');
    }

    public function destroy (Assembler $assembler)
    {
        $assembler->delete();

        return redirect()->route('assemblers.index');
    }
}
