@extends('layouts.app')

@section('content')
    <h1>{{ $list->name }}</h1>

    <p>
        Created on: {{ $list->created_at }} <br />
        Last modified: {{ $list->updated_at }}
    </p>

    <p>{{ $list->description }}</p>
 @endsection