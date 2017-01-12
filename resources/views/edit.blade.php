@extends('layout')
@section('content')

<h2>Edit Items</h2>
<form method="post" action="{{url('item/update')}}" enctype="multipart/form-data">
{{csrf_field()}}
<div class="form-group">
<label>Item Name</label>
<input type="text" name="title" placeholder="Title" id="title" class="form-control" value="{{$record['title'] }}">
</div>
<div class="form-group">
<label>Price</label>
<input type="text" name="price" id="price" placeholder="Price" class="form-control"  value="{{$record['price'] }}">
</div>
<div class="form-group">
<label>Stock</label>
<input type="text" name="stock" id="stock" placeholder="Stock" class="form-control"  value="{{$record['stock'] }}"></div>
<div class="form-group">
<label>Description</label>
<textarea placeholder="About the item..." class="form-control" name="description" id="description" > {{$record['description'] }}</textarea> </div>	
<div class="form-group">
<input type="submit" name="submit" value="save " id="submit" class="btn   btn-default">
<input type="hidden" name="id" value="{{$record['id']}}">
</div>

@endsection