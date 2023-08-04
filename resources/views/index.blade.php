<?php
// resources/views/index.blade.php
?>
@extends('layouts.app')

@section('content')
    <h1>Listado de Productos</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Acciones</th>
        </tr>
        @foreach ($productos as $producto)
        <tr>
            <td>{{ $producto->id }}</td>
            <td>{{ $producto->name }}</td>
            <td>{{ $producto->price }}</td>
            <td>{{ $producto->stock }}</td>
            <td>
                <a href="{{ route('productos.show', $producto->id) }}">Ver</a>
                <a href="{{ route('productos.edit', $producto->id) }}">Editar</a>
                <form action="{{ route('productos.destroy', $producto->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <h1>Agregar Producto</h1>

    <form action="{{ route('productos.store') }}" method="post">
        @csrf
        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" required>

        <label for="price">Precio:</label>
        <input type="number" name="price" id="price" required>

        <label for="stock">Stock:</label>
        <input type="number" name="stock" id="stock" required>

        <button type="submit">Agregar Producto</button>
    </form>
@endsection
