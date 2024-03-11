@extends('layouts.body')


@section('logotitle')
    {{$user->nom.' '.$user->prenom}}
@endsection


@section('activeProfil')
    active
@endsection


@section('list')
    <div style="min-height: 90vh; background-color:rgb(40, 57, 101);" class="w-25">
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
                  <div class="card w-100" style="min-height: 80vh">
                    <div class="rounded-0 text-white d-flex flex-row" style="height:200px; background-color:rgba(40, 57, 101, 0.644);">
                      <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">
                        <svg class="img-fluid img-thumbnail pt-3 pb-3 mt-4 mb-2 " style="width: 150px; z-index: 1; min-height:150px; background-color:rgba(40, 57, 101, 0.808);"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>
                        <button type="button" class="btn btn-outline-dark" data-mdb-ripple-color="dark"
                          style="z-index: 1; " >
                          EDIT_PROFILE
                        </button>
                      </div>
                      <div class="ms-3" style="margin-top: 130px;">
                        <h5 style='color:rgba(40,57,101,.9); text-transform: uppercase;' >{{$user->nom.' '.$user->prenom}}</h5>
                        <p style='color:#fd5234; text-transform: uppercase;' >Kénitra</p>
                      </div>
                    </div>
                    <div class="p-4 text-black" style="background-color: #f8f9fa; min-height: 60vh">
                        <div class="d-flex justify-content-end text-center py-1">
                            <div>
                              <p style='color:rgba(40,57,101,.9);text-transform: uppercase;' class="mb-1 h5">{{$user->poste}}</p>
                              <p class="small  mb-0" style='color:#fd5234; text-transform: uppercase;'>Poste</p>
                            </div>
                            <div class="px-3">
                              <p style='color:rgba(40,57,101,.9); text-transform: uppercase;' class="mb-1 h5">Ibn Tofail</p>
                              <p class="small  mb-0" style='color:#fd5234; text-transform: uppercase;'>Faculté</p>
                            </div>
                    </div>
                    <div class="card-body text-black">
                        
                          <p class="lead fw-normal  h5" style='color:rgba(40,57,101,.9); text-transform: uppercase;'>Contact : </p>
                          <div class="p-1" style="background-color: #f8f9fa;">
                            <p class="font-italic " style='color:rgba(40,57,101,.9); text-transform: uppercase;'> <span class="lead " style='color:#fd5234; text-transform: uppercase;'>Email :</span>  {{$user->email}}</p>
                            <p class="font-italic " style='color:rgba(40,57,101,.9); text-transform: uppercase;'> <span class="lead " style='color:#fd5234; text-transform: uppercase;'>Téléphone:</span> {{$user->telephone}}</p>
                          </div>
                        
                    </div>
                    </div>
                  </div>    
    </div>
@endsection