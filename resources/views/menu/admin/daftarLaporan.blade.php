@extends('layout.main')

@section('content')
<div class="card">
    <div class="card-header">
      <h1 align="center">BERKAS PENDAFTARAN</h1>
    </div>
    <br>
    <div class="card-body">
      <table id="myTable">
          <thead>
              <th>Nama</th>
              <th>Pesan</th>
              <th>No. KK</th>
              <th>NIK</th>
              <th>Foto Usaha</th>
              <th>Status</th>
            </thead>
            <tbody>
                @foreach ($berkas as $b)
                <tr>
                    <td>{{$b->name_lengkap}}</td>
                    <td>{{$b->pesan}}</td>
                    <td>{{$b->nkk}}</td>
                    <td>{{$b->nik}}</td>
                    <td>{{$b->fotoUsaha}}</td>
                    <td>
                        <span class="btn btn-danger">Belum Disepakati</span>
                    </td>
                </tr>

                @endforeach
            </tbody>
      </table>

    </div>
</div>
@endsection
