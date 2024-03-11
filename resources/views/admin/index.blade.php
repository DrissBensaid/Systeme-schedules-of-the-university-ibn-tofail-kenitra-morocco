@extends('layouts.body')

@section('content')

    <div class="container bg-light">
        <br>
        <div class="row">
            <div class="col-md-3">
              <div class="card-counter primary">
                <i class="fa-solid fa-book-atlas"></i>
                <span class="count-numbers">{{$filieres}}</span>
                <span class="count-name">Filieres</span>
              </div>
            </div>
            
            <div class="col-md-3">
                <div class="card-counter info">
                  <i class="fa fa-users"></i>
                  <span class="count-numbers">{{$professeurs}}</span>
                  <span class="count-name">Professeurs</span>
                </div>
              </div>

            <div class="col-md-3">
              <div class="card-counter primary">
                <i class="fa-solid fa-landmark"></i>
                <span class="count-numbers">{{$salles}}</span>
                <span class="count-name">Salles</span>
              </div>
            </div>
        
            <div class="col-md-3">
              <div class="card-counter info">
                <i class="fa-solid fa-layer-group"></i>
                <span class="count-numbers">{{$semestres}}</span>
                <span class="count-name">Semestres</span>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card-counter info">
                <i class="fa-solid fa-people-group"></i>
                <span class="count-numbers">{{$groupes}}</span>
                <span class="count-name">Groupes</span>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card-counter primary">
                <i class="fa-sharp fa-solid fa-file-lines"></i>
                <span class="count-numbers">{{$modules}}</span>
                <span class="count-name">Modules</span>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card-counter info">
                <i class="fa-solid fa-calendar-days"></i>
                <span class="count-numbers">{{$emplois}}</span>
                <span class="count-name">Emplois</span>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card-counter primary">
                <i class="fa fa-user"></i>
                <span class="count-numbers">1</span>
                <span class="count-name">Administrateurs</span>
              </div>
            </div>

        

    </div>

@endsection