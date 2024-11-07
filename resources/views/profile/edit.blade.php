@extends('pages.dashboard')

@section('content')
    <div class="container-fluid py-5"
        style="background-image: url('{{ asset('assets/images/bg-pattern-2.png') }}'); background-size: cover; background-position: center;">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-12">
                <div class="card shadow-lg">
                    <div class="card-header bg-primary text-white text-center">
                        <h4>Edit Profil</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('profile.update') }}" method="POST">
                            @csrf
                            @method('patch')

                            <!-- Nama -->
                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ old('name', auth()->user()->name) }}" required>
                            </div>

                            <!-- Email -->
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    value="{{ old('email', auth()->user()->email) }}" required>
                            </div>

                            {{-- <!-- Password -->
                            <div class="form-group">
                                <label for="password">Password Baru</label>
                                <input type="password" class="form-control" id="password" name="password">
                                <small class="form-text text-muted">Kosongkan jika tidak ingin mengubah password</small>
                            </div>

                            <!-- Konfirmasi Password -->
                            <div class="form-group">
                                <label for="password_confirmation">Konfirmasi Password</label>
                                <input type="password" class="form-control" id="password_confirmation"
                                    name="password_confirmation">
                            </div> --}}

                            <!-- Tombol Simpan -->
                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
