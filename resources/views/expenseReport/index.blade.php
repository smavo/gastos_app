@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">

        <div class="justify-content-center">

            <h1>Reports</h1>
            <a href="/expense_reports/create" class="btn btn-secondary">Create a New Report</a>
        </div>
    </div>

    <br>
    <div>
        <table class="table row justify-content-center">
            @foreach ($expenseReports as $expenseReport)
                <tr>
                    <td><a href="/expense_reports/{{ $expenseReport->id }}"><b>{{ $expenseReport->title }}</b></a></td>
                    <td><a href="/expense_reports/{{ $expenseReport->id }}" class="btn btn-success">View</a></td>
                    <td><a href="/expense_reports/{{ $expenseReport->id }}/edit" class="btn btn-primary">Edit</a></td>
                    <td><a href="/expense_reports/{{ $expenseReport->id }}/destroy" class="btn btn-danger">Delete</a></td>
                </tr>
            @endforeach
        </table>

    </div>
@endsection
