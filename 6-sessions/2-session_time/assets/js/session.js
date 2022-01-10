if($('.session').data('status') != "") {
    var interval;
    interval=setInterval(checkSession, 5000);
    $("#status").text("Checking session expiration status...");
}

function checkSession(){
    $.ajax({
        url:"check-session.php",
        method:"POST",
        success:function(response){
            if(response!=""){
                if(response == -1){
                    $("#status").hide();
                    clearInterval(interval);
                    window.location.href='index.php';
                }
    	        else{
                    $("#message").append(response);
                }
            }
       }
    });
};