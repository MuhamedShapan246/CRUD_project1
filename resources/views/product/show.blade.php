@extends('product.layout')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto  d-flex justify-content-between my-5">
                <div class="pull-left">
                    <h2>Detail about Product {{$product->name}}</h2>
                </div>
                <div class="pull-right my-2">
                    <a class="btn btn-success" href="{{ route('products.index') }}"> Back</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8 mx-auto">
                <div class="form-group">
                    Name : <h2>{{$product->name}}</h2>
                </div>
                <div class="form-group">
                    Price : <h4>{{$product->price}}</h4>
                </div>
                <div class="form-group">
                    Detail : <p>{{$product->detail}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection