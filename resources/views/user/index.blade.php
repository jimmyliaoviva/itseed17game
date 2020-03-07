@extends('layout.master')
@section('content')


<div class="row p-3">
    <div class="col-md-4 col-md-offset-4"></div>
    <h1>資種17 Running man</h1>
    @if (count($errors)>0)
        <div class="alert alert-danger">
    @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
    @endforeach
        </div>
    @endif
    <div class="container">
    <form action="{{  route('user.login')  }}" method="POST" >
        {{ csrf_field() }}
            <div class="form-group ">
                <label for="text">暱稱</label>
                <input type="text" name="name"   class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">登記參賽</button>

        </form>
    </div>
</div>



@endsection
