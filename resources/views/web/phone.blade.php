@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="pull-right"><a class="btn btn-success" href="{{ url('/phone/create') }}">Tambahkan Nomer Panggilan Darurat</a></div>
				<table class="table">
 					<thead>
 						<tr>
 							<th>Nama</th>
                            <th>Phone</th>
 							<th colspan="2">Action</th>
						 </tr>
					</thead>
					<tbody>
					@foreach($phones as $phone)
 						<tr>
 							<td>{{ $phone->name }}</td>
                            <td>{{ $phone->phone }}</td>
                            <td>
                                <a class="btn btn-success" href="{{ url('/phone/'.$phone->id.'/edit') }}">Edit</a>
                            </td>
                            <td>
                                <form action="{{ url('/phone/'.$phone->id) }}" method="post">
                                    <input type="hidden" name="_method" value="delete">
                                    <input type="hidden" name="id" value="{{ $phone->id }}">
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
