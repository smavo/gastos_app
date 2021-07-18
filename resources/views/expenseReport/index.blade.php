@extends('layout.base')

@section('content')
<div class="row">
    <dov class="col">
        <h1>Reports</h1>
    </dov>
</div>
<div class="row">
    <div class="col">
        <a href="/expense_reports/create" class="btn btn-success">Create a New Reports</a>
    </div>
</div>
<br>
<div class="row">
    <div class="col">
        <table class="table">
            @foreach($expenseReports as $expenseReport)
                <tr>
                    <td>{{ $expenseReport->title }}</td>
                    <td ><a href="/expense_reports/{{$expenseReport->id}}/edit" class="bnt btn-primary" style="border-radius: 10px; margin:10px; padding:10px;">Edit</a></td>
                    <td ><a href="/expense_reports/{{$expenseReport->id}}/destroy" class="bnt btn-danger" style="border-radius: 10px; margin:10px; padding:10px;">Delete</a></td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection
