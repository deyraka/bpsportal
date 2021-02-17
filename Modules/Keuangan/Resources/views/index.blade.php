@extends('keuangan::layouts.main')
@section('header')
@component('components.header')
@slot('title')
<i class="fas fa-id-card"></i> Manajemen Keuangan
@endslot
@slot('breadcrumb')
<li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
@endslot
@endcomponent
@endsection
@section('content')
<div class="container-fluid">
    @component('components.card')
    @slot('header')
        Manajemen Keuangan
    @endslot
    @slot('body')
        This view is loaded from module: {!! config('keuangan.name') !!}
    @endslot
    @endcomponent
</div>
@endsection
