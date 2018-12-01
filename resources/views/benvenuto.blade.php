@extends('layouts.layout')

@section('titolo')

    Casa

@endsection

@section('contenuto')

    <h1>ciao {{ $foo }}</h1>
    
    <ul>
        @foreach ($taskso as $scribano)
            <li> {{ $scribano }}</li> 
        
        @endforeach
        
        
       <!--
           oppure
            <?php for($i=0;$i<3;$i++) {?>
            <li><?=  $taskso[$i]; // or echo $taskso[$i]?></li> 
            <?php } ?>
            
            oppure 
            <?php foreach ($taskso as $scribano) : ?>
            <li><?=  $scribano // or echo $scribano?></li> 
            <?php endforeach; ?>
        -->
            
    </ul>
    
@endsection
    