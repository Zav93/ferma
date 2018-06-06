@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" align="center">ԽՈԶԱԲՈՒԾԱԿԱՆ ՖԵՐՄԱ</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div align="center">
                        <button type="button" class="btn btn-primary btn-lg">ԾՆԵԼԻՈՒԹՅՈՒՆ</button>
                        <button type="button" class="btn btn-primary btn-lg">ՎԱԿՑԻՆԱՑՄԱՆ ՊԼԱՆ</button>
                        <a href='animals'>
                            <button type="button" class="btn btn-primary btn-lg">ԾԱՎԱԼԱԹԵՐԹ</button>
                        </a>
                        <button type="button" class="btn btn-primary btn-lg">ՏԵՂԵԿՈՒԹՅՈՒՆՆԵՐ</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
