@extends('layout.master')
@section('content')

{{-- <div class="container">
    <form class="row" action="{{ route('user.admin') }}" method="POST">
<div class="form-group col-sm-3">
    <label>輸入ID修改</label>
    <label for="exampleFormControlInput1">ID</label>
    <input type="text" class="form-control" name="id" id="id" placeholder="">
</div>
<div class="form-group col-sm-3">
    <label for="exampleFormControlTextarea1">Questions</label>
    <textarea class="form-control" id="question" name="question" rows="1"></textarea>
</div>
<div class="form-group col-sm-3">
    <label for="exampleFormControlTextarea1">Answer</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="answer" rows="1"></textarea>
</div>
<div class="form-group col-sm-2">
    <label for="exampleFormControlFile1">上傳照片</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
</div>
<button type="submit" class="btn btn-primary" name="mode" value="update">修改</button>


</form>
</div> --}}

<div class="container">
    <form class="row" action="{{ route('user.admin') }}" method="POST">
        {{ csrf_field() }}

        <div class="form-group col-sm-3">
            <label for="exampleFormControlTextarea1">Questions</label>
            <textarea class="form-control" id="question" name="question" rows="1"></textarea>
        </div>
        <div class="form-group col-sm-3">
            <label for="exampleFormControlTextarea1">Answer</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="answer" rows="1"></textarea>
        </div>
        <div class="form-group col-sm-2">
            <label for="exampleFormControlFile1">上傳照片</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>

        <button type="submit" class="btn btn-primary" name="mode" value="create">Insert</button>


    </form>
</div>




<div class="container">
    <div class="row justify-content-between">
        <h1>backend</h1>
        <a class="btn btn-primary" href="#" role="button">編輯</a>
    </div>
    <div class="row justify-content-start">

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">questions</th>
                    <th scope="col">answers</th>
                    <th scope="col">imgs</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($questions as $question )
                <tr>
                    <th scope="row">{{ $question->id }}</th>
                    <td>{{ $question->question_text }}</td>
                    <td>{{ $question->answer_text }}</td>
                    <td><img src="{{ $question->img_url }}" class="img-thumbnail" style="width:200px;height:200px"
                            alt=""></td>

                </tr>
   @endforeach
            </tbody>
        </table>


    </div>
</div>

@endsection
