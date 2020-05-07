@extends('layouts.user')

@section('header')
@include('user._common._header')
@endsection

@section('content')
<main role="main" class="flex-shrink-0 bg-light">
    <div id="app">

        <div class="container mt-4">
            <div class="row mb-4 ml-4">
                <div class="col-md-8">
                    <router-link to="/">Главная </router-link>
                    <router-link to="/comments">Комментарии (Vue)</router-link>
                    <a href="{{ route('admin.comments.index') }}">Комментарии (Laravel)</a>
                </div>
            </div>

            <router-view></router-view>

        </div>

    </div>
    @endsection

    @section('footer')
    @include('user._common._footer')
    @endsection
</main>