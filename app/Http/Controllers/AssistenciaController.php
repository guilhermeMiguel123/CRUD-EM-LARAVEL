<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Assistencia; // Certifique-se de importar o modelo Assistencia

class AssistenciaController extends Controller
{
    // Adicione ou altere o método index existente conforme abaixo
public function index()
{
    $assistencias = Assistencia::all();
    return view('assistencias.index', compact('assistencias'));
}


    public function create()
    {
        return view('assistencias.create');
    }

    public function store(Request $request)
    {
        // Validação dos dados do formulário

        Assistencia::create($request->all());

        return redirect()->route('assistencias.index')->with('success', 'Assistência criada com sucesso!');
    }

    public function show($id)
    {
        $assistencia = Assistencia::findOrFail($id);
        return view('assistencias.show', compact('assistencia'));
    }

    public function edit($id)
    {
        $assistencia = Assistencia::findOrFail($id);
        return view('assistencias.edit', compact('assistencia'));
    }

    public function update(Request $request, $id)
    {
        // Validação dos dados do formulário

        $assistencia = Assistencia::findOrFail($id);
        $assistencia->update($request->all());

        return redirect()->route('assistencias.index')->with('success', 'Assistência atualizada com sucesso!');
    }

    public function destroy($id)
    {
        $assistencia = Assistencia::findOrFail($id);
        $assistencia->delete();

        return redirect()->route('assistencias.index')->with('success', 'Assistência excluída com sucesso!');
    }
}
