@extends('back-end.layouts.app')
@section('title', 'SEO')
@section('css')
@endsection
@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>SEO</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard">الرئيسية</a></li>
                    <li class="breadcrumb-item active">SEO</li>
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
        @if (session()->has('update'))
            <div class="alert alert-success alert-dismissible fade show" rol="alert">
                <strong>{{ session()->get('update') }}</strong>
            </div>
        @endif
        <form action="{{ route('seo.update') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Mita Title</label>
                <input name="meta_title" type="text" class="form-control" value="{{ $seo->meta_title }}"
                    id="exampleFormControlInput1" placeholder="ادخل اسم الموقع">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Meta Keywords</label>
                <textarea name="meta_keywords" class="form-control" id="exampleFormControlTextarea1" rows="5">{{ $seo->meta_keywords }}</textarea>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Meta Description</label>
                <textarea name="meta_description" class="form-control" id="exampleFormControlTextarea1" rows="5">{{ $seo->meta_description }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">حفظ التعديل</button>
        </form>
    </main><!-- End #main -->
@endsection
@section('js')
@endsection
