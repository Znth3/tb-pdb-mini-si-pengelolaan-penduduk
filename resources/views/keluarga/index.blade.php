@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header"><i class="fa fa-align-justify"></i> Daftar Kartu Keluarga</div>
                <div class="card-body">
                    @include('keluarga._table')
                    {{ $keluarga->link() }}
                </div>
            </div>
        </div>
    </div>

@endsection
