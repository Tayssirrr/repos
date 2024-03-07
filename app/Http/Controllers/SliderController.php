<?php

namespace App\Http\Controllers;

use App\Http\Requests\SliderRequest;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $sliders= Slider::paginate(5);
        return view('Admin.Slider.index',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Slider.Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SliderRequest $request)
    {
        $values=$request->validated();
        if($request->hasFile('image')){
            $values['image'] = $request->file('image')->store('Sliders','public');
        }
        Slider::create($values);
        return to_route('sliders.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slider $slider)
    {
        return view('Admin.Slider.Edit',compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Slider $slider)
    {
        $values=$request->validate([
            'title'=>'required|min:10',
            'description'=>'required|min:30',
        ]);
        if($request->hasFile('image')){
            $values['image']=$request->file('image')->store('Sliders','public');
        }
        $slider->fill($values)->save();
        return to_route('sliders.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slider $slider)
    {
         $slider->delete();
         return to_route('sliders.index');
    }
}
