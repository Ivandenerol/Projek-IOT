@extends('layouts.template')

@section('pages')
<div class="page-header mt-15">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="title">
                <h4>REKAP GLASS</h4>
            </div>
        </div>
    </div>
</div>
<div class="xs-pd-20-10 pd-ltr-20">

		<form action="filter" method="POST">
            @csrf
            <br>
            <div class="container">
                <div class="row">
                    <div class="container-fluid">
                        <div class="form-group row">
                            <label for="date" class="col-form-label col-sm-2">Data From</label>
                            <div class="col-sm-3">
                                <input type="date" class="form-control input-sm" id="fromDate" name="fromDate" required>
                            </div>
                            <label for="date" class="col-form-label col-sm-2">Data To</label>
                            <div class="col-sm-3">
                                <input type="date" class="form-control input-sm" id="toDate" name="toDate" required>
                            </div>
                            <div class="col-sm-2">
                                <button type="submit" class="btn" name="search" title="Search"><img src="vendors/images/Search.svg" alt="" style="width: 30px"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class="card-box mb-30">
            <div class="pd-20">

            </div>
            <div class="pb-20">
                <table class="table hover multiple-select-row data-table-export nowrap" id="datatables">
                    <thead>
                        <tr>
                            <th class="table-plus datatable-nosort">No</th>
                            <th>Tanggal</th>
                            <th>Jenis Kerusakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i=1 @endphp
				        @foreach($rekapGlass as $rg)
                        <tr>
                            <td class="table-plus">{{ $i++ }}</td>
                            <td>{{$rg->date_time}}</td>
                            <td>{{$rg->class_name}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
</div>
@endsection