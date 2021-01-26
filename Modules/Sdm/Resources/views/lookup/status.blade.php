@extends('sdm::layouts.main')
@section('header')
@component('components.header')
@slot('title')
Data Status Kepegawaian
@endslot
@slot('breadcrumb')
<li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
<li class="breadcrumb-item"><a href="{{  url('/sdm') }}">Manajemen SDM</a></li>
<li class="breadcrumb-item">Daftar Status Kepegawaian</li>
@endslot
@endcomponent
@endsection
@section('content')
<div class="container-fluid">
    <div class="card card-outline card-secondary">
        <div class="card-header border-0">
            <h3 class="card-title">Daftar Status Kepegawaian</h3>
        </div>
        <div class="card-body table-responsive p-0">
            <table class="table table-hover table-striped table-bordered table-sm table-valign-middle">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col" style="width:10%;text-align:center;">Kode</th>
                        <th scope="col">Uraian</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($status as $row)
                    <tr>
                        <th scope="row">{{ $row->status_id }}</th>
                        <td>{{ $row->uraian }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <div class="float-right d-none d-sm-inline">
                Menampilkan {{$status->count()}} dari {{ $status->total() }} data.
            </div>
            {{ $status->links() }}
        </div>
    </div>
</div>
@endsection
