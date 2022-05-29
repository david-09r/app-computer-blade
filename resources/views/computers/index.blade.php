<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>Index - Computer</title>
</head>
<body>
    <div class="flex flex-col items-center px-20 py-2">
        <table class="table-auto border-b-2 border-gray-700 w-full text-center">
            <thead class="bg-gray-700 text-white">
                <tr>
                    <th class="py-2">ID</th>
                    <th>Fecha de compra</th>
                    <th>Fecha de armado</th>
                    <th>Fecha de entregado</th>
                    <th>Ensamblador</th>
                    <th>Vendedor</th>
                    <th>Comprador</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
            <tbody class="bg-gray-300">
                @forelse($computers as $computer)
                    <tr class="gap-5 border-b border-gray-200">
                        <td class="py-2 border-r border-gray-200">{{ $computer->id }}</td>
                        <td class="border-r border-gray-200">{{ $computer->date_purchase }}</td>
                        <td class="border-r border-gray-200">{{ $computer->date_assembly }}</td>
                        <td>{{ $computer->date_delivery }}</td>
                        <td>{{ $computer->assembler->first_name .' '.$computer->assembler->last_name }}</td>
                        <td>{{ $computer->seller->first_name .' '. $computer->seller->last_name }}</td>
                        <td>{{ $computer->user->first_name .' '.$computer->user->last_name }}</td>
                        <td>
                            <form action="{{ route('computers.destroy', $computer) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Eliminar" class="px-2 py-1 bg-red-600 cursor-pointer rounded">
                            </form>
                        </td>
                        <td>
                            <a href="{{ route('computers.edit', $computer) }}" class="px-2 py-1 bg-gray-700 text-white rounded">Editar</a>
                        </td>
                    </tr>
                @empty
                    <p>No hay computadores registrados</p>
                @endforelse
            </tbody>
        </table>
        <div class="flex justify-between w-full my-2">
        <a class="flex items-center px-4 bg-gray-700 my-1 py-2 rounded text-white" href="{{ route('computers.create') }}">+ Nuevo Computador +</a>
            {{ $computers->links() }}
        </div>
    </div>
</body>
</html>