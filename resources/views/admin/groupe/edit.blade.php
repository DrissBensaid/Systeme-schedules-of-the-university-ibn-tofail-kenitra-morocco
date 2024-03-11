@extends('layouts.body')

@section('content')

    <div class="container w-100 d-flex flex-column justify-content-center align-items-center bg-light"
    style="max-height:86vh; overflow:auto; padding-top:130px; padding-bottom:20px;">
        @if(session('success'))
            <div class="alert alert-success mt-3" style="min-width:50%">
                <ul>
                
                        <li style="text-align: center; list-style-type:none">{{ session('success') }}</li>
                    
                </ul>
            </div>
        @endif
        <form class="p-2 d-flex flex-column justify-content-around align-items-center rounded" 
         style="background:rgb(255, 255, 255); min-width:50%; min-height:84vh;" 
         action="/admin/groupe/{{$groupe->id}}" method="POST">
            @csrf
            @method('PUT')
            <img src="/images/image1.jpg" style="max-width: 300px;">
            <div class="mb-3 w-100 d-flex flex-column justify-content-center align-items-center">
              <label for="prenom" class=""
              style="color:#3e4ea7; font-weight: bold; width:80%;">NOM GROUPE :</label>
              <input type="text" 
                     style="border:solid 0.3px #3e4ea7; 
                            min-height:35px;
                            width:80%;
                            border-radius:1px;"
                     class="form-control" 
                     id="nomGroupe" 
                     name="nomGroupe" 
                     value="{{$groupe->nomGroupe}}"
                     placeholder="DONNER VOTRE GROUPE ...">
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
                        name="filiere"
                        id="filiere">
                        <option value="" disabled selected>SELECTER VOTRE FILIERE</option>
                        @foreach($filieres as $filiere)
                        <option value="{{$filiere->id}}">{{$filiere->filiereFr}}</option>
                        @endforeach
                </select>
              </div>
             <div class="mb-3 w-100 d-flex flex-column justify-content-center align-items-center">
                <label for="prenom" class=""
                style="color:#3e4ea7; font-weight: bold; width:80%;">SEMESTRE:</label>
                <select 
                        style="border:solid 0.3px #3e4ea7; 
                                    min-height:35px;
                                    width:80%;
                                    border-radius:1px;"
                        class="form-control" 
                        name="semestre"
                        id='semestre'>
                        <option value="" disabled selected>SELECTER VOTRE SEMESTRE</option>
                                     
                </select>
              </div>
             <div class="mb-3 w-100 d-flex flex-column justify-content-center align-items-center">
                <label for="prenom" class=""
                style="color:#3e4ea7; font-weight: bold; width:80%;">MODULE:</label>
                <select 
                        style="border:solid 0.3px #3e4ea7; 
                                    min-height:35px;
                                    width:80%;
                                    border-radius:1px;"
                        class="form-control" 
                        name="module"
                        id='module'>
                        <option value="{{$groupe->module_id}}">{{$groupe->module->moduleFr}}</option>
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
                class="btn text-light">UPDATE</button> 
            </div>
            
        </form>
        <script>
                    $('#filiere').on('change', function(e) {
                        var filiere = $('#filiere').val();
                        var url = "{{ route('admin.module.show', ':id') }}";
                            url = url.replace(':id', filiere);
                        $.ajax({
                            url: url,
                            type: "GET",
                            data: {
                                "_token": "{{ csrf_token() }}",
                                "id": filiere,
                            },
                            success:function(data) {
                                $('#semestre').empty();
                                $('#semestre').append('<option value="" disabled selected>SELECTER VOTRE SEMESTRE</option>');
                                $.each(data, function(key, value) {
                                    $('#semestre').append('<option value="' + key + '">' + value + '</option>');
                                });
                            },
                            error:function(data) {
                                alert('Error adding user.');
                            }
                        });
                    });
                    
                    $('#semestre').on('change', function(e) {
                        var semestre = $('#semestre').val();
                        var url = "{{ route('admin.groupe.show', ':id') }}";
                            url = url.replace(':id', semestre);
                        $.ajax({
                            url: url,
                            type: "GET",
                            data: {
                                "_token": "{{ csrf_token() }}",
                                "id": semestre,
                            },
                            success:function(data) {
                                $('#module').empty();
                                $('#module').append('<option value="" disabled selected>SELECTER VOTRE MODULE</option>');
                                $.each(data, function(key, value) {
                                    $('#module').append('<option value="' + key + '">' + value + '</option>');
                                });
                            },
                            error:function(data) {
                                alert('Error adding user.');
                            }
                        });
                    });
        </script>
        
    </div>
@endsection