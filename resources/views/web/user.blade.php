@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="pull-right"><a class="btn btn-success" href="{{ url('/user/create') }}">Tambahkan User Admin</a></div>
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
                    <tr>
                        <td colspan="5" class="text-center"><h4>Daftar Admin</h4></td>
                    </tr>
                    @foreach($admins as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->address }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>
                                <form action="{{ url('/user/'.$user->id) }}" method="post">
                                    <input type="hidden" name="_method" value="delete">
                                    <input type="hidden" name="id" value="{{ $user->id }}">
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    <tr>
                        <td colspan="5" class="text-center"><h4>Daftar Pengguna</h4></td>
                    </tr>
					@foreach($users as $user)
 						<tr>
 							<td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->address }}</td>
                            <td>{{ $user->phone }}</td>
 							<td>
                                <form action="{{ url('/user/'.$user->id) }}" method="post">
                                    <input type="hidden" name="_method" value="delete">
                                    <input type="hidden" name="id" value="{{ $user->id }}">
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
