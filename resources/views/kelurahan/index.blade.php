@extends('dashboard.main')

@section('konten')

<div class="content text-center">
<div class="row">
    <div class="col-12">
        <div class="card">
        <div class="card-header">
          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

              <div class="input-group-append">
                <button type="submit" class="btn btn-default">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0 text-center">
          <table class="table table-hover text-nowrap table-bordered">
            <thead class="bg-warning">
              <tr>
                <th>Kelurahan</th>
                <th>Kecamatan</th>
                <th>Kabupaten</th>
                <th colspan="2">Opsi</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($datas as $key=>$value)
                <tr>
                    <td>{{ $value->kelurahan }}</td>
                    <td>{{ $value->kecamatan }}</td>
                    <td>{{ $value->kabupaten }}</td>
                    <td><a style="font-size: 10px" class="btn btn-success" href="{{url('kelurahan/'.$value->id.'/edit')}}"><i class="bi bi-pencil-fill"></i></a></td>
                        <td><form action="{{url('kelurahan/'.$value->id)}}" method="POST">
                        @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button style="font-size: 10px" class="btn btn-danger" type="submit" onclick="return confirm('Apakah yakin kelurahan {{$value -> kelurahan}} dihapus?')"><i class="bi bi-trash3-fill"></i></button>
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
