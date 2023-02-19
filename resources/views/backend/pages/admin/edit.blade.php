@extends('backend.layouts.app')

@section('content')
  <div class="p-5">
    <div class="card">
      <div class="card-header">
        <div>
          <span class="text-uppercase me-4">list of user</span>
          <button onclick="location.href='{{ url('admin/index') }}'" type="button" class="btn btn-warning">Back To Home</button>
        </div>
      </div>

      <div class="card-body">
        <form action="{{ url('admin/edit/' . $Users->id) }}" method="POST">@csrf
          <div class="row">

            <div class="col-12 mb-3">
              <label for="">Name: </label>
              <input type="text" class="form-control" required name="name" value="{{ $Users->name }}" />
              @error('name')
                <span class="text-danger">
                  {{ $message }}
                </span>
              @enderror
            </div>

            <div class="col-12 mb-3">
              <label for="">Email: </label>
              <textarea class="form-control description" id="email" required name="email">{{ $Users->email }}</textarea>
              @error('email')
                <span class="text-danger">
                  {{ $message }}
                </span>
              @enderror
            </div>
            
            <div class="col-12 text-right">
              <button type="submit" class="btn btn-success">Update info</button>
              
            </div>

          </div>
        </form>
        
      </div>

    </div>
  </div>
@endsection

