@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            @include('keluarga._detail')

        </div>

        <div class="col-lg-12">
            @include('keluarga.anggota.index')
        </div>
    </div>
@endsection
