@extends('layouts.body')

@section('logotitle')
    Admin
@endsection

@section('activeSalles')
    active
@endsection

@section('content')

    <div class="container w-100 bg-light" style="max-height:86vh; overflow:auto;">
        


        @if(session('success'))
        <div class="alert alert-success mt-1">
            <ul>
                <li style="text-align: center; list-style-type:none">{{ session('success') }}</li>
            </ul>
        </div>
        @endif

        <br>
        <h2 style="
            width:100%; 
            text-align: center;
            color:#3e4ea7;
            font-weight:normal;">
            TOUT LES SALLES
        </h2>
        <br>

        <a href="/admin/salles/create"  id='add' class="btn text-light rounded-0"  style="background-color:#fd5234;">
            Ajouter +
        </a>

        <div>
            <br>
            <div class="table">
                <div class="table-header">
                    <div class="header__item"><a id="name" class="filter__link" href="#">Type_salle</a></div>
                    <div class="header__item"><a id="name" class="filter__link" href="#">Nbr_places</a></div>
                    <div class="header__item"><a id="wins" class="filter__link filter__link--number" href="#">Nom_faculte</a></div>
                    <div class="header__item"><a id="draws" class="filter__link filter__link--number" href="#">Action</a></div>
                </div>
               
                <div class="table-content">	
                    @foreach ($salles as $salle)
                        <div class="table-row">		
                            <div class="table-data">Salle {{$salle['type_salle']}}</div>
                            <div class="table-data">{{$salle['nbr_places']}}</div>
                            <div class="table-data">{{$salle['nom_faculte']}}</div>
                            <div class="table-data d-flex justify-content-center">
                                <form action="/admin/salles/{{$salle['id']}}/edit" method="GET">
                                    @csrf
                                    <button type="submit" style="border:none; background:none;">
                                        <i style="color:#fd5234; min-width:30px; font-size:20px;" class="fa-solid fa-pen-to-square"></i>
                                    </button>
                                </form>
                                <a href="javascript:void(0)" onclick="deleteSalle({{$salle['id']}})"><i style="color:#fd5234; min-width:30px; font-size:20px;" class="fa-solid fa-trash"></i></a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="d-flex justify-content-center">
                {{ $salles->links() }}
            </div>
        </div>


        <script>
            function updateSalle(id)
            {
                $('#UpdateSalleModel').modal('toggle');
                $.get('/admin/salles/'+id, function(data){
                    $('#type_salle').val(data.type_salle);
                    $('#nom_faculte').val(data.nom_faculte);
                    $('#nbr_places').val(data.nbr_places);
                    $('#id').val(id); 
                });
            }
            

            $(document).ready(function() {
            //add data;
                $('#UpdateSalleForm').on('submit', function(e) {
                    e.preventDefault();
                    var type_salle = $('#type_salle').val();
                    var nom_faculte = $('#nom_faculte').val();
                    var nbr_places = $('#nbr_places').val();
                    var id = $('#id').val();
                    var url = "{{ route('admin.salles.update', ':id') }}";
                        url = url.replace(':id', id);

                    // Envoi de la requête POST vers la route 'users.store'
                    $.ajax({
                        url: url,
                        type: "PUT",
                        data: {
                            "_token": "{{ csrf_token() }}",
                            "type_salle": type_salle,
                            "nbr_places": nbr_places,
                            "nom_faculte": nom_faculte
                        },
                        success:function(data) {
                            alert('User added successfully!');
                            $('#addUserForm')[0].reset();  
                        }
                    });
                location.reload();
                });
            });


            function deleteSalle(id)
            {
                $('#deleteSalleModal').modal('toggle');
                $('#deleteSalleForm').attr('action','salles/'+id);
            }
        </script>

    </div>
@endsection