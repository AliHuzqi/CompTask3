<html>
<head> <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body style="direction: rtl">
<div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">رقم الطلب</th>
            <th scope="col"> التاريخ</th>
            <th scope="col">الصنف</th>
            <th scope="col">الوحدة</th>
            <th scope="col">الكمية</th>
            <th scope="col">القيمة</th>
            <th scope="col">الغرض من الشراء</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">#</th>
                <td>{{$index->id}}</td>
                <td>{{$index->order_date}}</td>
                <td>{{$index->item}}</td>
                <td>{{$index->Unit}}</td>
                <td>{{$index->Quantity}}</td>
                <td>{{$index->the_value}}</td>
                <td>{{$index->purpose_of_purchase}}</td>
            </tr>
        </tbody>
    </table>
</div>
</div> <br><br><br><br>

<div style = " text-align: center;">
    <a class="btn btn-primary col-md-2"  type="submit" href="{{route('serve.finalform')}}"> رجوع</a>
</div>

</body>
</html>
