@extends('app')
@section('content')
    <div class="container">
        <h2 class='mb-3'>Здесь вы можете оставить пожелание на добавление банка с курсами, либо же добавить валюту</h2>
        <div id="messageShow"></div>
    <form method="POST" action="/{{ asset('js/callback.js') }}/" id="callback">
        <div class="form-outline mb-4">
            <input type="text" id="currency" class="form-control" name="currency" />
            <label class="form-label" for="form6Example3">Валюта(если добавляете банк, то оставьте пустым)</label>
        </div>

        <div class="form-outline mb-4">
            <input type="text" id="Code" class="form-control" name="Code" />
            <label class="form-label" for="form6Example4">Код валюты(если добавляете валюту)</label>
        </div>

        <div class="form-outline mb-4">
            <input type="text" id="email" class="form-control" name="email" />
            <label class="form-label" for="form6Example5">Почта для связи</label>
        </div>

        <div class="form-outline mb-4">
            <input type="text" id="bank" class="form-control" name="bank" />
            <label class="form-label" for="form6Example6">Банк(если добавляете валюту, то оставьте пустым)</label>
        </div>

        <button type="submit" class="btn btn-primary btn-block mb-4">Отправить</button>
    </form>
    </div>
@endsection
