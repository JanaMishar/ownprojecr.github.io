
function checkemail() {

    var regex = /^[A-Za-z0-9,@,. ]+$/  
 
        //Validate TextBox value against the Regex.
        var isValid = regex.test(document.getElementById("email").value);
        if (!isValid) {
            // var msg=document.getElementById('emailavailable');
            //          msg.innerHTML="<span style='color:orange;'>avoid spical characters</span>";

            $( "#emailavailable").html("<span style='color:orange;'>avoid spical characters</span>");
        }else{
    

jQuery.ajax({
            url: "abcs.php",
            data: {
                'email' : $('#email').val()
            },
            dataType: 'json',
            type :"POST",
            success: function(data) {
                

                if(data['isvalid'] == false) {
                    // var msg=document.getElementById('emailavailable');
                    //  msg.innerHTML="<span style='color:red;'>email not available</span>";

                    $( "#emailavailable").html("<span style='color:red;'>email not available</span>");

                    

                }
                else {
                    // var msg=document.getElementById('emailavailable');
                    //  msg.innerHTML="<span style='color:green;'>email available</span>";

                     $( "#emailavailable").html("<span style='color:green;'>email available</span>");
                }
            },
            error: function(data){}
  });
}

}
