@extends('layouts.template')


@section('title')
	{{ucfirst($category)}} - Articles
@endsection


@section('content')
			@include('partials.articles-list')
@endsection