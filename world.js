window.onload=startup;

function startup(){

    document.getElementById("lookup").addEventListener("click",function(){
       if($('#all').is(':checked')){
        var endpoint="https://info2180-lab7-june1997.c9users.io/world.php?all=true";
        }
        else{
        var country=document.getElementById("country").value;
        var endpoint="https://info2180-lab7-june1997.c9users.io/world.php?country="+country;
        }
      $.ajax({
        url:endpoint,
        method:"GET",
    }).done(function(result){
        document.getElementById("result").innerHTML=result;
    });   
    });
}