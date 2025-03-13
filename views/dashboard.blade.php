@extends('layouts.dashboard')

@section('content')
    @include('components.stats-cards')
    @include('components.campaign-progress')
    @include('components.events')
    @include('components.recent-donations')
    @include('components.admin-actions')
@endsection
