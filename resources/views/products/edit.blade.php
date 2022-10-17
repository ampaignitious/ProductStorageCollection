@extends('products.layout')
@section('content')

<div class="row mt-4">
    <div class="col-4">
        <h2>Edit product</h2>
    </div>
    <div class="col-4"></div>
    <div class="col-4">
        <a class="btn btn-primary" href="{{ route('products.index')}}">Back</a>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong>There was some problems with your inputs.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('products.update', $product->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="Name">Name</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Enter product name" value="{{ $product->name}}">
    </div>
    <div class="form-group">
        <label for="Name">Details</label>
        <textarea class="form-control" name="detail" id="details" style="height: 150px" value="{{ $product->detail }}"></textarea>      
    </div>
      <br>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection