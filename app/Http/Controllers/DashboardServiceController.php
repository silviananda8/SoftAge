<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.service.index',[
            'service' => Service::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            // max 1 mb
            'icon' => 'image|file|mimes:jpeg,png,jpg,gif|max:2048', 
            'name' => 'required',
            'description' => 'required'
        ]);
        
        if($request->file('icon')){
            $validateData['icon'] = $request->file('icon')->store(('icons'));
        }

        Service::create($validateData);
        return redirect('/dashboard/service')->with('success','new service');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        return view('dashboard.service.show', [
            'service' => $service
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        //menampilkan view
        return view('dashboard.service.edit', [
            'service' => $service
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        //proses ubahnya
        $validateData = $request->validate([
            'icon' => 'image|file|mimes:jpeg,png,jpg,gif|max:2048', 
            'name' => 'required',
            'description' => 'required'
        ]);
        if($request->file('icon')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validateData['icon'] = $request->file('icon')->store(('icons'));
        }
        // dd('berhasil');
        Service::where('id', $service->id)
                    ->update($validateData);
        return redirect('/dashboard/service')->with('success','update berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        if($service->image){
            Storage::delete($service->image);
        }
        Service::destroy($service->id);
        return redirect('/dashboard/service')->with('success','data telah dihapus');
    }
}
