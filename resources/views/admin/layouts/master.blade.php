<!doctype html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/sass/admin.scss',)
    <title>Admin</title>
</head>
<body style="height: 100vh">

<div class="container h-100">
    <div class="row h-100">
        <div class="col-3 d-block ">
            <aside class="bg-dark rounded p-4 mt-2 shadow text-light position-sticky top-0 p-2 shadow">
                <p class="mb-2">نام کاربر:</p>
                <div class="mb-2">
                    <a class="text-light text-decoration-none text-center bg-primary px-3 py-2 rounded w-100"
                       type="button" data-bs-toggle="collapse"
                       data-bs-target="#coll-users" aria-expanded="false" aria-controls="coll-users">
                        مدیریت کاربران
                    </a>
                    <div class="collapse px-3 py-2 text-dark" id="coll-users">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="#" class="text-light p-2 d-inline-flex text-decoration-none w-100">نمایش
                                    کاربران</a></li>
                            <li><a href="#" class="text-light p-2 d-inline-flex text-decoration-none w-100">ایجاد
                                    کاربر</a></li>
                            <li><a href="#" class="text-light p-2 d-inline-flex text-decoration-none w-100">لیست حذف شده
                                    ها</a></li>
                        </ul>
                    </div>
                </div>
                <div class="mb-2">
                    <a class="text-light text-decoration-none text-center bg-primary px-3 py-2 rounded w-100"
                       type="button" data-bs-toggle="collapse"
                       data-bs-target="#coll-arts" aria-expanded="false" aria-controls="coll-arts">
                        مدیریت مقاله ها
                    </a>
                    <div class="collapse px-3 py-2 text-dark" id="coll-arts">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="#" class="text-light p-2 d-inline-flex text-decoration-none w-100">نمایش
                                    مقالات</a></li>
                            <li><a href="#" class="text-light p-2 d-inline-flex text-decoration-none w-100">ایجاد مقاله
                                    جدید</a></li>
                            <li><a href="#" class="text-light p-2 d-inline-flex text-decoration-none w-100">مقاله های
                                    تایید نشده</a></li>
                            <li><a href="#" class="text-light p-2 d-inline-flex text-decoration-none w-100">مقاله های
                                    حذف شده ها</a></li>
                        </ul>
                    </div>
                </div>
                <div class="mb-2">
                    <a class="text-light text-decoration-none bg-primary text-center px-3 py-2 rounded w-100"
                       type="button" data-bs-toggle="collapse"
                       data-bs-target="#coll-comments" aria-expanded="false" aria-controls="coll-comments">
                        مدیریت نظرات
                    </a>
                    <div class="collapse px-3 py-2 text-dark" id="coll-comments">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="#" class="text-light p-2 d-inline-flex text-decoration-none w-100">نمایش
                                    نظرات</a></li>
                            <li><a href="#" class="text-light p-2 d-inline-flex text-decoration-none w-100">نظرات تایید
                                    شده.</a></li>
                            <li><a href="#" class="text-light p-2 d-inline-flex text-decoration-none w-100">نظرات تایید
                                    نشده.</a></li>
                        </ul>
                    </div>
                </div>
                <div class="mb-2">
                    <a class="text-light text-decoration-none bg-primary text-center px-3 py-2 rounded w-100"
                       type="button" data-bs-toggle="collapse"
                       data-bs-target="#coll-cate" aria-expanded="false" aria-controls="coll-cate">
                        مدیریت دسته ها
                    </a>
                    <div class="collapse px-3 py-2 text-dark" id="coll-cate">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="#" class="text-light p-2 d-inline-flex text-decoration-none w-100">نمایش
                                    مقالات</a></li>
                            <li><a href="#" class="text-light p-2 d-inline-flex text-decoration-none w-100">ایجاد مقاله
                                    جدید</a></li>
                            <li><a href="#" class="text-light p-2 d-inline-flex text-decoration-none w-100">مقاله های
                                    تایید نشده</a></li>
                            <li><a href="#" class="text-light p-2 d-inline-flex text-decoration-none w-100">مقاله های
                                    حذف شده ها</a></li>
                        </ul>
                    </div>
                </div>
                <div class="mb-2">
                    <a href="#"
                       class="text-light text-decoration-none bg-warning text-center text-dark fw-bold px-3 py-2 rounded w-100"
                       type="button">
                        اعلانات
                    </a>
                </div>
                <div class="mb-2">
                    <a href="#"
                       class="text-light text-decoration-none bg-danger text-center text-light fw-bold px-3 py-2 rounded w-100"
                       type="button">
                        خروج
                    </a>
                </div>
            </aside>
        </div>
        <div class="col-9">
            <div class="bg-light rounded p-4 mt-2 shadow">
                @yield('content')
            </div>
        </div>
    </div>
</div>

@vite('resources/js/admin.js',)
</body>
</html>
