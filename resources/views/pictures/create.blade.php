@extends('layouts/app')

@push('scripts')
    <script src="/js/s3upload.js"></script>
@endpush

@section('content')

    <form class="s3upload" action="{{ route('pictures.store') }}" method="POST" enctype="multipart/form-data" data-attributes="{{ json_encode($formAttributes) }}" data-inputs="{{ json_encode($formInputs) }}">
        @csrf
        <input type="text" name="title">
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="file" name="file">
        <input type="hidden" name="storage_path" value="{{ $formInputs['key'] }}">
        <input type="submit">
    </form>
@endsection


