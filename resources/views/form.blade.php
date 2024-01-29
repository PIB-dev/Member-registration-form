<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="" rel="stylesheet">
    <link rel="stylesheet" href="/css/global.css">
    <title>Formulário de membro</title>
    @vite('resources/css/app.css')
</head>
<body class="w-full h-screen pb-4">
    <div id="load-form" class="bg-slate-500 bg-opacity-70 fixed w-full h-full z-10 justify-center items-center backdrop-blur-sm animate-pulse hidden">
        <h1 class="m-auto font-black text-2xl text-white">Enviando seus dados...</h1>
    </div>
    <div class="principal-bg flex justify-center h-auto w-full px-4 py-9 rounded-br-3xl bg-blue-900">  
        <div class="ml-6 text-4xl tracking-wider md:text-5xl xl:text-6xl">
            <h1 class="font-black text-white">FAÇA O SEU CADASTRO</h1>
            <h1 class="font-light text-white">ATUALIZE OS SEUS DADOS</h1>
        </div>
    </div>
    <div class="w-full max-w-xl mx-auto mt-2">
        <form id="member-form" action="/members" method="POST" class="p-3 grid grid-cols-1 gap-6 text-blue-900" enctype="multipart/form-data">
           @csrf
           <div class="text-center mb-2">" <strong class="text-red-500">*</strong> " = Campos obrigatórios.</div>
            <div id="stage1" class="grid grid-cols-1 gap-3">
                <div class="relative">
                    <label for="nome" class="font-medium absolute left-3 -top-3 bg-white px-1 rounded-full"><strong class="text-red-500">*</strong>Nome</label>
                    <input required type="text" id="nome" name="nome" class="mb-2 p-4 w-full border border-blue-900 focus:outline-none focus:border-green-500  transition duration-300" placeholder="SEU NOME COMPLETO">
                </div>
                <div class="relative">
                    <label for="data_nascimento" class="font-medium absolute left-3 -top-3 bg-white px-1 rounded-full"><strong class="text-red-500">*</strong>Data de nascimento</label>
                    <input required type="date" id="data_nascimento" name="data_nascimento" class="mb-2 p-4 w-full border border-blue-900 focus:outline-none focus:border-green-500  transition duration-300" placeholder="Data de Nascimento">
                </div>
                <div class="relative">
                    <label for="email" class="font-medium absolute left-3 -top-3 bg-white px-1 rounded-full">Email</label>
                    <input type="email" id="email" name="email" class="mb-2 p-4 w-full border border-blue-900 focus:outline-none focus:border-green-500  transition duration-300" placeholder="EMAIL">
                </div>
                <div class="relative">
                    <label for="telefone" class="font-medium absolute left-3 -top-3 bg-white px-1 rounded-full">Telefone</label>
                    <input type="tel" id="telefone" name="telefone" class="mb-2 p-4 w-full border border-blue-900 focus:outline-none focus:border-green-500  transition duration-300" placeholder="TELEFONE">
                </div>
                <div class="flex">
                    <input required type="radio" id="tipo" name="tipo" value="MEMBRO" class="mr-2">
                    <label for="membro" class="mr-6 text-sm">SOU MEMBRO</label>

                    <input required type="radio" id="tipo" name="tipo" value="CONGREGADO" class="mr-2">
                    <label for="congregado" class="text-sm">SOU CONGREGADO</label>
                </div>
            </div>

            <div id="stage2" class="hidden grid-cols-1 gap-3">
                <div class="relative">
                    <label for="cep" class="font-medium absolute left-3 -top-3 bg-white px-1 rounded-full">CEP</label>
                    <input type="text" id="cep" name="cep" class="mb-4 p-4 w-full border border-blue-900 focus:outline-none focus:border-green-500  transition duration-300" placeholder="CEP">
                </div>
                <div class="relative">
                    <label for="logradouro" class="font-medium absolute left-3 -top-3 bg-white px-1 rounded-full"><strong class="text-red-500">*</strong>Rua</label>
                    <input required type="text" id="logradouro" name="logradouro" class="mb-4 p-4 w-full border border-blue-900 focus:outline-none focus:border-green-500  transition duration-300" placeholder="Rua">
                </div>
                <div class="relative">
                    <label for="numero" class="font-medium absolute left-3 -top-3 bg-white px-1 rounded-full">Número</label>
                    <input type="text" id="numero" name="numero" class="mb-4 p-4 w-full border border-blue-900 focus:outline-none focus:border-green-500  transition duration-300" placeholder="Número">
                </div>
                <div class="relative">
                    <label for="complemento" class="font-medium absolute left-3 -top-3 bg-white px-1 rounded-full">Complemento</label>
                    <input type="text" id="complemento" name="complemento" class="mb-4 p-4 w-full border border-blue-900 focus:outline-none focus:border-green-500  transition duration-300" placeholder="Complemento">
                </div>
                <div class="relative">
                    <label for="bairro" class="font-medium absolute left-3 -top-3 bg-white px-1 rounded-full"><strong class="text-red-500">*</strong>Bairro</label>
                    <input required type="text" id="bairro" name="bairro" class="mb-4 p-4 w-full border border-blue-900 focus:outline-none focus:border-green-500  transition duration-300" placeholder="Bairro">
                </div>
                <div class="relative">
                    <label for="localidade" class="font-medium absolute left-3 -top-3 bg-white px-1 rounded-full"><strong class="text-red-500">*</strong>Cidade</label>
                    <input required type="text" id="localidade" name="localidade" class="mb-4 p-4 w-full border border-blue-900 focus:outline-none focus:border-green-500  transition duration-300" placeholder="Cidade">
                </div>
                <div class="relative">
                    <label for="uf" class="font-medium absolute left-3 -top-3 bg-white px-1 rounded-full"><strong class="text-red-500">*</strong>Estado</label>
                    <input required type="text" id="uf" name="uf" class="mb-4 p-4 w-full border border-blue-900 focus:outline-none focus:border-green-500  transition duration-300" placeholder="Estado">
                </div>
            </div>

            <div id="stage3" class="hidden text-center w-full">
                <h1 class="blue-900 text-xl mb-4">Agora chegou a hora de escolher uma foto sua.</h1>
                <input type="file" id="image" name="image" accept="image/*" class="mx-auto w-full text-sm text-slate-500 file:mr-2 file:py-2 file:px-4 file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
            </div>

            <div id="stage4" class="hidden text-center w-full">
                <div class="flex flex-col items-center p-5 border border-solid border-stone-300 bg-slate-50 rounded-xl my-5 mx-auto relative">
                    <h1 class="text-xl bg-slate-50 rounded-lg absolute -top-4 left-5 px-3 border border-solid border-stone-300">Confirme seus dados</h1>
                    <div id="preview-imagem" class="rounded-full w-52 h-52 m-4 bg-slate-400 bg-cover bg-center bg-no-repeat"></div>
                    
                    <p><b class="text-red-500">*</b>Nome: <strong id="preview-nome">...</strong></p>                    
                    <p><b class="text-red-500">*</b>Data de nascimento: <strong id="preview-data_nascimento">...</strong></p>     
                    <p>Email: <strong id="preview-email">...</strong></p>                    
                    <p>Telefone: <strong id="preview-telefone">...</strong></p>                    
                    <p><b class="text-red-500">*</b>Tipo: <strong id="preview-tipo">...</strong></p> 
                    <p>CEP: <strong id="preview-cep">...</strong></p>  
                    <p><b class="text-red-500">*</b>Rua: <strong id="preview-logradouro">...</strong></p> 
                    <p>Numero: <strong id="preview-numero">...</strong></p>  
                    <p>Complemento: <strong id="preview-complemento">...</strong></p>  
                    <p><b class="text-red-500">*</b>Bairro: <strong id="preview-bairro">...</strong></p> 
                    <p><b class="text-red-500">*</b>Cidade: <strong id="preview-localidade">...</strong></p> 
                    <p><b class="text-red-500">*</b>UF: <strong id="preview-uf">...</strong></p> 
                </div>
            <div>
                <button type="submit" onclick="checkInvalidFields()" class="py-4 px-8 mt-6 text-white font-thin rounded-full bg-blue-700">ENVIAR</button>
            </div>
            </div>
        </form>
        <div class="w-full flex justify-center p-3">
            <button id="button-return-stage" class="hidden py-4 px-8 mx-3 text-white font-thin rounded-full bg-purple-800" onclick="returnToStage()">VOLTAR</button>
            <button id="button-advance-stage" class="py-4 px-8 mx-3 text-white font-thin rounded-full bg-blue-900" onclick="advanceToStage()">AVANÇAR</button>
        </div>    
    </div>
</body>
<footer class="w-full py-5">
    <p class="text-blue-900 text-xs text-center w-full">
        Desenvolvido pelo Ministério de Serviço da PIBFS
    </p>
</footer>
<script src="/js/jquery.min.js"></script>
<script src="/js/jquery.inputmask.min.js"></script>
<script src="/js/form.js"></script>
<script src="/js/post_form.js"></script>
<script src="/js/via_cep.js"></script>


</html>