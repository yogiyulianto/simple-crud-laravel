<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Data employee</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
    <br />
    <a href="{{route('employee.create')}}" class="btn btn-primary">Tambah</a><br><br>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nama Lengkap</th>
        <th>Email</th>
        <th>Kota Kelahiran</th>
        <th>Tanggal Kelahiran</th>
        <th>Gender</th>
        <th>Alamat</th>
        <th>Nomor Telepon</th>
        <th>Password</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>

      @foreach($employees as $employee)
      <tr>
        <td>{{$employee['id']}}</td>
        <td>{{$employee['name']}}</td>
        <td>{{$employee['email']}}</td>
        <td>{{$employee['born_city']}}</td>
        <td>{{$employee['born_date']}}</td>
        <td>{{$employee['gender']}}</td>
        <td>{{$employee['address']}}</td>
        <td>{{$employee['phone_number']}}</td>
        <td>{{$employee['password']}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html>
