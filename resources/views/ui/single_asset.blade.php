@extends("common.default")

@section('content')
<table class="table">
	<thead>
		<th>Id</th>
		<th>Serial Number</th>
		<th>Site</th>
		<th>Condition</th>
		<th>Asset Type</th>
		<th>Manufacturer</th>
		<th>Vendor Number</th>
		<th>Location</th>
		<th>Model</th>
		<th>Asset Tag</th>
		<th>Additional Info</th>
		<th>Asset Type Description</th>
		<th>Last Updated</th>
		<th>Added On</th>
</thead>
	<tbody>
		<tr>
			<td>{{$asset->id}}</td>
			<td>{{$asset->serial_number}}</td>
			<td>{{$asset->site}}</td>
			<td>{{$asset->condition}}</td>
			<td>{{$asset->asset_type}}</td>
			<td>{{$asset->manufacturer}}</td>
			<td>{{$asset->vendor_number}}</td>
			<td>{{$asset->location}}</td>
			<td>{{$asset->model}}</td>
			<td>{{$asset->asset_tag or "No Tag"}}</td>
			<td>{{$asset->additional_info}}</td>
			<td>{{$asset->asset_type_desc}}</td>
			<td>{{$asset->updated_at}}</td>
			<td>{{$asset->created_at}}</td>

		</tr>
	</tbody>
</table>
@stop