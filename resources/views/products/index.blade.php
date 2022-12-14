@extends('products.layout')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Kará Apresentão do Estoque </h2>
</div>
<div class="pull-right">
<a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
</div>
</div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered">
<tr>
<th>Name</th>
<th>Valor</th>
<th>quantidade</th>
<th>descricao</th>

<th width="280px">Action</th>
</tr>
@foreach ($products as $product)
<tr>
<td>{{ ++$i }}</td>
<td>{{ $product->name }}</td>
<td>{{ $product->valor }}</td>
<td>{{ $product->quantidade }}</td>
<td>{{ $product->descricao }}</td>

<td>
<form action="{{ route('products.destroy',$product->id) }}" method="POST">
<a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>
<a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger">Delete</button>
</form>
</td>
</tr>
@endforeach
</table>
<div> 
<a href= 'http://127.0.0.1:8000/home' type="button" class="btn btn-warning btn-lg btn-block">Home</a>
</div>
{!! $products->links() !!}
@endsection