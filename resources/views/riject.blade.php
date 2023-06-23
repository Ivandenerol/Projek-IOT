@extends('layouts.template')

@section('pages')
<div class="xs-pd-20-10 pd-ltr-20">
    <div class="page-header">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="title">
                    <h4>KERUSAKAN BOX</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="container px-0">
        <div class="row">
            <div class="col-md-4 mb-30">
                <div class="card-box pricing-card mt-30 mb-30" style="cursor: pointer;">
                    <div class="pricing-icon">
                        <img src="vendors/images/package.png" style="width: 80px;" alt="" />
                    </div>
                    <div class="price-title">Jumlah Box</div>
                    <div class="pricing-price">{{$riject}}</div>
                    <div class="text">{{ $date}}</div>
                </div>
            </div>  
        </div>
    </div>
</div>
@endsection