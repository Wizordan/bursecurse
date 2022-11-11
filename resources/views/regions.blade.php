@extends('app')
@section('content')
@foreach($allreg as $r)
    <a href="{{ route('regbank', $r->id) }}">{{$r->regions}}</a>
    <br>
    @endforeach
<table border="1" width="100%"><caption>Курсы</caption>
    <tbody>
    <tr>
        <th>Код</th>
        @foreach($banks as $b)
            <th>Банк {{$b->name}}</th>
        @endforeach
    </tr>
    <tr>
        <td>USD</td>
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
@endsection
