@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="pull-right"><a class="btn btn-success" href="{{ url('/place/create') }}">Tambahkan Informasi Umum</a></div>
				<table class="table">
 					<thead>
 						<tr>
 							<th>Nama</th>
                            <th>Photo</th>
                            <th>Alamat</th>
                            <th>Deskripsi</th>
 							<th colspan="2">Action</th>
						 </tr>
					</thead>
					<tbody>
					@foreach($places as $place)
 						<tr>
 							<td>{{ $place->name }}</td>
                            <td>
                                <div style="width: 100px;height: 100px;overflow: hidden;">
                                    <img src="{{ $place->photo }}" class="img img-thumbnail"></td>
                                </div>
                            <td>{{ $place->address }}</td>
                            <td>{{ $place->description }}</td>
                            <td>
                                <a class="btn btn-success" href="{{ url('/place/'.$place->id.'/edit') }}">Edit</a>
                            </td>
                            <td>
                                <form action="{{ url('/place/'.$place->id) }}" method="post">
                                    <input type="hidden" name="_method" value="delete">
                                    <input type="hidden" name="id" value="{{ $place->id }}">
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                            </td>
 						</tr>
                    @endforeach
 					</tbody>
 				</table>
            </div>
        </div>
    </div>
</div>
@endsection
