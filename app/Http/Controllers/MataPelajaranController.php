<?php

namespace App\Http\Controllers;

use App\MataPelajaran;
use Illuminate\Http\Request;

class MataPelajaranController extends Controller
    {
        public function __construct(){
            return $this->middleware('auth');
        }
    public function index()
    {
        $mapel = MataPelajaran::all();
        return view('mapel.index', compact('mapel'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

            //Menampilkan Ke Halaman form input
            return view('mapel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mapel = new MataPelajaran();
        $mapel->mapel =$request->mapel;
        $mapel->save();
        return redirect()->route('mapel.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MataPelajaran  $mataPelajaran
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mapel = MataPelajaran::findOrFail($id);
        return view('mapel.show', compact('mapel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MataPelajaran  $mataPelajaran
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mapel = MataPelajaran::findOrFail($id);
        return view('mapel.edit', compact('mapel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MataPelajaran  $mataPelajaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $mapel = MataPelajaran::findOrFail($id);
        $mapel->mapel = $request->mapel;
        $mapel->save();
        return redirect()->route('mapel.index');

    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MataPelajaran  $mataPelajaran
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mapel = MataPelajaran::findOrFail($id)->delete();
        return redirect()->route('mapel.index');
    }
}
