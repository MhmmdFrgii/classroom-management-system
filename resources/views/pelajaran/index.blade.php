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
                                                <label for="subject" class="text-white">Pelajaran</label>
                                                <select name="subject" id="subject" class="form-control">
                                                    <option value="Matematika"
                                                        {{ old('subject', $data->subject) == 'Matematika' ? 'selected' : '' }}>
                                                        Matematika</option>
                                                    <option value="Bahasa Indonesia"
                                                        {{ old('subject', $data->subject) == 'Bahasa Indonesia' ? 'selected' : '' }}>
                                                        Bahasa Indonesia</option>
                                                    <option value="PJOK"
                                                        {{ old('subject', $data->subject) == 'PJOK' ? 'selected' : '' }}>
                                                        PJOK</option>
                                                    <option value="Pendidikan Agama"
                                                        {{ old('subject', $data->subject) == 'Pendidikan Agama' ? 'selected' : '' }}>
                                                        Pendidikan Agama</option>
                                                    <option value="Informatika"
                                                        {{ old('subject', $data->subject) == 'Informatika' ? 'selected' : '' }}>
                                                        Informatika</option>
                                                    <option value="Sejarah Indonesia"
                                                        {{ old('subject', $data->subject) == 'Sejarah Indonesia' ? 'selected' : '' }}>
                                                        Sejarah Indonesia</option>
                                                    <option value="PPKN"
                                                        {{ old('subject', $data->subject) == 'PPKN' ? 'selected' : '' }}>
                                                        PPKN</option>
                                                    <option value="IPAS"
                                                        {{ old('subject', $data->subject) == 'IPAS' ? 'selected' : '' }}>
                                                        IPAS</option>
                                                    <option value="Ngarit"
                                                        {{ old('subject', $data->subject) == 'Ngarit' ? 'selected' : '' }}>
                                                        Ngarit</option>
                                                    <option value="Bahasa Inggris"
                                                        {{ old('subject', $data->subject) == 'Bahasa Inggris' ? 'selected' : '' }}>
                                                        Bahasa Inggris</option>
                                                    <option value="Dasar Keahlian"
                                                        {{ old('subject', $data->subject) == 'Dasar Keahlian' ? 'selected' : '' }}>
                                                        Dasar Keahlian</option>
                                                    <option value="Bahasa Jawa"
                                                        {{ old('subject', $data->subject) == 'Bahasa Jawa' ? 'selected' : '' }}>
                                                        Bahasa Jawa</option>
                                                </select>
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
                                    <select name="subject" id="subject" class="form-control">
                                        <option value="Matematika">Matematika</option>
                                        <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                        <option value="PJOK">PJOK</option>
                                        <option value="Pendidikan Agama">Pendidikan Agama</option>
                                        <option value="Informatika">Informatika</option>
                                        <option value="Sejarah Indonesia">Sejarah Indonesia</option>
                                        <option value="PPKN">PPKN</option>
                                        <option value="IPAS">IPAS</option>
                                        <option value="Ngarit">Ngarit</option>
                                        <option value="Bahasa Inggris">Bahasa Inggris</option>
                                        <option value="Dasar Keahlian">Dasar Keahlian</option>
                                        <option value="Bahasa Jawa">Bahasa Jawa</option>

                                    </select>
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
