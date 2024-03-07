<?php

namespace App\Http\Controllers;

use App\Http\Requests\SliderRequest;
use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services= Services::paginate(5);
        return view('Admin.Service.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Service.Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SliderRequest $request)
    {
        $values=$request->validated();
        if($request->hasFile('image')){
            $values['image']=$request->file('image')->store('Services','public');
        };
        Services::create($values);
        return to_route('services.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Services $services)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Services $service)
    {
        return view('Admin.Service.Edit',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Services $service)
    {
        $values=$request->validate([
            'title'=>'required|min:10',
            'description'=>'required|min:20',
        ]);
        if($request->hasFile('image')){
            $values['image']=$request->file('image')->store('Services','public');
        }
        $service->fill($values)->save();
        return to_route('services.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Services $service)
    {
        $service->delete();
        return to_route('services.index');
    }
}
