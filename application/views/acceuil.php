<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Acceuil</h1>

    <?php foreach($liste_objectif as $index => $objectif) {?>
        <p><?php echo $objectif['Nom']?></p>
        <textarea name="" id="" cols="30" rows="10">
            <?php echo $objectif['descri'] ?>
        </textarea><br>
        <input type="hidden" id="nom<?php echo $index?>" value=<?php echo $objectif['Nom']?>>
        <div id='form'></div>
        <button onclick="Form(<?php echo $index?>)">Choisir</button>
    <?php } ?>

</body>
<script>

    // function create_HttpRequest(){
    //     var xhr; 
    //     try {  xhr = new ActiveXObject('Msxml2.XMLHTTP');   }
    //     catch (e) 
    //     {
    //         try {   xhr = new ActiveXObject('Microsoft.XMLHTTP'); }
    //         catch (e2) 
    //         {
    //             try {  xhr = new XMLHttpRequest();  }
    //             catch (e3) {  xhr = false;   }
    //         }
    //     }
    //     return xhr;
    // }

    function Form(i){
        var nom = document.getElementById('nom'+i).value;
        var url = 'redirect_form?nom='+nom;
        // var url = 'redirect?redirect='+nom;
        // var xhr = create_HttpRequest();
        if(window.XMLHttpRequest){
		    request = new XMLHttpRequest();		
        }
        else if(window.ActiveXObject){			
		    request = new ActiveXObject("Microsoft.XMLHTTP");
        }
        try{
            
            request.onreadystatechange=sendInfo;
            request.open("POST",url,true);
            request.send();		
        }
        catch(e){
    		alert("Unable to connect server");
        }
        
    }

    function sendInfo(){
        var p = document.getElementById("form");
        
        if(request.readyState == 1){
            var text = request.responseText;
            p.innerHTML="Traitement en cours.....";
            console.log("1");
        }

        if(request.readyState == 2){
            var text = request.responseText;
            console.log("2");			
        }
        if(request.readyState == 3){
            var text = request.responseText;
            console.log("3");			
        }
        if(request.readyState == 4){
            var text = request.responseText;			
            p.innerHTML = text;
        }
    }

</script>
</html>