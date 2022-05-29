<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Create - Computer</title>
</head>
<body class="bg-gray-700 flex justify-center">
    <div class="bg-gray-300 my-10 px-6 py-6 rounded">
        <form class="flex flex-col" action="{{ route('computers.store') }}" method="POST">
            <fieldset class="flex flex-col my-2">
                <label class="text-left pb-2">Fecha de Compra</label>
                <section class="">
                    <input type="datetime-local" name="date_purchase" class="px-10 py-1 rounded">
                </section>
            </fieldset>
            <fieldset class="flex flex-col my-2">
                <label class="text-left pb-2">Fecha de Ensamblado</label>
                <section class="">
                    <input type="datetime-local" name="date_delivery" class="px-10 py-1 rounded">
                </section>
            </fieldset>
            <fieldset class="flex flex-col my-2">
                <label class="text-left pb-2">Fecha de Entregado</label>
                <section class="">
                    <input type="datetime-local" name="date_assembly" class="px-10 py-1 rounded">
                </section>
            </fieldset>
            <label>Nombre del Ensamblador</label>
            <select name="assembler_id" class="py-1 px-2 rounded">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
            <label class="text-left pb-2">Nombre del Vendedor</label>
            <select name="seller_id" class="py-1 px-2 rounded">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
            <label class="text-left pb-2">Nombre del Comprador</label>
            <select name="user_id" class="py-1 px-2 rounded">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
            @csrf
            <input type="submit" class="mt-2 py-1 bg-gray-700 text-white rounded">
        </form>
    </div>
</body>
</html>