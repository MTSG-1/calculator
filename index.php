<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind Centered Calculator</title>
    <link rel="stylesheet" href="css/output.css">
</head>
<body class="flex items-center justify-center h-screen bg-gray-900">
    <div class="bg-blue-700 rounded-lg shadow-lg p-6 w-80">
    <input type="text" id="display" class="w-full h-12 mb-4 text-right text-lg px-2 border bg-gray-900 text-white rounded-md" readonly>
        <div class="grid grid-cols-4 gap-2">
            <button class="h-12 bg-gray-300 rounded-md" onclick="clearDisplay()">C</button>
            <button class="h-12 bg-gray-300 rounded-md" onclick="deleteLast()">DEL</button>
            <button class="h-12 bg-gray-300 rounded-md" onclick="appendToDisplay('(')">(</button>
            <button class="h-12 bg-gray-300 rounded-md" onclick="appendToDisplay(')')">)</button>
            <button class="h-12 bg-gray-900 text-white rounded-md" onclick="appendToDisplay('7')">7</button>
            <button class="h-12 bg-gray-900 text-white rounded-md" onclick="appendToDisplay('8')">8</button>
            <button class="h-12 bg-gray-900 text-white rounded-md" onclick="appendToDisplay('9')">9</button>
            <button class="h-12 bg-orange-500 text-white rounded-md" onclick="appendToDisplay('/')">/</button>
            <button class="h-12 bg-gray-900 text-white rounded-md" onclick="appendToDisplay('4')">4</button>
            <button class="h-12 bg-gray-900 text-white rounded-md" onclick="appendToDisplay('5')">5</button>
            <button class="h-12 bg-gray-900 text-white rounded-md" onclick="appendToDisplay('6')">6</button>
            <button class="h-12 bg-orange-500 text-white rounded-md" onclick="appendToDisplay('*')">*</button>
            <button class="h-12 bg-gray-900 text-white rounded-md" onclick="appendToDisplay('1')">1</button>
            <button class="h-12 bg-gray-900 text-white rounded-md" onclick="appendToDisplay('2')">2</button>
            <button class="h-12 bg-gray-900 text-white rounded-md" onclick="appendToDisplay('3')">3</button>
            <button class="h-12 bg-orange-500 text-white rounded-md" onclick="appendToDisplay('-')">-</button>
            <button class="h-12 bg-gray-900 text-white rounded-md" onclick="appendToDisplay('0')">0</button>
            <button class="h-12 bg-gray-900 text-white rounded-md" onclick="appendToDisplay('.')">.</button>
            <button class="h-12 bg-green-500 text-white rounded-md" onclick="calculateResult()">=</button>
            <button class="h-12 bg-orange-500 text-white rounded-md" onclick="appendToDisplay('+')">+</button>
        </div>
    </div>
    <script>
        function appendToDisplay(value) {
            document.getElementById('display').value += value;
        }

        function clearDisplay() {
            document.getElementById('display').value = '';
        }

        function deleteLast() {
            const display = document.getElementById('display');
            display.value = display.value.slice(0, -1);
        }

        function calculateResult() {
            const display = document.getElementById('display');
            try {
                display.value = eval(display.value);
            } catch (error) {
                display.value = 'Error';
            }
        }
    </script>
</body>
</html>
