$(function(){
    $('#flash_message').fadeIn('slow');
    //设置flash message 显示时间
    setTimeout(
        function(){
            $('#flash_message').fadeOut('slow');
        },
        1500
    );
    //点击提交时，验证表单项不为空
    $('#form_import').click(function(){
        
        //导入文件不能为空
        if($('#form_fileUrl').val()==""){
            $('#form_fileUrl').next('span').remove();
            $('<span>').html("文件地址不能为空").addClass("input_error").insertAfter($('#form_fileUrl'));
            $('#form_fileUrl').focus();
            return false;
        }else{
            $('#form_fileUrl').next('span').remove();
        }
        
        //如果有错误存在，不能提交
        if($('.input_error').html()){
            $('.input_error').each(function(){
                $(this).prev('input').focus();
                return false;
            });
            return false;
        }
        $('#importing').html("正在导入，请稍候…").show();
        return true;

    })
});
