$(function(){
    $('#flash_message').fadeIn('slow');
    //设置flash message 显示时间
    setTimeout(
        function(){
            $('#flash_message').fadeOut('slow');
        },
        1000
    );
    //将用户名行隐藏
    $('label[for="form_username"]').parent().hide();
    //当考号输入结束时，对考号进行判断
    $('#form_student_name').keyup(validstudent_name);
    //当考试名称发生改变时，重新对考号进行判断
    $('#form_examName').change(validstudent_name);
    
    //当学名输入结束时，对用户名进行修改
    $('#form_student_name').keyup(function(){
        $('#form_username').val($('#form_examName').val()+'_'+$('#form_student_name').val());
    });
    //当考试名称发生改变时，对用户名进行修改
    $('#form_examName').change(function(){
        $('#form_username').val($('#form_examName').val()+'_'+$('#form_student_name').val());
    });
    
    //当输入姓名时，删除姓名不能为空到提示
    $('#form_name').keyup(function(){
        $('#form_name').next('span').remove();
    })
    //当输入密码时，删除密码不能为空到提示
    $('#form_password').keyup(function(){
        $('#form_password').next('span').remove();
    })
    
    //点击提交时，验证表单项不为空
    $('#form_save').click(function(){
        //考试名称不能为空
        if($('#form_examName').val()==""){
            $('#form_examName').next('span').remove();
            $('<span>').html("考试名称不能为空").addClass("input_error").insertAfter($('#form_examName'));
            $('#form_examName').focus();
            return false;
        }
        //考号不能为空
        if($('#form_student_name').val()==""){
            $('#form_student_name').next('span').remove();
            $('<span>').html("考号不能为空").addClass("input_error").insertAfter($('#form_student_name'));
            $('#form_student_name').focus();
            return false;
        }
        //姓名不能为空
        if($('#form_name').val()==""){
            $('#form_name').next('span').remove();
            $('<span>').html("姓名不能为空").addClass("input_error").insertAfter($('#form_name'));
            $('#form_name').focus();
            return false;
        }else{
            $('#form_name').next('span').remove();
        }
        //密码不能为空
        if($('#form_password').val()==""){
            $('#form_password').next('span').remove();
            $('<span>').html("密码不能为空").addClass("input_error").insertAfter($('#form_password'));
            $('#form_password').focus();
            return false;
        }else{
            $('#form_password').next('span').remove();
        }
        //如果有错误存在，不能提交
        if($('.input_error').html()){
            $('.input_error').each(function(){
                $(this).prev('input').focus();
                return false;
            });
            return false;
        }
        return true;

    })
});
//验证同一场考试中考号是否已存在
    function validstudent_name() {
        //获取考试编号
        var exam_name=$('#form_examName').val();
        //获取当前考号
        var student_name=$('#form_student_name').val();
        if (student_name != ''){
        //验证同一场考试内，考号是否重复
            $.ajax({
                type: 'POST',
                url: '/admin/student_validation/student_name',
                data: {
                    validation_student_name: student_name,
                    exam_id: exam_name
                },
                dataType: 'json',
                timeout: 5000,
                async: true,
                success: function (data) {
                    if (data.isUnique) {
                        //若考试名称重复，红色字体提示不能重复
                        $('#form_student_name').next('span').remove();
                        $('<span>').html("考号已存在于所选考试").addClass("input_error").insertAfter($('#form_student_name'));
                        //聚焦到输入框 让用户再次输入
                        $('#form_student_name').focus();
                    } else {
                        //考试名称可用，绿色字体提示
                        $('#form_student_name').next('span').remove();
                        $('<span>').html("考号可以使用").addClass("input_right").insertAfter($('#form_student_name'));
                    }
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    //console.log("error " + textStatus);
                    //console.log("网络或服务器异常！" + 'ERROR');
                }
            });
        }
    }