@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="pull-right"><a class="btn btn-success" href="{{ url('/regident/create') }}">Tambahkan Regident</a></div>
				<table class="table">
 					<thead>
 						<tr>
 							<th>Judul</th>
                            <th>Link</th>
                            <th>Deskripsi</th>
 							<th colspan="2">Action</th>
						 </tr>
					</thead>
					<tbody>
					@foreach($regidents as $regident)
 						<tr>
 							<td>{{ $regident->title }}</td>
                            <td>{{ $regident->link }}</td>
                            <td>{{ $regident->description }}</td>
                            <td>
                                <a class="btn btn-success" href="{{ url('/regident/'.$regident->id.'/edit') }}">Edit</a>
                            </td>
                            <td>
                                <form action="{{ url('/regident/'.$regident->id) }}" method="post">
                                    <input type="hidden" name="_method" value="delete">
                                    <input type="hidden" name="id" value="{{ $regident->id }}">
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
