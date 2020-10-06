@extends('dashboard.layouts.admin_header_footer')
@section('content')
<div class="col-sm-6">
  <ol class="breadcrumb float-sm-left">
    <li class="breadcrumb-item"><a href="#">Add New User</a></li>
  </ol>
</div><!-- /.col -->
<table style="width:90%">
    <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Role</th>
    </tr>
    @foreach ($viewuserss as $item)
    <tr>
        <td>{{$item['name']}}</td>
        <td>{{$item['email']}}</td>
        <td>{{$item->role->name}}</td>
      </tr>
    @endforeach
  </table>



@endsection