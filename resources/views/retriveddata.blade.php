<html>
    <header>
    </header>
    <body>
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">ID</th>
            <th scope="col">First-name</th>
            <th scope="col">Last-name</th>
            <th scope="col">Email</th>
          </tr>
          <?php $i = 0; ?>
          @foreach ($qur as $datas)
          <?php $i++ ?>
          <tr>
            <th scope="col">{{ $i }}</th>
            <th scope="col">{{$datas -> firstname}}</th>
            <th scope="col">{{$datas -> lastname  }}</th>
            <th scope="col">{{$datas -> email}}</th>
            
          </tr>
              
          @endforeach
        </thead>
      </table> 
    </body>
</html>