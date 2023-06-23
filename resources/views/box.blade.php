@extends('layouts.template')

@section('pages')
    <div class="xs-pd-20-10 pd-ltr-20">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>RETURN BOX</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="container px-0">
            <div class="row">
                <div class="col-md-4 mb-30">
                    <div class="card-box pricing-card mt-30 mb-30" style="background-color: #1b3133; cursor: pointer;">
                        <div class="pricing-icon">
                            <img src="vendors/images/package.png" style="width: 80px;" alt="" />
                        </div>
                        <div class="price-title" style="color: #fff;">Return Box</div>
                        <div class="pricing-price" style="color: #fff;">{{ $totalreturn }}</div>
                        <div class="text" style="color: #fff;">{{ $tgl }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection