@extends('layout.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Send Report</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a href="/expense_reports/{{$report->id}}" class="btn btn-secondary">Back</a>
        </div>
    </div>
    <div class="row">
        <div class="col">

            <form action="/expense_reports/{{ $report->id }}/sendEmail" method="POST">
                @csrf
                <div class="form-group">
                    <br>
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Type a email" value="{{ old('email') }}"/>
                    <br>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <button type="submit" class="btn btn-primary">Send Email</button>
                </div>
            </form>
        </div>
    </div>
@endsection
