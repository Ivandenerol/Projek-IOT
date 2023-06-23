@extends('layouts.template')

@section('pages')
<div class="xs-pd-20-10 pd-ltr-20">
    <div class="page-header">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="title">
                    <h4> REKAP KERUSAKAN BOX </h4>
                </div>
            </div>
        </div>
    </div>
        <form action="search_date" method="POST">
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
                            <th>Jumlah Kerusakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i=1 @endphp
				        @foreach($rekapBox as $rb)
                        <tr>
                            <td class="table-plus">{{ $i++ }}</td>
                            <td>{{$rb->tanggal}}</td>
                            <td>{{$rb->total}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

</div>

<script>
    $(document).ready(function() {
        $('#datatables').DataTable([
            pageLength: 25,
            responsive: true,
            dom: '<"html5buttons"B>ITfgitp',
            buttons:[
                {extend: 'copy'},
                {extend: 'csv'},
                {extend: 'pdf', title: 'ExampleFile'},

                {extend: 'print', 
                customize:function (win){
                    $(win.document.body).addClass('white-bg');
                    $(wim.document.body).css('font-size', '10px');

                    $(win.document.body).find('table')
                    .addClass('compact')
                    .css('font-size', 'inherit');
                }
                }
            ]
        ])
    })
</script>

@endsection