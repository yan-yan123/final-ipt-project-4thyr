@extends('base')

@extends('navbar')

@section('title', 'Dashboard')

@section('content')
    <div class="container w-25">
        <a href="/recent-post" id="dash-link">
            <div class="container bg-primary m-3 d-flex align-items-center justify-content-around">
                <span class="text-white float-right" id="text"><i class="fa-solid fa-person"></i></span><br>
                <span class="text-white" id="text2">{{ $allPosts }}</span>

            </div>
        </a>
        <a href="/my-post" id="dash-link">
            <div class="container bg-primary m-3 d-flex align-items-center justify-content-around">
                <span class="text-white float-right" id="text"><i class="fa-solid fa-plus"></i></span><br>
                <span class="text-white" id="text2">{{ $posts }}</span>
            </div>
        </a>

    </div>

@endsection

<style>
    .card {
        width: 240px;
    }

    .card:hover {
        transform: scale(1.02);
        transition: transform 0.1s ease;
    }

    #dash-icon {
        font-size: 30px;
        opacity: 0.5;
    }

    #dash-link {
        text-decoration: none;
    }


    .time {
        opacity: 0.8;
    }

    .recent-only {
        border: 1px solid rgba(0, 0, 0, 0.23);
        border-radius: 10px;
        box-shadow: 3px 3px 1px 0px rgba(0, 0, 0, 0.2);
    }
</style>
