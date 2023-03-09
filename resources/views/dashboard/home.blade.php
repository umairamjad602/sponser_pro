@extends('layouts.dashboard')
@section('style')
@endsection
@section('content')
    <div class="row">
        <div class="col-12 left-green-border d-lg-flex align-items-center">
            <div class="px-lg-5">
                <h2>Welcome to {{ Auth::guard('web')->user()->is_athlete ? 'Athlete' : 'Brand' }} Dashboard</h2>
            </div>
        </div>
    </div>
@endsection
@section('script')
@endsection
