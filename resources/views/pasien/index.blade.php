@extends('dashboard.main')

@section('konten')

<div class="card-header">
    <div class="row">
        <div class="col-sm-12 col-md-6">
            <div class="dt-buttons btn-group flex-wrap">
                <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0" aria-controls="example1" type="button">
                    <span>Copy</span>
                </button>
                <button class="btn btn-secondary buttons-csv buttons-html5" tabindex="0" aria-controls="example1" type="button">
                    <span>CSV</span>
                </button>
                <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0" aria-controls="example1" type="button">
                    <span>Excel</span>
                </button>
                <button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0" aria-controls="example1" type="button">
                    <span>PDF</span>
                </button>
                <button class="btn btn-secondary buttons-print" tabindex="0" aria-controls="example1" type="button">
                    <span>Print</span>
                </button>
            </div>
        </div>
    </div>
</div>
<div class="content text-center">
    <div class="row">
        <div class="col-12">
            <div class="card">
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap table-bordered">
            <thead class="bg-warning">
              <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No Handphone</th>
                <th>Rt/Rw</th>
                <th>Kelurahan</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th colspan="2">Opsi</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($pasien as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->noHp }}</td>
                    <td>{{ $item->rtRW }}</td>
                    <td>{{ $item->Kelurahan }}</td>
                    <td>{{ $item->tanggalLahir }}</td>
                    <td>{{ $item->jenisKelamin }}</td>
                    <td class="text-center" p-3><a style="font-size: 10px" class="btn btn-success" href="{{url('pasien/'.$item->id.'/edit')}}"><i class="bi bi-pencil-fill"></i></a></td>
                        <td><form action="{{url('pasien/'.$item->id)}}" method="POST">
                        @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button style="font-size: 10px" class="btn btn-danger" type="submit" onclick="return confirm('Apakah yakin Pasien dengan nama {{$item -> nama}} dihapus?')"><i class="bi bi-trash3-fill"></i></button>
                        </form>
                        </td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
</div>
          @endsection
