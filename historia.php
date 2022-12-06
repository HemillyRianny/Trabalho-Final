<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>História</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            background-color: white;
        }
        
        input {
            font-family: 'Times New Roman', Times, serif;
            font-size: 75%;
            background-color: white;
            color: black;
            border-radius: 10px;
        }
        
        #container {
            display: flex;
            flex-wrap: wrap;
        }
        
        .quadro {
            background-color: #7971ea;
            height: 100px;
            width: 200px;
            margin: 20px;
            color: white;
            text-align: center;
            font-size: 150%;
            padding: 7%;
            border-radius: 10px;
        }
        /* button { */
        
        #quad {
            background-color: none;
            font-size: 100%;
        }
        
        #quad2 {
            background-color: none;
            font-size: 100%;
        }
        
        #botao {
            background-color: #7971ea;
            width: 70px;
            height: 70px;
            border-radius: 100%;
            position: relative;
            left: 85%;
            color: white;
            font-size: 45px;
            border-color: white;
        }
        
        #inicio {
            background-color: #7971ea;
            width: 70px;
            height: 70px;
            border-radius: 100%;
            position: relative;
            right: 5%;
            color: white;
            font-size: 45px;
            border-color: white;
        }
        
        dialog {
            /* box-shadow: white; */
            border-color: white;
            background-color: #7971ea;
            color: white;
            text-align: center;
            font-size: 150%;
            padding: 5%;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <button id="botao" onclick="clic()">
        +
    </button>
    <!-- <a href="https://www.youtube.com"> -->
    <!-- <button id="inicio">
        ⌂
    </button> -->
    <!-- <button>
        +
    </button> -->
    </a>
    <div id="container">
        <div class="quadro">
            <button id="quad" onclick="clicar()">
                    ►
                <br> nome do vídeo
                </button>
        </div>
        <div class="quadro">
            <button id="quad2" onclick="clicar()">
                ⌦
                <br> nome do documento
                </button>
        </div>
    </div>
    <dialog>
        <form class="formulario " method="post ">
            Insira o link do vídeo:
            <br>
            <input type="url " name="url " id="url ">
            <input type="submit " name="sub" value="Enviar ">
            <br> Para sair clique na tecla "esc ".
            <!-- <button>
            Sair
        </button> -->
        </form>
    </dialog>

    <script>
        const botao = document.querySelector("button ")
        const quad = document.getElementById("quad")
        const quad2 = document.getElementById("quad2")
        const modal = document.querySelector("dialog ")
            // const buttonClose = document.querySelector("dialog button ")
        botao.onclick = function() {
                // button.onclick = function() {
                modal.showModal()
                    // modal.show()
            }
            // if (var_dump($_POST)) {
            //     window.location.href = "";
            // }
            // function clic() {

        // }
        quad.onclick = function() {
            window.location.href = "https://youtube.com/";

        }
        quad2.onclick = function() {
            window.location.href = "https://docs.google.com/document/u/0/?hl=pt-BR";

        }
    </script>
</body>

</html>