@extends('layouts.app')

@section('content')

    {!! Form::model($post, [
        'route' => ['data.update', $post->id],
        'method' => 'PUT'
    ]) !!}

    {!! Form::text('title') !!}

    {{--{!! Html::LinkRoute('data.update', 'Save Changes', [$post->id]) !!}--}}

    {!! Form::submit('Save Changes', [
        'class' => 'btn btn-success'
    ]) !!}

    {!! Form::close() !!}

@stop