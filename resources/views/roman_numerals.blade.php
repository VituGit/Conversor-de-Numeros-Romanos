<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roman Numeral Converter</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">Conversor de Números Romanos</h1>

        <div class="row mt-4">
            <div class="col-md-6">
                <h2>Converter Romano para Inteiro</h2>
                <form action="{{ route('convertRomanToInt') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="roman">Número Romano</label>
                        <input type="text" name="roman" id="roman" class="form-control"
                            value="{{ session('romanInput') }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Converter</button>
                </form>
                @if (session('integer') !== null)
                    <p id="romanToIntResult" class="mt-3">Integer: {{ session('integer') }}</p>
                @endif
            </div>

            <div class="col-md-6">
                <h2>Converter Inteiro para Romano</h2>
                <form action="{{ route('convertIntToRoman') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="integer">Número Inteiro</label>
                        <input type="number" name="integer" id="integer" class="form-control"
                            value="{{ session('integerInput') }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Converter</button>
                </form>
                @if (session('roman') !== null)
                    <p id="intToRomanResult" class="mt-3">Roman: {{ session('roman') }}</p>
                @endif
            </div>
        </div>
    </div>
</body>

</html>
