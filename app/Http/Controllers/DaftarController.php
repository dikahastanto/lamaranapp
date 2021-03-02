<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Daftar;
use App\Models\Keluarga;
use App\Models\Bahasa;
use App\Models\PengalamanKerja;
use Illuminate\Support\Str;

class DaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Daftar::paginate(10);
        return view('dashboard')->with(['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mainData = $request->except(['keluarga', 'bahasa', 'pengalamanKerja', '_token']);
        $noPeserta = Str::random(30);
        $keluarga = $request->keluarga;
        for ($i=0; $i < sizeof($keluarga); $i++) { 
            $keluarga[$i]['noPeserta'] = $noPeserta;
            Keluarga::create($keluarga[$i]);

        }
        $bahasa = $request->bahasa;
        for ($i=0; $i < sizeof($bahasa); $i++) {
            Bahasa::create([
                'noPeserta' => $noPeserta,
                'namaBahasa' => $bahasa[$i]['namaBahasa'],
                'mendengar' => json_decode(isset($bahasa[$i]['mendengar']) ? $bahasa[$i]['mendengar'] : 0),
                'membaca' => json_decode(isset($bahasa[$i]['membaca']) ? $bahasa[$i]['membaca'] : 0),
                'menulis' => json_decode(isset($bahasa[$i]['menulis']) ? $bahasa[$i]['menulis'] : 0)
            ]);
        }
        $pengalamanKerja = $request->pengalamanKerja;
        for ($i=0; $i < sizeof($pengalamanKerja); $i++) { 
            $pengalamanKerja[$i]['noPeserta'] = $noPeserta;
            PengalamanKerja::create($pengalamanKerja[$i]);
        }
        $mainData['noPeserta'] = $noPeserta;
        $mainData['lanjutPendidikan'] = json_decode(isset($mainData['lanjutPendidikan']) ? $mainData['lanjutPendidikan'] : 0);
        
        $file = $request->file('cv');
        $name = Str::random(40) . '.' . $file->guessExtension();
        $file->move('img', $name);

        $mainData['image_cv'] = $name;

        Daftar::create($mainData);
        return redirect()->route('landing')->with('alert', 'Berhasil Daftar');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Daftar::where('id', $id)->first();
        $keluarga = Keluarga::where('noPeserta', $data->noPeserta)->get();
        $bahasa = Bahasa::where('noPeserta', $data->noPeserta)->get();
        $pengalamanKerja = PengalamanKerja::where('noPeserta', $data->noPeserta)->get();
        return view('detail')->with([
            'data' => $data,
            'keluarga' => $keluarga,
            'bahasa' => $bahasa,
            'pengalamanKerja' => $pengalamanKerja
        ]);
    }

    public function filtered(Request $request)
    {
        $keyword = $request->keyword;
        $data = Daftar::where('formasi', $keyword)->paginate(10);
        return view('dashboard')->with(['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
