<head>
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div class="left-section">
        <div class="text-center">
            <img src="{{ asset('images/logoconnegro.png') }}" alt="Panadería y repostería Zhandra Araujo">
        </div>
    </div>

    <div class="right-section">
        <div class="form-container">
            <h2>Bienvenido de nuevo</h2>
            <p>Por favor ingresa tu información</p>
            <form action="/login" method="POST">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email">

                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password">

                <div class="recordarme-container" style="display: flex; align-items: center; justify-content: flex-start; width: 100%; margin-bottom: 1rem;">
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember">Recordarme</label>
                </div>


                <a href="/home">
                <button type="submit" class="submit-btn">Iniciar Sesión</button>
                </a>
                
                <button class="google-btn">
                    <img src="{{ asset('images/google.png') }}" alt="Google Logo">
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


