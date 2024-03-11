<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="/css/list.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/1763c99aed.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://kit.fontawesome.com/1763c99aed.css" crossorigin="anonymous">
    {{-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />


    
    <title>Document</title>
    <style>
        /* body{
            background: #e7e6e6
        }
        .container{
            background: #e7e7e7;
        } */
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

        @import url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700');

        $base-spacing-unit: 24px;
        $half-spacing-unit: $base-spacing-unit / 2;

        $color-alpha: #1772FF;
        $color-form-highlight: #EEEEEE;

        h1,h2,h3,h4,h5,h6 {
            margin:0;
        }

        .table {
            width:100%;
            border:1px solid $color-form-highlight;
            background-color:#fff;
        }

        .table-header {
            display:flex;
            width:100%;
            background-color:#3e4ea7;
            padding:($half-spacing-unit * 1.5) 0;
            border-radius: 2px;
        }

        .table-row {
            display:flex;
            width:100%;
            padding:($half-spacing-unit * 1.5) 0;

            
            &:nth-of-type(odd) {
                background:$color-form-highlight;
            }
        }

        .table-data, .header__item {
            flex: 1 1 20%;
            text-align:center;
            
        }

        .header__item {
            text-transform:uppercase;
            font-weight:bold;
        }

        .filter__link {
            color:rgb(255, 255, 255);
            text-decoration: none;
            position:relative;
            display:inline-block;
            padding-left:$base-spacing-unit;
            padding-right:$base-spacing-unit;
            
            &::after {
                content:'';
                position:absolute;
                right:-($half-spacing-unit * 1.5);
                color:white;
                font-size:$half-spacing-unit;
                top: 50%;
                transform: translateY(-50%);
            }
            
            &.desc::after {
                content: '(desc)';
            }

            &.asc::after {
                content: '(asc)';
            }

            
        }


        .card-counter{
            box-shadow: 2px 2px 10px #DADADA;
            margin: 5px;
            padding: 20px 10px;
            background-color: #fff;
            height: 100px;
            border-radius: 5px;
            transition: .3s linear all;
        }

        .card-counter:hover{
            box-shadow: 4px 4px 20px #DADADA;
            transition: .3s linear all;
        }

        .card-counter.primary{
            background-color: #007bff;
            color: #FFF;
        }

        .card-counter.danger{
            background-color: #ef5350;
            color: #FFF;
        }  

        .card-counter.success{
            background-color: #66bb6a;
            color: #FFF;
        }  

        .card-counter.info{
            background-color: #26c6da;
            color: #FFF;
        }  

        .card-counter i{
            font-size: 5em;
            opacity: 0.2;
        }

        .card-counter .count-numbers{
            position: absolute;
            right: 35px;
            top: 20px;
            font-size: 32px;
            display: block;
        }

        .card-counter .count-name{
            position: absolute;
            right: 35px;
            top: 65px;
            font-style: italic;
            text-transform: capitalize;
            opacity: 0.5;
            display: block;
            font-size: 18px;
        }
    </style>
</head>
<body style="position:relative; min-height:100vh;">
    @yield('scripts')
    @include('components.header')

    <div class="w-100 d-flex justify-content-between">

        @include('components.list')
        
        @include('admin.profisseur.modalProf.modal-update-user')

        @include('admin.profisseur.modalProf.modal-add-user')

        @include('admin.profisseur.modalProf.modal-delete-user')

        @yield('content')

        @include('admin.salle.modalSalles.modal-update-salle')

        @include('admin.salle.modalSalles.modal-add-salle')
        
        @include('admin.salle.modalSalles.modal-delete-salle')

    </div>

    @include('components.footer')
</body>
</html>