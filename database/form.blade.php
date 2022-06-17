<!DOCTYPE html>
 <head> 
    <style>
        .regform{
            background-color:bisque;
            margin:15rem;
            padding:4rem;
        }
        .formInput{
            background-color:beige;
            color:crimson;
            margin-right:15.74rem;
            border:2px crimson solid;
            border-radius: 10px;
        }
        label{
            font-size: 12;
            font-family: 'poppins',sans-serif;
            
        }
        input{ width:280px;
        height: 30px;
        background-color: beige;
        border:0px;
        border-radius: 10px;
        margin-left: 20px;}
        input:focus{
            border:0px;
            border-color: beige;
           
        }
        button{
            border:0px;
            height: 35px;
            width:104px; 
            background-color:crimson;
            margin-left: 10rem;
            border-radius: 10px;;
        }
        button:hover{
                background-color: blue;
                color:white;
            }
        </style>
 </head>    
<body>
        <form class="regform" action="{{ route('save') }}" method="POST">
            @csrf
        <h2>Add New</h2>
        
        <div class="formInput">
            <label for="description">Description</label>
            <input class="names" type="text" id="description" placeholder="enter your description" name="Description" required/><BR>
             @error('description')
                <p color="red">{{$message}} </p>
             @enderror
        
            <label for="names">Title</label>
            <input class="names" type="text" id="names" placeholder="enter your names" name="name" required/>
            <button class="button" type="submit">save</button>
        </div>
        </form>
        </body>
        </html>
        
            
       
            
        

            


        
