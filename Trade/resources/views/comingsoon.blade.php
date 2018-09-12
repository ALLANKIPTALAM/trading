@extends('layouts.comingsoon')
@section('content')

    <!-- error banner -->
    <div class="soon_banner layer">
        <div class="container">
            <!-- content -->
            <div class="soon-content-agile">
                <div class="w3l-agile text-center">
                    <p>Stay tuned</p>
                    <h4>launching soon</h4>
                </div>
                <!--timer-->
                <div class="examples my-5">
                    <div class="simply-countdown-losange" id="simply-countdown-losange"></div>
                </div>
                <!--//timer-->
                <div class="sub_soon d-flex justify-content-center">
                    <a href="#" class="main_subscribe" data-toggle="modal" aria-pressed="false" data-target="#exampleModal2" role="button">subscribe to get notified</a>
                </div>
            </div>
            <!-- //content -->
        </div>
    </div>
    <!-- // error banner -->
@endsection()