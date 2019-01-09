@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="file" name="video_upload">
                <small class="error">{{$errors->first('video_upload')}}</small> <br>
                <input type="submit" class="button success hollow" value="UPLOAD">
            </form>
        </div>
    </div>
</div>
@endsection
