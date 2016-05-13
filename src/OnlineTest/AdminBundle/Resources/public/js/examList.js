$(function(){
    //对考试列表进行排序
    $('#examslist').tablesorter({
        theme: 'blue',
        widgets: ['zebra', 'columns'],
        usNumberFormat: false,
        sortReset: true,
        sortRestart: true,
        sortList: [[0, 0], [1, 0]],
        headers: {
            0: {sorter: false},
            1: {sorter: false},
            7: {sorter: false},
            8: {sorter: false}
        }
    });
    //创建添加考试对话框
    add_dialog = $("#dialog_add_exam").dialog({
        autoOpen: false,
        minHeight: 50,
        width: 550,
        modal: true,
        buttons: {
            添加试卷: add_exam,
            关闭: function () {
                add_dialog.dialog("close");
            }
        },
        close: function () {
        }});
    //添加试卷
    //开始时间输入框聚焦时，打开输入框
    $('#add_starttime').datetimepicker({dateFormat: 'yy-m-d'});
    //结束时间输入框聚焦时，打开输入框
    $('#add_endtime').datetimepicker({dateFormat: 'yy-m-d'});    
    
    $('#exam_status').change(function(){
        $exam_status=$(this).val();
        //console.log($exam_status);
        location.href="/admin/exam_list?exam_status="+$exam_status;
    });
    
    //实现全选或者全不选功能
    $("#checkAll").click(function (e) {
        if ($(this)[0].checked) {
            isCheckAll(true);
        } else {
            isCheckAll(false);
        }
    });
    
    $('#flash_message').fadeIn('slow');
    //设置flash message 显示时间
    setTimeout(
        function(){
            $('#flash_message').fadeOut('slow');
        },
        1000
        );
});
//点击打开添加考试对话框
function open_add_dialog(){
        $("#dialog_add_exam").dialog('open');
}
//添加考试
function add_exam() {
    //console.log($('#add_examName').val());
    //console.log($('#add_starttime').val());
    //console.log($('#add_endtime').val());
    //console.log($('input[name="add_realname_radio"]:checked').val());
    if (exam_validation()) {//先进行表单验证
        $.ajax({
            type: 'POST',
            url: '/admin/add_exam',
            dataType: 'json',
            timeout: 5000,
            async: true,
            data: {
                examName: $('#add_examName').val(),
                starttime: $('#add_starttime').val(),
                endtime: $('#add_endtime').val(),
                isRealName: $("input[name='add_realname_radio']:checked").val()
            },
            success: function (data) {
                if (data.success) {
                    //console.log("添加成功！正在更新显示..." + data.success, 2000, 'TIP');
                    window.location.reload(true);
                } else {
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
}
//添加考试表单验证（是否为空）
function exam_validation() {
    //考试名称为空时，做如下处理
    if ($('#add_examName').val() == "") {
        $('<div>').attr({'class': 'dialog_error'}).css({
            color: 'red',
            textAlign: 'center'
        }).html('考试名称不能为空').appendTo($('#dialog_add_exam #add_exam'));
        //一秒之后提示消失
                    setTimeout(
                            function () {
                                $('#dialog_add_exam .dialog_error').fadeOut('slow');
                            },
                            1000
                            );
        return false;
    }
    //验证考试名称是否重复，无法返回false 可以通过是否有错误提示来判断0
    /*else{
        //验证考试名称是否重复
        var exam_name = $('#add_examName').val();
        //判断考试名称是否重复
        var isRepeated;
        $.ajax({
            type: 'POST',
            url: '/admin/exam_validation/exam_name',
            data: {
                validation_name: exam_name
            },
            dataType: 'json',
            timeout: 5000,
            async: true,
            success: function (data) {
                isRepeated=data.isUnique;
                if (data.isUnique) {
                    $('<div>').attr({'class': 'dialog_error'}).css({
                        color: 'red',
                        textAlign: 'center'
                    }).html('考试名称重复').appendTo($('#dialog_add_exam #add_exam'));
                    
                    
                }
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                //console.log("error " + textStatus);
                //console.log("网络或服务器异常！" + 'ERROR');
            }
        });
        //console.log("isrepeated="+isRepeated);
        if(isRepeated){
            return false;
        }
    }*/
    //考试开始时间为空时，做如下处理
    if ($('#add_starttime').val() == "") {
        $('<div>').attr({'class': 'dialog_error'}).css({
            color: 'red',
            textAlign: 'center'
        }).html('开始时间不能为空').appendTo($('#dialog_add_exam #add_exam'));
        //一秒之后提示消失
        setTimeout(
                function () {
                    $('#dialog_add_exam .dialog_error').fadeOut('slow');
                },
                1000
                );
        return false;
    }
    //考试结束时间为空时，做如下处理
    if ($('#add_endtime').val() == "") {
        $('<div>').attr({'class': 'dialog_error'}).css({
            color: 'red',
            textAlign: 'center'
        }).html('结束时间不能为空').appendTo($('#dialog_add_exam #add_exam'));
        //一秒之后提示消失
        setTimeout(
                function () {
                    $('#dialog_add_exam .dialog_error').fadeOut('slow');
                },
                1000
                );
        return false;
    }
    return true;
}
//结束考试
function endExam(examId){			//定义函数
	if(window.confirm('您确定结束该考试吗?')==true){		//函数执行的操作
            $.ajax({
                type: 'GET',
                url: '/admin/end_exam/'+examId,
                dataType: 'json',
                timeout: 5000,
                async: true,
                success: function (data) {
                    if (data.success) {
                        //console.log("结束考试成功！正在更新显示..." + data.success, 2000, 'TIP');
                        window.location.reload(true);
                    } else {
                        //console.log("结束考试失败!");
                        window.location.reload(true);
                    }
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    //console.log("error " + textStatus);
                    //console.log("网络或服务器异常！" + 'ERROR');
                }
            });
	}
}
//结束选中试卷
function endSelectedExams(){
    var checkedValues = selectedValues();//该方法包含在admin.js中
    //console.log(JSON.stringify(checkedValues));
    if(!jQuery.isEmptyObject(checkedValues)) {
        if (window.confirm('您确定结束选中项吗?') == true) {
            $.ajax({
                type: 'POST',
                url: '/admin/end_selectedExams',
                data: {
                    selectedExams: checkedValues
                },
                dataType: 'json',
                timeout: 5000,
                async: true,
                success: function (data) {
                    if (data.success) {
                        //console.log("勾选结束成功！正在更新显示...", 2000, 'TIP');
                        window.location.reload(true);
                    } else {
                        //console.log("勾选结束失败!");
                        window.location.reload(true);
                    }
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    //console.log("error " + textStatus);
                    //console.log("网络或服务器异常！" + 'ERROR');
                }
            });
        }
    }   
}
//重新启用考试
function restartExam(examId){			//定义函数
	if(window.confirm('您确定重新启用该考试吗?')==true){		//函数执行的操作
            $.ajax({
                type: 'GET',
                url: '/admin/restart_exam/'+examId,
                dataType: 'json',
                timeout: 5000,
                async: true,
                success: function (data) {
                    if (data.success) {
                        //console.log("重新启用考试成功！正在更新显示..." + data.success, 2000, 'TIP');
                        window.location.reload(true);
                    } else {
                        //console.log("重新启用考试失败!");
                        window.location.reload(true);
                    }
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    //console.log("error " + textStatus);
                    //console.log("网络或服务器异常！" + 'ERROR');
                }
            });
	}
}
//重新启用选中试卷
function restartSelectedExams(){
    var checkedValues = selectedValues();//该方法包含在admin.js中
    //console.log(JSON.stringify(checkedValues));
    if(!jQuery.isEmptyObject(checkedValues)) {
        if (window.confirm('您确定结束选中项吗?') == true) {
            $.ajax({
                type: 'POST',
                url: '/admin/restart_selectedExams',
                data: {
                    selectedExams: checkedValues
                },
                dataType: 'json',
                timeout: 5000,
                async: true,
                success: function (data) {
                    if (data.success) {
                        //console.log("勾选重新启用成功！正在更新显示...", 2000, 'TIP');
                        window.location.reload(true);
                    } else {
                        //console.log("勾选重新启用失败!");
                        window.location.reload(true);
                    }
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    //console.log("error " + textStatus);
                    //console.log("网络或服务器异常！" + 'ERROR');
                }
            });
        }
    }   
}