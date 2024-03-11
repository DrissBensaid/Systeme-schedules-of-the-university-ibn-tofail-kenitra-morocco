@extends('layouts.body')

@section('content')

    <div class="container w-100">
        <br>
        <h2 style="
            width:100%; 
            text-align: center;
            color:#3e4ea7;
            font-weight:normal;">
            TOUT LES COURS
        </h2>
        <a href="{{route('admin.cours.create')}}" class="btn text-light" style="background-color:#fd5234;border-radius:2px;font-weight:bold;">AJOUTER +</a>
        <div>
            <br>
            <div class="table bg-white">         
                <div class="table-header">
                    <div class="header__item"><a id="name" class="filter__link" href="#">jour</a></div>
                    <div class="header__item"><a id="name" class="filter__link" href="#">debut De Seance</a></div>
                    <div class="header__item"><a id="name" class="filter__link" href="#">fin De Seance</a></div>
                    <div class="header__item"><a id="name" class="filter__link" href="#">salle</a></div>
                    <div class="header__item"><a id="name" class="filter__link" href="#">module</a></div>
                    <div class="header__item"><a id="name" class="filter__link" href="#">groupe</a></div>
                    <div class="header__item"><a id="name" class="filter__link" href="#">action</a></div>
                </div>
                <div class="table-content">	
                    @foreach ($cours as $item)
                    <div class="table-row ">
                        <div class="table-data">{{$item['jour']}}</div>
                        <div class="table-data">{{$item['debutDeSeance']}}</div>
                        <div class="table-data">{{$item['finDeSeance']}}</div>
                        <div class="table-data">{{$item['salle']}}</div>
                        <div class="table-data">{{$item['module']}}</div>
                        <div class="table-data">{{$item->nomGroupe}}</div>
                        <div class="table-data d-flex justify-content-center">
                            <form action="/admin/cours/{{$item['id']}}/edit" method="get">
                                @csrf
                                <button class="border-0 bg-light"><i style="color:#fd5234; min-width:30px; font-size:20px;" class="fa-solid fa-pen-to-square"></i></button>
                            </form>
                            <form action="/admin/cours/{{$item['id']}}" method="post">
                                @csrf
                                @method('delete')
                                <button class="border-0 bg-light"><i style="color:#fd5234; min-width:30px; font-size:20px;" class="fa-solid fa-trash"></i></button>
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
