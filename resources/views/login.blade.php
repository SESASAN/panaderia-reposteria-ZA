<head>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="flex h-screen m-0">
    <div class="left-section bg-[#F5E7D3] w-1/2 flex flex-col justify-center items-center">
        <div class="text-center">
            <img src="{{ asset('images/logoconnegro.png') }}" alt="Panadería y repostería Zhandra Araujo" class="w-80 h-auto">
        </div>
    </div>

    <div class="right-section bg-[#FFF7EB] w-1/2 flex flex-col justify-center items-center p-8">
        <div class="form-container bg-white p-10 rounded-lg shadow-md w-full max-w-md">
            <h2 class="text-2xl font-bold mb-4">Bienvenido de nuevo</h2>
            <p class="text-gray-600 mb-4">Por favor ingresa tu información</p>
            <form action="/login" method="POST">
                <label for="email" class="block text-left text-gray-700 mb-1">Email:</label>
                <input type="email" id="email" name="email" class="w-full p-2 border border-gray-300 rounded-md mb-4">

                <label for="password" class="block text-left text-gray-700 mb-1">Contraseña:</label>
                <input type="password" id="password" name="password" class="w-full p-2 border border-gray-300 rounded-md mb-4">

                <div class="recordarme-container flex items-center mb-4 w-full">
                    <input type="checkbox" id="remember" name="remember" class="mr-2">
                    <label for="remember" class="text-gray-700">Recordarme</label>
                </div>

                <button type="submit" class="w-full bg-red-600 text-white py-2 rounded-md font-bold mb-2">Iniciar Sesión</button>
                
                <button type="button" class="w-full bg-blue-600 text-white flex justify-center items-center py-2 rounded-md">
                    <img src="{{ asset('images/google.png') }}" alt="Google Logo" class="w-8 mr-2">
                    Iniciar Sesión con Google
                </button>
            </form>
        </div>
    </div>
</body>
<style>

        body {
            display: flex;
            height: 100vh;
            margin: 0;
        }


        .left-section {
            background-color: #F5E7D3;
            width: 50%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .left-section .text-center {
            text-align: center;
        }

        .left-section img {
            width: 350px;
            height: auto;
        }



        .right-section {
            background-color: #FFF7EB;
            width: 50%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 0 4rem;
        }


        .form-container {
            background-color: white;
            padding: 2.5rem;
            border-radius: 0.5rem;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 25rem;
        }


        h2 {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }

        p {
            color: #4A5568;
            margin-bottom: 1rem;
        }

        label {
            display: block;
            text-align: left;
            color: #4A5568;
            margin-bottom: 0.5rem;
        }

        input {
            width: 100%;
            padding: 0.5rem 0.75rem;
            border: 1px solid #D1D5DB;
            border-radius: 0.375rem;
            margin-bottom: 1rem;
        }

        .recordarme-container {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            margin-bottom: 1rem;
            width: 100%;
        }

        .recordarme-container input[type="checkbox"] {
            margin-right: 0.5rem;
            display: inline-block;
            width: auto;
            height: auto;
        }

        button {
            width: 100%;
            padding: 0.5rem;
            border-radius: 0.375rem;
            font-weight: bold;
            text-align: center;
            margin-bottom: 0.5rem;
        }


        button.submit-btn {
            background-color: #EF4444;
            color: white;
        }

        button.google-btn {
            background-color: #2563EB;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        button.google-btn img {
            width: 30px;
            margin-right: 0.5rem;
        }
    </style>


