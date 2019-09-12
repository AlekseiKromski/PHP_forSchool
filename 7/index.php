<html>
    <head>
        <title>Выполнение заданий</title>
        <link rel="stylesheet" href="css/style.css" type="text/css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div class='main_div'>
            <h3>Your Personal Data</h3>
            <hr>
            <form method="post" action="check.php">
                 <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <br>
                    <input type="radio" name='Mr' value='Mr'>Mr.
                    <input type="radio" name='Mrs' class="radio_personal" value='Mrs'>Mrs.
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">First name *</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name='FirstName'>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Last name *</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name='LastName'>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email *</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name='Email' placeholder="asd@gmail.com">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Password *</label>
                    <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name='Password'>
                    <small id="emailHelp" class="form-text text-muted">(Five characters minimum)</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Date of Birth</label>
                    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name='Data'>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Sign up for our newsletter</label>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck2">
                    <label class="form-check-label" for="exampleCheck2">Receive special offers from our partners!</label>
                </div>
                <button type="submit" class="btn btn-primary">Register ></button>
            </form>
        </div>
    </body>
</html>

