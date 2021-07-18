@extends('layout.base')

@section('content')
<div class="row">
    <dov class="col">
        <h1>Reports</h1>
    </dov>
</div>
<div class="row">
    <div class="col">
        <a href="/expense_reports/create" class="btn btn-primary">Create a New Reports</a>
    </div>
</div>
<div class="row">
    <div class="col">

        <table class="table">
            @foreach($expenseReports as $expenseReport)
                <tr>
                    <td>{{ $expenseReport->title }}</td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection
