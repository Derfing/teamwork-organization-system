@extends('templates.baseTemplate')

@section('title', 'CreateTask')

@section('body')
    <div>
        <livewire:read.user-component userId="{{ $userId }}">
    </div>
@endsection
