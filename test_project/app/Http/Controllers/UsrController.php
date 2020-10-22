<?php

namespace App\Http\Controllers;

use App\Models\Usr;
use Illuminate\Http\Request;

class UsrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $userinfo = Usr::paginate();

      return view('usr.index')
          ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
{
    return view('usr.index');
}

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        Usr::create($request->all());

        return redirect()->route('products.index')
                        ->with('success','Product created successfully.');
    }

    public function show(Usr $usr)
    {
        return view('usr.show',compact('usr'));
    }

}
