<h1> Item by Fabrice<h1>
@if (Session::get('success'))
    <h2>
        {{session::get('success')}}
    </h2>
@endif

@if (Session::get('fail'))
    <h2>
        {{session::get('fail')}}
    </h2>
@endif
<form action="{{route('data')}}">
@csrf 
<input type="text" name="name" placeholder =" Enter name"><br><br>
<input type="text" name="phone" placeholder ="Enter ages"><br><br>
<input type="text" name="email" placeholder ="Enter migrations"><br><br>
<button type="submit">add item</button>

</form>