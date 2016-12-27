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
 							<th>Type</th>
						 </tr>
					</thead>
					<tbody>
					@foreach($accidents as $accident)
 						<tr>
 							<td>{{ $accident->title }}</td>
 							<td>{{ $accident->type }}</td>
 						</tr>
                    @endforeach
 					</tbody>
 				</table>
            </div>
        </div>
    </div>
</div>
@endsection
