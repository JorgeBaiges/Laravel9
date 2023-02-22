            <table class="table table-striped table-hover table-bordered">
                @foreach( $productos as $key => $product )
                
                    <tr>
                        <td>{{ $product->nombre }}</td>
                        <td>{{ $product->descripcion }}</td>
                        <td>{{ $product->precio }}</td>

                        <td>
                            @can('update', $product)
                            <a class="btn btn-primary" href="{{ route('products.edit', $product->id) }}">Editar</a>
                            @endcan
                        </td>
                        <td>

                            @can('view', $product)
                            <a class="btn btn-info" href="{{ route('products.show', $product->id) }}">Mostrar</a>
                            @endcan

                        </td>
                        <td>
                            @can('delete', $product)
                            <form action="{{ route('products.destroy', $product->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-warning" type="submit">Borrar</a>
                            </form>
                            @endcan
                        </td>

                    </tr>

                @endforeach
            </table>
