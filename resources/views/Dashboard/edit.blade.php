
@extends('Dashboard.layouts.main')
@section('fahri')
<div class="row justify-content-center">
    <div class="btn btn-outline-light text-light col-md-5 border-0">
        <main class="form-registration">
            <h1 class="h3 fw-normal text-center text-dark"><font face="algerian">Absensi Mahasiswa</font></h1>
            <form action="{{ url('absen/'.$model->id) }}" method="post" class="">
                @csrf
                <input type="hidden" name="_method" value="PATCH">
                <div class="form-floating">
                    <label for="fakultas"><font face="algerian"> Fakultas </font></label>
                     <select id="fakultas" name="fakultas_id" class="form-control">
                        <option value="1">SISTEM INFORMASI</option> 
                        <option value="2">TEHNIK INFORMATIKA</option>
                    </select>
                </div>
                <div class="form-floating">
                    <label for="Nama"><font face="algerian"> Nama </font></label>
                    <input type="text" class="form-control" name="name" placeholder="Nama" value="{{ $model->name }}" autocomplete="off">
                </div>
                <div class="form-floating">
                    <label for="Email"><font face="algerian"> Email </font></label>
                    <input type="Email" class="form-control " name="email" placeholder="Email" value="{{ $model->email }}" autocomplete="off">
                </div>
                <div class="form-floating">
                    <label for="Nim"><font face="algerian"> Nomor Induk Mahasiswa </font></label>
                    <input type="text" class="form-control" name="nim" placeholder="Nomor Induk Mahasiswa" value="{{ $model->nim }}" autocomplete="off">
                </div>
                <div class="form-floating">
                    <label for="fakultas"><font face="algerian"> Kelas </font></label>
                     <select id="fakultas" name="kelas_id" class="form-control">
                        <option value="1">TI.V.1</option> 
                        <option value="2">TI.V.2</option>
                        <option value="3">SI.V.1</option> 
                        <option value="4">SI.V.2</option>
                    </select>
                </div>
                <div class="form-floating">
                    <label for="tgl"><font face="algerian"> Tanggal Absensi </font></label>
                    <input type="date" class="form-control" name="tanggal_absen"  id="tgl" autocomplete="off">
                </div>
                <button class="w-50 btn btn-outline-primary mt-1" type="submit"><font face="algerian">Update</font></button>
            </form>
        
        </main>
    </div>
</div>
@endsection

    

    


