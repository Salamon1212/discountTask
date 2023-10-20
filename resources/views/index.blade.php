<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>
    <style>
        table,tr,td{
            border:1px solid black;
            border-collapse: collapse;
        }
        thead{
            background-color:black;
            color:white;
        }
        #remove{
            background-color:red;
        }
        #remove-nav{
            color:white;
            text-decoration:none;
        }
        #add-btn{
            background-color:green;
        }
        #add-nav{
            color:white;
            text-decoration:none;
        }
    </style>
    <div class="container">
        <center>
            <div class="discount-table">
                <div class="discount-title">
                    <h1>Discount Table</h1>
                    <div class="bill-btn">
                        <a href="/create" class="btn btn-primary" style="margin-left:1050px">Bill</a>
                    </div>
                </div>
                <div class="discount-content">
                    <table class="table">
                        <thead>
                            <tr>
                                <td>Vendor</td>
                                <td>Trade A</td>
                                <td>Trade B</td>
                                <td>Trade C</td>
                                <td>Trade D</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Vendor1</td>
                                <td>12</td>
                                <td>12</td>
                                <td>N/A</td>
                                <td>6</td>
                            </tr>
                            <tr>
                                <td>Vendor2</td>
                                <td>10</td>
                                <td>8</td>
                                <td>20</td>
                                <td>N/A</td>
                            </tr>
                            <tr>
                                <td>Vendor3</td>
                                <td>N/A</td>
                                <td>25</td>
                                <td>3</td>
                                <td>16</td>
                            </tr>
                            <tr>
                                <td>Vendor4</td>
                                <td>9</td>
                                <td>N/A</td>
                                <td>16</td>
                                <td>30</td>
                            </tr>
                            <tr>
                                <td>Vendor5</td>
                                <td>5</td>
                                <td>11</td>
                                <td>N/A</td>
                                <td>30</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="product-table">
                    <div class="product-content">
                        <div class="product-title">
                            <h1>
                                Product Table
                            </h1>
                        </div>
                        <table  class="table">
                            <thead>
                                <th>S.No</th>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Tags</th>
                                <th>Vendor</th>
                                <th>Cart</th>
                            </thead>
                            <tbody>
                            @if(count($productData) > 0)
                                @foreach($productData as $row)
                                <tr>
                                    <td><strong>{{ $loop->iteration }}</strong></td>
                                    <td>{{ $row->product_name }}</td>
                                    <td>{{ $row->price }}</td>
                                    <td>{{ $row->tags }}</td>
                                    <td>{{ $row->vendor }}</td>
                                    <td id="add-btn"><a href="/show/{{$row->id}}" id="add-nav">Add cart</a></td>
                                    
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="cart-container">
                <div class="cart-content">
                    <div class="cart title">
                        <h1>Shopping Cart</h1>
                    </div>
                    <table  class="table">
                            <thead>
                                <th>S.No</th>
                                <th>Product Name</th>
                                <th>Org_Price</th>
                                <th>Discount_Percentage</th>
                                <th>Discount_Price</th>
                                <th>Vendor</th>
                                <th>Cart</th>
                            </thead>
                            <tbody>
                            @if(count($cartData) > 0)
                                @foreach($cartData as $cart)
                                <tr>
                                    <td><strong>{{ $loop->iteration }}</strong></td>
                                    <td>{{ $cart->product_name }}</td>
                                    <td>{{ $cart->org_price }}</td>
                                    <td>{{ $cart->discount_percentage }}</td>
                                    <td>{{ $cart->discount_price }}</td>
                                    <td>{{ $cart->vendor }}</td>
                                    <td id="remove"><a href="/delete/{{$cart->product_id}}" id="remove-nav">Remove cart</a></td>
                                    
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                </div>
            </div>
            <div class="reduction-price">
                <h1> Total Price: Rs.{{$reductData}}</h1>
            </div>
        </center>
    </div>
</body>
</html>