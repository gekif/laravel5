@extends('layouts.app')

@section('content')

    <h1>All Title</h1>

    @include('partials.alerts')

    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Title</th>
            <th scope="col">Created At</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($posts as $post)
        <tr>
            <td>{{ $post->id }}</td>
            <td><a href="{{ route('data.edit', $post->id) }}">{{ $post->title }}</a></td>
            <td>{{ $post->created_at->diffForHumans() }}</td>
        </tr>
        @endforeach
        </tbody>
    </table>

    {{ $posts->render() }}

@stop