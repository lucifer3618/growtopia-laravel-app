@extends('layout.master')

@section('title', 'Profile')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('script')
    <script src="{{ asset('js/profile.js') }}"></script>
@endsection


@section('content')
    <div>
        <div class="tab-container">
            <div class="d-flex align-items-start">
                <div class="nav flex-md-column nav-pills me-md-3 d-none d-md-block tabs" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <button class="nav-link links active" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="true">Profile</button>
                    <button class="nav-link links" id="v-pills-password-change-tab" data-bs-toggle="pill" data-bs-target="#v-pills-password-change" type="button" role="tab" aria-controls="v-pills-password-change" aria-selected="false">Change Password</button>
                    <button class="nav-link links" id="v-pills-delete-tab" data-bs-toggle="pill" data-bs-target="#v-pills-delete" type="button" role="tab" aria-controls="v-pills-delete" aria-selected="false">Remove Account</button>
                </div>

                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        @include('includes.profile-update-form')
                    </div>
                    <div class="tab-pane fade" id="v-pills-password-change" role="tabpanel" aria-labelledby="v-pills-password-change-tab">
                        @include('includes.change-password')
                    </div>
                    <div class="tab-pane fade" id="v-pills-delete" role="tabpanel" aria-labelledby="v-pills-delete-tab">
                        @include('includes.account-delete-form')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
