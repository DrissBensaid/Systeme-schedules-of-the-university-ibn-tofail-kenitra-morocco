@extends('layouts.body')

@section('content')

    <div class="container w-100 d-flex flex-column justify-content-center align-items-center bg-light">
        @if(session('success'))
        <div class="alert alert-success mt-3 w-100">
            <ul>
                    <li style="text-align: center; list-style-type:none">{{ session('success') }}</li>
            </ul>
        </div>
        @endif
        <form class="p-2 d-flex flex-column justify-content-around align-items-center rounded" 
         style="background:rgb(255, 255, 255); min-width:50%; " 
         action="{{route('admin.semestre.store')}}" method="POST">
            @csrf
            <img src="/images/image1.jpg" style="max-width: 300px;">
            <div class="mb-3 w-100 d-flex flex-column justify-content-center align-items-center">
              <label for="prenom" class=""
              style="color:#3e4ea7; font-weight: bold; width:80%;">SEMESTRE :</label>
              <input type="text" 
                     style="border:solid 0.3px #3e4ea7; 
                            min-height:35px;
                            width:80%;
                            border-radius:1px;"
                     class="form-control" 
                     id="semestre" 
                     name="semestre" 
                     placeholder="DONNER VOTRE SEMESTRE ...">
            </div>
            <div class="mb-3 w-100 d-flex flex-column justify-content-center align-items-center">
                <label for="prenom" class=""
                style="color:#3e4ea7; font-weight: bold; width:80%;">CAPACITE :</label>
                <input type="text" 
                       style="border:solid 0.3px #3e4ea7; 
                              min-height:35px;
                              width:80%;
                              border-radius:1px;"
                       class="form-control" 
                       id="capacite" 
                       name="capacite" 
                       placeholder="DONNER VOTRE CAPACITE ...">
              </div>
            <div class="mb-3 w-100 d-flex flex-column justify-content-center align-items-center">
                <label for="prenom" class=""
                style="color:#3e4ea7; font-weight: bold; width:80%;">FILIERE:</label>
                <select 
                        style="border:solid 0.3px #3e4ea7; 
                                    min-height:35px;
                                    width:80%;
                                    border-radius:1px;"
                        class="form-control" 
                        name="filiere">
                    @foreach($filieres as $filiere)
                        <option value="{{$filiere->id}}">{{$filiere->filiereFr}}</option>
                    @endforeach
                    
                </select>
              </div>

            <div class="modal-footer border-0 w-100 justify-content-around">
                <button type="submit" 
                style="background-color:#3e4ea7; 
                       min-height:35px; 
                       min-width:46%; 
                       font-weight:bold; 
                       width:84%;
                       border-radius:1px;"  
                class="btn text-light">AJOUTER</button> 
            </div>
            
        </form>
        
    </div>
@endsection