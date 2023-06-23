@extends('layouts.template')

@section('pages')
<div class="page-header mt-15">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="title">
                <h4>FORM BOX</h4>
            </div>
        </div>
    </div>
   <br/>
</div>

<form action="/formbox" method="POST" onsubmit="handleSubmit(event)">
    {{ csrf_field() }}
    <div class="form-group row">
        <label class="col-sm-12 col-md-2 col-form-label">Input Box</label>
        <div class="col-sm-12 col-md-10">
            <input
                name="jumlah_box"
                class="form-control @error('jumlah_box') is-invalid @enderror"
                value="{{ old('jumlah_box') }}"
                type="number"
                placeholder="Masukan Jumlah Box"
                id="inputbox"
            />
            @error('jumlah_box')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Date</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" value="{{ old('tanggal') }}" placeholder="Select Date" type="date" name="tanggal">
            @error('tanggal')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
		</div>
	</div>
    <div class="form-group">
        <button type="submit" class="btn btn-outline-primary" style="width: 130px">Simpan Data</button>
    </div>
</form>
@endsection