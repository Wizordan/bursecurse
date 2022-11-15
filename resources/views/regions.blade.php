@extends('app')
@section('content')
    <div class="container">
@foreach($allreg as $r)
    <a href="{{ route('regbank', $r->id) }}">{{$r->regions}}</a>
    @endforeach
    <a href="{{route('regions')}}">Все банки</a>
    </div>
<div class="container">
<table id="dtBasicExample" class="table">
    <caption>Выгодные курсы обмена наличной валюты. Лучшие курсы валют в банках на сегодня.</caption>
    <tbody>
    <tr>
        <th>Код</th>
        <th>Банк</th>
    </tr>
    <tr>
        <td>USD</td>
        @foreach($banks as $b)
            <td>{{$b->name}}</td>
        @endforeach
        @isset($currency)
        @foreach($currency as $c)
            <td>{{$c->USD}}</td>
        @endforeach
        @endisset
    </tr>
    <tr>
        <td>EUR</td>
        @isset($currency)
            @foreach($currency as $c)
                <td>{{$c->EUR}}</td>
            @endforeach
        @endisset
    </tr>
    <tr>
        <td>GBP</td>
        @isset($currency)
            @foreach($currency as $c)
                <td>{{$c->GBP}}</td>
            @endforeach
        @endisset
    </tr>
    <tr>
        <td>BYN</td>
        @isset($currency)
            @foreach($currency as $c)
                <td>{{$c->BYN}}</td>
            @endforeach
        @endisset
    </tr>
    <tr>
        <td>CYN</td>
        @isset($currency)
            @foreach($currency as $c)
                <td>{{$c->CYN}}</td>
            @endforeach
        @endisset
    </tr>
    </tbody>
</table>
</div>
@endsection
