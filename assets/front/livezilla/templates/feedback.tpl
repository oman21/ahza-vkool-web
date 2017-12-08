<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>LiveZilla</title>
    <meta name="description" content="LiveZilla Knowledgebase">
    <link rel="stylesheet" type="text/css" href="./templates/style_feedback.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="./images/favicon.ico">
</head>
<body style="padding:2vw 8vw;margin:0;text-align:center;" onload="setTimeout('lz_feedback_focus();',100);">
<h2><!--title--></h2>
<h4><!--sub_title--></h4>
<form id="lz_feedback_form" method="POST">
<input type="hidden" name="p_close_ticket" value="<!--close_ticket-->">
<input type="hidden" id="save_fb" name="p_save_fb" value="1">
<div style="display:none;" class="text_error" id="missing_fields"><!--lang_client_fill_mandatory_fields--></div>
<table class="lz_chat_feedback_table" style="display:<!--visible-->;">
    <tr>
        <td>
            <!--criteria-->
        </td>
    </tr>
    <tr>
        <td style="text-align: center;">
            <input type="button" id="lz_chat_feedback_button" class="form_button" style="<!--style-->" onclick="lz_feedback_validate();" value="<!--lang_client_send-->">
            <br>
            <a href="#" onclick="document.getElementById('save_fb').value='0';document.getElementById('lz_feedback_form').submit();"><!--lang_client_close_no_feedback--></a>
        </td>
    </tr>
</table>

</form>
<script>
    var ids = [<!--ids-->];
    function lz_feedback_set(_id,_obj,_number,_fromHover){
        if(document.getElementsByName("lz_feedback_value_"+_id)[0].value != '-1' && _fromHover)
            return;

        if(_number == document.getElementsByName("lz_feedback_value_"+_id)[0].value)
            _number--;

        for(var i=1;i<=5;i++)
            document.getElementById("lz_chat_star_"+_id+"_"+i.toString()).className = (_number >= i) ? "lz_chat_feedback_star lz_chat_feedback_star_full" : "lz_chat_feedback_star lz_chat_feedback_star_half";

        if(!_fromHover)
            document.getElementsByName("lz_feedback_value_"+_id)[0].value=_number;
    }

    function lz_feedback_hover(_id,_obj,_number,_hover){
        if(_hover)
            lz_feedback_set(_id,_obj,_number,true);
        else
            lz_feedback_set(_id,_obj,0,true);
    }

    function lz_feedback_validate(){
        for(var i=0;i<ids.length;i++)
            if(document.getElementsByName("lz_feedback_value_"+ids[i])[0].value == "" || document.getElementsByName("lz_feedback_value_"+ids[i])[0].value == 0)
            {
                document.getElementById("missing_fields").style.display = "block";
                return;
            }
        document.getElementById("missing_fields").style.display = "none";
        document.getElementById("lz_feedback_form").submit();
    }

    function lz_feedback_focus(){
        try
        {
            document.getElementsByTagName('input')[0].focus();
            document.getElementsByTagName('textarea')[0].focus();
        }
        catch(ex)
        {

        }
    }

    function lz_global_impose_max_length(){

    }

</script>
</body>
</html>