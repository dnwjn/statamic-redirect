@extends('statamic::layout')
@section('title', 'Redirects')

@section('content')
    <div class="flex mb-3">
        <h1 class="flex-1">Redirects</h1>

        <dropdown-list class="mr-1">
            <button class="btn" slot="trigger">{{ __('Export Redirects') }}</button>
            <dropdown-item :text="__('Export as CSV')" redirect="{{ cp_route('redirect.export', ['type' => 'csv']) }}?download=true"></dropdown-item>
            <dropdown-item :text="__('Export as JSON')" redirect="{{ cp_route('redirect.export', ['type' => 'json']) }}?download=true"></dropdown-item>
        </dropdown-list>

        <a href="{{ cp_route('redirect.redirects.create') }}" class="btn-primary">Create</a>
    </div>

    <redirect-listing :filters="{{ $filters->toJson() }}"></redirect-listing>
@endsection
