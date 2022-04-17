@extends('Layouds.layoud')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6">

                <form action="{{url('/store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                    <label>name</label>
                    <input type="text" name="name" class="form-control">
                        @error('name')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                    </div>

                    <div class="form-group">
                    <label>price</label>
                    <input type="text" name="price" class="form-control">
                    @error('price')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>

                    <div class="form-group">
                    <label>country</label>
                    <input type="text" name="country" class="form-control">
                    @error('country')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>

                    <div class="form-group">
                        <label>image</label>
                        <input type="text" name="image" class="form-control">
                        @error('image')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <input type="submit" value="add product"  class="btn btn-primary">

                </form>

            </div>
        </div>
    </div>

@endsection
