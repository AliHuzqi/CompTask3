<html>
<head> <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(e){
            $('.accept').click(function () {
                var id = $(this).attr('id');
                $.ajax({
                    url: '/serve/acceptable/'+id,
                    data: {
                        category: $(this).attr('data')
                    },
                    dataType : 'json',
                    success: function(response) {
                        console.log(response);
                        location.reload();
                    }
                });
            });


            $('.unaccept').click(function () {
                console.log('ddd');

                var id = $(this).attr('id');
                $.ajax({
                    url: '/serve/unacceptable/'+id,
                    data: {
                        category: $(this).attr('data')
                    },
                    dataType : 'json'
                });
            });
        });
    </script>
</head>
<body style="direction: rtl">

<br> <br><br>
<div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">رقم الطلب</th>
            <th scope="col">الوصف</th>
            <th scope="col"> التاريخ</th>
            <th scope="col">نوع الطلب</th>
            <th scope="col">حالة الطلب</th>
            <th scope="col">عمليات</th>
        </tr>
        </thead>
        <tbody>
        @php
        $d= 0;
        @endphp
            @foreach($maintenances as $key=> $maintenance)
        <tr>
            <th scope="row">{{++$d}}</th>
                    <td>{{$maintenance->id}}</td>
                    <td>{{$maintenance->description_problem}}</td>
                    <td>{{$maintenance->created_at}}</td>
                    <td>{{$maintenance->order_type}}</td>
                    <td>{{$maintenance->status}}</td>
            <td>
                <a class="btn btn-danger" role="button" href="{{route('serve.show',$maintenance->id)}}">عرض</a>
{{--                <input type="hidden" value="name" name="test">--}}

                @if($maintenance->status== 'قبول' || $maintenance->status== 'رفض' )

                @else
                    <button class="accept btn btn-success" type="button" id="{{$maintenance->id}}" data="{{$maintenance->order_type}}">قبول</button>
                    <button class="unaccept btn btn-warning" type="button" id="{{$maintenance->id}}" data="{{$maintenance->order_type}}">رفض</button>
                @endif

            </td>
        </tr>
                        @endforeach

            @foreach($transfers as $key=> $transfer)

                <tr>
                    <th scope="row">{{++$d}}</th>
                    <td>{{$transfer->id}}</td>
                    <td>{{$transfer->problem_description}}</td>
                    <td>{{$transfer->created_at}}</td>
                    <td>{{$transfer->transfer_type}}</td>
                    <td>{{$transfer->status}}</td>
                    <td>
                        <a class="btn btn-danger" role="button" href="{{route('serve.showform',$transfer->id)}}">عرض</a>
{{--                        <input type="hidden" value="name" name="test">--}}

                        @if($transfer->status== 'قبول' || $transfer->status== 'رفض' )

                        @else
                            <button class="accept btn btn-success" type="button" id="{{$transfer->id}}" data="{{$transfer->transfer_type}}">قبول</button>
                            <button class="unaccept btn btn-warning" type="button" id="{{$transfer->id}}" data="{{$transfer->transfer_type}}">رفض</button>
                        @endif
                    </td>
                </tr>
            @endforeach

            @foreach($index as $key=> $index)

                <tr>
                    <th scope="row">{{++$d}}</th>
                    <td>{{$index->id}}</td>
                    <td></td>
                    <td>{{$index->created_at}}</td>
                    <td>{{$index->order_type}}</td>
                    <td> {{$index->status}} </td>
                    <td>
                        <a class="btn btn-danger" role="button" href="{{route('serve.showfinalpage',$index->id)}}">عرض</a>
{{--                        <input type="hidden" value="name" name="test">--}}

                        @if($index->status== 'قبول' || $index->status== 'رفض' )

                        @else
                            <button class="accept btn btn-success" type="button" id="{{$index->id}}" data="{{$index->order_type}}">قبول</button>
                            <button class="unaccept btn btn-warning" type="button" id="{{$index->id}}" data="{{$index->order_type}}">رفض</button>
                        @endif

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
<br><br><br><br>
<div style = " text-align: center;  margin-top: -40px ;">
    <a class="btn btn-primary col-md-2 " href="{{route('serves')}}" role="button">رجوع</a> <br> <br>
</div>

</html>



