<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Penjual;
use App\Transaksi;

class PenjualController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.penjual.dashboard');
    }

    public function index_barang(Request $request)
    {
        $id_penjual = $request->session()->get('data');
        $items = Penjual::all()->where('id_user','=',$id_penjual['id_user']);
        return view('pages.penjual.barang',[
            'items' => $items,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_barang()
    {
        return view('pages.penjual.barang_tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_barang(Request $request)
    {
        $data = $request->all();
        $gambar1 = $request->file('Gambar1')->getClientOriginalName();
        $gambar2 = $request->file('Gambar2')->getClientOriginalName();
        $gambar3 = $request->file('Gambar3')->getClientOriginalName();
        $post = [
            'nama'      => $data['nama'],
            'harga'     => str_replace('.','',$data['harga']),
            'stock'     => $data['stock'],
            'deskripsi' => $data['desc'],
            'id_user'   => $data['id_user'],
            'gambar1'   => $gambar1,
            'gambar2'   => $gambar2,
            'gambar3'   => $gambar3
        ];
        $tujuan_upload = 'gambar';
        $file1 = $request->file('Gambar1');
        $file1->move($tujuan_upload,$file1->getClientOriginalName());
        $file2 = $request->file('Gambar2');
        $file2->move($tujuan_upload,$file2->getClientOriginalName());
        $file3 = $request->file('Gambar3');
        $file3->move($tujuan_upload,$file3->getClientOriginalName());
        
        Penjual::create($post);
        return redirect()->route('barang-list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_barang($id)
    {
        $item  = Penjual::find($id);
        return view('pages.penjual.barang_edit',[
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_barang(Request $request, $id)
    {
        $data = $request->all();
        $post = [
            'nama'  => $data['nama'],
            'harga' => str_replace('.','',$data['harga']),
            'stock' => $data['stock'],
            'deskripsi' => $data['desc']
        ];
        // print('<pre>');print_r($post);exit();
        $item  = Penjual::findOrFail($id);
        $item->update($post);

        return redirect()->route('barang-list');
    }

    public function update_foto_barang(Request $request, $id)
    {
        $data = $request->all();
        if($data['keterangan'] == "gambar1"){
            $image_path = 'gambar/'.$data['gambar_lama'];
            Storage::delete($image_path);
            // File::delete($image_path);
            $gambar1 = $request->file('gambar1')->getClientOriginalName();
            $post = [
                'gambar1'   => $gambar1
            ];
            $tujuan_upload = 'gambar';
            $file1 = $request->file('gambar1');
            $file1->move($tujuan_upload,$file1->getClientOriginalName());
        } else if($data['keterangan'] == "gambar2"){
            $image_path = 'gambar/'.$data['gambar_lama'];
            Storage::delete($image_path);
            // File::delete($image_path);
            $gambar2 = $request->file('gambar2')->getClientOriginalName();
            $post = [
                'gambar2'   => $gambar2
            ];
            $tujuan_upload = 'gambar';
            $file1 = $request->file('gambar2');
            $file1->move($tujuan_upload,$file1->getClientOriginalName());
        } else {
            $image_path = 'gambar/'.$data['gambar_lama'];
            Storage::delete($image_path);
            // File::delete($image_path);
            $gambar3 = $request->file('gambar3')->getClientOriginalName();
            $post = [
                'gambar3'   => $gambar3
            ];
            $tujuan_upload = 'gambar';
            $file1 = $request->file('gambar3');
            $file1->move($tujuan_upload,$file1->getClientOriginalName());
        }
        // print('<pre>');print_r($data);exit();   
        $item  = Penjual::findOrFail($id);
        $item->update($post);

        return redirect()->route('barang-list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy_barang($id)
    {
        $item = Penjual::findOrFail($id);
        $item->delete();

        return redirect()->route('barang-list');
    }

    public function transaksi_penjual(Request $request)
    {
        $id_penjual = $request->session()->get('data');
        $items = Transaksi::all()->where('id_penjual','=',$id_penjual['id_user']);
        
        return view('pages.penjual.transaksi',[
            'items' => $items,
        ]);
    }
}
