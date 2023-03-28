@extends('main.navbar')

@section('content')
    <section id="hero" class="bg-dark py-5">
        <div class="container">
            <div class="text-center text-white">
                <h1>SISWA</h1>
                <h4>Tambah Data Siswa</h4>
            </div>
        </div>
    </section>

    <section id="blog" class="mt-4">
        <div class="container">
            <div class="row mt-5 gy-4 justify-content-center">
                <div class="col-lg-10">
                    <div class="row mb-3">
                        <div class="col">
                            <h2>Add Siswa</h2>
                        </div>
                        <div class="col text-end">
                            <a href="{{ url('/siswa/tampil') }}" class="btn btn-warning">Back</a>
                        </div>
                    </div>
                    <form action="{{ url('/siswa/store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-2">
                            <label for="nama">Nama</label>
                            <select name="user" id="user" class="form-select">
                                <option value="">Silahkan Pilih</option>
                                @foreach ($user as $usr)
                                    <option value="{{ $usr->id }}">{{ $usr->nama }}</option>
                                @endforeach
                        </select>
                        </div>
                        <div class="form-group mb-2">
                            <label for="nis">NIS</label>
                            <input type="text" name="nis" id="nis" class="form-control" />
                        </div>
                        <div class="form-group mb-2">
                            <label for="kelas">Kelas</label>
                            <select name="kelas" id="kelas" class="form-select">
                                <option value="">Silahkan Pilih</option>
                                @foreach ($kelas as $kls)
                                    <option value="{{ $kls->id }}">{{ $kls->kelas }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat" id="alamat" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="no_telp">No.Telp</label>
                            <input type="text" name="no_telp" id="no_telp" class="form-control mb-2" />
                        </div>
                        <div class="form-group">
                            <label for="dibayarkan">SPP</label>
                            <select name="spp" id="spp" class="form-select">
                                <option value="">Silahkan Pilih</option>
                                @foreach ($spp as $sp)
                                    <option value="{{ $sp->id }}">{{ $sp->nominal }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mt-3 mb-5">
                            <button type="submit" class="btn btn-success">Add</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
