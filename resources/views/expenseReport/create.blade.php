@extends('layout.base')

@section('content')
<div class="row">
    <div class="col">
        <h1>New Report</h1>
    </div>
</div>
<div class="row">
    <div class="col">
        <a href="/expense_reports" class="btn btn-secondary">Back</a>
    </div>
</div>
<div class="row">
    <div class="col">
        <form action="/expense_reports" method="POST">
            <div class="form-group">
                <br>
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Type a title"/>
                <br>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>
@endsection
