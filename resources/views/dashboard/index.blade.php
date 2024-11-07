@extends('layouts.app')
@section('content')
    <!-- Start Content-->
    <div class="container-fluid my-4">

        <!-- Dashboard Card for Total Mobil -->
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-muted mb-2">Slide Picture</h6>
                        <p class="display-4 font-weight-bold text-primary mb-0">{{ $slidePick }}</p>
                    </div>
                    <div>
                        <a href="{{ route('slides.index') }}" class="btn btn-primary">Lihat Detail</a>
                    </div>
                </div>
                <!-- Optional chart or icon section -->
                <div class="mt-4">
                    <div class="progress" style="height: 8px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: {{ $slidePick }}%;"
                            aria-valuenow="{{ $slidePick }}" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-muted mb-2">Pagelaran Picture</h6>
                        <p class="display-4 font-weight-bold text-primary mb-0">{{ $pagelaran }}</p>
                    </div>
                    <div>
                        <a href="{{ route('pagelaran.index') }}" class="btn btn-primary">Lihat Detail</a>
                    </div>
                </div>
                <!-- Optional chart or icon section -->
                <div class="mt-4">
                    <div class="progress" style="height: 8px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: {{ $pagelaran }}%;"
                            aria-valuenow="{{ $pagelaran }}" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card shadow-sm border-0">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-muted mb-2">Classmeet Picture</h6>
                        <p class="display-4 font-weight-bold text-primary mb-0">{{ $classmeet }}</p>
                    </div>
                    <div>
                        <a href="{{ route('classmeet.index') }}" class="btn btn-primary">Lihat Detail</a>
                    </div>
                </div>
                <!-- Optional chart or icon section -->
                <div class="mt-4">
                    <div class="progress" style="height: 8px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: {{ $classmeet }}%;"
                            aria-valuenow="{{ $classmeet }}" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card shadow-sm border-0">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-muted mb-2">P5 Picture</h6>
                        <p class="display-4 font-weight-bold text-primary mb-0">{{ $plima }}</p>
                    </div>
                    <div>
                        <a href="{{ route('plima.index') }}" class="btn btn-primary">Lihat Detail</a>
                    </div>
                </div>
                <!-- Optional chart or icon section -->
                <div class="mt-4">
                    <div class="progress" style="height: 8px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: {{ $plima }}%;"
                            aria-valuenow="{{ $plima }}" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card shadow-sm border-0">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-muted mb-2">Random Picture</h6>
                        <p class="display-4 font-weight-bold text-primary mb-0">{{ $random }}</p>
                    </div>
                    <div>
                        <a href="{{ route('random.index') }}" class="btn btn-primary">Lihat Detail</a>
                    </div>
                </div>
                <!-- Optional chart or icon section -->
                <div class="mt-4">
                    <div class="progress" style="height: 8px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: {{ $random }}%;"
                            aria-valuenow="{{ $random }}" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>

    </div> <!-- container -->
@endsection
