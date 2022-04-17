@extends('Layouds.layoud')
@section('content')

<div class="container">
    <div class="row">
        <a href="{{url('/create')}}">Add product</a>
    </div>
    <div class="row">
       <table class="table table-bodered">
           <tr>
               <td>id</td> <td>name</td> <td>price</td> <td>country</td> <td>image</td>
           </tr>
           @foreach(\App\Models\Product::all() as $item)
               <tr>
                   <td>{{$item->id}}</td>
                   <td>{{$item->name}}</td>
                   <td>{{$item->price}}</td>
                   <td>{{$item->country}}</td>
                   <td>{{$item->image}}</td>
               </tr>

           @endforeach
       </table>

    </div>
</div>

@endsection
