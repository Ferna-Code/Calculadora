<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>Calculadora</title>
</head>

<body>
    <div class="cuerpoCalculadora">
        <div class="pantalla" id="result">
            <input type="text" class="operacion" id="operacion" value="">
            <br>
            <input type="text" class="resultado" id="resultado" value="" readonly>

        </div>
        <div class="botones">
            <form method="get" action="#">
                <table>
                    <tr>
                        <td><button onclick="deleteScreen()" class="colorBtn">CE</button></td>
                        <td><button onclick="appendToResult('(')" class="colorBtn">(</button></td>
                        <td><button onclick="appendToResult(')')" class="colorBtn">)</button></td>
                        <td><button onclick="appendToResult('')" hidden="true" class="colorBtn"></button></td>
                    </tr>
                    <tr>
                        <td><button onclick="appendToResult('1')">1</button></td>
                        <td><button onclick="appendToResult('2')">2</button></td>
                        <td><button onclick="appendToResult('3')">3</button></td>
                        <td><button onclick="appendToResult('+')" class="colorBtn">+</button></td>
                    </tr>
                    <tr>
                        <td><button onclick="appendToResult('4')">4</button></td>
                        <td><button onclick="appendToResult('5')">5</button></td>
                        <td><button onclick="appendToResult('6')">6</button></td>
                        <td><button onclick="appendToResult('-')" class="colorBtn">-</button></td>
                    </tr>
                    <tr>
                        <td><button onclick="appendToResult('7')">7</button></td>
                        <td><button onclick="appendToResult('8')">8</button></td>
                        <td><button onclick="appendToResult('9')">9</button></td>
                        <td><button onclick="appendToResult('*')" class="colorBtn">*</button></td>
                    </tr>
                    <tr>
                        <td><button onclick="appendToResult('0')">0</button></td>
                        <td><button onclick="appendToResult('.')" class="colorBtn">.</button></td>
                        <td><button onclick="calculateResult()" class="colorBtn">=</button></td>
                        <td><button onclick="appendToResult('/')" class="colorBtn">/</button></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>

    <script>
        let currentInput = '';
        let textPantalla = document.getElementById('operacion');
        let textPantalla2 = document.getElementById('resultado');
        function appendToResult(value) {
            currentInput += value;
            textPantalla.value = currentInput;
        }

        function calculateResult() {
            /*Evaluamos la expresion matematica contenida en la cadena y luego convierte el valor en string*/
            currentInput = eval(currentInput).toString();
            textPantalla2.value = currentInput;
        }

        function deleteScreen(){
            currentInput = '';
            textPantalla.value = '';
            textPantalla2.value = '';
        }
    </script>
</body>

</html>