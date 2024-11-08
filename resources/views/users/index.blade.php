@extends('pages.dashboard')

@section('content')
    <div class="container-fluid">
        <h1>User Management</h1>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createSlide">
            Create
        </button>

        <div class="row">
            <table class="table table-bordered mt-4">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>
                        {{-- <th>Password</th> --}}
                        <th>Role</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->email }}</td>
                            {{-- <td>{{ $data->password }}</td> --}}
                            <td>{{ $data->getRoleNames()->first() }}</td>

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
                                        <h4 class="modal-title" id="editModalLabel{{ $data->id }}">Edit User</h4>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-hidden="true">×</button>
                                    </div>
                                    <form action="{{ route('users.update', $data->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="name">Name</label>
                                                <input type="text" id="name" name="name" class="form-control"
                                                    value="{{ old('name', $data->name) }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="email">Email</label>
                                                <input type="text" id="email" name="email" class="form-control"
                                                    value="{{ old('email', $data->email) }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="password">Password</label>
                                                <input type="text" id="password" name="password" class="form-control"
                                                    value="{{ old('password', $data->password) }}">
                                            </div>

                                            <div class="mb-3">
                                                <label for="role" class="form-label">Role</label>
                                                <select name="role" id="role" class="form-control" required>
                                                    <option value="admin"
                                                        {{ $data->getRoleNames()->first() === 'admin' ? 'selected' : '' }}>
                                                        Admin</option>
                                                    <option value="super admin"
                                                        {{ $data->getRoleNames()->first() === 'super admin' ? 'selected' : '' }}>
                                                        Super Admin</option>
                                                </select>
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
                                        <p>Apa anda yakin menghapus user "{{ $data->name }}"</p>
                                    </div>
                                    <div class="modal-footer">
                                        <form action="{{ route('users.destroy', $data->id) }}" method="POST">
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
                        <form action="{{ route('users.store') }}"method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name">Name</label>
                                <input type="text" id="name" name="name" class="form-control"
                                    value="{{ old('name') }}">
                            </div>
                            <div class="mb-3">
                                <label for="email">Email</label>
                                <input type="text" id="email" name="email" class="form-control"
                                    value="{{ old('email') }}">
                            </div>
                            <div class="mb-3">
                                <label for="password">Password</label>
                                <input type="text" id="password" name="password" class="form-control"
                                    value="{{ old('password') }}">
                            </div>

                            <div class="mb-3">
                                <label for="role" class="form-label">Role</label>
                                <select name="role" id="role" class="form-control" required>
                                    <option value="admin">Admin</option>
                                    <option value="super admin">Super Admin</option>
                                </select>
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
