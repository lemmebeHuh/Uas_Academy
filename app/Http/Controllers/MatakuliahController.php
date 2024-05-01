<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Matakuliah;
 
class MatakuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $matakuliah = Matakuliah::orderBy('id')->get();
 
        return view('matakuliah.index', compact('matakuliah'));
    }
 
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('matakuliah.create');
    }
 
    /**
     * Store a newly created resource in storage.
     */
    
     public function store(Request $request)
     {
         Matakuliah::create($request->all());
 
     return redirect()->route('matakuliah.index')->with('success', 'Mata Kuliah added successfully');
     }
 
    /**
     * Show the form for editing the specified resource.
     */
    public function show(string $kodeMk)
    {
        $matakuliah = Matakuliah::findOrFail($kodeMk);
 
        return view('matakuliah.show', compact('matakuliah'));
    }
 
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $kodeMk)
    {
        $matakuliah = Matakuliah::findOrFail($kodeMk);
 
        return view('matakuliah.edit', compact('matakuliah'));
    }
 
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $kodeMk)
    {
        $matakuliah = Matakuliah::findOrFail($kodeMk);
 
        $matakuliah->update($request->all());
 
        return redirect()->route('matakuliah.index')->with('success', 'matakuliah updated successfully');
    }
 
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $kodeMk)
    {
        $matakuliah = Matakuliah::findOrFail($kodeMk);
 
        $matakuliah->delete();
 
        return redirect()->route('matakuliah.index')->with('success', 'matakuliah deleted successfully');
    }
}