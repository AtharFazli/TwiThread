<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.index');

        // return 'HI';
    }

    public function display() 
    {
        $data = Laporan::orderBy('id', 'desc')->get();
        // return $data;
        // return view('admin.display', $data)->with('data', $data);
        return view('admin.display', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.post');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nis'           => 'required|numeric',
            'nama_pelapor'  => 'required',
            'kelas'         => 'required|numeric',
            'isi_laporan'   => 'required',
        ], 
        [
            'nis.required'           => 'Mohon isikan NIS',
            'nis.numeric'            => 'Mohon isikan NIS dalam bentuk angka',
            'nama_pelapor.required'  => 'Mohon isikan Nama',
            'kelas.required'         => 'Mohon isikan Kelas',
            'kelas.numeric'          => 'Mohon isikan Kelas dalam bentuk angka',
            'isi_laporan.required'   => 'Mohon isikan Laporan mu'
        ]
        );
     

        Laporan::create($request->all());

        return view('admin.post');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Laporan $laporan)
    {
        return view('admin.edit', compact('laporan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Laporan $laporan)
    {
        $request->validate([
            'nis'           => 'required|numeric',
            'nama_pelapor'  => 'required',
            'kelas'         => 'required|numeric',
            'isi_laporan'   => 'required',
        ], 
        [
            'nis.required'           => 'Mohon isikan NIS',
            'nis.numeric'            => 'Mohon isikan NIS dalam bentuk angka',
            'nama_pelapor.required'  => 'Mohon isikan Nama',
            'kelas.required'         => 'Mohon isikan Kelas',
            'kelas.numeric'          => 'Mohon isikan Kelas dalam bentuk angka',
            'isi_laporan.required'   => 'Mohon isikan Laporan mu'
        ]
        );

        $laporan->update($request->all());

        return redirect()->route('display');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Laporan $laporan)
    {
        $laporan->delete();

        return redirect()->route('display');
        
    }
}
