<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('pages.admin.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index_admin()
    {
        $items = User::all()->where('level','=','admin');
        return view('pages.admin.admin',[
            'items' => $items 
        ]);
    }

    public function create_admin()
    {
        return view('pages.admin.admin_tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_admin(Request $request)
    {
        $data = $request->all();
        $post = [
            'name'      => $data['name'],
            'no_hp'     => $data['no_hp'],
            'email'     => $data['email'],
            'password'  => Hash::make($data['password']),
            'level'     => 'admin'
        ];
        // print('<pre>');print_r($post);exit();
        User::create($post);
        return redirect()->route('list-admin');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_admin($id)
    {
        $item  = User::find($id);
        return view('pages.admin.admin_edit',[
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
    public function update_admin(Request $request, $id)
    {
        $data = $request->all();
        // print('<pre>');print_r($data);exit();
        $item  = User::findOrFail($id);
        $item->update($data);

        return redirect()->route('list-admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy_admin($id)
    {
        $item = User::findOrFail($id);
        $item->delete();

        return redirect()->route('list-admin');
    }

    public function index_penjual()
    {
        $items = User::all()->where('level','=','penjual');
        // print('<pre>');print_r($items);exit();
        return view('pages.admin.penjual',[
            'items' => $items,
        ]);
    }

    public function create_penjual()
    {
        return view('pages.admin.penjual_tambah');
    }

    public function store_penjual(Request $request)
    {
        $data = $request->all();
        $post = [
            'name'      => $data['name'],
            'no_hp'     => $data['no_hp'],
            'email'     => $data['email'],
            'password'  => Hash::make($data['password']),
            'level'     => 'penjual'
        ];
        // print('<pre>');print_r($post);exit();
        User::create($post);
        return redirect()->route('list-penjual');
    }

    public function edit_penjual($id)
    {
        $item  = User::find($id);
        return view('pages.admin.penjual_edit',[
            'item' => $item
        ]);
        // print('<pre>');print_r($item);exit();
    }

    public function update_penjual(Request $request, $id)
    {
        $data = $request->all();
        // print('<pre>');print_r($data);exit();
        $item  = User::findOrFail($id);
        $item->update($data);

        return redirect()->route('list-penjual');
    }

    public function destroy_penjual($id)
    {
        $item = User::findOrFail($id);
        $item->delete();

        return redirect()->route('list-penjual');
    }

    public function index_pembeli()
    {
        $items = User::all()->where('level','=','pembeli');
        return view('pages.admin.pembeli',[
            'items' => $items 
        ]);
    }

    public function create_pembeli()
    {
        return view('pages.admin.pembeli_tambah');
    }

    public function store_pembeli(Request $request)
    {
        $data = $request->all();
        $post = [
            'name'      => $data['name'],
            'no_hp'     => $data['no_hp'],
            'email'     => $data['email'],
            'password'  => Hash::make($data['password']),
            'level'     => 'pembeli'
        ];
        // print('<pre>');print_r($post);exit();
        User::create($post);
        return redirect()->route('list-pembeli');
    }

    public function edit_pembeli($id)
    {
        $item  = User::find($id);
        return view('pages.admin.pembeli_edit',[
            'item' => $item
        ]);
    }

    public function update_pembeli(Request $request, $id)
    {
        $data = $request->all();
        // print('<pre>');print_r($data);exit();
        $item  = User::findOrFail($id);
        $item->update($data);

        return redirect()->route('list-pembeli');
    }

    public function destroy_pembeli($id)
    {
        $item = User::findOrFail($id);
        $item->delete();

        return redirect()->route('list-pembeli');
    }

}
