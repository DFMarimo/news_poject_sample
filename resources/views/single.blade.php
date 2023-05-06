@extends('layouts.master')
@section('base')
    @includeIf('layouts.partitions.navbar')
    <div class="articles">
        <div class="container">
            <section class="single" style="">
                <img src="{{asset('img/img_1.jpg')}}" alt="">
                <h1>dsadsdsds</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci cumque dolores eos ex illo odio
                    placeat recusandae saepe. A aliquid exercitationem illum magnam molestias nobis optio quasi repellat
                    reprehenderit sit.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque dolores et illo magnam temporibus
                    voluptatum. Alias, consequuntur cumque esse eveniet ex quaerat quas qui quo ratione veniam? Dolores
                    impedit, sapiente.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi culpa error eum exercitationem,
                    fugiat possimus quibusdam! Dignissimos, ducimus ipsam modi quasi qui quis voluptas? Blanditiis esse
                    eum ex ratione sapiente.
                </p>
                <div
                    style="text-align: left; font-size: 1.5rem; display: flex ;align-items: center ; justify-content: space-between">
                    <div>
                        <span class="detail">2022/02/1</span>
                        <span class="detail">علیرضا سیدی</span>
                    </div>
                    <div>
                        <a href="#">
                            <span class="detail">34</span>
                            <i class="fa-regular fa-heart"
                               style="color:#b0b0b0 "></i>

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
            </section>
        </div>
    </div>
@endsection
