@extends('backend.layouts.app')

@section('content')


  <div class="container  shadow-sm my-5 px-0">
    
    <div class="bg-white p-5">
      <form action="{{ url('blog/edit/' . $blogs->id) }}" method="post" enctype="multipart/form-data">@csrf

        <div class="py-2">
          <a href="{{ url('blog/index') }}" class="text-decoration-none">
            <i class="fa-solid fa-backward fs-3 text-black"></i>
          </a>
        </div>

        {{-- blog image --}}
          <label  class="text-uppercase">Image: </label>
          <input type="file" class="form-control" name="image" value="{{ old('image') }}" />
          @error('image')
            <span class="text-danger">
              {{ $message }}
            </span>
          @enderror
        {{-- blog image --}}
          
        {{-- blog title --}}
          <label class="text-uppercase my-2">Blog Title: </label>
          <input type="text" class="form-control"  name="title" value="{{ $blogs->title }}" />
          @error('title')
            <span class="text-danger">
              {{ $message }}
            </span>
          @enderror
        {{-- blog title --}}
        
        {{-- Author title --}}
          <label class="text-uppercase my-2">Author: </label>
          <input type="text" class="form-control"  name="author" value="{{ $blogs->author }}" />
          @error('title')
            <span class="text-danger">
              {{ $message }}
            </span>
          @enderror
        {{-- Author title --}}

        {{-- blog content --}}
          <label class="text-uppercase my-3">Content: </label>
          <textarea class="form-control description" id="description"  name="message">{{ $blogs-> message }}</textarea>
          @error('message')
            <span class="text-danger">
              {{ $message }}
            </span>
          @enderror
        {{-- blog content --}}
          
        <button type="submit" class="btn btn-success text-uppercase mt-4">Update</button>
      </form>

    </div>
  </div>

  
  <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

  <script type="text/javascript">
      CKEDITOR.replace('description');
  </script>

@endsection


