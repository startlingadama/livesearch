<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Etudiant</title>
    <style type="text/css">
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            font-size: 36px;
            justify-items: center;
            text-align: center;
            background-image: url("back.gif");
            color: white;
        }
        .container {
            display: flex;
            justify-self: center;
            flex-direction: column;
            justify-items: center;
            
        }
        .container div {
            display: flex;
            border: 3px solid white;
            justify-content: space-around;
            justify-items: center;
            width: 650px;
            align-self: center;
            padding: 5px;

            
        }
        #type, .container div label {
            margin-top: 7px;
            text-align: center;
        }
        #inputsearch {
            display: flex;
            flex-direction: column;
            width: 370px;
            border:0;
        }

        #search {
            width: 370px;
            height: 40px;
            font-size: 30px;
            background-color: #9D8B6E;
            border: 3px solid white;
            color: white;
            
        }

        #searchlive {
            display: flex;
            flex-direction: column;
            border:0px;
            width: 365px;
            margin-left: 7px;
        }
        .suggest {
            font-size: 20px;
            border: 1px solid #9D8B6E;
            margin: 0px;
            justify-self: center;
            
        }

        #type {
            height: 40px;
            font-size: 30px;
            background-color: #9D8B6E;
            color: white;
        }
    </style>
    <script>
        function show(str){

            if(str.length == ""){
                document.getElementById("searchlive").innerHTML="";
                document.getElementById("searchlive").style.border = "0px";

                return;
            }

            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange =function(){
                if(this.readyState == 4 && this.status == 200){
                    document.getElementById("searchlive").innerHTML = this.responseText;
                    document.getElementById("searchlive").style.border = "1px solid #A5ACB2";
                }
            }
            var type = document.getElementById("type");
            xhr.open('GET', "liste.php?q="+str+"&type=" + type.value, true);
            xhr.send();
            
            
        }
    </script>
</head>
<body>
    
    <div class="container">
        <h1>Barre de recherche utilisant AJAX - PHP</h1>
        <div>
            <select id="type">
                <option value="nom">Nom</option>
                <option value="prenom">Prenom</option>
                <option value="cne">CNE</option>
            </select>
            <div id="inputsearch">
                <input typ="search" name="search" id="search" onkeyup="show(this.value)" />
                <div id="searchlive"></div>
            </div>
            
            <label type="button" for="search">Search</label>
            
        </div>
        
    </div>
    
</body>
</html>