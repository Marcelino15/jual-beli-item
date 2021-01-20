<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use UxWeb\SweetAlert\SweetAlert;
use App\Home;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $barang = Home::all();
        
    	return view('home', ['barang' => $barang]);
    }
    public function detail($id)
    {
        $barang = Home::find($id);
        return view('detail', ['barang' => $barang]);
    }
    public function tambahKeranjang($id)
    {
        $barang = Home::find($id);
        if(!$barang) {
            abort(404);
        }
        $cart = session()->get('cart');
        if(!$cart) {
            $cart = [
                    $id => [
                        "nama" => $barang->nama,
                        "qty" => 1,
                        "harga" => $barang->harga,
                    ]
            ];
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'barang added to cart successfully!');
        }
        if(isset($cart[$id])) {
            $cart[$id]['qty']++;
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'barang added to cart successfully!');
        }
        $cart[$id] = [
            "nama" => $barang->nama,
                        "qty" => 1,
                        "harga" => $barang->harga,
        ];
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'barang added to cart successfully!');

    }
    // public function updateBarang(Request $request)
    // {
    //     echo "kene boss";
    //     echo $request->id;

    //     echo $request->qty;
    //     if($request->id and $request->qty)
    //     {
    //         $cart = session()->get('cart');
    //         $cart[$request->id]["qty"] = $request->qty;
    //         session()->put('cart', $cart);

    //         return redirect()->back()->Alert::alert('Title', 'Message', 'Type');

    //     }
    // }
    public function tambahQty(Request $request)
    {
        $qty=1;

        if($request->id and $qty)
        {
            $cart = session()->get('cart');
            $cart[$request->id]["qty"] = $cart[$request->id]["qty"]+$qty;
            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'anyari');
          

        }
    }
    public function kurangiQty(Request $request)
    {
        $qty=-1;

        if($request->id and $qty)
        {
            $cart = session()->get('cart');
            $cart[$request->id]["qty"] = $cart[$request->id]["qty"]+$qty;
            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'anyari');
        }
    }
    public function hapusBarang(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            return redirect()->back()->with('success', 'hapus');
        }
    }
    public function checkout()
    {
        
    }
    public function viewCart()
    {
        return view('keranjang');
    }
}
