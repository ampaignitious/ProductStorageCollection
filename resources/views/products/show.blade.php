@extends('products.layout')
@section('content')


<div class="row mt-4">
    <div class="col-6">
        <h2>Show Product</h2>
    </div>
    <div class="col-6">
        <a href="{{ route('products.index')}}" class="btn btn-primary">Back</a>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="form-group">
            <strong>Name:</strong>
            {{ $product->name}}
        </div>
    </div>
        <div class="col-12">
            <div class="form-group">
                <strong>Details:</strong>
                {{ $product->detail}}
            </div>
        </div>
</div>

@endsection