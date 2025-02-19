<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Confirmação</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            color: #333;
            text-align: center;
            padding: 50px;
        }
        .container {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
            max-width: 400px;
            margin: auto;
        }
        button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #218838;
        }
    </style>
    <script>
        function downloadEbook() {
            window.open('http://localhost/landing_page/e-book_Bitly.pdf', '_blank');
        }
    </script>
</head>
<body>
    <div class="container">
        <h1>Obrigado por se inscrever!</h1>
        <p>Você agora faz parte da nossa comunidade. Clique no botão abaixo para baixar seu e-book:</p>
        <button onclick="downloadEbook()">Baixar E-book</button>
    </div>
</body>
</html>
