<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function products($slug)
    {
       // return 'Selamat Datang';
        $data = DB::table('web')->where('type','products')->where('slug',$slug)->first();
        if($data){
            return view('product',compact('data'));
        }else{
            return 'maaf data tidak terdia';
        }
    }

    public function program($slug)
    {
       // return 'NIM: 2241727001 <br> Nama: Agustin dwi nur hamidah <br> Kelas: Web-B';
        $data = DB::table('web')->where('type','programs')->where('slug',$slug)->first();
        if($data){
            return view('program',compact('data'));
        }else{
            return 'maaf data tidak terdia';
        }
    }

    public function articles($id)
    {
        return 'Halaman artikel ini dengan id '.$id;
        //return view('contact');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

