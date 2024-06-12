<!DOCTYPE html>
<html>
<head>
    <title>Treni in Partenza</title>
    <link rel="stylesheet" href="{{ asset('scss/app.scss') }}">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Treni in Partenza</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Azienda</th>
                    <th>Stazione di Partenza</th>
                    <th>Stazione di Arrivo</th>
                    <th>Orario di Partenza</th>
                    <th>Orario di Arrivo</th>
                    <th>Codice Treno</th>
                    <th>Numero Carrozze</th>
                    <th>In Orario</th>
                    <th>Cancellato</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($treni as $treno)
                    <tr>
                        <td>{{ $treno->azienda }}</td>
                        <td>{{ $treno->stazione_di_partenza }}</td>
                        <td>{{ $treno->stazione_di_arrivo }}</td>
                        <td>{{ $treno->orario_di_partenza }}</td>
                        <td>{{ $treno->orario_di_arrivo }}</td>
                        <td>{{ $treno->codice_treno }}</td>
                        <td>{{ $treno->numero_carrozze }}</td>
                        <td>{{ $treno->in_orario ? 'Sì' : 'No' }}</td>
                        <td>{{ $treno->cancellato ? 'Sì' : 'No' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
