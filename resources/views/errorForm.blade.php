<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/global.css">
    <title>Faça seu cadastro</title>
    @vite('resources/css/app.css')
</head>
<body class="w-full h-screen pb-4">
    <div class="principal-bg bg-cover bg-center flex flex-col justify-between items-center h-5/6 w-full p-9 relative " style="background-image: url(/img/FUNDO_IGREJA.png)">
        
        <img class="mx-auto" src="/img/LOGO.png" alt="">
          
        <div class="mx-auto text-4xl tracking-wider md:text-5xl md:pb-40 xl:text-6xl">
            <h1 class="font-black text-white">SEU CADASTRO</h1>
            <h1 class="font-light text-white">NÃO FOI ENVIADO</h1>
            <h3 class="mt-3 text-xl text-white">Tente novamente mais tarde</h3>
        </div>
        <div class="absolute top-0 mix-blend-color bg-red-800 opacity-75 w-full h-full" style="border-radius: 0 0 100px 0;"></div>
    </div>
    <div class="w-ful flex justify-center">
        <a class="my-7 py-4 px-6 text-white font-thin rounded-full bg-red-700" href="/">REALIZAR CADASTRO NOVAMENTE</a>
    </div>
</body>
<footer class="w-full h-auto absolute bottom-0 flex justify-center">
    <p class="text-blue-900 p-2 text-xs">
        Desenvolvido pelo Ministério de Serviço da PIBFS
    </p>
</footer>
</html>