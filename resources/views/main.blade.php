@extends('templatemain')
@section('conteudo')
        
@foreach ($news as $n)
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card" style="width: 32rem; height: 8rem; border: none">
                     
                    <div class="card-body">
                        <h5 class="card-title"><a href="{{$n->url}}" >{{$n->title}} </a></h5>
                        <p class="card-text">{{$n->url}}</p>
                    </div>
                     <!--img class="card-img-top" src="https://static.meionorte.com/uploads/imagens/2018/5/29/db582a89-df8d-4c40-b556-6c9e0acce37a.jpeg" alt="Card image"-->
                </div>
            </div>
            <div class="col-md-3">
                    <img class="card-img-top" src="{{$n->url_image}}" alt="Card image">
            </div>        
        </div>
    </div>
@endforeach
       
 
@stop