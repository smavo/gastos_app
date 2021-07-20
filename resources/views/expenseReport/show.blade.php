@extends('layout.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Report: {{ $report->title }}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a href="/expense_reports" class="btn btn-secondary">Back</a>
            <a href="/expense_reports/{{ $report->id }}/expenses/create" class="btn btn-success">Add Expense</a>
            <a href="/expense_reports/{{ $report->id }}/confirmSendEmail" class="btn btn-primary">Send Email</a>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col">
            <h3>Details</h3>
            <table class="table">
                @foreach ($report->expenses as $expense)
                    <tr>
                        <td>{{ $expense->descripcion }}</td>
                        <td> S/. {{ $expense->amount }}</td>
                        <td>{{ $expense->created_at }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>


    {{-- @if ($report->send == true)
        <div class="alert alert-primary" role="alert">
            El correo fue enviado satisfactoriamente
        </div>
    @endif --}}

@endsection
