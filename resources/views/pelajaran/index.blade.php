@extends('pages.dashboard')

@section('content')
    <div class="container-fluid">
        <h1>Jadwal Pelajaran</h1>
        <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#createModal">
            Create
        </button>

        <div class="row">
            <table class="table table-bordered mt-4">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Pelajaran</th>
                        <th>Hari</th>
                        <th>Jam Mulai</th>
                        <th>Jam Selesai</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pelajaran as $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $data->subject }}</td>
                            <td>{{ $data->day }}</td>
                            <td>{{ $data->start_time }}</td>
                            <td>{{ $data->end_time }}</td>
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
                                        <h4 class="modal-title" id="editModalLabel{{ $data->id }}">Edit Jadwal Pelajaran
                                        </h4>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-hidden="true">×</button>
                                    </div>
                                    <form action="{{ route('jadwal-pelajaran.update', $data->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="subject">Pelajaran</label>
                                                <input type="text" id="subject" name="subject" class="form-control"
                                                    value="{{ old('subject', $data->subject) }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="day" class="text-white">Hari</label>
                                                <select name="day" id="day" class="form-control">
                                                    <option value="Monday"
                                                        {{ old('day', $data->day) == 'Monday' ? 'selected' : '' }}>Senin
                                                    </option>
                                                    <option value="Tuesday"
                                                        {{ old('day', $data->day) == 'Tuesday' ? 'selected' : '' }}>Selasa
                                                    </option>
                                                    <option value="Wednesday"
                                                        {{ old('day', $data->day) == 'Wednesday' ? 'selected' : '' }}>Rabu
                                                    </option>
                                                    <option value="Thursday"
                                                        {{ old('day', $data->day) == 'Thursday' ? 'selected' : '' }}>Kamis
                                                    </option>
                                                    <option value="Friday"
                                                        {{ old('day', $data->day) == 'Friday' ? 'selected' : '' }}>Jumat
                                                    </option>
                                                    <option value="Saturday"
                                                        {{ old('day', $data->day) == 'Saturday' ? 'selected' : '' }}>Sabtu
                                                    </option>
                                                </select>
                                            </div>


                                            <div class="mb-3">
                                                <label for="start_time">Jam Mulai</label>
                                                <input type="time" id="start_time" name="start_time" class="form-control"
                                                    value="{{ old('start_time', $data->start_time) }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="end_time">Jam Selesai</label>
                                                <input type="time" id="end_time" name="end_time" class="form-control"
                                                    value="{{ old('end_time', $data->end_time) }}">
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
                                        <p>Apakah Anda yakin ingin menghapus jadwal pelajaran "{{ $data->subject }}"?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <form action="{{ route('jadwal-pelajaran.destroy', $data->id) }}" method="POST">
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

            {{-- MODAL CREATE --}}
            <div id="createModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="createModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="createModalLabel">Tambah Jadwal Pelajaran</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <form action="{{ route('jadwal-pelajaran.store') }}" method="POST">
                            @csrf
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="subject">Pelajaran</label>
                                    <input type="text" id="subject" name="subject" class="form-control"
                                        value="{{ old('subject') }}">
                                </div>
                                <div class="mb-3">
                                    <label for="day" class="text-white">Hari</label>
                                    <select name="day" id="day" class="form-control">
                                        <option value="Monday">Senin</option>
                                        <option value="Tuesday">Selasa</option>
                                        <option value="Wednesday">Rabu</option>
                                        <option value="Thursday">Kamis</option>
                                        <option value="Friday">Jumat</option>
                                        <option value="Saturday">Sabtu</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="start_time">Jam Mulai</label>
                                    <input type="time" id="start_time" name="start_time" class="form-control"
                                        value="{{ old('start_time') }}">
                                </div>
                                <div class="mb-3">
                                    <label for="end_time">Jam Selesai</label>
                                    <input type="time" id="end_time" name="end_time" class="form-control"
                                        value="{{ old('end_time') }}">
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
