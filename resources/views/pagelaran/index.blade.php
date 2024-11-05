@extends('pages.dashboard')

@section('content')
    <div class="container-fluid">
        <h1>Pagelaran</h1>
        <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#createModal">
            Create
        </button>

        <div class="row">
            <table class="table table-bordered mt-4">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pagelaran as $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $data->title }}</td>
                            <td>
                                @if ($data->image)
                                    <img src="{{ Storage::url($data->image) }}" alt="Pagelaran Image" width="80px">
                                @else
                                    Tidak ada gambar
                                @endif
                            </td>
                            <td>
                                <button type="button" class="btn btn-warning waves-effect waves-light" data-toggle="modal"
                                    data-target="#editModal{{ $data->id }}">
                                    Edit
                                </button>
                                <button type="button" class="btn btn-danger waves-effect waves-light" data-toggle="modal"
                                    data-target="#deleteModal{{ $data->id }}">
                                    Delete
                                </button>
                            </td>
                        </tr>


                        {{-- MODAL EDIT --}}
                        <div id="editModal{{ $data->id }}" class="modal fade" tabindex="-1" role="dialog"
                            aria-labelledby="editModalLabel{{ $data->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="editModalLabel{{ $data->id }}">Edit Item</h4>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-hidden="true">×</button>
                                    </div>
                                    <form action="{{ route('pagelaran.update', $data->id) }}" enctype="multipart/form-data"
                                        method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="title">Title</label>
                                                <input type="text" id="title" name="title" class="form-control"
                                                    value="{{ old('title', $data->title) }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="image">Image</label>
                                                <input type="file" id="image" name="image" class="form-control"
                                                    value="{{ old('image', $data->image) }}">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary waves-effect"
                                                data-dismiss="modal">Close</button>
                                            <button type="submit"
                                                class="btn btn-primary waves-effect waves-light">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        {{-- MODAL DELETE --}}
                        <div id="deleteModal{{ $data->id }}" class="modal fade" tabindex="-1" role="dialog"
                            aria-labelledby="deleteModalLabel{{ $data->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="deleteModalLabel{{ $data->id }}">Confirm Delete
                                        </h4>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-hidden="true">×</button>
                                    </div>

                                    <div class="modal-body">
                                        <p>Apa anda yakin menghapus gambar "{{ $data->title }}"</p>
                                    </div>
                                    <div class="modal-footer">
                                        <form action="{{ route('pagelaran.destroy', $data->id) }}"
                                            enctype="multipart/form-data" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-secondary waves-effect"
                                                data-dismiss="modal">Close</button>
                                            <button type="submit"
                                                class="btn btn-primary waves-effect waves-light">Delete</button>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </tbody>
            </table>




            {{-- modal CREATE --}}
            <div id="createModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="createModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="createModalLabel">Create Item</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <form action="{{ route('pagelaran.store') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="title">Title</label>
                                    <input type="text" id="title" name="title" class="form-control"
                                        value="{{ old('title') }}">
                                </div>
                                <div class="mb-3">
                                    <label for="image">Image</label>
                                    <input type="file" id="image" name="image" class="form-control"
                                        value="{{ old('image') }}">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary waves-effect"
                                    data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
