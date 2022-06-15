<html>
    <header>
    </header>
    <body>
<form action="{{'datainfo'}}"> 
    @csrf 
<h1>Enter</h1>


<label for>First-name:</label>
<input type="text" name="F_name" ><br>
<label for>Last-name:</label>
<input type="text" name="L_name" ><br>

<input type="submit" value ="Submit" name ="submit">

</form>
    </body>
</html>