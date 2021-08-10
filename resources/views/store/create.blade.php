{{----}}
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/css/bootstrapValidator.css" />
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.5.4/bootstrap-select.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.1/js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>Hello, world!</title>
</head>
<body>
<h1>Thêm mới đại lý</h1>
<div class="container">
    <form method="post">
        @csrf
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="validationServer013">Tên đại lý</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name">
                @error('name')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationServer023">Điện thoại</label>
                <input type="number" class="form-control"
                       id="year_publication @error('phonenumber') is-invalid @enderror" name="phonenumber">
                @error('phonenumber')
                <p class="text-danger">{{$message}}</p>
                @enderror

            </div>
            <div class="col-md-4 mb-3">
                <label for="validationServerUsername33">Email</label>
                <div class="input-group">
                    <div class="input-group-prepend">

                    </div>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="name" name="email">
                    @error('email')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="validationServer033">Địa chỉ</label>
                <input type="text" class="form-control @error('adrress') is-invalid @enderror" id="name" name="address">
                @error('adrress')
                <p class="text-danger">{{$message}}</p>
                @enderror

            </div>
            <div class="col-md-3 mb-3">
                <label for="validationServer043">Tên người quản lý</label>
                <input type="text" class="form-control @error('manager') is-invalid @enderror" id="name" name="manager">
                @error('manager')
                <p class="text-danger">{{$message}}</p>
                @enderror

            </div>
            <div class="col-md-3 mb-3">
                <label for="validationServer053">Trạng thái</label>
                <div> <select class="form-select" aria-label="Default select example" name="status" id="">
                        <option value="working">Đang hoạt động</option>
                        <option value="not working">Không hoạt động</option>
                    </select>
                </div>
                </div>
            </div>
        <button class="btn btn-primary" type="submit">Submit form</button>
    </form></div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.min.js"/>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
