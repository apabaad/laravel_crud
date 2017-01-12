@extends('layout')
@section('content')
<body>
<div class="container">
<h2>Item Page</h2>
<h3><a href="{{url('item/add')}}">Add Item</a></h3>

<table class="table" >
	<thead>
	<tr>
		<th>S.N</th>
		<th>Title</th>
		<th>Description</th>
		<th>Price</th>
		<th>Stock</th>
		<th colspan="2">Actions</th>
		
	</tr>
	</thead>
	<tbody>
		<?php
		foreach ($records as $key =>$record) { ?>
		<tr>
			<td><?php echo $key+1; ?></td>
			<td><?php echo "$record->title";?></td>
			<td><?php echo "$record->description"; ?></td>
			<td><?php echo "$record->price";?></td>
			<td><?php echo "$record->stock";?></td>
			<td><a href="{{url('item/edit/'.$record->id)}}">Edit
			<a href="{{url('item/delete/'.$record->id)}}" onclick="return conf();"> Delete</a>
			</td>
		</tr>
		
		<?php }
		?>
	</tbody>

</table>
</div>
<script type="text/javascript">
	function conf(){
		var result = confirm('Are you sure?');
		if(result){
			return true;
		} else {
			return false;
		}
	}
</script>

@endsection