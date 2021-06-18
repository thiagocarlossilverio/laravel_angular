@extends('agendas.layout')

@section('title',__('Agenda de Eventos'))

@push('css')
<style>
    /* Personalizar layout*/
</style>
@endpush

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between w-100">
                        <span>@lang('Adicionar de Evento')</span>
                        <a href="{{ url('agendas/create') }}" class="btn-primary btn-sm">
                            <i class="fa fa-plus"></i> @lang('Criar Novo')
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                    @endif

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>@lang('Evento')</td>
                                <td>@lang('Descrição')</td>
                                <td>@lang('Data Inicio')</td>
                                <td>@lang('Data Fim')</td>
                                <td colspan="3" class="text-center">@lang('Ações')</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($eventos as $evento)
                            <tr>
                                <td>{{$evento->id}}</td>
                                <td>{{$evento->name_event}}</td>
                                <td>{{$evento->description}}</td>
                                <td>{{date('d-m-Y H:i:s', strtotime($evento->date_time_start))}}</td>
                                <td>{{date('d-m-Y H:i:s', strtotime($evento->date_time_end))}}</td>
                                <td class="text-center p-0 align-middle" width="70">
                                    <a href="{{ route('agendas.show', $evento->id)}}"
                                        class="btn btn-info btn-sm">@lang('Abrir')
                                    </a>
                                </td>
                                <td class="text-center p-0 align-middle" width="70">
                                    <a href="{{ route('agendas.edit', $evento->id)}}"
                                        class="btn btn-primary btn-sm">@lang('Editar')
                                    </a>
                                </td>
                                <td class="text-center p-0 align-middle" width="70">
                                    <form action="{{ route('agendas.destroy', $evento->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
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
