<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <style>
        table,  td {
            border: 1px solid #3e4ea7;
            border-collapse: collapse;
                
        }
        th{
            color:white;
            background:#3e4ea7;
            padding: 13px;
            border: 1px solid #ffffff;
            border-collapse: collapse;
        }
        td{
            color:#3e4ea7;
            background:white;
            padding: 13px;

            
        }
        .container1{
            width:100%;
            max-height:90vh; 
            overflow:auto;
        }
        .container2{
            width:100%;
            max-height:90vh; 
            overflow:auto;
            max-height:80vh; 
            overflow:auto;
        }
        .liist{
            /* width:100%; 
            display: flex;
            justify-content:center;
            align-items:center;
            border: 1px solid black; */
            
        }



    </style>
</head>
<body>
    <div class=" container1">
        <div class="container2">
            <h2 style="color:#3e4ea7; text-align:center;">{{$emploi[0]->filiere}}</h2><br>
            
            <div class="liist">
                <P style="color:#3e4ea7;" >SEMISTRE: {{$emploi[0]->nomSemestre}}</P>
                <P style="color:#3e4ea7;" >ANNEE: {{$emploi[0]->annee1}}/{{$emploi[0]->annee2}}</P>
                <P style="color:#3e4ea7;" >GROUPE: {{$emploi[0]->nomGroupe}}</P>
            </div>
                
           


            <table class="" style="width:100%">
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
                        <td class="text-center" style="font-size:18px">

                            @if($emploi[0]->list1)
                                {{$emploi[0]->list1 }}<br>
                                <p style="font-size:12px"><span style="font-size:12px; color:#fd5234;">salle:</span>
                                {{$emploi[0]->salle1}}</p>
                            @endif
                            
                        </td> 
                        <td class="text-center" style="font-size:18px">
                            @if($emploi[0]->list2)
                                {{$emploi[0]->list2 }}<br>
                                <p style="font-size:12px"><span style="font-size:12px; color:#fd5234;">salle:</span>
                                {{$emploi[0]->salle2}}</p>
                            @endif
                        </td> 
                        <td class="text-center" style="font-size:18px">
                            @if($emploi[0]->list3)
                            {{$emploi[0]->list3 }}<br>
                            <p style="font-size:12px"><span style="font-size:12px; color:#fd5234;">salle:</span>
                            {{$emploi[0]->salle3}}</p>
                        @endif
                        </td> 
                        <td class="text-center" style="font-size:18px">
                            @if($emploi[0]->list4)
                            {{$emploi[0]->list4}}<br>
                            <p style="font-size:12px"><span style="font-size:12px; color:#fd5234;">salle:</span>
                            {{$emploi[0]->salle4}}</p>
                            @endif
                        </td> 
                        <td class="text-center" style="font-size:18px">
                            @if($emploi[0]->list5)
                            {{$emploi[0]->list5}}<br>
                            <p style="font-size:12px"><span style="font-size:12px; color:#fd5234;">salle:</span>
                            {{$emploi[0]->salle5}}</p>
                            @endif
                        </td> 
                        <td class="text-center" style="font-size:18px">
                            @if($emploi[0]->list6)
                            {{$emploi[0]->list6}}<br>
                            <p style="font-size:12px"><span style="font-size:12px; color:#fd5234;">salle:</span>
                            {{$emploi[0]->salle6}}</p>
                            @endif
                        </td> 
                    </tr>        
                    <tr>
                        <th class="text-center">10:00-11:30</th>

                        <td class="text-center" style="font-size:18px">
                            @if($emploi[0]->list7)
                            {{$emploi[0]->list7}}<br>
                            <p style="font-size:12px"><span style="font-size:12px; color:#fd5234;">salle:</span>
                            {{$emploi[0]->salle7}}</p>
                            @endif
                        </td> 
                        <td class="text-center" style="font-size:18px" >
                            @if($emploi[0]->list8)
                            {{$emploi[0]->list8}}<br>
                            <p style="font-size:12px"><span style="font-size:12px; color:#fd5234;">salle:</span>
                            {{$emploi[0]->salle8}}</p>
                            @endif
                        </td> 
                        <td class="text-center" style="font-size:18px">
                            @if($emploi[0]->list9)
                            {{$emploi[0]->list9}}<br>
                            <p style="font-size:12px"><span style="font-size:12px; color:#fd5234;">salle:</span>
                            {{$emploi[0]->salle9}}</p>
                            @endif
                        </td> 
                        <td class="text-center" style="font-size:18px">
                            @if($emploi[0]->list10)
                            {{$emploi[0]->list10}}<br>
                            <p style="font-size:12px"><span style="font-size:12px; color:#fd5234;">salle:</span>
                            {{$emploi[0]->salle10}}</p>
                            @endif
                        </td> 
                        <td class="text-center" style="font-size:18px">
                            @if($emploi[0]->list11)
                            {{$emploi[0]->list11}}<br>
                            <p style="font-size:12px"><span style="font-size:12px; color:#fd5234;">salle:</span>
                            {{$emploi[0]->salle11}}</p>
                            @endif
                        </td> 
                        <td class="text-center" style="font-size:18px">
                            @if($emploi[0]->list12)
                            {{$emploi[0]->list12}}<br>
                            <p style="font-size:12px"><span style="font-size:12px; color:#fd5234;">salle:</span>
                            {{$emploi[0]->salle12}}</p>
                            @endif
                        </td> 
                    </tr>        
                    <tr>
                        <th class="text-center" >
                            11:30-13:00
                        </th>
                        <td class="text-center" style="font-size:18px">
                            @if($emploi[0]->list13)
                            {{$emploi[0]->list13}}<br>
                            <p style="font-size:12px"><span style="font-size:12px; color:#fd5234;">salle:</span>
                            {{$emploi[0]->salle13}}</p>
                            @endif
                        </td> 
                        <td class="text-center" style="font-size:18px">
                            @if($emploi[0]->list4)
                            {{$emploi[0]->list4}}<br>
                            <p style="font-size:12px"><span style="font-size:12px; color:#fd5234;">salle:</span>
                            {{$emploi[0]->salle14}}</p>
                            @endif
                        </td> 
                        <td class="text-center" style="font-size:18px">
                            @if($emploi[0]->list15)
                            {{$emploi[0]->list15}}<br>
                            <p style="font-size:12px"><span style="font-size:12px; color:#fd5234;">salle:</span>
                            {{$emploi[0]->salle15}}</p>
                            @endif
                        </td> 
                        <td class="text-center" style="font-size:18px">
                            @if($emploi[0]->list16)
                            {{$emploi[0]->list16}}<br>
                            <p style="font-size:12px"><span style="font-size:12px; color:#fd5234;">salle:</span>
                            {{$emploi[0]->salle16}}</p>
                            @endif
                        </td> 
                        <td class="text-center" style="font-size:18px">
                            @if($emploi[0]->list17)
                            {{$emploi[0]->list17}}<br>
                            <p style="font-size:12px"><span style="font-size:12px; color:#fd5234;">salle:</span>
                            {{$emploi[0]->salle17}}</p>
                            @endif
                        </td> 
                        <td class="text-center" style="font-size:18px">
                            {{$emploi[0]->list18 }}
                            {{$emploi[0]->salle18}}
                        </td> 
                    </tr>        
                    <tr>
                        <th class="text-center">
                            13:30-15:00
                        </th>
                        <td class="text-center" style="font-size:18px">
                            @if($emploi[0]->list19)
                            {{$emploi[0]->list19}}<br>
                            <p style="font-size:12px"><span style="font-size:12px; color:#fd5234;">salle:</span>
                            {{$emploi[0]->salle19}}</p>
                            @endif
                        </td> 
                        <td class="text-center" style="font-size:18px">
                            @if($emploi[0]->list20)
                            {{$emploi[0]->list20}}<br>
                            <p style="font-size:12px"><span style="font-size:12px; color:#fd5234;">salle:</span>
                            {{$emploi[0]->salle20}}</p>
                            @endif
                        </td> 
                        <td class="text-center" style="font-size:18px">
                            @if($emploi[0]->list21)
                            {{$emploi[0]->list21}}<br>
                            <p style="font-size:12px"><span style="font-size:12px; color:#fd5234;">salle:</span>
                            {{$emploi[0]->salle21}}</p>
                            @endif
                        </td> 
                        <td class="text-center" style="font-size:18px">
                            @if($emploi[0]->list22)
                            {{$emploi[0]->list22}}<br>
                            <p style="font-size:12px"><span style="font-size:12px; color:#fd5234;">salle:</span>
                            {{$emploi[0]->salle22}}</p>
                            @endif
                        </td> 
                        <td class="text-center" style="font-size:18px">
                            @if($emploi[0]->list23)
                            {{$emploi[0]->list23}}<br>
                            <p style="font-size:12px"><span style="font-size:12px; color:#fd5234;">salle:</span>
                            {{$emploi[0]->salle23}}</p>
                            @endif
                        </td> 
                        <td class="text-center" style="font-size:18px">
                            @if($emploi[0]->list24)
                            {{$emploi[0]->list24}}<br>
                            <p style="font-size:12px"><span style="font-size:12px; color:#fd5234;">salle:</span>
                            {{$emploi[0]->salle24}}</p>
                            @endif
                        </td> 
                    </tr>        
                    <tr>
                        <th class="text-center">
                            15:00-16:30
                        </th>
                        <td class="text-center" style="font-size:18px">
                            @if($emploi[0]->list25)
                            {{$emploi[0]->list25}}<br>
                            <p style="font-size:12px"><span style="font-size:12px; color:#fd5234;">salle:</span>
                            {{$emploi[0]->salle25}}</p>
                            @endif
                        </td> 
                        <td class="text-center" style="font-size:18px">
                            @if($emploi[0]->list26)
                            {{$emploi[0]->list26}}<br>
                            <p style="font-size:12px"><span style="font-size:12px; color:#fd5234;">salle:</span>
                            {{$emploi[0]->salle26}}</p>
                            @endif
                        </td> 
                        <td class="text-center" style="font-size:18px">
                            @if($emploi[0]->list27)
                            {{$emploi[0]->list27}}<br>
                            <p style="font-size:12px"><span style="font-size:12px; color:#fd5234;">salle:</span>
                            {{$emploi[0]->salle27}}</p>
                            @endif
                        </td> 
                        <td class="text-center" style="font-size:18px">
                            @if($emploi[0]->list28)
                            {{$emploi[0]->list28}}<br>
                            <p style="font-size:12px"><span style="font-size:12px; color:#fd5234;">salle:</span>
                            {{$emploi[0]->salle28}}</p>
                            @endif
                        </td> 
                        <td class="text-center" style="font-size:18px">
                            @if($emploi[0]->list29)
                            {{$emploi[0]->list29}}<br>
                            <p style="font-size:12px"><span style="font-size:12px; color:#fd5234;">salle:</span>
                            {{$emploi[0]->salle29}}</p>
                            @endif
                        </td> 
                        <td class="text-center" style="font-size:18px">
                            @if($emploi[0]->list30)
                            {{$emploi[0]->list30}}<br>
                            <p style="font-size:12px"><span style="font-size:12px; color:#fd5234;">salle:</span>
                            {{$emploi[0]->salle30}}</p>
                            @endif
                        </td> 
                    </tr>        
                    <tr>
                        <th class="text-center">
                            16:30-18:00
                        </th>
                        <td class="text-center" style="font-size:18px">
                            @if($emploi[0]->list31)
                            {{$emploi[0]->list31}}<br>
                            <p style="font-size:12px"><span style="font-size:12px; color:#fd5234;">salle:</span>
                            {{$emploi[0]->salle31}}</p>
                            @endif
                        </td> 
                        <td class="text-center" style="font-size:18px">
                            @if($emploi[0]->list32)
                            {{$emploi[0]->list32}}<br>
                            <p style="font-size:12px"><span style="font-size:12px; color:#fd5234;">salle:</span>
                            {{$emploi[0]->salle32}}</p>
                            @endif
                        </td> 
                        <td class="text-center" style="font-size:18px" >
                            @if($emploi[0]->list33)
                            {{$emploi[0]->list33}}<br>
                            <p style="font-size:12px"><span style="font-size:12px; color:#fd5234;">salle:</span>
                            {{$emploi[0]->salle33}}</p>
                            @endif
                        </td> 
                        <td class="text-center" style="font-size:18px">
                            @if($emploi[0]->list34)
                            {{$emploi[0]->list34}}<br>
                            <p style="font-size:12px"><span style="font-size:12px; color:#fd5234;">salle:</span>
                            {{$emploi[0]->salle41}}</p>
                            @endif
                        </td> 
                        <td class="text-center" style="font-size:18px">
                            @if($emploi[0]->list35)
                            {{$emploi[0]->list51}}<br>
                            <p style="font-size:12px"><span style="font-size:12px; color:#fd5234;">salle:</span>
                            {{$emploi[0]->salle35}}</p>
                            @endif
                        </td> 
                        <td class="text-center" style="font-size:18px">
                            @if($emploi[0]->list36)
                            {{$emploi[0]->list36}}<br>
                            <p style="font-size:12px"><span style="font-size:12px; color:#fd5234;">salle:</span>
                            {{$emploi[0]->salle36}}</p>
                            @endif
                        </td> 
                    </tr>        

                </tbody>
            </table>

        </div>
    </div>
</body>
</html>