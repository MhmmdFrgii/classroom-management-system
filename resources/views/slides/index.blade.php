@extends('pages.dashboard')

@section('content')
    <div class="container-fluid">
        <h1>Slides</h1>
        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#createSlide">
            Create
        </button>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table id="scroll-horizontal-datatable" class="table w-100 nowrap">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($slide as $data)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $data->title }}</td>
                                        <td>
                                            @if ($data->image)
                                                <img src="{{ Storage::url($data->image) }}" alt="Product Image"
                                                    width="80px">
                                            @else
                                                Tidak ada gambar
                                            @endif
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-warning waves-effect waves-light"
                                                data-toggle="modal" data-target="#editModal{{ $data->id }}">
                                                Edit
                                            </button>
                                            <button type="button" class="btn btn-danger waves-effect waves-light"
                                                data-toggle="modal" data-target="#deleteModal{{ $data->id }}">
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
                                                    <h4 class="modal-title" id="editModalLabel{{ $data->id }}">Edit Item
                                                    </h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-hidden="true">×</button>
                                                </div>
                                                <form action="{{ route('slides.update', $data->id) }}"
                                                    enctype="multipart/form-data" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-body">
                                                        <div class="mb-3">
                                                            <label for="title">Title</label>
                                                            <input type="text" id="title" name="title"
                                                                class="form-control"
                                                                value="{{ old('title', $data->title) }}">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="image">Image</label>
                                                            <input type="file" id="image" name="image"
                                                                class="form-control">
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
                                    <div id="deleteModal{{ $data->id }}" class="modal fade" tabindex="-1"
                                        role="dialog" aria-labelledby="deleteModalLabel{{ $data->id }}"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="deleteModalLabel{{ $data->id }}">
                                                        Confirm Delete
                                                    </h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-hidden="true">×</button>
                                                </div>

                                                <div class="modal-body">
                                                    <p>Apa anda yakin menghapus gambar "{{ $data->title }}"</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <form action="{{ route('slides.destroy', $data->id) }}"
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

                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="mt-3 d-flex justify-content-center">
        {{ $slide->links('pagination::bootstrap-4') }}
    </div>
    </div>


    <!-- Modal CREATE-->
    <div class="modal fade" id="createSlide" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="createSlideLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="createSlideLabel">Create Slide</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('slides.store') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="title">Title</label>
                            <input type="text" id="title" name="title" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="image">Image</label>
                            <input type="file" id="image" name="image" class="form-control">
                            @error('image')
                                <div class="text-danger text-sm mt-1">{{ $message }}</div>
                            @enderror
                        </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    </div>
@endsection
