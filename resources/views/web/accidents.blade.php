@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
				<table class="table">
 					<thead>
 						<tr>
                            <th>Title</th>
                            <th>Tipe</th>
                            <th>Deskripsi</th>
                            <th>Dikirim</th>
 							<th colspan="2">Action</th>
						 </tr>
					</thead>
					<tbody>
					@foreach($accidents as $accident)
 						<tr class="{{ $accident->type }}">
 							<td>{{ $accident->title }}</td>
                            <td>{{ $accident->type }}</td>
                            <td>{{ $accident->excerpt }}</td>
                            <td>{{ $accident->created_at->diffForHumans() }}</td>
                            <td><a href="{{ url('/accident/'.$accident->id) }}" class="btn btn-success">Details</a></td>
 							<td>
                                <form action="{{ url('/accident/'.$accident->id) }}" method="post">
                                    <input type="hidden" name="_method" value="delete">
                                    <input type="hidden" name="id" value="{{ $accident->id }}">
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
