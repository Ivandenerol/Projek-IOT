@extends('layouts.template')

@section('pages')
<div class="page-header mt-15">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="title">
                <h4>GLASS</h4>
            </div>
        </div>
    </div>
</div>
<div class="xs-pd-20-10 pd-ltr-20">
    <div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 mb-30">
                <div class="card-box pd-30 pt-10 height-100-p">
                    <h2 class="h4 mt-15">Kerusakan Gelas</h2>
                    <div class="browser-visits pt-20">
                        <ul>
                            <li class="d-flex flex-wrap align-items-center mt-lg-n3">
                                <div class="visit">
                                    <span class="badge badge-pill badge-light">@foreach ($data as $class_name => $count)
                                        <li>{{ $class_name }}: {{ $count }}</li>
                                        @endforeach
                                    </span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>			
            </div>
        </div>
    </div>
</div>
@endsection
