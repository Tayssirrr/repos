@extends('Layouts.Admin')
@section('title')
    Company
@endsection
@section('main')
    
        <h2 class="py-2">Company Information :</h2>
     @foreach ($company->getAttributes() as $key=>$value)
     @if ($key!=='deleted_at')
     @if ($key==='logo')
     <h4>Company {{$key}} : <img src="{{asset('storage/'.$value)}}" width="80" alt=""> </h4>
     @else
     <h4>Company {{$key}} : {{$value}}</h4>
     @endif
     @endif
    
     @endforeach 
     <form action="{{route('company.edit',$company)}}" method="get">
        @csrf
        <button class="btn btn-primary">Edit</button>
      </form>

    
@endsection