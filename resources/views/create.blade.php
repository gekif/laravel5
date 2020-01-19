@extends('layouts.app')

@section('content')

    {!! Form::open(['route' => 'data.store']) !!}
    {!! Form::text('title', null) !!}
    {!! Form::submit('Submit') !!}
    {!! Form::close() !!}

@stop