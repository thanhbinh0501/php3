@extends('layout')
@section('tieudetrang')
    Tin trong loai {{$idLT}}
@endsection
@section('noidung')
   <h1>Các tin trong loại {{$idLT}}</h1>
   @foreach ($listtin as $t)
    <div class="row">
        <h3>
            <a href="{{ url('/tin',[$t->id]) }}">
                {{$t->tieude}}
            </a>
        </h3>
        <p>{{$t->tomTat}}</p>
    </div>
   @endforeach
@endsection