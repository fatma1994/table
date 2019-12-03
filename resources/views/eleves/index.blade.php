@extends("index")

@section("contenu")
 <div class="container">
        @foreach ($eleve as $v)
       
        <?php
        echo "$v->matricule";
        ?>
    
        

        @endforeach
</div>

 @endsection
