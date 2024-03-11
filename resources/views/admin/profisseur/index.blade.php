@extends('layouts.body')

@section('logotitle')
    Admin
@endsection

@section('activeUser')
    active
@endsection

@section('content')

    <div class="container w-100 bg-light">
        
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li style="text-align: center; list-style-type:none">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        @if(session('success'))
        <div class="alert alert-success">
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
            TOUT LES PROFESSEURS
        </h2>
        <br>
        <a href="/admin/users/create"  id='add' class="btn text-light font-weight-bold" style="background-color:#fd5234;border-radius: 2px;">
            AJOUTER +
        </a>
        


        <div>
            <br>

            <div class="table">         
                <div class="table-header">
                    <div class="header__item"><a id="name" class="filter__link" href="#">Nom</a></div>
                    <div class="header__item"><a id="name" class="filter__link" href="#">Prenom</a></div>
                    <div class="header__item"><a id="wins" class="filter__link filter__link--number" href="#">Poste</a></div>
                    <div class="header__item"><a id="draws" class="filter__link filter__link--number" href="#">E-mail</a></div>
                    <div class="header__item"><a id="losses" class="filter__link filter__link--number" href="#">Téléphone</a></div>
                    <div class="header__item"><a id="total" class="filter__link filter__link--number" href="#">Action</a></div>
                </div>
               
                <div class="table-content">	
                    @foreach ($users as $user)
                        <div class="table-row">		
                            <div class="table-data">{{$user['nom']}}</div>
                            <div class="table-data">{{$user['prenom']}}</div>
                            <div class="table-data">{{$user['poste']}}</div>
                            <div class="table-data">{{$user['email']}}</div>
                            <div class="table-data">{{$user['telephone']}}</div>
                            <div class="table-data d-flex justify-content-center">
                                <form action="/admin/users/{{$user['id']}}/edit" method="GET">
                                        @csrf
                                        <button type="submit" style="border:none; background:none;">
                                            <i style="color:#fd5234; min-width:30px; font-size:20px;" class="fa-solid fa-pen-to-square"></i>
                                        </button>
                                </form>
                                <a href="javascript:void(0)" onclick="deleteUser({{$user['id']}})"><i style="color:#fd5234; min-width:30px; font-size:20px;" class="fa-solid fa-trash"></i></a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

                <div class="d-flex justify-content-center">
                    {{ $users->links() }}
                </div>
        </div>


        <script>
            function updateUser(id)
            {
                $('#updatenew').modal('toggle');
                $.get('/admin/users/'+id, function(data){
                    $('#nom').val(data.nom);
                    $('#prenom').val(data.prenom);
                    $('#email').val(data.email);
                    $('#telephone').val(data.telephone);
                    $('#poste').val(data.poste);
                    $('#id').val(id);
                    
                });
            }
            

             $(document).ready(function() {
            //add data;
                    $('#updateForm').on('submit', function(e) {
                        e.preventDefault();
                        var nom = $('#nom').val();
                        var prenom = $('#prenom').val();
                        var email = $('#email').val();
                        var telephone = $('#telephone').val();
                        var poste = $('#poste').val();
                        var id = $('#id').val();
                        var url = "{{ route('admin.users.update', ':id') }}";
                            url = url.replace(':id', id);

                        // Envoi de la requête POST vers la route 'users.store'
                        $.ajax({
                            url: url,
                            type: "PUT",
                            data: {
                                "_token": "{{ csrf_token() }}",
                                "nom": nom,
                                "prenom": prenom,
                                "email": email,
                                "telephone": telephone,
                                "poste": poste
                            },
                            success:function(data) {
                                alert('User added successfully!');
                                $('#addUserForm')[0].reset();  
                            },
                            error:function(data) {
                                alert('Error adding user.');
                            }
                        });
                        location.reload();
                    });
           

             });


            function deleteUser(id)
            {
                $('#deleteUserModal').modal('toggle');
                $('#deleteUserForm').attr('action','users/'+id);
            }
        </script>
    </div>
@endsection
