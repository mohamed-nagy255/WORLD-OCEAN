@extends('back-end.layouts.app')
@section('title', 'العروض')
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
    </style>
@endsection
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>العروض</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard">الرئيسية</a></li>
                    <li class="breadcrumb-item active">العروض</li>
                </ol>

                <a href="{{ route('offer.create') }}" class="btn btn-primary">
                    اضافة عرض
                </a>
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
        @if (session()->has('edit'))
            <div class="alert alert-success alert-dismissible fade show" rol="alert">
                <strong>{{ session()->get('edit') }}</strong>
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
                            <h5 class="card-title">جدول العروض</h5>
                            <!-- Table with stripped rows -->
                            <table id='table' class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">اسم العرض</th>
                                        <th scope="col">المدينة</th>
                                        <th scope="col">الفئة</th>
                                        <th scope="col">نوع العرض</th>
                                        <th scope="col">التحكم</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php($i = 0)
                                    @foreach ($offers as $offer)
                                        <tr>
                                            <th scope="row">{{ ++$i }}</th>
                                            <td>{{ $offer->name }}</td>
                                            <td>{{ $offer->country->name }}</td>
                                            <td>{{ $offer->category->name }}</td>
                                            <td>
                                                @if ($offer -> spcial == 0)
                                                    عادي
                                                @else
                                                    مميز
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('offer.edit', $offer -> id) }}" class="btn btn-primary">
                                                    تعديل
                                                </a>
                                                <br>
                                                <br>
                                                <button type="button" class="btn btn-danger" 
                                                data-bs-toggle="modal" data-bs-target="#delete"
                                                data-id="{{ $offer -> id }}"
                                                data-name="{{ $offer -> name }}">
                                                    حذف 
                                                </button>
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
    </main><!-- End #main -->

    @include('back-end.offers.deleteModel')
@endsection
@section('js')
    {{-- data table  --}}
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        });
    </script>
    <script>
         $('#delete').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var name = button.data('name')
            var modal = $(this)
            modal.find('.modal-body #id').val(id);
            modal.find('.modal-body #name').val(name);
        })
    </script>
@endsection
