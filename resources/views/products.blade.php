<!DOCTYPE html>

<html lang="en">

<head>

    <title>Laravel 9 Sorting Columns with Pagination</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png">

    <link rel="stylesheet" href="{{url('css/style.css')}}">

</head>

<body>
    <div class="container">
        <h3 class="text-center text-danger">Laravel 
            
        <span class="text-black">
            Sorting
        </span>

            <img 
            height="30"
            src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png" 
            alt="Laravel"
            title="Laravel">

        </h3>
       
        <table class="table table-bordered">
            
            @if (count($products) > 0)

            <thead>
                <tr>
                    <th class="text-center" width="80px">@sortablelink('id')</th>
                    <th class="text-center">@sortablelink('name')</th>
                    <th class="text-center">@sortablelink('details')</th>
                    <th class="text-center">@sortablelink('created_at')</th>
                </tr>
            </thead>

            @else
                
            @endif

            <tbody>
                @if(count($products) > 0)
                    @foreach($products as $product)
                        <tr>
                            <td class="text-center">{{ $product->id }}</td>
                            <td class="text-center">{{ $product->name }}</td>
                            <td class="text-center">{{ $product->details }}</td>
                            <td class="text-center">{{ $product->created_at->format('d-m-Y') }}</td>
                        </tr>
                    @endforeach

                @else 

                <center><h3>No products..</h3></center>
                <center><img 
                    height="100"
                    src="img/not_found.gif" 
                    alt="Not Found"
                    title="Not Found"></center>
                <center><h4>Run next command:</h4></center>
                <br>
                <center><p class="spacing">php artisan db:seed</p></center>

                @endif

            </tbody>
        </table>
        {!! $products->appends(\Request::except('page'))->render() !!}
    </div>


    <footer>
       <center>

        <p>
            Made by
            
            <a 
            href="https://github.com/dzonidevv"
            target="_blank"
            ><span class="text-danger">Dzoni Dev</span></a>
            &copy;

        </p>

       </center>
    </footer>

    {{-- Font Awesome --}}

    <script src="https://kit.fontawesome.com/2824446f9a.js" crossorigin="anonymous"></script>

</body>

</html>