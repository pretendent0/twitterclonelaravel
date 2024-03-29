@extends('layouts.app')

@section('content')
    <div class="lg:flex lg:justify-between ">
        <div class="lg:w-32">
            @include('sidebar-links')
        </div>
        <div class="lg:flex-1 lg:mx-10" style="max-width:700px">
            @include('publish-tweet')
            <div class="border border-gray-300 rounded-lg">
            @include('tweet')
            @include('tweet')
            @include('tweet')
            @include('tweet')
            </div>
        </div>
        <div class="lg:w-1/6 bg-blue-100 rounded-lg p-4">
            @include('friends-list')

        </div>
    </div>

@endsection
