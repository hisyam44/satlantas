@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">{{ $accident->title }}</div>

                <div class="panel-body">
                    <div>{{ $accident->description }}</div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-body">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel" style="height: 300px;overflow: hidden;">
                        <div class="carousel-inner">
                        @for($i=0;$i<count($accident->photos);$i++)
                            <div class="item {{ $i == 0 ? 'active' : '' }}">
                                <img src="{{ $accident->photos[$i]->photo }}" class="img img-thumbnail">
                            </div>
                            
                        @endfor
                        </div>
                    </div>
                    <table class="table">
                        <tr>
                            <th colspan="2">Identitas Pelapor</th>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>{{ $accident->user->name }}</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>{{ $accident->user->address }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
