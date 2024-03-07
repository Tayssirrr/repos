@extends('Layouts.Admin')
@section('title')
Services
@endsection
@section('main')
    
        <h2 class="text-center">Services List :</h2>
        <div
            class="table-responsive"
        >
            <table
                class="table table-primary"
            >
            <thead class="">
                <tr>
                    <th>id</th>
                    <th>title</th>
                    <th>description</th>
                    <th>image</th>
                    <th>Modify</th>
                    <th>Remove</th>
                </tr>
            </thead>
                <tbody>
                    @foreach ($services as $item)
                    <tr
                    class=""
                >
                    <td>{{$item->id}}</td>
                    <td>{{$item->title}}</td>
                    <td>{{Str::limit($item->description,70)}}</td>
                    <td style="width: 100px"><img src="{{asset('storage/'. $item->image)}}" alt="" class="w-100" ></td>
                    <td>
                       <form action="{{route('services.edit',$item->id)}}" method="GET" >
                        @csrf
                           <button class="btn btn-warning">Modify</button>
                       </form>
                    </td>
                    <td>
                        
                        <form action="{{route('services.destroy',$item->id)}}" method="post">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="btn btn-danger" 
                            onclick="return confirm('Are you Sure You Want To Remove This Service')">Delete</button>
                         </form>
                    </td>
                   </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
    
  
@endsection