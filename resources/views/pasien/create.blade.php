@extends('dashboard.main')

@section('konten')

<div class="content">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <form class="forms-sample" action="{{url('pasien')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                  <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input name="nama" type="text" class="form-control" id="exampleInputName1" placeholder="Masukkan Nama Lengkap">
                  </div>
                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input name="alamat" type="text" class="form-control" id="alamat" placeholder="Masukkan alamat sesuai KTP" minlength="10">                  </div>
                  <div class="form-group">
                    <label for="noHp">No HP</label>
                    <input name="noHp" type="number" class="form-control" id="nomorHp" placeholder="Masukkan Nomor WA yang Aktif">
                  </div>
                  <div class="form-group">
                    <label for="rtRW">Rt/Rw</label>
                    <input name="rtRW" type="text" class="form-control" id="rtRW" placeholder="Contoh Penulisan 005/001" pattern="[0-9]{3}/[0-9]{3}">
                  </div>
                  <div class="form-group">
                    <label for="kelurahan">Kelurahan</label>
                    <input name="Kelurahan" type="text" class="form-control" id="kelurahan" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="tanggalLahir">Tanggal Lahir</label>
                    <input name="tanggalLahir" type="date" class="form-control" id="tanggalLahir">
                  </div>
                  <div class="form-group ">
                    <label for="jenisKelaminr">Jenis Kelamin</label>
                      <select name="jenisKelamin" class="form-control rounded-0" id="exampleSelectGender">
                        <option selected="">Pilih salah satu</option>
                        <option value="Pria">Pria</option>
                        <option value="Wanita">Wanita</option>
                      </select>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Input Data</button>
                </form>
              </div>
            </div>
          </div>
    </div>
</div>
@endsection
