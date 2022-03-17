@extends('dashboard.main')

@section('konten')
    
<section class="content">
    <div class="row">
      <div class="col-md-6">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Data Pasien</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="inputName">Nama Lengkap</label>
              <input type="text" id="inputName" class="form-control">
            </div>
            <div class="form-group">
              <label for="inputDescription">Alamat</label>
              <textarea id="inputDescription" class="form-control" rows="4"></textarea>
            </div>
            <div class="form-group">
              <label for="inputStatus">Status Pernikahan</label>
              <select id="inputStatus" class="form-control custom-select">
                <option selected disabled>Select one</option>
                <option>Kawin</option>
                <option>Belum Kawin</option>
              </select>
            </div>
            <div class="form-group">
              <label for="inputStatus">Provinsi</label>
              <select id="inputStatus" class="form-control custom-select">
                <option selected disabled>Select one</option>
                <option>Jawa Barat</option>
                <option>Jawa Tengah</option>
                <option>Jawa Timur</option>
              </select>
              <label for="inputStatus">Kabupaten</label>
              <select id="inputStatus" class="form-control custom-select">
                <option selected disabled>Select one</option>
                <option>Semarang</option>
                <option>Boyolali</option>
                <option>Klaten</option>
              </select>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <div class="col-md-6">
        <div class="card card-secondary">
          <div class="card-header">
            <h3 class="card-title">Riwayat Penyakit</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="card-body">

            <div class="form-group">
              <label for="inputDescription">Keluhan Pasien</label>
              <input type="number" id="inputEstimatedBudget" class="form-control">
            </div>
            <div class="form-group">
              <label for="inputEstimatedBudget">Perkiraan Biaya</label>
              <input type="number" id="inputEstimatedBudget" class="form-control">
            </div>
            <div class="form-group">
              <label for="inputSpentBudget">Jumlah Antrian</label>
              <input type="number" id="inputSpentBudget" class="form-control">
            </div>
            <div class="form-group">
              <label for="inputEstimatedDuration">Perkiraan No.urut dipanggil</label>
              <input type="number" id="inputEstimatedDuration" class="form-control">
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <a href="#" class="btn btn-secondary">Batal</a>
        <input type="submit" value="Create new Project" class="btn btn-success float-right">
      </div>
    </div>
  </section>

@endsection