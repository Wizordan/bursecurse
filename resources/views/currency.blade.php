@extends('app')
@section('content')

    <div class="container">
<h2 class='mb-3'>Курсы всех банков</h2>
<table id="dtBasicExample" class="table">
    <thead>
    <tr>
        <th class="th-sm">Код</th>
        @foreach($allbank as $bank)
            <th class="th-sm">{{$bank->name}}</th>
        @endforeach
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>USD</td>
        @foreach($allcur as $cur)
            <td>{{$cur->USD}}</td>
        @endforeach
    </tr>
    <tr>
        <td>EUR</td>
        @foreach($allcur as $cur)
            <td>{{$cur->EUR}}</td>
        @endforeach
    </tr>
    <tr>
        <td>GBP</td>
        @foreach($allcur as $cur)
            <td>{{$cur->GBP}}</td>
        @endforeach
    </tr>
    <tr>
        <td>BYN</td>
        @foreach($allcur as $cur)
            <td>{{$cur->BYN}}</td>
        @endforeach
    </tr>
    <tr>
        <td>CYN</td>
        @foreach($allcur as $cur)
            <td>{{$cur->CYN}}</td>
        @endforeach
    </tr>
    </tbody>
</table></div>
@endsection
