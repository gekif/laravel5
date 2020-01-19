@extends('layouts.app')

@section('content')

@include('partials.alerts')

<div class="container">
    <div class="row">
        <p>This is the show web page view</p>
    </div>
    <div class="row">
        <p>Your message is {{ $post->title }}</p>
    </div>
    <div class="row">
        {!! Form::model($post, [
            'route' => ['data.destroy', $post->id],
            'method' => 'DELETE'
        ]) !!}

        {!! Form::submit('Delete Data', [
            'class' => 'btn btn-danger'
        ]) !!}

        {!! Form::close() !!}
    </div>
</div>



@stop