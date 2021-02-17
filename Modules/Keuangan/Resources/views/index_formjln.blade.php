@extends('keuangan::layouts.main')
@section('header')
@component('components.header')
@slot('title')
    <i class="fas fa-id-card"></i> Pengajuan Form JLN
@endslot
@slot('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
@endslot
@endcomponent
@endsection
@section('content')

<div class="container-fluid">
    {{-- @component('components.card')
    @slot('header')
        Manajemen Form JLN
    @endslot
    @slot('body')
        This view is loaded from module: {!! config('keuangan.name') !!}
    @endslot
    @endcomponent --}}
    <div class="row justify-content-md-center">
        <div class="col-md-10">
            <div class="cardo">
                <div class="cardo-img"> 
                    <img src="https://cdn.dribbble.com/users/13449/screenshots/12078823/downloads/the_valley.png" />
                    <div class="card-title title-white col-md-12">
                        <p>Manual</p>
                    </div>
                    <div class="cardo-body col-md-12">
                        <div class="progress cardo-progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                        </div> 
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <br>
            <hr class="hr-text" data-content="ATAU">
        </div>
        <div class="col-md-10">
            <div class="cardo">
                <div class="cardo-content">
                    <div class="card-title title-black">
                        <p>Import</p>
                    </div>
                    <div class="cardo-body">
                        <form action="{{ route('item.upload.post') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group col-md-12">
                                <label for="exampleInputFile">Import File</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="file" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <input type="submit" value="Upload" class="input-group btn btn-primary">
                                    </div>
                                </div>
                                <br>
                                <p>Unduh file template <a href="#">disini</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
