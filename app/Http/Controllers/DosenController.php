<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Dosen;
 
class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dosen = Dosen::orderBy('kodeDsn')->get();
 
        return view('dosen.index', compact('dosen'));
    }
 
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dosen.create');
    }
 
    /**
     * Store a newly created resource in storage.
     */
    
     public function store(Request $request)
     {
         if ($request->file('fotoDsn')){
             $fileName = $request->namaDsn.'.'.$request->fotoDsn->extension();
             $request->fotoDsn->move(public_path('asset/img/dsn'), $fileName);
         
         }
         else {
             $fileName = 'default.png';
         }
         Dosen::create($request->all());
 
     return redirect()->route('dosen.index')->with('success', 'dosen added successfully');
     }
 
    /**
     * Show the form for editing the specified resource.
     */
    public function show(string $kodeDsn)
    {
        $dosen = Dosen::findOrFail($kodeDsn);
 
        return view('dosen.show', compact('dosen'));
    }
 
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $kodeDsn)
    {
        $dosen = Dosen::findOrFail($kodeDsn);
 
        return view('dosen.edit', compact('dosen'));
    }
 
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $kodeDsn)
    {
        $dosen = Dosen::findOrFail($kodeDsn);
 
        $dosen->update($request->all());
 
        return redirect()->route('dosen.index')->with('success', 'dosen updated successfully');
    }
 
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $kodeDsn)
    {
        $dosen = Dosen::findOrFail($kodeDsn);
 
        $dosen->delete();
 
        return redirect()->route('dosen.index')->with('success', 'dosen deleted successfully');
    }
}