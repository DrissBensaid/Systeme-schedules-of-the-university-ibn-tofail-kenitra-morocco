@extends('layouts.body')

@section('activeHome')
    active
@endsection

@section('logotitle')
    
@endsection

@section('list')
    <div style="min-height: 90vh; background-color:rgb(40, 57, 101);" class="w-25 " >
        <ul class="list-group w-100">
            <a href='{{route("user.home")}}' style="background-color:rgba(40,57,101,.9)"  class="list-group-item  d-flex justify-content-between align-items-center text-light @yield('activeHome')">
            HOME
            <span class="badge bg-dark rounded-pill"></span>
            </a>
            <a href='{{route("user.profile.index")}}' style="background-color:rgba(40,57,101,.9)" class="list-group-item  d-flex justify-content-between align-items-center text-light @yield('activeProfil')">
            PROFIL
            <span class="badge bg-dark rounded-pill"></span>
            </a>
            <a href='{{route("user.salles.index")}}' style="background-color:rgba(40,57,101,.9)" class="list-group-item  d-flex justify-content-between align-items-center text-light @yield('activeSalles')">
                SALLES
                <span class="badge bg-dark rounded-pill"></span>
            </a>
            <a href='{{route("user.contact.show")}}' style="background-color:rgba(40,57,101,.9)" class="list-group-item  d-flex justify-content-between align-items-center text-light @yield('CONTACT_ADMINISTRATEUR')">
                CONTACT_ADMINISTRATEUR
                <span class="badge bg-dark rounded-pill"></span>
            </a>
        </ul>
    </div>
@endsection

@section('content')
    <div class="w-100">
    </div>
@endsection