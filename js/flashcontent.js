$(document).ready(function() {  
      
    // Check for hash value in URL  
    var hash = window.location.hash.substr(1);  
    var href = $('#submenu li a').each(function(){  
        var href = $(this).attr('href');  
        if(hash==href.substr(0,href.length-5)){  
            var toLoad = hash+'.html #content';  
            $('#content').load(toLoad)  
        }   
    });  
      
    $('#submenu li a').click(function(){  
      
    var toLoad = $(this).attr('href')+' #content';  
    $('#content').hide('fast',loadContent);  

    window.location.hash = $(this).attr('href').substr(0,$(this).attr('href').length-5);  
    function loadContent() {  
        $('#content').load(toLoad,'',showNewContent())  
    }  
    function showNewContent() {  
        $('#content').show('slow');  
    }  
     
    return false;  
      
    }); 


});