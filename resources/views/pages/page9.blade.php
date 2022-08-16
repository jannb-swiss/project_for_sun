@extends('layouts.master')

@section('content')

    <section class="text-center margin-top-section">

        <H1 class="h1-mod">Telefonnummer eingeben</H1>

            <div class="weight-mod text-center">
                <input type="text" class="form-control" placeholder="Telefonnummer" aria-label="Recipient's username"
                       aria-describedby="basic-addon2">
            </div>
            <div class="mt-2">
                <a href="/ten" class="btn btn-lg btn-primary">Bestätigen</a>
            </div>

    </section>

@endsection
