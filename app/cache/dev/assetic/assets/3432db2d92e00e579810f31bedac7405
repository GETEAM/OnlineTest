$(function(){
    //将用户名行隐藏
    $('#username').closest('div').hide();
    $('[name="_target_path"]').parent().hide();
    //将与试卷编号对应到考试编号下拉菜单 隐藏
    //$('#form_examID').parent().hide();
    //获取考试编号
    var examId=$('#examId').val();
    //console.log(examId);
    //页面加载时先对username赋值
    $('#username').val(examId+'_'+$('#student_name').val());
    
    //当学名输入结束,点击登录时，对用户名进行修改
    $('#student_name').closest('form').on('submit',function(){
        $('#username').val(examId+'_'+$('#student_name').val());
        //console.log($('#username').val());
    });
    //通过默认考试名称选项 确定登录表单
    changeByRealName(examId);
    

});

function changeByRealName(examId){
    $.ajax({
                type: 'POST',
                url: '/student/exam/isRealname',
                dataType: 'json',
                timeout: 5000,
                async: true,
                data: {
                    examId: examId
                },
                success: function (data) {
                    //console.log(data.isRealname);
                    if (data.isRealname==0) {//匿名考试
                        $('#realname_login').hide();
                        $('#unrealname_login').show();
                        var new_href='/student/exam/prepare/unrealname?examId='+examId;
                        $('#unrealname_login div a').attr('href',new_href);
                        //console.log($('#unrealname_login div a').attr('href'));
                    }else if(data.isRealname==1){//实名考试
                        $('#unrealname_login').hide();
                        $('#realname_login').show();
                        var new_href='/student/exam/prepare/realname?examId='+examId;
                        $('input[name="_target_path"]').val(new_href);
                        //console.log($('input[name="_target_path"]').val());
                    }else {
                        //console.log("添加失败!");
                        window.location.reload(true);
                    }
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    //console.log("error " + textStatus);
                    //console.log("网络或服务器异常！" + 'ERROR');
                }
            });
}
