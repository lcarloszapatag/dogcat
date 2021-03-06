@extends('layouts.app')

@section('content')
    <div class="container-fluid padding-50">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <passport-clients></passport-clients>
                <passport-authorized-clients></passport-authorized-clients>
                <passport-personal-access-tokens></passport-personal-access-tokens>
            </div>
        </div>
    </div>
@endsection
