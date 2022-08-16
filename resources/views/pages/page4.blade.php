@extends('layouts.master')

@section('content')

    <section class="text-center margin-top-section">

        <H1 class="h1-mod">Fach öffnet sich, bitte Gerät hineinlegen</H1>

        <div>
            <h1 id="countdown" class="h1-mod">5</h1>
        </div>

        <div>
            <i class="bi bi-arrow-down" style="font-size: 120px; color: red"></i>
        </div>

    </section>

    <script>
        setTimeout(function() {
            window.location.href = "http://68.183.1.72/five"
        }, 5000); // 2 second

        var timeleft = 4;
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
