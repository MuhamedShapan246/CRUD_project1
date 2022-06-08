@extends('product.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto d-flex justify-content-between my-5">
                <div class="pull-left">
                    <h2>Laravel 8 CRUD Example</h2>
                </div>
                <div class="pull-right my-2">
                    <a class="btn btn-success" href="{{ route('products.index') }}">Home</a>
                    {{-- <a class="btn btn-success" href="{{ route('product.back.from.trash') }}">Back</a> --}}
                </div>
            </div>
            <h2 class="col-8 mx-auto" style="color: brown">Trashed Products</h2>
        </div>
        <div class="row">
            <div class="col-8 mx-auto">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Detail</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->detail }}</td>
                                <td>
                                    <a href="{{ route('product.back.from.trash', $product->id) }}" class="btn btn-info">Back</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $products->links() }}
            </div>
        </div>
    </div>
@endsection
