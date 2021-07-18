@extends('layout.base')

@section('content')
<div class="row">
    <div class="col">
        <h1>Edit Report: {{$report->id}}</h1>
    </div>
</div>
<div class="row">
    <div class="col">
        <a href="/expense_reports" class="btn btn-secondary">Back</a>
    </div>
</div>
<div class="row">
    <div class="col">
        <form action="/expense_reports/{{$report->id}}" method="POST" >
            @csrf
            @method('put')
            <div class="form-group">
                <br>
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Type a title" value="{{ old('title', $report->title) }}"/>
                <br>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>
@endsection
