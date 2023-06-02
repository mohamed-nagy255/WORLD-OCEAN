@extends('back-end.layouts.app')
@section('title', 'WORLD OCEAN')
@section('meta')

@endsection
@section('css')

@endsection
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>اعدادات الحساب</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard">الرئيسية</a></li>
                    <li class="breadcrumb-item">المستخدمين</li>
                    <li class="breadcrumb-item active">اعدادات الحساب</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section profile">
            <div class="row">
                <div class="col-xl-4">

                    <div class="card">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                            <h2>{{ Auth::user()->name }}</h2>
                            <h3>{{ Auth::user()->email }}</h3>
                        </div>
                    </div>

                </div>
                @if (session('status') === 'profile-updated')
                    <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                        class="text-sm text-gray-600"
                        style="width: 50%; text-align: center; background-color:rgb(80, 201, 80);">تم التعديل بنجاح</p>
                @endif
                @if (session('status') === 'password-updated')
                    <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                        class="text-sm text-gray-600"
                        style="width: 50%; text-align: center; background-color:rgb(80, 201, 80);">تم تغيير الرقم السري بنجاح</p>
                @endif
                <div class="col-xl-8">

                    <div class="card">
                        <div class="card-body pt-3">
                            <!-- Bordered Tabs -->
                            <ul class="nav nav-tabs nav-tabs-bordered">

                                <li class="nav-item">
                                    <button class="nav-link show active" data-bs-toggle="tab"
                                        data-bs-target="#profile-edit">تعديل الحساب</button>
                                </li>

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab"
                                        data-bs-target="#profile-change-password">تغيير الرقم السري</button>
                                </li>

                            </ul>
                            <div class="tab-content pt-2">

                                <div class="tab-pane fade show active profile-edit pt-3" id="profile-edit">
                                    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                                        @csrf
                                    </form>
                                    <!-- Profile Edit Form -->
                                    <form method="post" action="{{ route('profile.update') }}">
                                        @csrf
                                        @method('patch')
                                        <div class="row mb-3">
                                            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">اسم
                                                المستخدم</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="name" type="text" class="form-control" id="fullName"
                                                    value="{{ Auth::user()->name }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Email" class="col-md-4 col-lg-3 col-form-label">البريد
                                                الالكتروني</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="email" type="email" class="form-control" id="Email"
                                                    value="{{ Auth::user()->email }}">
                                            </div>
                                        </div>
                                        @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                                            <div>
                                                <p class="text-sm mt-2 text-gray-800">
                                                    {{ __('Your email address is unverified.') }}

                                                    <button form="send-verification"
                                                        class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                        {{ __('Click here to re-send the verification email.') }}
                                                    </button>
                                                </p>

                                                @if (session('status') === 'verification-link-sent')
                                                    <p class="mt-2 font-medium text-sm text-green-600">
                                                        {{ __('A new verification link has been sent to your email address.') }}
                                                    </p>
                                                @endif
                                            </div>
                                        @endif


                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">حفظ التغيير</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade pt-3" id="profile-change-password">
                                    <!-- Change Password Form -->
                                    <form method="post" action="{{ route('password.update') }}">
                                        @csrf
        @method('put')
                                        <div class="row mb-3">
                                            <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">الرقم
                                                السري</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="current_password" type="password" class="form-control"
                                                    id="currentPassword">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">الرقم السري
                                                الجديد</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="password" type="password" class="form-control"
                                                    id="newPassword">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">اعد كتابة
                                                الرقم السري الجديد</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="password_confirmation" type="password" class="form-control"
                                                    id="renewPassword">
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">حفظ التغيير</button>
                                        </div>
                                    </form><!-- End Change Password Form -->
                                </div>
                            </div><!-- End Bordered Tabs -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
@section('js')

@endsection
