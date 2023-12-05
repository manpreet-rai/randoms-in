@extends('layouts.app')

@section('content')
    <section class="section is-white has-text-centered">
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-half">
                    <img src="{{ asset('/assets/404.svg') }}" width="500px" height="250px">
                    <h1 class="title has-text-primary is-size-4 pt-6" style="margin-bottom: -2rem;">The page you requested was not found.</h1>
                </div>
            </div>
        </div>
    </section>
@endsection
