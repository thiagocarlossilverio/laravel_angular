@extends('agendas.layout')

@section('title',__($eventos->name_event . ': Agenda de Eventos'))

@push('css')
<style>
table{
font-family: Verdana,sans-serif;
border: 1px solid #ccc;
margin: 20px 0;
}

table th{
    padding:10px;
    font-weight: normal;
}
</style>
@endpush

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between w-100">
                        <span><span class="text-info">{{$eventos->name_event}}</span>: (@lang('Agenda de Eventos'))</span>
                        <a href="{{ url('agendas') }}" class="btn-info btn-sm">
                            <i class="fa fa-arrow-left"></i> @lang('Voltar')
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif


                    <table class="w3-table-all notranslate" width="100%" border="1">
                        <tbody>
                        <tr>
                          <th align="left"><strong>ID:</strong></th>
                          <th align="left">{{$eventos->id}}</th>
                        </tr>
                        <tr>
                            <th align="left"><strong>@lang('Evento')</strong>:</th>
                            <th align="left">{{$eventos->name_event}}</th>
                        </tr>
                        <tr>
                            <th align="left"><strong>@lang('Descrição')</strong>:</th>
                            <th align="left">{{$eventos->description}}</th>
                          </tr>
                          <tr>
                              <th align="left"><strong>@lang('Data Inicio')</strong>:</th>
                              <th align="left">{{$eventos->date_time_start}}</th>
                          </tr>
                          <tr>
                            <th align="left"><strong>@lang('Data Fim')</strong>:</th>
                            <th align="left">{{$eventos->date_time_end}}</th>
                          </tr>

                        </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script>
    // Script personalizado
</script>
@endpush
