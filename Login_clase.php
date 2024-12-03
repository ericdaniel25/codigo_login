<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Class</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body Class="flex flex-col items-center justify-center h-screen bg-gradient-to-r from-[#305170] via-[#63e5c5] to-[#6dfc6b]">
        
        <div Class="flex flex-col items-center justify-between h-96 w-96 bg-[#d4d5d456] backdrop-blur-sm rounded-xl z-0 static drop-shadow-lg">
        </div>
    
        <div Class="flex flex-col items-center justify-between h-96 w-96 rounded-lg z-50 absolute drop-shadow-lg border-2">
            <h1 Class="text-3xl text-center text-white font-semibold">LOGIN</h1>
            <input class="shadow appearance-none border rounded w-9/12 h-14 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            placeholder="Username" type="text" name="username" id="username">
            <input class="shadow appearance-none border rounded w-9/12 h-14 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            placeholder="Password" type="password" name="Password" id="password">
            <button class="bg-[#181b49] hover:bg-[#262b71] w-9/12 h-14 py-2 px-3 rounded-lg text-slate-200" 
            type="submit">ENVIAR    </button>
            <a class="text-[#cde3f2] hover:text-[#181b49]"
            href="#">Olvidaste tu contraseña?</a>
        </div>
    </body>
</html>