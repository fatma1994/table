<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lycee d'excellence</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.css')}}">
    
</head>
<body>
    <div class="hero-content">
        <header class="site-header">
            <div class="top-header-bar">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-lg-6 d-none d-md-flex flex-wrap justify-content-center justify-content-lg-start mb-3 mb-lg-0">
                            <div class="header-bar-email d-flex align-items-center">
                                <i class="fa fa-envelope"></i><a href="#">fallougalass@gmail.com</a>
                            </div><!-- .header-bar-email -->

                            <div class="header-bar-text lg-flex align-items-center">
                                <p><i class="fa fa-phone"></i>221-77-641-84-90 </p>
                            </div><!-- .header-bar-text -->
                        </div><!-- .col -->

                        <div class="col-12 col-lg-6 d-flex flex-wrap justify-content-center justify-content-lg-end align-items-center">
                            <div class="header-bar-search">
                                <form class="flex align-items-stretch">
                                    <input type="search" placeholder="Rechercher">
                                    <button type="submit" value="" class="flex justify-content-center align-items-center"><i class="fa fa-search"></i></button>
                                </form>
                            </div><!-- .header-bar-search -->

                            
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .container-fluid -->
            </div><!-- .top-header-bar -->

 <div class="container">
 <div><p><a href="{{route('eleves.create')}}">enregistrer un eleve></a></p></div>
 	<table class="table table-stripe">
 		
 		<tr>
 	  <th>#</th>
 	  <th>matricule</th>
 	  <th>nom</th>
 	  <th>prenom</th>
 	   <th></th>
 	   </tr>
        @foreach ($eleve as $v)
       <tr>
       	<th>#</th>
        <th>{{$v->matricule}}</th>
         <th>{{$v->nom}}</th>
          <th>{{$v->prenom}}</th>
          <th><p><a href="{{route('eleves_edit',['id'=>$v->id])}}">Modifier</a></p></th>
        </tr>
 
        @endforeach
       
        </table>
</div>



 
