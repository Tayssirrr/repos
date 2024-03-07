@extends('Layouts.Admin')
@section('title')
 Edit Company
@endsection
@section('main')
   
      <form action="{{route('company.update',$company->id)}}" method="post" class="border border-4 p-5 w-50 ms-5" enctype="multipart/form-data" >
        @csrf
        @method('PUT') 
        <div class="mb-3">
            <h2>Edit company :</h2>
          </div>
        <div class="mb-3">
            <label for="" class="form-label">Name :</label>
            <input
                type="text"
                class="form-control"
                name="name"
                value="{{old('name',$company->name)}}"
            /> 
         @error('name')
              <p class="text-danger">{{$message}}</p>
         @enderror
          </div>
         
          <div class="mb-3">
            <label for="" class="form-label">Logo :</label>
            <input
                type="file"
                class="form-control"
                name="logo"
            
            />
            @error('logo')
            <p class="text-danger">{{$message}}</p>
            @enderror
            <img src="{{asset('storage/'.$company->logo)}}" class="mt-2 rounded" width="80" alt="">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Email :</label>
            <input
                type="text"
                class="form-control"
                name="email"
                value="{{old('email',$company->email)}}"
            />
            @error('email')
            <p class="text-danger">{{$message}}</p>
       @enderror
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Adresse :</label>
            <input
                type="text"
                class="form-control"
                name="adresse"
                value="{{old('adresse',$company->adresse)}}"
            />
            @error('adresse')
            <p class="text-danger">{{$message}}</p>
       @enderror
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Boss :</label>
            <input
                type="text"
                class="form-control"
                name="boss"
                value="{{old('boss',$company->boss)}}"
            />
            @error('boss')
            <p class="text-danger">{{$message}}</p>
       @enderror
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Manager :</label>
            <input
                type="text"
                class="form-control"
                name="manager"
                value="{{old('manager',$company->manager)}}"
            />
            @error('manager')
            <p class="text-danger">{{$message}}</p>
       @enderror
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Number :</label>
            <input
                type="text"
                class="form-control"
                name="Number"
                value="{{old('Number',$company->Number)}}"
            />
            @error('Number')
            <p class="text-danger">{{$message}}</p>
       @enderror
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Video :</label>
            <input
                type="text"
                class="form-control"
                name="video"
                value="{{old('video',$company->video)}}"
            />
            @error('video')
            <p class="text-danger">{{$message}}</p>
       @enderror
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Description :</label>
            <textarea name="description" class="form-control" id="" cols="30" rows="5">{{old('description',$company->description)}}</textarea>
            @error('description')
            <p class="text-danger">{{$message}}</p>
       @enderror 
        </div>
  
          <button class="btn btn-success">
            Edit
          </button>
          <a href="{{route('company.index')}}" class="btn btn-warning">Cancel</a>
      </form>
      

      
@endsection