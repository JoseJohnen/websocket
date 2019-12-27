<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Nueva Actividad</div>
                <div class="card-body">
                    <div class="alert alert-success" role="alert">
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/jquery.min.js')}}">
<script src="{{ asset('js/app.js')}}">
    $(document).ready(function() {
        window.Echo.channel('stock-disponible')
        .listen('StockDisponible', (data) => {
            $(".alert-success > p")
            .empty()
            .append('El '+data.product.title+' ahora tiene stock.');
        });
    });
</script>