@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body table-responsive">
                <table class="table table-hover table-dark">
                    <thead>
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Tanggal Pengaduan</th>
                          <th scope="col">NIK</th>
                          <th scope="col">Isi Laporan</th>
                          <th scope="col">Foto</th>
                          <th scope="col">Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>vivo</td>
                          <td>vivo</td>
                          <td>vivo</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Jacob</td>
                          <td>Thornton</td>
                          <td>Thornton</td>
                          <td>Thornton</td>
                          <td>Thornton</td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Jacob</td>
                          <td>Thornton</td>
                          <td>Thornton</td>
                          <td>Thornton</td>
                          <td>Thornton</td>
                        </tr>
                      </tbody>
                  </table>
            </div>
        </div>
    </div>
    {{-- <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h1>halo</h1>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h1>halo</h1>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h1>halo</h1>
            </div>
        </div>
    </div> --}}
</div>
@endsection