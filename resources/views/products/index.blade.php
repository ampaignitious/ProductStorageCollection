@extends('products.layout')
@section('content')
<div class="row mt-4">
    <div class="col-6">
            <h2>Available Products</h2>
    </div>
    <div class="col-6">
            <a href="{{ route('products.create')}}" class="btn btn-success">Create New Product</a>
    </div>
</div>
@if ($message = Session::get('success'))

<div class="alert alert-success">
    <p>{{ $message}}</p>
</div>
@endif

<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Details</th>
      </tr>
    </thead>
    <tbody>
 @foreach ($products as $product)       
      <tr>
        <td>{{ $product->id}}</td>
        <td>{{ $product->name}}</td>
        <td>{{ $product->detail}}</td>
        <td>
            <form action="{{ route('products.destroy', $product->id)}}" method="POST">
            <a  class="btn btn-info" href="{{ route('products.show', $product->id)}}">Show</a>
            <a class="btn btn-primary" href="{{ route('products.edit', $product->id)}}" >Edit</a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
      </tr>
@endforeach
    </tbody>
  </table>

@endsection