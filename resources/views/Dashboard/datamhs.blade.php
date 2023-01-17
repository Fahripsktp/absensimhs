
@extends('Dashboard.layouts.main')
@section('fahri')
        <center>
            <a href="/absensimhs" class="w-25 btn btn-outline-primary btn-success text-dark">Tambah</a>
            <a href="#" class="w-25 btn btn-outline-success btn-primary text-dark">Download</a>
        </center>
<table align="center" class="table-sm table-bordered mt-3">
        <tr align="center">
            <th>fakultas</th>
            <th>name</th>
            <th>email</th>
            <th>nim</th>
            <th>kelas</th>
            <th>Tanggal Absen</th>
            <th colspan="2">Aksi</th>
        </tr>
    @foreach ($datas as $key=>$value)

    <tr align="center">
        <td>{{ $value->fakultas->name }}</td>
        <td>{{ $value->name }}</td>
        <td>{{ $value->email }}</td>
        <td>{{ $value->nim }}</td>
        <td>{{ $value->kelas->name }}</td>
        <td>{{ $value->tanggal_absen }}</td>
        <td><a href="{{ url('absen/'.$value->id.'/edit') }}" class="btn btn-info">Upgrade</a></td>
        <td>
            <form action="{{ url('absen/'.$value->id) }}" method="POST">
                @csrf
                <input type="hidden" name="_method" value="DELETE">
                <button class="text-dark btn btn-danger" type="submit">Delete</button>
            </form>
        </td>
    </tr>
        
    @endforeach
</table>
    
@endsection

    

    


