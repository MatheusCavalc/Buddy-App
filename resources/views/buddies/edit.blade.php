@extends('layouts.main')

@section('title', 'Home App')

@section('content')

<livewire:edit-buddy :buddy="$id" />

@endsection
