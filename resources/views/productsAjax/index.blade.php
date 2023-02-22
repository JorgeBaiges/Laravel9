@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
            <h1>LISTA DE PRODUCTOS</h1>
            @can('create', App\Models\Product::class)
            <a class="btn btn-primary" href="{{ route('productsAjax.create') }}">Crear Producto</a>
            @endcan

            <div id="tablehtml">

                <table id="" class="table table-bordered table-striped">

                    <thead>

                        <tr>

                            <th>Nombre</th>
                            <th>Descripcion</th>
                            <th>Precio</th>

                        </tr>

                    </thead>
                    <tbody id="myTbody xxx">

                        <tr></tr>

                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
<script>

    $(document).ready(function(){
   
        //loadDataHtml();
        loadDataJson();
    });

    const loadDataHtml = function() {
    
        let url = "/productsAjax/html";

        $.get(url, function(data, status) {

            $('#tablehtml').html(data);

        })
        
        .fail(function(e) {

            console.log('Error ' + e.status);

        });
        
    }

   const loadDataJson = function() {

        let url = "/productsAjax/json";
        $.get(url, function(data, status) {

            console.log(data);
            $('#myTbody').empty();
            Object.keys(data).forEach(function(id) {

                console.log(data[id]);
                var tr = document.createElement('tr');
                tr.setAttribute("id", `tr${data[id].id}`);
                let fila = "<td>" + data[id].nombre + "</td>";
                fila += "<td>" + data[id].descripcion + "</td>";
                fila += "<td>" + data[id].precio + "</td>";
                tr.innerHTML = fila;

                $('#myTbody').append(tr);

            })

        });

    }


</script>

@endsection
