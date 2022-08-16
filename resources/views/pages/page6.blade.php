@extends('layouts.master')

@section('content')


    <section class="text-center margin-top-section">

        <H1 class="h1-mod">Bitte warten, iPhone wird gescannt</H1>

        <div>
            <h1 id="countdown" class="h1-mod">10</h1>
        </div>

    </section>

        <script>
            setTimeout(function() {
                window.location.href = "http://127.0.0.1:8000/seven"
            }, 10000); // 2 second

            var timeleft = 9;
            var downloadTimer = setInterval(function(){
                if(timeleft <= 0){
                    clearInterval(downloadTimer);
                    document.getElementById("countdown").innerHTML = "";
                } else {
                    document.getElementById("countdown").innerHTML = timeleft;
                }
                timeleft -= 1;
            }, 1000);

        </script>

@endsection
