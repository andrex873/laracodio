/**
* Created with laracodio.
* User: andrex873
* Date: 2015-02-02
* Time: 04:16 PM
* To change this template use Tools | Templates.
*/

$(document).ready(function(){
    $('#ajaxPersonas').click(function(){
        var params = {'var1': 'valor1', 'var2': 150, 'var3': 15.4};
        
        $.ajax({
            async: true,
            type: 'post',
            url: '/laracodio/public/ajax/personas',
            dataType: 'json',
            data: params,
            error:function(error){
                alert('error: ' + error);
            },
            success:function(data){
                alert('todo OK');
            }
        });
        
        
    });
});

