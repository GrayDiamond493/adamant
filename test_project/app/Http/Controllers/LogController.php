<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Sales;
use App\Models\Log;
use App\Models\Usr;
use Illuminate\Http\Request;


class LogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

      $userinfo = Usr::paginate();


      /*
      global $granted;
      foreach($userinfo as $usr){
        $str=$usr->username;
        $str=substr($str, 0, strrpos($str, ' '));
          if (isset($_POST["username"]) && isset($_POST["password"])) {
            if(($_POST["username"]==$usr->username) && ($_POST["password"]==$usr->password)){
              $granted=true;
              return redirect()->route('sales.index');
            }
          }
      }
      */
      return view('log.index',compact('userinfo'));

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
      $userinfo = Usr::paginate();
      foreach($userinfo as $usr){
        $str=$usr->username;
        $str2=$usr->password;

          if (isset($_POST["username"]) && isset($_POST["password"])) {
            if(($_POST["username"]==$str) && ($_POST["password"]==$str2)){
              return redirect()->route('sales.index');
          }
        }
    }
    return redirect()->route('log.index');
  }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Log  $log
     * @return \Illuminate\Http\Response
     */
    public function show(Log $log)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Log  $log
     * @return \Illuminate\Http\Response
     */
    public function edit(Log $log)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Log  $log
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Log $log)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Log  $log
     * @return \Illuminate\Http\Response
     */
    public function destroy(Log $log)
    {
        //
    }
}
