@extends('Layouts.Admin')
@section('title')
 Create Slider
@endsection
@section('main')
    
      <form action="{{route('sliders.store')}}" method="post" class="border border-4 p-5 w-50 ms-5" enctype="multipart/form-data" >
        @csrf 
        <div class="mb-3">
            <h2>Create New Slider :</h2>
          </div>
        <div class="mb-3">
            <label for="" class="form-label">Title :</label>
            <input value="{{old('title')}}"
                type="text"
                class="form-control"
                name="title"
            />
        @error('title')
            <p class="text-danger">{{$message}}</p>
        @enderror
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Description :</label>
            <textarea name="description" class="form-control" id="" cols="30" rows="5">
              {{old('description')}}
           
              @error('description')
              <p class="text-danger">{{$message}}</p>
          @enderror </textarea>
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
          </div>
          <button class="btn btn-success">
            Create
          </button>
      </form>
      
    
@endsection