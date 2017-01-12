@extends('layout')

@section('content')

<h2>Add Items</h2>
<form method="post" action="{{url('item/add')}}" enctype="multipart/form-data">
<div class="form-group">
<label>Item Name</label>
<input type="text" name="title" placeholder="Title" id="title" class="form-control">
<div id="divtitle"></div>
</div>
<div class="form-group">
<label>Price</label>
<input type="text" name="price" id="price" placeholder="Price" class="form-control">
</div>
<div class="form-group">
<label>Stock</label>
<input type="text" name="stock" id="stock" placeholder="Stock" class="form-control"></div>
<div class="form-group">
<label>Description</label>
<textarea placeholder="About the item..." class="form-control" name="description" id="description"></textarea> </div>	
<div class="form-group">
<input type="submit" onclick="validate();" name="submit" value="save " id="submit" class="btn   btn-default">
</div>
<input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>

@endsection