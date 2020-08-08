<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
    <script>
    function toggle() {
        if (document.getElementById("messaggio").value!="") {
            document.getElementById("form1").submit();
        }else{
            document.getElementById("messaggio").placeholder="Inserisci un reminder ";
        }
       
    }
    </script>
</head>
<body>
    <form action="sender/sender.php" method="post" id="form1">
   
   



    <div id="js-chatbar" class="chat-bar">
  <div id="js-toggle" class="chat-bar__toggle" onclick="toggle()" >
  
    <i class="material-icons">send</i>
  </div>
  <div class="chat-bar__message"><input class="chat-bar__input" type="text" placeholder="Message..."  name="messaggio" id="messaggio" required></div>
  </form>
  
</div>
</body>
</html>