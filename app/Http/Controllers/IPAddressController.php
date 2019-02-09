<?php

namespace App\Http\Controllers;

use App\IPAddress;
use Illuminate\Http\Request;
use Session;
class IPAddressController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ipad = IPAddress::get();
        return view("ipaddress/index",['ipad'=>$ipad]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("ipaddress/create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'ipaddress' => 'required',
            'url' => 'required'
        ]);
        $ipad = new IPAddress;
        $ipad->ipaddress = $request->ipaddress;
        $ipad->url = $request->url;
        $ipad->save();       
        return redirect('ipaddress')->with('success', 'Information has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\IPAddress  $iPAddress
     * @return \Illuminate\Http\Response
     */
    public function show(IPAddress $iPAddress)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\IPAddress  $iPAddress
     * @return \Illuminate\Http\Response
     */
    public function edit($iPAddress)
    {       
        $ipad = IPAddress::findOrFail($iPAddress);
        return view("ipaddress/edit",compact('ipad','ipad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\IPAddress  $iPAddress
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $iPAddress)
    {
        $ipad = IPAddress::findOrFail($iPAddress);
        $this->validate($request, [
            'ipaddress' => 'required',
            'url' => 'required'
        ]);
        $ipad->ipaddress = $request->ipaddress;
        $ipad->url = $request->url;
        $ipad->save(); 
        return redirect('ipaddress')->with('success', "Information has been updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\IPAddress  $iPAddress
     * @return \Illuminate\Http\Response
     */
    public function destroy($iPAddress)
    {
        IPAddress::destroy($iPAddress);
        return redirect('ipaddress')->with('success', "Information has been destroied");
    }
}
