@extends('admin.main')


@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        </div>


        <a href="/admin/create" class="btn btn-primary">Tambah Postingan</a>
        <br><br>

        @if (session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>
                    Berhasil!
                </strong>
                {{ session('status') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @elseif (session('update_status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>
                    Berhasil!
                </strong>
                {{ session('update_status') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @elseif(session('delete_status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>
                    Berhasil!
                </strong>
                {{ session('delete_status') }}
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
                            <th scope="col">Title</th>
                            <th scope="col">Excerpt</th>
                            <th scope="col">content</th>
                            <th scope="col">Image</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($posts as $post)
                            <tr>
                                <th scope="row">{{ $i }}</th>
                                <td>{{ $post->title }}</td>
                                <td class="col-lg-3">{{ $post->excerpt }}</td>
                                <td class="col-lg-3">{{ $post->konten }}</td>
                                {{-- <td><img src="{{asset('img/'. $post->image)}}" ></td> --}}
                                <td>
                                    @if (filter_var($post->image, FILTER_VALIDATE_URL))
                                        <img height="100px" width="100px" src="{{ $post->image }}" alt="">
                                    @else
                                        <img height="100px" width="100px" src="{{ asset('img/' . $post->image) }}"
                                            alt="">
                                    @endif
                                    {{-- <img src="{{ $post->image }}" width="200px"> --}}
                                </td>
                                <td>
                                    <div class="row">
                                        <div class="col-6">
                                            <a href="{{ route('posts.edit', ['id' => $post->id]) }}"
                                                class="btn btn-warning">Edit</a>
                                        </div>
                                        <div class="col-6">
                                            <form action="{{ route('posts.delete', ['id' => $post->id]) }}" method="POST">
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
