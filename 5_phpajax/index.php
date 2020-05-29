<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/cerulean/bootstrap.min.css">
    <script>
        //funkce s proměnnou string
        function showSuggestion(str){   
            //pokud je delka string rovna nule  
            if(str.length == 0){ 
                //potom ve spanu s output se nic nezobrazi
                document.getElementByID('output').innerHTML = '';
            }else{
                //AJAX REQ
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function(){
                    if(this.readyState == 4 && this.status == 200){
                        document.getElementById('output'). innerHTML = this.responseText;
                    }
                }
                xmlhttp.open("GET", "suggest.php?q="+str, true);
                xmlhttp.send();
            }
        }
    </script>
</head>
<body>
    <div class="container">
        <h1>Search Users</h1>
        <form>
            Search User: <input type="text" class="form-control" onkeyup="showSuggestion(this.value)">
        </form>
        <p>Suggestions: <br> <span id="output" style="font-weight:bold"></span></p>
        <br>
    </div>
</body>
</html>