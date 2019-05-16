function GEEKFORGEEKS()                                    
{ 
    var name = document.forms["RegForm"]["Name"];               
    var email = document.forms["RegForm"]["Email"];    
    var contact = document.forms["RegForm"]["Contact"];  
    var area =  document.forms["RegForm"]["Area"];  
    var city = document.forms["RegForm"]["City"];  
    var state = document.forms["RegForm"]["State"];  
   
    if (name.value == "")                                  
    { 
        window.alert("Please enter your name."); 
        name.focus(); 
        return false; 
    } 
   
    if (email.value == "")                                   
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    }

     if (email.value.indexOf("@", 0) < 0)                 
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    } 
   
    if (email.value.indexOf(".", 0) < 0)                 
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    } 

    if (contact.value == "")                               
    { 
        window.alert("Please enter your Contact Number."); 
        contact.focus(); 
        return false; 
    } 
   
    if (area.value == "")                           
    { 
        window.alert("Please enter your Area."); 
        area.focus(); 
        return false; 
    } 
   
    if (city.value == "")                        
    { 
        window.alert("Please enter your City"); 
        city.focus(); 
        return flase; 
    } 
   
    if (state.selectedIndex < 1)                  
    { 
        alert("Please enter your State."); 
        state.focus(); 
        return false; 
    } 
   
    return true; 
}