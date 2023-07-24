@extends('layouts.app')

@section('content')

    <div class="container text-center pt-5">
        <h1>
            Hello,
            @auth
                {{ Auth :: user() -> name }}
            @endauth
            @guest
                World!
            @endguest
        </h1>
        <ul class="list-unstyled">
            @foreach ($projects as $project)
                <li>
                    @auth
                        <a href="{{ route('project.show', $project -> id) }}">
                            {{ $project -> title }}
                        </a>
                    @endauth
                    @guest
                        {{ $project -> title }}
                    @endguest
                </li>
            @endforeach
        </ul>
    </div>

@endsection