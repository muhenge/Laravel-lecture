<html>
    <header>
    </header>
    <body>

{{-- <h1>Results are </h1>
<h2>{{Session::get('fname')}}</h2><br>
<h2>{{Session::get('lname')}}</h2><br>
<h2>{{Session::get('email')}}</h2> --}}
@if (Session::get("Done"))
    <h2>{{ Session::get("Done") }}</h2>
@endif

@if (Session::get("try"))
    <h2>{{ Session::get("try") }}</h2>
@endif
    </body>
</html>