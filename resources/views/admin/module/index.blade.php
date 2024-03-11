@extends('layouts.body')

@section('content')

    <div class="container w-100 bg-light">
        <br>
        @if(session('success'))
        <div class="alert alert-success mt-3 w-100">
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
            TOUT LES MODULES
        </h2>
        <a href="{{route('admin.module.create')}}" class="btn text-light" style="background-color:#fd5234;border-radius:2px;font-weight:bold;">AJOUTER +</a>
        <div>
            <br>
            <div class="table ">         
                <div class="table-header">
                    <div class="header__item"><a id="name" class="filter__link" href="#">module en francais</a></div>
                    <div class="header__item"><a id="name" class="filter__link" href="#">module en arabe</a></div>
                    <div class="header__item"><a id="name" class="filter__link" href="#">semestre</a></div>
                    <div class="header__item"><a id="name" class="filter__link" href="#">action</a></div>
                </div>
                <div class="table-content">	
                    @foreach ($modules as $module)
                    <div class="table-row bg-white">
                        <div class="table-data">{{$module['moduleFr']}}</div>
                        <div class="table-data">{{$module['moduleAr']}}</div>
                        <div class="table-data">{{$module->semestre->semestre}}</div>
                        <div class="table-data d-flex justify-content-center">
                            <form action="/admin/module/{{$module['id']}}/edit" method="get">
                                @csrf
                                <button class="border-0 bg-white"><i style="color:#fd5234; min-width:30px; font-size:20px;" class="fa-solid fa-pen-to-square"></i></button>
                            </form>
                            <form action="/admin/module/{{$module['id']}}" method="post">
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
