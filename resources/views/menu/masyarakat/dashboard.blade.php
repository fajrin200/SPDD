@extends('layout.main')

@section('content')

        <div class="alert alert-success" role="alert">
            <h3><i class="nc-icon nc-time-alarm"></i>&nbsp;Pengumuman</h3>
                <hr>
                <p class="p-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab nulla iusto maiores esse quis temporibus hic illo delectus nostrum molestias, fugiat non impedit doloremque laboriosam in minus, illum iste deleniti!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente animi itaque laboriosam cupiditate saepe dicta eveniet delectus quasi quod ad esse repellat, molestias praesentium cumque labore a recusandae corporis ullam?
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur natus ex facilis expedita qui consectetur minus unde voluptates consequuntur fugit assumenda aliquid soluta quae eligendi, quisquam accusantium! Qui, deleniti obcaecati.</p>

        </div>
        <br>
        <div class="alert alert-info" role="alert">
            <h3><i class="nc-icon nc-bulb-63"></i>&nbsp;Informasi</h3>
                <hr>
                <p class="p-2">

                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab nulla iusto maiores esse quis temporibus hic illo delectus nostrum molestias, fugiat non impedit doloremque laboriosam in minus, illum iste deleniti!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente animi itaque laboriosam cupiditate saepe dicta eveniet delectus quasi quod ad esse repellat, molestias praesentium cumque labore a recusandae corporis ullam?
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur natus ex facilis expedita qui consectetur minus unde voluptates consequuntur fugit assumenda aliquid soluta quae eligendi, quisquam accusantium! Qui, deleniti obcaecati.
                </p>
      </div>

      <br>
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
