<!doctype html>
	<head>
		<meta charset="utf-8">
		<title>Proyecto Final</title>
		<script src="https://cdn.tailwindcss.com"></script>
	</head>
	<body class="flex flex-col justify-center items-center h-screen">
		<div class="rounded shadow-lg overflow-hidden w-6/12 flex flex-col p-5">
			<h1 class="uppercase text-indigo-600 font-bold text-4xl mb-5">Ingresa</h1>
			<form method="POST" action="login.php">
				<div class="w-full flex flex-col mb-5">
					<label for="nombreUsuario" class="text-gray-700 uppercase font-bold">Nombre de Usuario:</label>
					<input type="text" name="nombreUsuario" id="nombreUsuario" class="border-2 w-full p-2 mt-2 placeholder-gray-400 rounded-md"/>
				</div>
				<div class="w-full flex flex-col mb-5">
					<label for="pass" class="text-gray-700 uppercase font-bold">Contraseña:</label>
					<input type="password" name="pass" id="pass" class="border-2 w-full p-2 mt-2 placeholder-gray-400 rounded-md"/>
				</div>
				<input type="submit" value="Enviar" class="bg-indigo-700 w-full py-3 px-10 rounded-xl text-white uppercase font-bold mt-5 hover: cursor-pointer hover:bg-indigo-800 md:w-auto"/>
			</form>
		</div>
	</body>
</html>

