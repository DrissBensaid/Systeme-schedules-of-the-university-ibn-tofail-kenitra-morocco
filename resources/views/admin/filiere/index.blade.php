@extends('layouts.body')

@section('logotitle')
    Admin
@endsection

@section('activeUser')
    active
@endsection

@section('content')

    <div class="container w-100 bg-light">
        <br>
        @if(session('success'))
        <div class="alert alert-success mt-3">
            <ul>
               
                    <li style="text-align: center; list-style-type:none">{{ session('success') }}</li>
                
            </ul>
        </div>
        @endif
        <h2 style="
            width:100%; 
            text-align: center;
            color:#3e4ea7;
            font-weight:normal;">
            TOUT LES FILIERES
        </h2>

        <a href="{{route('admin.filiere.create')}}" class="btn text-light" style="background-color:#fd5234;border-radius:2px;font-weight:bold;">AJOUTER +</a>


        <div>
            <br>

            <div class="table">         
                <div class="table-header">
                    <div class="header__item"><a id="name" class="filter__link" href="#">Filiere fr</a></div>
                    <div class="header__item"><a id="name" class="filter__link" href="#">Filiere Ar</a></div>
                    <div class="header__item"><a id="name" class="filter__link" href="#">action</a></div>
                </div>
                <div class="table-content">	
                    @foreach($filieres as $filiere)
                    <div class="table-row bg-white">
                        <div class="table-data">{{$filiere['filiereFr']}}</div>
                        <div class="table-data">{{$filiere['filiereAr']}}</div>
                        <div class="table-data d-flex justify-content-center">
                            <form action="/admin/filiere/{{$filiere['id']}}/edit" method="get">
                                @csrf
                                <button class="border-0 bg-white"><i style="color:#fd5234; min-width:30px; font-size:20px;" class="fa-solid fa-pen-to-square"></i></button>
                            </form>
                            <form action="/admin/filiere/{{$filiere['id']}}" method="post">
                                @csrf
                                @method('delete')
                                <button class="border-0 bg-white"><i style="color:#fd5234; min-width:30px; font-size:20px;" class="fa-solid fa-trash"></i></button>
                            </form>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
                <div class="d-flex justify-content-center">
                    {{-- {{ $users->links() }} --}}
                </div>
        </div>
        <script>

        </script>
    </div>
@endsection
