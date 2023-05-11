@extends('admin.main')


@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah postingan</h1>
        </div>

        <a href="/admin/postingan" class="btn btn-primary">Kembali</a>
        <br><br>

        <!-- Content Row -->
        <div class="row">
            <!-- Content Column -->
            <div class="col-10">

                <form action="{{__('/admin/store_post')}}" method="POST" enctype="multipart/form-data" >
                    @csrf
                    <input type="hidden" value="1" name="author_id">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" value="{{old('title')}}" name="title" required>
                        @error('title')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="excerpt" class="form-label">excerpt</label>
                        <textarea class="form-control @error('excerpt') is-invalid @enderror" id="excerpt"  name="excerpt" required>{{old('excerpt')}}</textarea>
                        
                        @error('excerpt')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="konten" class="form-label">konten</label>
                        <textarea class="form-control @error('konten') is-invalid @enderror" id="konten" name="konten" rows="10" required>{{old('konten')}}</textarea>
                        
                        @error('konten')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">image</label>
                        <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" value="{{old('image')}}" name="image" required>
                        
                        @error('image')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
@endsection
