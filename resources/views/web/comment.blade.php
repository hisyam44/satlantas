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
                            <th>Kontak</th>
                            <th>Kritik atau Saran</th>
                            <th>Dikirim</th>
 							<th>Action</th>
						 </tr>
					</thead>
					<tbody>
					@foreach($comments as $comment)
 						<tr>
                            <td>{{ $comment->user->name }}</td>
                            <td>{{ $comment->user->phone }}<br>{{ $comment->user->address }}</td>
                            <td>{{ $comment->comment }}</td>
                            <td>{{ $comment->created_at->diffForHumans() }}</td>
                            <td>
                                <form action="{{ url('/comment/'.$comment->id) }}" method="post">
                                    <input type="hidden" name="_method" value="delete">
                                    <input type="hidden" name="id" value="{{ $comment->id }}">
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
