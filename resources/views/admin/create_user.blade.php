@extends('admin.main')


@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah user</h1>
        </div>

        <a href="/admin/postingan" class="btn btn-primary">Kembali</a>
        <br><br>

        <!-- Content Row -->
        <div class="row">
            <!-- Content Column -->
            <div class="col-10">

                <form action="{{__('/admin/store_user')}}" method="POST" enctype="multipart/form-data" >
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">nama</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" value="{{old('name')}}" name="name" required>
                        @error('name')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{old('email')}}" name="email" required>
                        @error('email')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="role" class="form-label">User Role</label>
                        <input type="text" class="form-control @error('role') is-invalid @enderror" id="role" value="{{old('role')}}" name="role" required>
                        @error('role')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" value="{{old('password')}}" name="password" required>
                        @error('password')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
@endsection
