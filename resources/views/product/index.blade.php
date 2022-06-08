@extends('product.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto d-flex justify-content-between my-5">
                <div class="pull-left">
                    <h2>Laravel 8 CRUD Example</h2>
                </div>
                <div class="pull-right my-2">
                    <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
                    <a class="btn btn-secondary" href="{{ route('product.trash') }}"> Trash</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8 mx-auto">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
            </div>
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
                                    <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-info">Show</a>
                                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-success">Edit</a>
                                        <a href="{{ route('soft.delete', $product->id) }}" class="btn btn-primary">Soft Delete</a>
                                        @csrf
                                        @method('DELETE')
                                        {{-- <button type="submit" class="btn btn-danger">Delete</button> --}}
                                    </form>
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
