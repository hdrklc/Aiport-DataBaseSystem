@extends('layouts.app', ['page' => __('Contact'), 'pageSlug' => 'profile'])
@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="card card-user">
                <div class="card-body">
                    <p class="card-text"></p>
                    <div class="author">
                        <div class="block block-one"></div>
                        <div class="block block-two"></div>
                        <div class="block block-three"></div>
                        <div class="block block-four"></div>
                        <a href="#">
                            <img class="avatar" src="{{ asset('black') }}/img/hıdır.jpg" alt="">
                            <h5 class="title"></h5>
                        </a>
                        <p class="description">
                            {{ __('Hıdır Kılıç') }}
                        </p>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="button-container">
                        <a href="https://www.linkedin.com/in/h%C4%B1d%C4%B1r-k%C4%B1l%C4%B1%C3%A7-372435224?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app ">
                            <button class="btn btn-icon btn-round btn-linkedin">
                                <i class="fab fa-linkedin-in">
                                </i>
                            </button>
                        </a>
                        <a href="https://www.instagram.com/hdr_klc">
                            <button class="btn btn-icon btn-round btn-instagram">
                                <i class="fab fa-instagram">

                                </i>
                            </button>
                        </a>
                        <a href="mailto:hidirkilic94@gmail.com">
                            <button class="btn btn-icon btn-round btn-google">
                                <i class="fab fa-google-plus">
                                </i>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-user">
                <div class="card-body">
                    <p class="card-text"></p>
                    <div class="author">
                        <div class="block block-one"></div>
                        <div class="block block-two"></div>
                        <div class="block block-three"></div>
                        <div class="block block-four"></div>
                        <a href="#">
                            <img class="avatar" src="{{ asset('black') }}/img/adil.jpg" alt="">
                            <h5 class="title"></h5>
                        </a>
                        <p class="description">
                            {{ __('Adilhan Koçak') }}
                        </p>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="button-container">
                        <a href="https://www.linkedin.com/in/adilhan-ko%C3%A7ak-0949bb255?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app ">
                            <button class="btn btn-icon btn-round btn-linkedin">
                                <i class="fab fa-linkedin-in">
                                </i>
                            </button>
                        </a>
                        <a href="https://www.instagram.com/adilhankocakk/">
                            <button class="btn btn-icon btn-round btn-instagram">
                                <i class="fab fa-instagram"></i>
                            </button>
                        </a>
                        <a href="mailto:adlhan345@gmail.com">
                            <button class="btn btn-icon btn-round btn-google">
                                <i class="fab fa-google-plus"></i>
                            </button>
                        </a>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-user">
                <div class="card-body">
                    <p class="card-text"></p>
                    <div class="author">
                        <div class="block block-one"></div>
                        <div class="block block-two"></div>
                        <div class="block block-three"></div>
                        <div class="block block-four"></div>
                        <a href="#">
                            <img class="avatar" src="{{ asset('black') }}/img/ibo.jpg" alt="">
                            <h5 class="title"></h5>
                        </a>
                        <p class="description">
                            {{ __('İbrahim Yeğen') }}
                        </p>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="button-container">
                        <a href="https://www.linkedin.com/in/ibrahim-ye%C4%9Fen-645597225?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app ">
                            <button class="btn btn-icon btn-round btn-linkedin">
                                <i class="fab fa-linkedin-in"></i>
                            </button>
                        </a>
                        <a href="https://www.instagram.com/57highway/">
                            <button class="btn btn-icon btn-round btn-instagram">
                                <i class="fab fa-instagram"></i>
                            </button>
                        </a>
                        <a href="mailto:ibrahimyegen02@gmail.com">
                            <button class="btn btn-icon btn-round btn-google">
                                <i class="fab fa-google-plus"></i>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
