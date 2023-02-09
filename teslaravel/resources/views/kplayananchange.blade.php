@extends('layouts.main')

@section('container')
    <h2 style="text-align: center"> Mengubah Data Layanan </h2>
    <center>
    <div class="card mt-4" style="width: 30rem;">
        <div class="card-body">
          <table class="table table-striped">
            <div class="row">
                <form id="edit_layanan" action="{{ $data->id }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-12">
                        <label class="form-label">Kategori</label>
                        <select class="form-select" name="kategori" aria-label="Default select example">
                            <option selected>{{ $data->kategori }}</option>
                            <option value="Hair Treatment">Hair Treatment</option>
                            <option value="Nail Treatment">Nail Treatment</option>
                            <option value="Body Treatment">Body Treatment</option>
                        </select>
                    </div>
                    <div class="col-md-12 mt-2">
                        <label class="form-label">ID Kategori</label>
                        <select class="form-select" name="id_kategori" aria-label="Default select example">
                            <option selected>{{ $data->id_kategori }}</option>
                            <option value="HRT001">HRT</option>
                            <option value="NLT001">NLT</option>
                            <option value="BDT001">BDT</option>
                        </select>
                    </div>
                    <div class="col-md-12 mt-2">
                        <label>ID Layanan</label>
                        <input type="text" name="id_layanan" class="form-control" placeholder="ID Layanan" value="{{ $data->id_layanan }}">
                    </div>
                    <div class="col-md-12 mt-2">
                        <label>Nama Layanan</label>
                        <input type="text" name="nama_layanan" class="form-control" placeholder="Nama Layanan" value="{{ $data->nama_layanan }}">
                    </div>
                    <div class="col-md-12 mt-2">
                        <label>Harga</label>
                        <input type="text" name="harga" class="form-control" placeholder="Harga Layanan" value="{{ $data->harga }}">
                    </div>
                    <p class="card-text">Anda akan mengubah layanan.</p>
                    <div class="container">
                      <div class="row">
                        <div class="col">
                          <a href="/layanan/admin" class="btn btn-danger">Back</a>
                        </div>
                        <div class="col">
                          <button class="btn btn-warning">Save</button>
                        </div>
                      </div>
                    </div>
                </form>
            </div>
          </table>
        </div>
      </div>
    </center>
@endsection
