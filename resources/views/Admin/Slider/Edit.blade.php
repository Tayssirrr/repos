@extends('Layouts.Admin')
@section('title')
 Edit Slider
@endsection
@section('main')
 
      <form action="{{route('sliders.update',$slider->id)}}" method="post" class="border border-4 p-5 w-50 ms-5" enctype="multipart/form-data" >
        @csrf
        @method('PUT') 
        <div class="mb-3">
            <h2>Edit Slider :</h2>
          </div>
        <div class="mb-3">
            <label for="" class="form-label">Title :</label>
            <input
                type="text"
                class="form-control"
                name="title"
                value="{{old('title',$slider->title)}}"
            />
            @error('title')
                <p class="text-danger">{{$message}}</p>
            @enderror
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Description :</label>
            <textarea name="description" class="form-control" id="" cols="30" rows="5">{{old('description',$slider->description)}}</textarea>
            @error('description')
            <p class="text-danger">{{$message}}</p>
        @enderror
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Image :</label>
            <input
                type="file"
                class="form-control"
                name="image"
            />
            @error('image')
            <p class="text-danger">{{$message}}</p>
        @enderror
            <img class="my-2 rounded" width="200px" src="{{asset('storage/'.$slider->image)}}" alt="">
          </div>
          <button class="btn btn-success">
            Edit
          </button>
          <a href="{{route('sliders.index')}}" class="btn btn-warning">Cancel</a>
      </form>
      
    
@endsection