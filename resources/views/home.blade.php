@extends('layout.app')

@section('body')
    <!--cover section slider -->
    <section id="home" class="home-cover">
        <div class="cover_slider owl-carousel owl-theme">
            <div class="cover_item" style="background: url({{asset('assets/img/bg/slider.png')}});">
                <div class="slider_content">
                    <div class="slider-content-inner">
                        <div class="container">
                            <div class="slider-content-center">
                                <h2 class="cover-title">
                                    Do you have an event
                                </h2>
                                <strong class="cover-xl-text"></strong>
                                <p class="cover-date">
                                </p>
                                <a href="#" class=" btn btn-primary btn-rounded" >
                                    Create an Event now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cover_item" style="background: url('assets/img/bg/slider.png');">
                <div class="slider_content">
                    <div class="slider-content-inner">
                        <div class="container">
                            <div class="slider-content-left">
                                <h2 class="cover-title">
                                    Prepare yourself for the
                                </h2>
                                <strong class="cover-xl-text"></strong>
                                <p class="cover-date">

                                </p>
                                <a href="#" class=" btn btn-primary btn-rounded" >
                                    Buy Tickets Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cover_item" style="background: url('assets/img/bg/slider.png');">
                <div class="slider_content">
                    <div class="slider-content-inner">
                        <div class="container">
                            <div class="slider-content-center">
                                <h2 class="cover-title">

                                </h2>
                                <strong class="cover-xl-text"></strong>
                                <p class="cover-date">

                                </p>
                                <a href="#" class=" btn btn-primary btn-rounded" >
                                    Buy Tickets Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cover_nav">
            <ul class="cover_dots">
                <li class="active" data="0"><span>1</span></li>
                <li  data="1"><span>2</span></li>
                <li  data="2"><span>3</span></li>
            </ul>
        </div>
    </section>
    <!--cover section slider end -->


    <!--event calender-->
    <section class="pb100">
        <div class="container">
            <div class="table-responsive">
                <table class="event_calender table">
                    <thead class="event_title">
                    <tr>
                        <th>
                            <i class="ion-ios-calendar-outline"></i>
                            <span>Available Events</span>
                        </th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <img src="assets/img/cleander/c1.png" alt="event">
                        </td>
                        <td class="event_date">
                            14
                            <span>February</span>
                        </td>
                        <td>
                            <div class="event_place">
                                <h5>ZITF HALL - Bulawayo</h5>
                                <h6>16.00 - 22.00</h6>
                                <p>Winky D</p>
                            </div>
                        </td>
                        <td>
                            <a href="#" class="btn btn-primary btn-rounded">Read More</a>
                        </td>
                        <td class="buy_link">
                            <a href="#">buy tickets now</a>
                        </td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!--event calender end -->

    <!--brands section -->
    <section class="bg-gray pt100 pb100">
        <div class="container">
            <div class="section_title mb50">
                <h3 class="title">
                    our partners
                </h3>
            </div>

        </div>
    </section>
    <!--brands section end-->


    @endsection