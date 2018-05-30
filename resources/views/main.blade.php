@extends('template')
@section('conteudo')
        
@foreach ($news as $n)
        <div class="card" style="width: 63rem; height: 8rem; border: none">
             
            <div class="card-body">
                <h5 class="card-title"><a href="" >{{$n->title}} </a></h5>
                <p class="card-text">{{$n->url}}</p>
            </div>
           
        </div>
@endforeach
       

@stop