<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>
<center>
    <h1>Create Your Bill:</h1>
    <form action="/store" method="POST" class="row g-5" style="width:50%">
        @csrf
        <div>
            <label for="productName"  class="form-label">Product Name</label>
            <input type="text" name="name" required class="form-control">
        </div>
        <div>
            <label for="productName"  class="form-label">Product Price</label>
            <input type="text" name="price" required class="form-control">
        </div>
        <div>
            <label for="tags"  class="form-label">Tags</label>
            <select name="tags" id="tags" class="form-select" aria-label="Default select example">
                <option value="TradeA">Trade A</option>
                <option value="TradeB">Trade B</option>
                <option value="TradeC">Trade C</option>
                <option value="TradeD">Trade D</option>
            </select>
        </div>
        <div>
            <label for="vendor"  class="form-label">Vendor</label>
            <select name="vendor" id="vendor" class="form-select" aria-label="Default select example">
                <option value="1">vendor1</option>
                <option value="2">vendor2</option>
                <option value="3">vendor3</option>
                <option value="4">vendor4</option>
                <option value="5">vendor5</option>
            </select>
        </div>
        <div style="margin-left:250px">
            <button type="submit" class="btn btn-success" style="width:10%">submit</button>
            <a href="/dashboard" class="btn btn-danger" style="width:10%">cancel</a>
        </div> 
    </form>
    </center>
</body>
</html>