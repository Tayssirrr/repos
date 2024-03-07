@extends('Layouts.User')
@section('title')
    Home
@endsection
@section('main')
<x-slider :sliders="$sliders" />
<x-services :services="$services" />
<x-video-modal :company="$company"/>
<x-team :company="$company"/>
<x-contact :company="$company"/>
@endsection