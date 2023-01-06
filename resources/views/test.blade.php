<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        #inputForm {
            margin-top: 20px;
            margin-left: 110px;
            width: 80%;
            padding: 20px;
            border: 1px solid green;
            border-radius: 5px;
        }

        #register {
            border: 1px solid black;
        }

        #cancelBtn {
            margin-left: 60px;
            margin-top: -40px;
            width: auto;
        }

        #regBtn {
            margin-top: 15px;
        }

        .table {
            margin-top: 20px;
            margin-left: 100px;
            width: 80%;
        }

        #search {
            margin-top: 20px;
            margin-left: 670px;
        }
    </style>
</head>

<body>
    <div id="inputForm">
        <form action="create" method="POST" id="register">
            @csrf
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <div class="row">
                            <label for="staticEmail" class="col-sm-3 col-form-label">コード</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="code" required name="code">
                            </div>
                        </div><br>
                        <div class="row">
                            <label for="staticEmail" class="col-sm-3 col-form-label">届け先名1</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="recipient_name_1" required name="recipient_name_1">
                            </div>
                        </div><br>
                        <div class="row">
                            <label for="staticEmail" class="col-sm-3 col-form-label">届け先名2</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="recipient_name_2" required name="recipient_name_2">
                            </div>
                        </div><br>
                        <div class="row">
                            <label for="staticEmail" class="col-sm-3 col-form-label">〒</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="yuu" required name="yuu">
                            </div>
                        </div><br>
                        <div class="row">
                            <label for="staticEmail" class="col-sm-3 col-form-label">住所１</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="address_1" required name="address_1">
                            </div>
                        </div><br>
                        <!-- <div class="row" id="cancelBtn">
                            <label for="staticEmail" class="col-sm-7 col-form-label"></label>
                            <div class="col-sm-4">
                                <button onclick="cancelButton()" class="btn btn-outline-primary" id="cancel">キャンセル</button>
                            </div>
                        </div> -->
                    </div>
                    <div class="col-sm">
                        <div class="row">
                            <label for="staticEmail" class="col-sm-3 col-form-label">住所2</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="address_2" required name="address_2">
                            </div>
                        </div><br>
                        <div class="row">
                            <label for="staticEmail" class="col-sm-3 col-form-label">住所3</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="address_3" required name="address_3">
                            </div>
                        </div><br>
                        <div class="row">
                            <label for="staticEmail" class="col-sm-3 col-form-label">TEL</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="phone" required name="phone">
                            </div>
                        </div><br>
                        <div class="row">
                            <label for="staticEmail" class="col-sm-3 col-form-label">配送区分</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="shipping_category" required name="shipping_category">
                            </div>
                        </div><br><br><br>
                        <div class="row" id="regBtn">
                            <!-- <label for="staticEmail" class="col-sm-3 col-form-label"></label> -->
                            <div class="col-sm-4">
                                <button type="submit" class="btn btn-outline-primary">登録</button>
                            </div>
                        </div>
                    </div>
        </form>
        <div class="col-sm">
            <form action="import" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row justify-content-start">
                    <div class="col-sm-10">
                        <input type="file" class="form-control" name="file">
                    </div>
                </div><br>
                <div class="row justify-content-start">
                    <div class="col-4">
                        <button type="submit" class="btn btn-outline-primary">インポート</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
    <div class="row" id="cancelBtn">
        <label for="staticEmail" class="col-sm-2 col-form-label"></label>
        <div class="col-sm-2">
            <button onclick="cancelButton()" class="btn btn-outline-primary" id="cancel">キャンセル</button>
        </div>
    </div>
    </div>
    </div>

    <form action="search" method="POST">
        @csrf
        <div class="row justify-content-end" id="search">
            <div class="col-4">
                <input type="text" class="form-control" name="search">
            </div>
            <div class="col-4">
                <button class="btn btn-outline-primary">検索</button>
            </div>
        </div>
    </form>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">コード</th>
                <th scope="col">届け先名1</th>
                <th scope="col">届け先名2</th>
                <th scope="col" class="col-sm-1">〒</th>
                <th scope="col">住所１</th>
                <th scope="col">住所2</th>
                <th scope="col">住所3</th>
                <th scope="col">TEL</th>
                <!-- <th scope="col">配送区分</th> -->
            </tr>
        </thead>
        <tbody>
            @foreach($lists as $list)
            <tr>
                <td>{{$list->code}}</td>
                <td>{{$list->recipient_name_1}}</td>
                <td>{{$list->recipient_name_2}}</td>
                <td>{{$list->yuu}}</td>
                <td>{{$list->address_1}}</td>
                <td>{{$list->address_2}}</td>
                <td>{{$list->address_3}}</td>
                <td>{{$list->phone}}</td>
                <!-- <td>{{$list->shipping_category}}</td> -->
            </tr>
            @endforeach
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script>
        // $('#cancel').on('click', function(e) {

        //     $('form').get(0).reset()

        // })
        function cancelButton() {
            // alert("Hello");
            document.getElementById('code').value = '';
            document.getElementById('recipient_name_1').value = '';
            document.getElementById('recipient_name_2').value = '';
            document.getElementById('yuu').value = '';
            document.getElementById('address_1').value = '';
            document.getElementById('address_2').value = '';
            document.getElementById('address_3').value = '';
            document.getElementById('phone').value = '';
            document.getElementById('shipping_category').value = '';
        }
    </script>
</body>

</html>