<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0 auto;
            max-width: 800px;
            padding: 20px;
        }

        h1 {
            text-align: center;
        }

        #output {
            background-color: #f9f9f9;
            border-radius: 10px;
            padding: 20px;
            margin-top: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            margin-top: 20px;
        }

        pre {
            white-space: pre-wrap;
        }
    </style>
    <title>Output Array</title>
</head>
<body>
    <h1>Output Array</h1>

    <div id="output"></div>

    <script>
        // Fungsi untuk menghasilkan 100 nilai random antara 1 dan 50
        function generateRandomValues() {
            const values = [];
            for (let i = 0; i < 100; i++) {
                values.push(Math.floor(Math.random() * 50) + 1);
            }
            return values;
        }

        // Fungsi untuk membagi array menjadi genap dan ganjil
        function splitArray(arr) {
            const evenArray = [];
            const oddArray = [];
            for (let i = 0; i < arr.length; i++) {
                if (i % 2 === 0) {
                    evenArray.push(arr[i]);
                } else {
                    oddArray.push(arr[i]);
                }
            }
            return { evenArray, oddArray };
        }

        // Fungsi untuk menghitung nilai minimum
        function calculateMin(arr) {
            let min = arr[0];
            for (let i = 1; i < arr.length; i++) {
                if (arr[i] < min) {
                    min = arr[i];
                }
            }
            return min;
        }

        // Fungsi untuk menghitung nilai maksimum
        function calculateMax(arr) {
            let max = arr[0];
            for (let i = 1; i < arr.length; i++) {
                if (arr[i] > max) {
                    max = arr[i];
                }
            }
            return max;
        }

        // Fungsi untuk menghitung total
        function calculateTotal(arr) {
            let total = 0;
            for (let i = 0; i < arr.length; i++) {
                total += arr[i];
            }
            return total;
        }

        // Fungsi untuk menghitung rata-rata
        function calculateAverage(arr) {
            const total = calculateTotal(arr);
            return total / arr.length;
        }

        // Generate 100 nilai random
        const randomValues = generateRandomValues();

        // Bagi array menjadi genap dan ganjil
        const { evenArray, oddArray } = splitArray(randomValues);

        // Hitung min, max, total, dan rata-rata
        const minEven = calculateMin(evenArray);
        const maxEven = calculateMax(evenArray);
        const totalEven = calculateTotal(evenArray);
        const averageEven = calculateAverage(evenArray);

        const minOdd = calculateMin(oddArray);
        const maxOdd = calculateMax(oddArray);
        const totalOdd = calculateTotal(oddArray);
        const averageOdd = calculateAverage(oddArray);

        function compareTotal(evenTotal, oddTotal) {
            if (evenTotal === oddTotal) {
                return 'Total dari kedua array memiliki nilai yang sama';
            } else if (evenTotal > oddTotal) {
                return 'Total lebih besar pada array genap';
            } else {
                return 'Total lebih besar pada array ganjil';
            }
        }

        // Tampilkan output
        const outputDiv = document.getElementById('output');
        

        const comparisonResults = {
            min: minEven === minOdd ? 'Min dari masing-masing array sama' :  minEven > minOdd ? 'Min lebih besar array genap' : 'Min lebih besar array ganjil',
            max: maxEven === maxOdd ? 'Max dari masing-masing array sama' : maxEven > maxOdd ? 'Max lebih besar array genap' : 'Max lebih besar array ganjil',
            total: compareTotal(totalEven, totalOdd), // Membandingkan total
            average: averageEven > averageOdd ? 'Rata-rata lebih besar array genap' : 'Rata-rata lebih besar array ganjil',
        };

        outputDiv.innerHTML += '<h2>Array dengan jumlah index 100:</h2><pre>' + randomValues.join(', ') + '</pre>';
        outputDiv.innerHTML += '<h2>Array genap dengan jumlah index 50:</h2><pre>' + evenArray.join(', ') + '</pre>';
        outputDiv.innerHTML += '<h2>Array ganjil dengan jumlah index 50:</h2><pre>' + oddArray.join(', ') + '</pre>';
        outputDiv.innerHTML += '<h2>Min, Max, Total, Rata-rata pada array genap:</h2>';
        outputDiv.innerHTML += '<pre>Min: ' + minEven + ', Max: ' + maxEven + ', Total: ' + totalEven + ', Rata-rata: ' + averageEven + '</pre>';
        outputDiv.innerHTML += '<h2>Min, Max, Total, Rata-rata pada array ganjil:</h2>';
        outputDiv.innerHTML += '<pre>Min: ' + minOdd + ', Max: ' + maxOdd + ', Total: ' + totalOdd + ', Rata-rata: ' + averageOdd + '</pre>';
        outputDiv.innerHTML += '<h2>Perbandingan nilai:</h2>';
        outputDiv.innerHTML += '<pre>' + JSON.stringify(comparisonResults, null, 2) + '</pre>';
    </script>
</body>
</html>
