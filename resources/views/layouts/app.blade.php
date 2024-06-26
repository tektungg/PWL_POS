@extends('adminlte::page')

{{-- Extend and customize the browser title --}}
@section('title')
    {{ config('adminlte.title') }}
    @hasSection('subtitle') | @yield('subtitle') @endif
@stop

@vite('resources/js/app.js')

{{-- Extend and customize the page content header --}}
@section('content_header')
    @hasSection('content_header_title')
        <h1 class="text-muted">
            @yield('content_header_title')
            @hasSection('content_header_subtitle')
                <small class="text-dark">
                    <i class="fas fa-xs fa-angle-right text-muted"></i>
                    @yield('content_header_subtitle')
                </small>
            @endif
        </h1>
    @endif
@stop

{{-- Rename section content to content_body --}}
@section('content')
    @yield('content_body')
@stop

{{-- Create a common footer --}}
@section('footer')
    <div class="float-right">
        Version: {{ config('app.version', '1.0.0') }}
    </div>
    <strong>
        <a href="{{ config('app.company_url', '#') }}">
            {{ config('app.company_name', 'Politeknik Negeri Malang') }}
        </a>
    </strong>
@stop

{{-- Add common Javascript/Jquery code --}}
@push('js')
    <script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
@endpush

@stack('scripts')

{{-- Add common CSS customizations --}}
@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.dataTables.css" />
    <style type="text/css">
        /* You can add AdminLTE customizations here */
        /*
        .card-header {
            border-bottom: none;
        }
        .card-title {
            font-weight: 600;
        }
        */
        .content-wrapper {
            overflow-y: auto; /* Mengatur overflow-y menjadi auto */
            padding-bottom: 60px; /* Tambahkan ruang bawah untuk footer */
        }

        .main-footer {
            position: fixed;
            bottom: 0;
            width: 80%;
            background-color: #f4f6f9;
            padding: 10px 20px;
        }
    </style>
@endpush