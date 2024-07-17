@extends('layout')
@section('tieudetrang')
    {{$tin->tieude}}
@endsection
@section('noidung')
   <h2>{{$tin->tieude}}</h2>
   <h3>{{$tin->tomTat}}</h3>
   <div id="noiDung">
        {!! $tin->noiDung !!}
   </div>
@endsection