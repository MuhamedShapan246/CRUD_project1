@extends('product.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto  d-flex justify-content-between my-5">
                <div class="pull-left">
                    <h2>Update Product  {{$product->name}}</h2>
                </div>
                <div class="pull-right my-2">
                    <a class="btn btn-success" href="{{ route('products.index') }}"> Back</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8 mx-auto">
                <form action="{{route('products.update',$product->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group my-2">
                        <input type="text" name="name" class="form-control" value="{{$product->name}}">
                    </div>
                    <div class="form-group my-2">
                        <input type="text" name="price" class="form-control" value="{{$product->price}}">
                    </div>
                    <div class="form-group my-2">
                        <textarea name="detail"  cols="30" rows="10" class="form-control">{{$product->detail}}</textarea>
                    </div>
                    <div class="form-group my-2">
                        <input type="submit" name="update" class="btn btn-info" value="Update">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection