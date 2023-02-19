@extends('backend.layouts.app')

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">

@section('content')

<div class="p-1 p-md-5">
  <div class="card">
    <div class="card-header d-flex aling-items-center">
      <div>
        <span class="text-uppercase">list of user</span>
      </div>
      
      <div class=" mx-3">
        <a href="{{ url('/register') }}" class="text-decoration-none">
          <i class="fa-solid fa-circle-user fs-3 text-black"></i>
        </a>
      </div>
    </div>
    <div class="card-body">
      <table class="table table-sm table-hover table-striped" id="example">

        <thead>
          <tr>
            <th ></th>
            <th class="text-center">Name</th>
            <th class="text-center">Email</th>
            <th></th>
          </tr>
        </thead>

        <tbody>
          @php
            $loop_div=0;
          @endphp
          @foreach ($Users as $User)
          <tr>

            <td>
              @php
                $loop_div++;
                echo $loop_div; 
              @endphp
            </td>

            <td >
              <div class="d-flex justify-content-center align-items-center py-3 ">
                {{ $User->name }}
              </div>
            </td>

            <td>
              <div class="d-flex justify-content-center">
                {{ $User->email }}
              </div>
            </td>
            
            <td>
              <div class="d-flex justify-content-center">
                <div class="mx-3">
                  <a class="btn btn-primary btn-block px-4" href="{{ url('admin/edit/' . $User->id) }}">Edit</a>
                </div>

                <form method="POST" action="{{ url('admin/delete/' . $User->id) }}">@csrf
                  <button class="btn btn-danger btn-block mb-2"> Delete </button>
                </form>
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>

      </table>
    </div>
  </div>
</div>

@endsection

<script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js" ></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js" ></script>

<script>
  $(document).ready(function () {
    $('#example').DataTable();
  });
</script>