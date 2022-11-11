@extends('app')
@section('content')
<h2 class='mb-3'>{{$banks->name}}</h2>
<table id="dtBasicExample" class="table" width="100%">
    <thead>
    <tr>
        <th class="th-sm">Код
        </th>
        <th class="th-sm">Валюта
        </th>
        <th class="th-sm">Курс
        </th>
    </tr>
    </thead>
    <tbody>
    @foreach($currency as $cur)
        <tr>
            <td>USD</td>
            <td>Доллар США</td>
            <td>{{$cur->USD}}</td>
        </tr>
    @endforeach
    @foreach($currency as $cur)
        <tr>
            <td>EUR</td>
            <td>Евро</td>
            <td>{{$cur->EUR}}</td>
        </tr>
    @endforeach
    @foreach($currency as $cur)
        <tr>
            <td>GBP</td>
            <td>Фунт стерлингов Соединенного королевства</td>
            <td>{{$cur->GBP}}</td>
        </tr>
    @endforeach
    @foreach($currency as $cur)
        <tr>
            <td>BYN</td>
            <td>Белорусский рубль</td>
            <td>{{$cur->BYN}}</td>
        </tr>
    @endforeach
    @foreach($currency as $cur)
        <tr>
            <td>CNY</td>
            <td>Китайский юань</td>
            <td>{{$cur->CYN}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
