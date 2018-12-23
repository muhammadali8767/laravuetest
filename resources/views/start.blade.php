@extends('layouts/app')

@section('content')

    <example-component :url-data="{{ $url_data }}"></example-component>
    <ajax-component></ajax-component>

@endsection