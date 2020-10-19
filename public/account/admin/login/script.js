$(document).ready(function()
{
    $(document).on('submit','form',function(e)
    {
        e.preventDefault()
        ajaxHandler($(this)).done(function(data)
        {
            data=$.parseJSON(data)
            validationMessage(false,data.msg,data.type,data.err)
            if(data.err==null) setTimeout(function(){location.replace('/account')},1500)
        })
    })
})