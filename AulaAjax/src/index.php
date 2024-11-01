<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        console.log("======== INÍCIO DO NOSSO JS");
        
        const urlSiteController = "http://localhost:9889/controllers/SiteController.php";
        
        function processaRespostaDoController(resp) {
            resp.text().then(function(txt) {
                document.getElementById("resposta").innerHTML = txt;
                console.log(txt);
            });
        }

        console.log("Aguarde...");
        fetch(urlSiteController).then(processaRespostaDoController);
        console.log("Aguarde...");
        fetch(urlSiteController).then(processaRespostaDoController);
        console.log("Aguarde...");
        fetch(urlSiteController).then(processaRespostaDoController);
        console.log("Aguarde...");
        fetch(urlSiteController).then(processaRespostaDoController);

        console.log("<<<<< FIM DO NOSSO JS");
    </script>
</head>
<body>
    <h1>Aula Sobre Front-end e Ajax</h1>
    <span id="resposta"></span>
</body>
</html>
