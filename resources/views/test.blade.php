<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.1/css/bootstrap.min.css"
      integrity="sha512-siwe/oXMhSjGCwLn+scraPOWrJxHlUgMBMZXdPe2Tnk3I0x3ESCoLz7WZ5NTH6SZrywMY+PB1cjyqJ5jAluCOg=="
      crossorigin="anonymous" referrerpolicy="no-referrer"/>

<body>
<div class="container py-3">
    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </div>
    @endif

{{--    @if (session('old'))--}}
        @php dump(session()->all(), old('example1')); @endphp
{{--    @endif--}}

    <form action="test" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="exampleInputEmail1">Example 1</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="example1" value="{{ old('example1') }}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Example 2</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="example2" value="{{ old('example2') }}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Example 3</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="example3" value="{{ old('example3') }}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Example 4</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="example4" value="{{ old('example4') }}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Example 5</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="example5" value="{{ old('example5') }}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Example 6</label>
            <textarea class="form-control" id="exampleInputEmail1" name="example6">
                {{ old('example6') }}
            </textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.1/js/bootstrap.min.js"></script>
</body>
</html>
