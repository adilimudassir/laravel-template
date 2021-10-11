@extends('errors::layout')

@section('title', __('Server Error'))
@section('code', '500')
@section('content')
<!--begin::Authentication - 404 Page-->
<div class="d-flex flex-column flex-center flex-column-fluid p-10">
    <img src="{{ asset('assets/media/illustrations/error.svg')}}" alt="" class="mw-100 mb-10 h-lg-450px" />
    <!--end::Illustration-->
    <!--begin::Message-->
    <h1 class="fw-bold mb-10" style="color: #A3A3C7">We are currently facing some issues. We'll be back shortly</h1>
    <!--end::Message-->
    <!--begin::Link-->
    <a href="{{ route('dashboard') }}" class="btn btn-primary">Return Home</a>
    <!--end::Link-->
</div>
<!--end::Authentication - 404 Page-->
@endsection