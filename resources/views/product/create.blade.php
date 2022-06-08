@extends('product.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto  d-flex justify-content-between my-5">
                <div class="pull-left">
                    <h2>Add New Product</h2>
                </div>
                <div class="pull-right my-2">
                    <a class="btn btn-success" href="{{ route('products.index') }}"> Back</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8 mx-auto">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops! </strong>There Are Some Problems In Your Input
                        <ul>
                            @foreach ($errors->all as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-8 mx-auto">
                <form action="{{route('products.store')}}" method="POST">
                    @csrf
                    <div class="form-group my-2">
                        <input type="text" name="name" class="form-control" placeholder="Product Name">
                    </div>
                    <div class="form-group my-2">
                        <input type="text" name="price" class="form-control" placeholder="Product Price">
                    </div>
                    <div class="form-group my-2">
                        <textarea name="detail"  cols="30" rows="10" class="form-control" placeholder="Product Detail"></textarea>
                    </div>
                    <div class="form-group my-2">
                        <input type="submit" name="add" class="btn btn-info" value="Add">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection