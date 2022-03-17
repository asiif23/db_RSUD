@extends('dashboard.main')

@section('konten')

<div class="content">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <form class="forms-sample" action="{{url('pasien/'.$pasien->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_method" value="PATCH">

                  <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input name="nama" type="text" class="form-control" placeholder="Masukkan Nama Lengkap" value="{{$pasien->nama}}">
                  </div>
                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input name="alamat" type="text-area" class="form-control" id="alamat" value="{{$pasien->alamat}}" placeholder="Masukkan alamat sesuai KTP" minlength="10">                  </div>
                  <div class="form-group">
                    <label for="noHp">No HP</label>
                    <input name="noHp" type="number" class="form-control" id="noHp" value="{{$pasien->noHp}}">
                  </div>
                  <div class="form-group">
                    <label for="rtRW">Rt/Rw</label>
                    <input name="rtRW" type="text" class="form-control" value={{ $pasien->rtRW }} id="rtRW" placeholder="Contoh Penulisan 005/001" pattern="[0-9]{3}/[0-9]{3}">
                  </div>
                  <div class="form-group">
                    <label for="kelurahan">Kelurahan</label>
                    <input name="Kelurahan" type="address" class="form-control" id="kelurahan" placeholder="" value={{ $pasien->Kelurahan }}>
                  </div>
                  <div class="form-group">
                    <label for="tanggalLahir">Tanggal Lahir</label>
                    <input name="tanggalLahir" type="date" class="form-control" id="tanggalLahir" value={{ $pasien->tanggalLahir }}>
                  </div>
                  <div class="form-group">
                    <label for="exampleSelectGender">Jenis Kelamin</label>
                      <select name="jenisKelamin" class="custom-select rounded-0">
                        <option selected="disabled">Pilih salah satu</option>
                        <option value="Pria" @if($pasien->jenisKelamin=='Pria') selected @endif>Pria</option>
                        <option value="Wanita" @if($pasien->jenisKelamin=='Wanita') selected @endif>Perempuan</option>
                      </select>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Perbarui</button>
                  <button class="btn btn-light">Batal</button>
                </form>
              </div>
            </div>
          </div>
    </div>
</div>
@endsection
