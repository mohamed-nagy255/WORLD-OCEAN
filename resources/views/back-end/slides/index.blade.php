@extends('back-end.layouts.app')
@section('title', 'Slides')
@section('css')
@endsection
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Slides</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard">الرئيسية</a></li>
                    <li class="breadcrumb-item active">Slides</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (session()->has('add'))
            <div class="alert alert-success alert-dismissible fade show" rol="alert">
                <strong>{{ session()->get('add') }}</strong>
            </div>
        @endif
        @if (session()->has('del'))
            <div class="alert alert-danger alert-dismissible fade show" rol="alert">
                <strong>{{ session()->get('del') }}</strong>
            </div>
        @endif
        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Slides Table</h5>
                            @if ($count >= 5)
                                <p> برجاء حذف شئ اولا Slide لا يمكنك اضافة </p>
                            @else
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    slide اضافة
                                </button>
                            @endif
                            <br>
                            <br>
                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">الصورة</th>
                                        <th scope="col">التحكم</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php($i = 0)
                                    @foreach ($slides as $slide)
                                        <tr>
                                            <th scope="row">{{ ++$i }}</th>
                                            <td><img src="{{ URL('assets/front-end/images', $slide->image) }}"
                                                    width="100" alt=""></td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-danger dropdown-toggle"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        حذف
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <form action="{{ route('slide.distroy', $slide->id) }}" method="POST">
                                                                @csrf
                                                                <button class="dropdown-item" type="submit">حذف الصورة</button>
                                                            </form>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->

                        </div>
                    </div>

                </div>
            </div>
        </section>
        @include('back-end.slides.addModel')
    </main><!-- End #main -->
@endsection
@section('js')

@endsection
