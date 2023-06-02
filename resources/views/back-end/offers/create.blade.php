@extends('back-end.layouts.app')
@section('title', 'اضافة عرض')
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <style>
        nav {
            display: flex;
            justify-content: space-between;
        }

        table {
            padding: 20px;
        }

        form {
            direction: rtl;
        }
    </style>
@endsection
@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>اضافة عرض</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard">الرئيسية</a></li>
                    <li class="breadcrumb-item active">اضافة عرض</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->
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
        <section class="section">
            <form id="form" action="{{ route('offer.story') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">اسم العرض</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-2 col-form-label">عدد الايام</label>
                    <div class="col-sm-10">
                        <input type="number" name="day_cont" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputDate" class="col-sm-2 col-form-label">السعر للفرد</label>
                    <div class="col-sm-10">
                        <input type="number" name="price" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-2 col-form-label">صورة العرض</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="image" type="file" id="formFile">
                    </div>
                </div>

                <fieldset class="row mb-3">
                    <legend class="col-form-label col-sm-2 pt-0">نوع العرض</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="spcial" id="gridRadios1" value="0"
                                checked>
                            <label class="form-check-label" for="gridRadios1">
                                عرض عادي
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="spcial" id="gridRadios2"
                                value="1">
                            <label class="form-check-label" for="gridRadios2">
                                عرض مميز
                            </label>
                        </div>
                    </div>
                </fieldset>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">المدينة الخاصة بالعرض</label>
                    <div class="col-sm-10">
                        <select name="country_id" class="form-select" aria-label="Default select example">
                            <option selected>اختر المدينة التابع لها العرض</option>
                            @foreach ($countries as $country)
                                <option value="{{ $country->id }}">{{ $country->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">فئة العرض</label>
                    <div class="col-sm-10">
                        <select name="category_id" class="form-select" aria-label="Default select example">
                            <option selected>اختر الفئة الخاصة بالعرض</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">اضافة تفاصيل العرض</label>
                    <div class="col-sm-10">
                        <button type="button" class="btn btn-primary add-day"> اضافة يوم + </button>
                    </div>
                </div>
                <div class="row mb-3 filday"></div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">اضافة مشتملات العرض</label>
                    <div class="col-sm-10">
                        <button type="button" class="btn btn-primary add-pro">اضافة مشتملات +</button>
                    </div>
                </div>
                <div class="row mb-3 filpro"></div>

                <div class="row mb-3">
                    {{-- <label class="col-sm-2 col-form-label"></label> --}}
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-primary" style="width: 100%">حفظ</button>
                    </div>
                </div>

            </form><!-- End General Form Elements -->
        </section>
    </main>
    <!-- End #main -->
@endsection
@section('js')
    <script crossorigin="anonymous" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script type="text/x-templates" id="fields-template">
        <div class="row mb-3" id="dayDescription1">
            <label class="col-sm-1 col-form-label">اسم اليوم</label>
            <div class="col-sm-5">
                <input type="text" name="name_day[]" class="form-control">
            </div>

            <label class="col-sm-1 col-form-label">وصف اليوم</label>
            <div class="col-sm-5">
                <textarea name="description[]" id="" rows="3" class="form-control"></textarea>
            </div>
            
        </div>
    </script>
    <script>
        $(function () {
            var FIELDS_TEMPLATE = $('#fields-template').text();
            var $form = $('#form');
            var $fields = $form.find('.filday');
        
            $form.on('click', '.add-day', function () {
                $fields.prepend($(FIELDS_TEMPLATE));
            });
        });
    </script>
    <script type="text/x-templates" id="fields-templates">
        <div class="row mb-3" id="property">
            <label class="col-sm-2 col-form-label">المشتمل</label>
            <div class="col-sm-10">
                <input type="text" name="name_proprety[]" class="form-control">
            </div>
        </div>
    </script>
    <script>
        $(function () {
            var FIELDS_TEMPLATE = $('#fields-templates').text();
            var $form = $('#form');
            var $fields = $form.find('.filpro');
        
            $form.on('click', '.add-pro', function () {
                $fields.prepend($(FIELDS_TEMPLATE));
            });
        });
    </script>
@endsection
