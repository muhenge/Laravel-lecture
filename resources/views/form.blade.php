<html>
    <header>
    </header>
    <body>
        {{-- @if (Session::get("Done"))
            <h2>{{ Session::get("Done") }}</h2>
        @endif

        @if (Session::get("try"))
            <h2>{{ Session::get("try") }}</h2>
        @endif --}}
<form action="{{route('datainfo')}}" method="POST"> 
    @csrf 
<h1>Enter your detail</h1>


<label for>First-name:</label>
<input type="text" name="F_name" value="{{ old('F_name') }}"><br>
<label for>Last-name:</label>
<input type="text" name="L_name" value="{{ old('L_name') }}"><br>
<label for>email:</label>
<input type="text" name="Email" value="{{ old('Email') }}"> 



@error('Email') {{ $message }}@enderror
<br>

<input type="submit" value ="Submit" name ="submit">

</form>
    </body>
</html>