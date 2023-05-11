@extends('admin.main')


@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        </div>


        <a href="/admin/create_user" class="btn btn-primary">Tambah user</a>
        <br><br>

        @if (session('status_user'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>
                    Berhasil!
                </strong>
                {{ session('status_user') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @elseif (session('update_status_user'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>
                    Berhasil!
                </strong>
                {{ session('update_status_user') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @elseif (session('delete_status_user'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>
                    Berhasil!
                </strong>
                {{ session('delete_status_user') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <br><br>

        <!-- Content Row -->
        <div class="row">
            <!-- Content Column -->
            <div class="col mb-4">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">user_role</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($users as $user)
                            <tr>
                                <th scope="row">{{ $i }}</th>
                                <td>{{ $user->name }}</td>
                                <td class="col-lg-3">{{ $user->email }}</td>
                                <td class="col-lg-3">{{ $user->user_role }}</td>
                                {{-- <td><img src="{{asset('img/'. $post->image)}}" ></td> --}}
                                <td>
                                    <div class="row">
                                        <div class="col-6">
                                            <a href="{{ route('users.edit', ['id' => $user->id]) }}"
                                                class="btn btn-warning">Edit</a>
                                        </div>
                                        <div class="col-6">
                                            <form action="{{ route('users.deleteuy', ['id' => $user->id]) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" type="submit" 
                                                    onclick="return confirm('Yakin mau menghapus')">Hapus</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @php $i++; @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
