@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
				<table class="table">
 					<thead>
 						<tr>
 							<th>Nama</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>No.Telp</th>
 							<th>Action</th>
						 </tr>
					</thead>
					<tbody>
					@foreach($users as $user)
 						<tr>
 							<td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->address }}</td>
                            <td>{{ $user->phone }}</td>
 							<td><button class="btn btn-danger">Delete</button></td>
 						</tr>
                    @endforeach
 					</tbody>
 				</table>
            </div>
        </div>
    </div>
</div>
@endsection
