@extends('admin.layouts.modal')

{{-- Extra CSS styles --}}
@section('styles')
<style type="text/css"></style>
@stop

{{-- Content --}}
@section('content')

	<div class="page-header">
		<h3>{{ $meta['title'] }}</h3>
	</div>

	<!-- Tabs -->
	<ul class="nav nav-tabs">
		<li class="active"><a href="#tab-general" data-toggle="tab">General</a></li>
	</ul>
	<!-- ./ tabs -->

	{{-- Create a role form --}}
	<!-- Form -->
	{{ Former::horizontal_open()
		->id('create')
		->rules($rules)
		->method('POST')
		->action('admin/roles') }}

	{{ Former::token() }}

		@include('admin.roles.form')

	{{ Former::close() }}
	<!-- ./ form -->

@stop

{{-- Extra JavaScripts --}}
@section('scripts')
<script type="text/javascript"></script>
@stop