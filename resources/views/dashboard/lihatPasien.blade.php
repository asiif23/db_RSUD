@extends('dashboard/main')

@section('konten')
 
<section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Tabel Data Pasien</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Mobile</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($pasien as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->address }}</td>
                        <td>{{ $item->mobile }}</td>
                        <td>
                            <a href="{{ url('/pasien/' . $item->id) }}" title="View pasien"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                            <a href="{{ url('/pasien/' . $item->id . '/edit') }}" title="Edit pasien"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                            <form method="POST" action="{{ url('/pasien' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete pasien" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

  </section>

@endsection