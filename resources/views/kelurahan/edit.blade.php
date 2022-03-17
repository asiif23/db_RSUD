@extends('dashboard.main')

@section('konten')

<div class="content">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <form class="forms-sample" action="{{url('kelurahan/'.$model->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_method" value="PATCH">

                  <div class="form-group">
                    <label for="kelurahan">Kelurahan</label>
                    <input name="kelurahan" type="text" class="form-control" placeholder="Masukkan Kelurahan" value="{{$model->kelurahan}}">
                  </div>
                  <div class="form-group">
                    <label for="kecamatan">Kecamatan</label>
                    <input name="kecamatan" type="text" class="form-control" id="kecamatan" value="{{$model->kecamatan}}" placeholder="Masukkan alamat sesuai KTP" minlength="10">                  </div>
                  <div class="form-group">
                    <label for="kabupaten">Kabupaten</label>
                    <input name="kabupaten" type="text" class="form-control" id="nomorHp" value="{{$model->kabupaten}}">
                    <button type="submit" class="btn btn-primary mr-2">Perbarui</button>
                  <button class="btn btn-light">Batal</button>
                </form>
              </div>
            </div>
          </div>
    </div>
</div>
@endsection
