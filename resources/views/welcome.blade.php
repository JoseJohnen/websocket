<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
       <div class="container">
           <div class="row justify-content-center">
               <div class="col-md-8">
                   <div class="card">
                       <div class="card-header">Productos</div>
                       <div class="card-body">
                            <?php $products = \App\Product::all(); ?> 
                            @foreach ($products as $product)
                                <form action="{{ route('actualizar')}}" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="product_id" value="{{ $product->product_id }}">
                                    <p>
                                        {{ $product->title }} - $ {{ $product->price }} - Stock 
                                        <input type="text" name="stock" value="{{ $product->stock }}">
                                        <input type="submit" value="Actualizar">
                                    </p>
                                </form>
                            @endforeach
                       </div>
                   </div>
               </div>
           </div>
       </div>
    </body>
</html>
