function validation(){
    var name=document.getElementById("user").value;
    var email=document.getElementById("emai").value;
    var contact=document.getElementById("cont").value;
    if(name.length==0)
        {
            //text="please enter valid username";
            //error_message.innerHTML=text;
            alert("Invalid username");
            return false;

        }
        if(contact.length<10 )
        {
            //text="please enter valid phonemnumber";
           // error_message.innerHTML=text;
        alert("Invalid phone number");
            return false;
            
        }
        if(email.indexOf('@')==-1 || email.length<6){
            text="please enter valid email";
            error_message.innerHTML=text;
            return false;
        }

}