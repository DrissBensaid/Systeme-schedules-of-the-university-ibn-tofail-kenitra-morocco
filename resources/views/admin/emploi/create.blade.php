@extends('layouts.body')

@section('content')

    <div class="w-100 p-0 d-flex flex-column justify-content-center align-items-center bg-light" 
    style="max-height:90vh; overflow:auto;">

            @if(session('success'))
            <div class="alert alert-success w-75 mt-3">
                <ul>
                
                        <li style="text-align: center; list-style-type:none">{{ session('success') }}</li>
                     
                </ul>
            </div>
            @elseif(session('danger'))
            <div class="alert alert-danger w-75  mt-3">
                <ul>
                
                        <li style="text-align: center; list-style-type:none">{{ session('danger') }}</li>
                    
                </ul>
            </div>
            @endif
            
            <form class="d-flex flex-column align-items-center"
            style="width:100%;  max-height:80vh; overflow:auto;" action="/admin/emplois" method="POST">
                @csrf
                <div class="w-100 d-flex justify-content-center align-items-center">
                    <div class="mb-3  d-flex flex-column justify-content-center align-items-center">
                        <label for="prenom" class=""
                        style="color:#3e4ea7; font-weight: bold; width:80%;">FILIERE:</label>
                        <select 
                                style="
                                            min-height:35px;
                                            width:80%;
                                            border-radius:1px;
                                            max-height:15px;
                                            font-size:13px;"
                                class="form-control" 
                                name="filiere"
                                id="filiere">
                                <option value="" disabled selected>SELECTER VOTRE FILIERE</option>
                                @foreach($filieres as $filiere)
                                    <option value="{{$filiere->id}}">{{$filiere->filiereFr}}</option>
                                @endforeach
                        </select>
                      </div>
                     <div class="mb-3  d-flex flex-column justify-content-center align-items-center">
                        <label for="prenom" class=""
                        style="color:#3e4ea7; font-weight: bold; width:80%;">SEMESTRE:</label>
                        <select 
                                style="
                                            min-height:35px;
                                            width:80%;
                                            border-radius:1px;
                                            max-height:15px;
                                            font-size:13px;"
                                class="form-control" 
                                name="semestre_id"
                                id='semestre'>
                                <option value="" disabled selected>SELECTER VOTRE SEMESTRE</option>             
                        </select>
                      </div>
                      <div class="mb-3  d-flex flex-column justify-content-center align-items-center">
                        <label for="prenom" class=""
                        style="color:#3e4ea7; font-weight: bold; width:80%;">GROUPE:</label>
                        <select 
                                style="
                                            min-height:35px;
                                            width:80%;
                                            border-radius:1px;
                                            max-height:15px;
                                            font-size:13px;"
                                class="form-control" 
                                name="nomGroupe"
                                value=''
                                id='groupe'>
                                <option value="" disabled selected>SELECTER VOTRE GROUPE</option>
                        
                        </select>
                        
                    </div>
                      <div class="mb-3  d-flex flex-column justify-content-around align-items-center">
                        <label for="prenom" class=""
                        style="color:#3e4ea7; font-weight: bold; width:100%;">ANNEE:</label>
                        <div class="w-100 d-flex justify-content-center align-items-center">
                            <input type="number"  style="
                            min-height:35px;
                            width:80%;
                            border-radius:1px;
                            max-height:15px;"
                            class="form-control" 
                            name="annee1"
                            id='annee1' placeholder="YYYY" min="2020" max="2100"> 
                            <input type="number"  style="
                            min-height:35px;
                            width:80%;
                            border-radius:1px;
                            max-height:15px;"
                            class="form-control" 
                            name="annee2"
                            id='annee2' placeholder="YYYY" min="2020" max="2100">
                        </div>
                        
                        
                    </div>

                </div>
                <table class="" style="width:95%">
                    <thead>
                        <tr>
                            <th class="text-center">HEURES</th>
                            <th class="text-center">LUNDI</th>
                            <th class="text-center" >MARDI</th>
                            <th class="text-center">MERCREDI</th>
                            <th class="text-center">JEUDI</th>
                            <th class="text-center">VENDREDI</th>
                            <th class="text-center">SAMEDI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            <th class="text-center">
                                8:30-10:00
                            </th>
                            @for ($i = 1; $i<=6; $i++) 
        
                                <td>
                                    <div class="mb-3 w-100 d-flex flex-column justify-content-center align-items-center">
                                        <select 
                                                style="     min-height:35px;
                                                            width:80%;
                                                            border-radius:1px;
                                                            max-height:15px;
                                                            font-size:13px;"
                                                class="form-control w-100" 
                                                name="list{{$i}}"
                                                id='module{{$i}}'
                                                value=''>
                                                <option style="color:#3e4ea7;" value="" class="text-center">MODULE</option>
                                        </select>
                                        <select 
                                                style="
                                                            min-height:35px;
                                                            width:80%;
                                                            border-radius:1px;
                                                            max-height:15px;
                                                            font-size:13px;"
                                                class="form-control w-100" 
                                                name="salle{{$i}}"
                                                id="salle"
                                                value=''>
                                                <option value="" class="text-center" disabled selected>SALLE</option>
                                                
                                                @foreach($salles as $salle)
                                                <option class="text-center" value="{{$salle->type_salle}}">{{$salle->type_salle}}</option>
                                                @endforeach
                                        </select>
                                    </div>
                                </td>
                            @endfor
                        </tr>
                        <tr>
                            <th class="text-center">10:00-11:30</th>
                            @for ($i = 7; $i <= 12; $i++) 
        
                                <td>
                                    <div class="mb-3 w-100 d-flex flex-column justify-content-center align-items-center">
                                        
                                        <select 
                                                style="
                                                            min-height:35px;
                                                            width:80%;
                                                            border-radius:1px;
                                                            max-height:15px;
                                                            font-size:13px;"
                                                class="form-control w-100" 
                                                name="list{{$i}}"
                                                id='module{{$i}}'
                                                value=''>
                                                <option value="" class="text-center">MODULE</option>
                                        
                                        </select>
                                        <select 
                                                style="
                                                            min-height:35px;
                                                            width:80%;
                                                            border-radius:1px;
                                                            max-height:15px;
                                                            font-size:13px;"
                                                class="form-control w-100" 
                                                name="salle{{$i}}"
                                                id="salle"
                                                value=''>
                                                <option class="text-center" value="" disabled selected>SALLE</option>
                                                
                                                @foreach($salles as $salle)
                                                <option value="{{$salle->type_salle}}">{{$salle->type_salle}}</option>
                                                @endforeach
                                        </select>
                                    </div>
                                </td>
                            @endfor
                        </tr>
                        <tr>
                            <th class="text-center">11:30-13:00</th>
                            @for ($i = 19; $i <= 24; $i++) 
        
                                <td>
                                    <div class="mb-3 w-100 d-flex flex-column justify-content-center align-items-center">
                                        
                                        <select 
                                                style="
                                                            min-height:35px;
                                                            width:80%;
                                                            border-radius:1px;
                                                            max-height:15px;
                                                            font-size:13px;"
                                                class="form-control w-100" 
                                                name="list{{$i}}"
                                                id='module{{$i}}'
                                                value=''>
                                                <option value="" class="text-center">MODULE</option>
                                        </select>
                                        <select 
                                                style="
                                                            min-height:35px;
                                                            width:80%;
                                                            border-radius:1px;
                                                            max-height:15px;
                                                            font-size:13px;"
                                                class="form-control w-100" 
                                                name="salle{{$i}}"
                                                id="salle"
                                                value=''>
                                                <option value="" class="text-center" disabled selected>SALLE</option>
                                                
                                                @foreach($salles as $salle)
                                                <option value="{{$salle->type_salle}}">{{$salle->type_salle}}</option>
                                                @endforeach
                                        </select>
                                    </div>
                                </td>
                            @endfor
                        </tr>
                        <tr>
                            <th class="text-center">13:30-15:00</th>
                            @for ($i = 25; $i <= 30; $i++) 
        
                                <td>
                                    <div class="mb-3 w-100 d-flex flex-column justify-content-center align-items-center">
                                        
                                        <select 
                                                style="
                                                            min-height:35px;
                                                            width:80%;
                                                            border-radius:1px;
                                                            max-height:15px;
                                                            font-size:13px;"
                                                class="form-control w-100" 
                                                name="list{{$i}}"
                                                id='module{{$i}}'
                                                value=''>
                                                <option value="" class="text-center">MODULE</option>
                                        </select>
                                        <select 
                                                style="
                                                            min-height:35px;
                                                            width:80%;
                                                            border-radius:1px;
                                                            max-height:15px;
                                                            font-size:13px;"
                                                class="form-control w-100" 
                                                name="salle{{$i}}"
                                                id="salle"
                                                value=''>
                                                <option value="" class="text-center" disabled selected>SALLE</option>
                                                
                                                @foreach($salles as $salle)
                                                <option value="{{$salle->type_salle}}">{{$salle->type_salle}}</option>
                                                @endforeach
                                        </select>
                                    </div>
                                </td>
                            @endfor
                        </tr>
                        <tr>
                            <th class="text-center">15:00-16:30</th>
                            @for ($i = 31; $i <= 36; $i++) 
        
                                <td>
                                    <div class="mb-3 w-100 d-flex flex-column justify-content-center align-items-center">
                                        
                                        <select 
                                                style="
                                                            min-height:35px;
                                                            width:80%;
                                                            border-radius:1px;
                                                            max-height:15px;
                                                            font-size:13px;"
                                                class="form-control w-100" 
                                                name="list{{$i}}"
                                                id='module{{$i}}'
                                                value=''>
                                                <option value="" class="text-center">MODULE</option>
                                        </select>
                                        <select 
                                                style="
                                                            min-height:35px;
                                                            width:80%;
                                                            border-radius:1px;
                                                            max-height:15px;
                                                            font-size:13px;"
                                                class="form-control w-100" 
                                                name="salle{{$i}}"
                                                id="salle"
                                                value=''>
                                                <option value="" class="text-center" disabled selected>SALLE</option>
                                                
                                                @foreach($salles as $salle)
                                                <option value="{{$salle->type_salle}}">{{$salle->type_salle}}</option>
                                                @endforeach
                                        </select>
                                    </div>
                                </td>
                            @endfor
                        </tr>
                        <tr>
                            <th class="text-center">16:30-18:00</th>
                            @for ($i = 37; $i <= 42; $i++) 
        
                                <td>
                                    <div class="mb-3 w-100 d-flex flex-column justify-content-center align-items-center">
                                        
                                        <select 
                                                style="
                                                            min-height:35px;
                                                            width:80%;
                                                            border-radius:1px;
                                                            max-height:15px;
                                                            font-size:13px;"
                                                class="form-control w-100" 
                                                name="list{{$i}}"
                                                id='module{{$i}}'
                                                value=''>
                                                <option value="" class="text-center">MODULE</option>
                                        </select>
                                        <select 
                                                style="min-height:35px;
                                                            width:80%;
                                                            border-radius:1px;
                                                            max-height:15px;
                                                            font-size:13px;"
                                                class="form-control w-100" 
                                                name="salle{{$i}}"
                                                id="salle"
                                                value=''>
                                                <option value="" class="text-center" disabled selected>SALLE</option>
                                                
                                                @foreach($salles as $salle)
                                                <option value="{{$salle->type_salle}}">{{$salle->type_salle}}</option>
                                                @endforeach
                                        </select>
                                    </div>
                                </td>
                            @endfor
                        </tr>
                    </tbody>
    
                </table>
                <div class="" style="width:95%">
                    <button type="submit" class="btn rounded-0 mt-3" style="background:#3e4ea7; color:white ;width:20%">
                        <i class="fa-solid fa-square-plus"></i> <strong>AJOUTER</strong></button>
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
                        $.ajax({
                            url: `/get-groupe/${semestre}`,
                            type: "GET",
                            data: {
                                "_token": "{{ csrf_token() }}",
                                "id": semestre,
                            },
                            success:function(data) {
                                $('#groupe').empty();
                                $('#groupe').append('<option value="" disabled selected>SELECTER VOTRE GROUPE</option>');
                                $.each(data, function(key, value) {
                                    $('#groupe').append('<option value="' + value + '">' + value + '</option>');
                                });
                            },
                            error:function(data) {
                                alert('ne y a pas des groupes.');
                            }
                        });
                    });

                    var i = 1;
                    for (let i = 1; i <= 42; i++) 
                    {
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
                                    $(`#module${i}`).empty();
                                    $(`#module${i}`).append('<option value="" disabled selected>SELECTIONER MODULE</option>');
                                    $.each(data, function(key, value) {
                                        $(`#module${i}`).append('<option value="' + value + '">' + value + '</option>');
                                    });
                                },
                                error:function(data) {
                                    alert('Error adding user.');
                                }
                            });
                        });
                    }

            </script>
    </div>
@endsection
