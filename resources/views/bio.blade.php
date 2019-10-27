@extends('layout')

@section('content')
    <div class="container marketing top-margin">
        <div class="media">
            <img src="<?php echo url('images/lifemotto.png'); ?>" class="align-self-center mr-3" alt="Life Motto Photo">
            <div class="media-body">
                <h3 class="mt-0">Michelle At Home - It'll blow your mind</h3>
                <p>At home, I am a dating lesbian with three cats and a dog for furbabies. My girlfriend and I live in the University area of Charlotte, NC. For fun I like to play billiards, video games, board games, sing, dance, and just hang out with friends.</p>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="media">
            <div class="media-body">
                <h3 class="mt-0">Michelle At Work - One of a kind</h3>
                <p>At work, I am an ambitious team-player. Able to work both independently and with collaborative teams, as both team leader and team-player I am a versatile employee. I am detail-oriented, willing to get into the nitty-gritty of every project and make sure it is complete down to the dot of every 'i'.</p>
                <p class="mb-0">Eager to learn new skills at every corner, I will always find a way to accomplish my task. My high level of organization allows me to be very capable of multi-tasking, and I am always sure to prioritize tasks properly.</p>
            </div>
            <img src="<?php echo url('images/photo-keyboard.png'); ?>" class="align-self-center mr-3 margin-left" alt="Keyboard Photo">
        </div>

        <hr class="featurette-divider">

        <div class="media">
            <img src="<?php echo url('images/photo-twowomen.png'); ?>" class="align-self-center mr-3" alt="Two Women Walking Photo">
            <div class="media-body">
                <h3 class="mt-0">Michelle Roots - Diversity personified</h3>
                <p>Originally, I was born here in Charlotte, NC. I am the second daughter of four to a pair of loving, supportive parents.</p>
                <p class="mb-0">My mother is from Chile, she immigrated here when she was 16. She is now a corporate recruiter for major companies. My father has been an IT Project Manager for the City of Charlotte for the last 20 years. I aspire to follow in his footsteps and climb the IT ladder.</p>
            </div>
        </div>

        <hr class="featurette-divider">
    </div>
@endsection
