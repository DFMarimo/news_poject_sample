@extends('layouts.master')
@section('base')
    @includeIf('layouts.partitions.navbar')

    @includeIf('layouts.partitions.header')
    <div class="diver-hr container">
    </div>

    <div class="articles">
        <div class="container body">
            <aside class="sidebar">
                <h2 class="art">مقاله ها</h2>
            </aside>
            <section class="content">
                <article class="article article-vertical">
                    <a href="#">
                        <img src="{{ asset('img/img_3.jpg') }}" alt="#" class="article-img">
                    </a>
                    <div class="article-body">
                        <div class="article-content">
                            <a href="#">
                                <h1 class="title">عنوان مقاله</h1>
                                <p class="description">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک
                                    است.
                                </p>
                            </a>
                        </div>
                        <div class="article-footer">
                            <div class="details">
                                <span>2022/02/1</span>
                                <span>علیرضا سیدی</span>
                            </div>

                            <div class="control">
                                <a href="#">
                                    <i class="fa-regular fa-heart"
                                       style="color:#b0b0b0 "></i>
                                    <span>34</span>
                                    {{--<i class="fa fa-heart" style="color: red"></i>--}}
                                </a>
                                <a href="#">
                                    {{--<i class="fa-duotone fa-bookmark"
                                       style="--fa-primary-color: #205995; --fa-secondary-color: #205995;"></i>--}}
                                    <i class="fa-duotone fa-bookmark"
                                       style="--fa-primary-color: #b0b0b0; --fa-secondary-color: #c2c2c2;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="article article-vertical">
                    <a href="#">
                        <img src="{{ asset('img/img_3.jpg') }}" alt="#" class="article-img">
                    </a>
                    <div class="article-body">
                        <div class="article-content">
                            <a href="#">
                                <h1 class="title">عنوان مقاله</h1>
                                <p class="description">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک
                                    است.
                                </p>
                            </a>
                        </div>
                        <div class="article-footer">
                            <div class="details">
                                <span>2022/02/1</span>
                                <span>علیرضا سیدی</span>
                            </div>

                            <div class="control">
                                <a href="#">
                                    <i class="fa-regular fa-heart"
                                       style="color:#b0b0b0 "></i>
                                    <span>34</span>
                                    {{--<i class="fa fa-heart" style="color: red"></i>--}}
                                </a>
                                <a href="#">
                                    {{--<i class="fa-duotone fa-bookmark"
                                       style="--fa-primary-color: #205995; --fa-secondary-color: #205995;"></i>--}}
                                    <i class="fa-duotone fa-bookmark"
                                       style="--fa-primary-color: #b0b0b0; --fa-secondary-color: #c2c2c2;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="article article-vertical">
                    <a href="#">
                        <img src="{{ asset('img/img_3.jpg') }}" alt="#" class="article-img">
                    </a>
                    <div class="article-body">
                        <div class="article-content">
                            <a href="#">
                                <h1 class="title">عنوان مقاله</h1>
                                <p class="description">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک
                                    است.
                                </p>
                            </a>
                        </div>
                        <div class="article-footer">
                            <div class="details">
                                <span>2022/02/1</span>
                                <span>علیرضا سیدی</span>
                            </div>

                            <div class="control">
                                <a href="#">
                                    <i class="fa-regular fa-heart"
                                       style="color:#b0b0b0 "></i>
                                    <span>34</span>
                                    {{--<i class="fa fa-heart" style="color: red"></i>--}}
                                </a>
                                <a href="#">
                                    {{--<i class="fa-duotone fa-bookmark"
                                       style="--fa-primary-color: #205995; --fa-secondary-color: #205995;"></i>--}}
                                    <i class="fa-duotone fa-bookmark"
                                       style="--fa-primary-color: #b0b0b0; --fa-secondary-color: #c2c2c2;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="article article-vertical">
                    <a href="#">
                        <img src="{{ asset('img/img_3.jpg') }}" alt="#" class="article-img">
                    </a>
                    <div class="article-body">
                        <div class="article-content">
                            <a href="#">
                                <h1 class="title">عنوان مقاله</h1>
                                <p class="description">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک
                                    است.
                                </p>
                            </a>
                        </div>
                        <div class="article-footer">
                            <div class="details">
                                <span>2022/02/1</span>
                                <span>علیرضا سیدی</span>
                            </div>

                            <div class="control">
                                <a href="#">
                                    <i class="fa-regular fa-heart"
                                       style="color:#b0b0b0 "></i>
                                    <span>34</span>
                                    {{--<i class="fa fa-heart" style="color: red"></i>--}}
                                </a>
                                <a href="#">
                                    {{--<i class="fa-duotone fa-bookmark"
                                       style="--fa-primary-color: #205995; --fa-secondary-color: #205995;"></i>--}}
                                    <i class="fa-duotone fa-bookmark"
                                       style="--fa-primary-color: #b0b0b0; --fa-secondary-color: #c2c2c2;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="article article-vertical">
                    <a href="#">
                        <img src="{{ asset('img/img_3.jpg') }}" alt="#" class="article-img">
                    </a>
                    <div class="article-body">
                        <div class="article-content">
                            <a href="#">
                                <h1 class="title">عنوان مقاله</h1>
                                <p class="description">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک
                                    است.
                                </p>
                            </a>
                        </div>
                        <div class="article-footer">
                            <div class="details">
                                <span>2022/02/1</span>
                                <span>علیرضا سیدی</span>
                            </div>

                            <div class="control">
                                <a href="#">
                                    <i class="fa-regular fa-heart"
                                       style="color:#b0b0b0 "></i>
                                    <span>34</span>
                                    {{--<i class="fa fa-heart" style="color: red"></i>--}}
                                </a>
                                <a href="#">
                                    {{--<i class="fa-duotone fa-bookmark"
                                       style="--fa-primary-color: #205995; --fa-secondary-color: #205995;"></i>--}}
                                    <i class="fa-duotone fa-bookmark"
                                       style="--fa-primary-color: #b0b0b0; --fa-secondary-color: #c2c2c2;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="article article-vertical">
                    <a href="#">
                        <img src="{{ asset('img/img_3.jpg') }}" alt="#" class="article-img">
                    </a>
                    <div class="article-body">
                        <div class="article-content">
                            <a href="#">
                                <h1 class="title">عنوان مقاله</h1>
                                <p class="description">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک
                                    است.
                                </p>
                            </a>
                        </div>
                        <div class="article-footer">
                            <div class="details">
                                <span>2022/02/1</span>
                                <span>علیرضا سیدی</span>
                            </div>

                            <div class="control">
                                <a href="#">
                                    <i class="fa-regular fa-heart"
                                       style="color:#b0b0b0 "></i>
                                    <span>34</span>
                                    {{--<i class="fa fa-heart" style="color: red"></i>--}}
                                </a>
                                <a href="#">
                                    {{--<i class="fa-duotone fa-bookmark"
                                       style="--fa-primary-color: #205995; --fa-secondary-color: #205995;"></i>--}}
                                    <i class="fa-duotone fa-bookmark"
                                       style="--fa-primary-color: #b0b0b0; --fa-secondary-color: #c2c2c2;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="article article-vertical">
                    <a href="#">
                        <img src="{{ asset('img/img_3.jpg') }}" alt="#" class="article-img">
                    </a>
                    <div class="article-body">
                        <div class="article-content">
                            <a href="#">
                                <h1 class="title">عنوان مقاله</h1>
                                <p class="description">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک
                                    است.
                                </p>
                            </a>
                        </div>
                        <div class="article-footer">
                            <div class="details">
                                <span>2022/02/1</span>
                                <span>علیرضا سیدی</span>
                            </div>

                            <div class="control">
                                <a href="#">
                                    <i class="fa-regular fa-heart"
                                       style="color:#b0b0b0 "></i>
                                    <span>34</span>
                                    {{--<i class="fa fa-heart" style="color: red"></i>--}}
                                </a>
                                <a href="#">
                                    {{--<i class="fa-duotone fa-bookmark"
                                       style="--fa-primary-color: #205995; --fa-secondary-color: #205995;"></i>--}}
                                    <i class="fa-duotone fa-bookmark"
                                       style="--fa-primary-color: #b0b0b0; --fa-secondary-color: #c2c2c2;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="article article-vertical">
                    <a href="#">
                        <img src="{{ asset('img/img_3.jpg') }}" alt="#" class="article-img">
                    </a>
                    <div class="article-body">
                        <div class="article-content">
                            <a href="#">
                                <h1 class="title">عنوان مقاله</h1>
                                <p class="description">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک
                                    است.
                                </p>
                            </a>
                        </div>
                        <div class="article-footer">
                            <div class="details">
                                <span>2022/02/1</span>
                                <span>علیرضا سیدی</span>
                            </div>

                            <div class="control">
                                <a href="#">
                                    <i class="fa-regular fa-heart"
                                       style="color:#b0b0b0 "></i>
                                    <span>34</span>
                                    {{--<i class="fa fa-heart" style="color: red"></i>--}}
                                </a>
                                <a href="#">
                                    {{--<i class="fa-duotone fa-bookmark"
                                       style="--fa-primary-color: #205995; --fa-secondary-color: #205995;"></i>--}}
                                    <i class="fa-duotone fa-bookmark"
                                       style="--fa-primary-color: #b0b0b0; --fa-secondary-color: #c2c2c2;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="article article-vertical">
                    <a href="#">
                        <img src="{{ asset('img/img_3.jpg') }}" alt="#" class="article-img">
                    </a>
                    <div class="article-body">
                        <div class="article-content">
                            <a href="#">
                                <h1 class="title">عنوان مقاله</h1>
                                <p class="description">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک
                                    است.
                                </p>
                            </a>
                        </div>
                        <div class="article-footer">
                            <div class="details">
                                <span>2022/02/1</span>
                                <span>علیرضا سیدی</span>
                            </div>

                            <div class="control">
                                <a href="#">
                                    <i class="fa-regular fa-heart"
                                       style="color:#b0b0b0 "></i>
                                    <span>34</span>
                                    {{--<i class="fa fa-heart" style="color: red"></i>--}}
                                </a>
                                <a href="#">
                                    {{--<i class="fa-duotone fa-bookmark"
                                       style="--fa-primary-color: #205995; --fa-secondary-color: #205995;"></i>--}}
                                    <i class="fa-duotone fa-bookmark"
                                       style="--fa-primary-color: #b0b0b0; --fa-secondary-color: #c2c2c2;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="article article-vertical">
                    <a href="#">
                        <img src="{{ asset('img/img_3.jpg') }}" alt="#" class="article-img">
                    </a>
                    <div class="article-body">
                        <div class="article-content">
                            <a href="#">
                                <h1 class="title">عنوان مقاله</h1>
                                <p class="description">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک
                                    است.
                                </p>
                            </a>
                        </div>
                        <div class="article-footer">
                            <div class="details">
                                <span>2022/02/1</span>
                                <span>علیرضا سیدی</span>
                            </div>

                            <div class="control">
                                <a href="#">
                                    <i class="fa-regular fa-heart"
                                       style="color:#b0b0b0 "></i>
                                    <span>34</span>
                                    {{--<i class="fa fa-heart" style="color: red"></i>--}}
                                </a>
                                <a href="#">
                                    {{--<i class="fa-duotone fa-bookmark"
                                       style="--fa-primary-color: #205995; --fa-secondary-color: #205995;"></i>--}}
                                    <i class="fa-duotone fa-bookmark"
                                       style="--fa-primary-color: #b0b0b0; --fa-secondary-color: #c2c2c2;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="article article-vertical">
                    <a href="#">
                        <img src="{{ asset('img/img_3.jpg') }}" alt="#" class="article-img">
                    </a>
                    <div class="article-body">
                        <div class="article-content">
                            <a href="#">
                                <h1 class="title">عنوان مقاله</h1>
                                <p class="description">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک
                                    است.
                                </p>
                            </a>
                        </div>
                        <div class="article-footer">
                            <div class="details">
                                <span>2022/02/1</span>
                                <span>علیرضا سیدی</span>
                            </div>

                            <div class="control">
                                <a href="#">
                                    <i class="fa-regular fa-heart"
                                       style="color:#b0b0b0 "></i>
                                    <span>34</span>
                                    {{--<i class="fa fa-heart" style="color: red"></i>--}}
                                </a>
                                <a href="#">
                                    {{--<i class="fa-duotone fa-bookmark"
                                       style="--fa-primary-color: #205995; --fa-secondary-color: #205995;"></i>--}}
                                    <i class="fa-duotone fa-bookmark"
                                       style="--fa-primary-color: #b0b0b0; --fa-secondary-color: #c2c2c2;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </article>
            </section>
        </div>
    </div>
@endsection
