@extends('layouts.app')

@section('content')
    <form class="add">
        <div class="form-group">
            <label for="exampleInputName">ListName</label>
            <input type="text" class="form-control" id="exampleInputName"  placeholder="de naam van de lijst">
            <small id="emailHelp" class="form-text text-muted">Dit is de titel van de lijst</small>
        </div>
        <div class="form-group">
            <label for="exampleInputName">ListName</label>
            <input type="text" class="form-control" id="exampleInputName"  placeholder="de naam van de lijst">
            <small id="emailHelp" class="form-text text-muted">Dit is de titel van de lijst</small>
        </div>


        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection


