@extends('layout.base')

@section('content')
<div class="row">
    <dov class="col">
        <h1>Reports</h1>
    </dov>
</div>
<div class="row">
    <div class="col">
        <a href="/expense_reports/create" class="btn btn-secondary">Create a New Reports</a>
    </div>
</div>
<br>
<div class="row">
    <div class="col">
        <table class="table">
            @foreach($expenseReports as $expenseReport)
                <tr>
                    <td ><a href="/expense_reports/{{$expenseReport->id}}"><b>{{ $expenseReport->title }}</b></a></td>
                    <td ><a href="/expense_reports/{{$expenseReport->id}}" class="btn btn-success">View</a></td>
                    <td ><a href="/expense_reports/{{$expenseReport->id}}/edit" class="btn btn-primary">Edit</a></td>
                    <td ><a href="/expense_reports/{{$expenseReport->id}}/destroy" class="btn btn-danger">Delete</a></td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection
