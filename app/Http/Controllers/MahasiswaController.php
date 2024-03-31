<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Mahasiswa;
 
class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::orderBy('created_at', 'DESC')->get();
 
        return view('mahasiswa.index', compact('mahasiswa'));
    }
 
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mahasiswa.create');
    }
 
    /**
     * Store a newly created resource in storage.
     */
    
     public function store(Request $request)
     {
         if ($request->file('fotoMhs')){
             $fileName = $request->namaMhs.'.'.$request->fotoMhs->extension();
             $request->fotoMhs->move(public_path('asset/img/mhs'), $fileName);
         
         }
         else {
             $fileName = 'default.png';
         }
         Mahasiswa::create($request->all());
 
     return redirect()->route('mahasiswa.index')->with('success', 'Mahasiswa added successfully');
     }
 
    /**
     * Show the form for editing the specified resource.
     */
    public function show(string $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
 
        return view('mahasiswa.show', compact('mahasiswa'));
    }
 
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
 
        return view('mahasiswa.edit', compact('mahasiswa'));
    }
 
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
 
        $mahasiswa->update($request->all());
 
        return redirect()->route('mahasiswa.index')->with('success', 'mahasiswa updated successfully');
    }
 
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
 
        $mahasiswa->delete();
 
        return redirect()->route('mahasiswa.index')->with('success', 'mahasiswa deleted successfully');
    }
}