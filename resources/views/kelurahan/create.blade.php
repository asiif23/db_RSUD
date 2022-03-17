@extends('dashboard.main')

@section('konten')

<div class="content">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <form class="forms-sample" action="{{url('kelurahan')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                  <div class="form-group">
                    <label for="nama">Kelurahan</label>
                    <input name="kelurahan" type="text" class="form-control" id="kelurahan" placeholder="Masukkan Kelurahan">
                  </div>
                  <div class="form-group">
                    <label for="kecamatan">Kecamatan</label>
                    <input name="kecamatan" type="text" class="form-control" id="kecamatan" placeholder="Masukkan kecamatan">
                  </div>
                  <div class="form-group">
                    <label for="kabupaten">Kabupaten</label>
                    <input name="kabupaten" type="text" class="form-control" id="kabupaten" placeholder="Masukkan Kabupaten">
                  </div>

                    <button type="submit" class="btn btn-primary mr-2" onsubmit="log::alert('Pasien Berhasil Input Data')">Input Data</button>
                </form>
              </div>
            </div>
          </div>
    </div>
</div>
@endsection
