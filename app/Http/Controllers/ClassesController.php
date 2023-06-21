<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Classes;
use Illuminate\View\View;
 
class ClassesController extends Controller
{
 
    public function index(): View
    {
        $classes = Classes::all();
        return view ('classes2.index')->with('classes', $classes);
    }
 
    public function create(): View
    {
        return view('classes2.create');
    }
 
  
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Classes::create($input);
        return redirect('classes')->with('flash_message', 'Classe Addedd!');
    }
 
    public function show(string $id): View
    {
        $classe = Classes::find($id);
        return view('classes2.show')->with('classes', $classe);
    }
 
    public function edit(string $id): View
    {
        $classe = Classes::find($id);
        return view('classes2.edit')->with('classes', $classe);
    }
 
    public function update(Request $request, string $id): RedirectResponse
    {
        $classe = Classes::find($id);
        $input = $request->all();
        $classe->update($input);
        return redirect('classes')->with('flash_message', 'classe Updated!');  
    }
 
    
    public function destroy(string $id): RedirectResponse
    {
        Classes::destroy($id);
        return redirect('classes')->with('flash_message', 'classe deleted!');
    }
}