@extends('admin.layouts.master')
@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 >کاربران</h4>
        <form method="get" action="#">
            <div class="input-group">
                <input type="text" class="form-control" name="search" aria-label="search">
                <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                    <i class="fad fa-search"></i>
                </button>
            </div>

            <form action="#" method="get">
            </form>
            <a href="#" class="btn btn-warning btn-sm" type="submit">بازگردانی مدیران</a>
        </form>
    </div>
    <table class="table table-bordered table-striped table-hover">
        <thead class="table-dark text-center">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">نام کاربری</th>
            <th scope="col">ایمیل</th>
            <th scope="col">عملیات</th>
        </tr>
        </thead>
        <tbody class="text-center">
        <tr>
            <th>1</th>
            <td>Mark</td>
            <td>Otto@gmail.com</td>
            <td>
                <a href="#" class="btn btn-sm btn-danger px-2" style="font-size: 1.1rem">
                    <i class="fad fa-trash"></i>
                </a>

                <a href="#" class="btn btn-sm  btn-warning px-2" style="font-size: 1.1rem">
                    <i class="fad fa-gear"></i>
                </a>
            </td>
        </tr>
        </tbody>
    </table>
@endsection
