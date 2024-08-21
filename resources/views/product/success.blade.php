@extends('layouts.app')
@section("title", "Product Created")
@section('content')
<div class="container">
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    <a href="{{ route('product.index') }}" class="btn btn-primary">Go to Products</a>
</div>
@endsection
