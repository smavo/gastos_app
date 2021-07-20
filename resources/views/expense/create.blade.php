@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col">
            <h1>New Expense</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a href="/expense_reports/{{ $report->id }}" class="btn btn-secondary">Back</a>
        </div>
    </div>
    <div class="row">
        <div class="col">

            <form action="/expense_reports/{{ $report->id }}/expenses" method="POST">
                @csrf
                <br>
                <div class="form-group">
                    <label for="descripcion">Descripcion</label>
                    <input type="text" class="form-control" id="descripcion" name="descripcion"
                        placeholder="Type a descripcion" />
                </div>
                <div class="form-group">
                    <label for="amount">Amount</label>
                    <input type="text" class="form-control" id="amount" name="amount" placeholder="Type a amount" />
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <button type="submit" class="btn btn-primary">Save</button>

            </form>
        </div>
    </div>
@endsection
