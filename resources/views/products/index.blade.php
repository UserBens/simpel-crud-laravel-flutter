<!DOCTYPE html>
<html>

<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<body>

    <h2>Table Product</h2>

    <table>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            {{-- <th>Image URL</th> --}}
        </tr>
        @foreach($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->price }}</td>
            {{-- <td>{{ $product->image_url }}</td> --}}
            <td>
                <a href="/products/{{ $product->id }}/edit">edit data</a>
            </td>
        </tr>
        @endforeach
    </table>
    
    <a href="/products/create">Create New Product</a>

</body>

</html>
