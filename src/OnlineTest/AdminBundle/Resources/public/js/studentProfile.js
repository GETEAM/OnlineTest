$(function(){
    //创建修改单个考生对话框
    dialog = $("#dialog_update_student").dialog({
        autoOpen: false,
        height: 300,
        width: 550,
        modal: true,
        buttons: {
            修改: update_student,
            关闭: function () {
                dialog.dialog("close");
            }
        },
        close: function () {
        }});
    //创建批量修改考生对话框
    dialog_mul = $("#dialog_mul_update_student").dialog({
        autoOpen: false,
        height: 300,
        width: 550,
        modal: true,
        buttons: {
            修改: updateSelectedStudents,
            关闭: function () {
                dialog_mul.dialog("close");
            }
        },
        close: function () {
        }});
    
    //实现全选或者全不选功能
    $("#checkAll").click(function (e) {
        if(window.confirm('选中该选项，将选中或取消选中本场考试所有考生，包括不可见页码内到考生！请确认是否选取?') == true) {
            if ($(this)[0].checked) {
                isCheckAll(true);
            } else {
                isCheckAll(false);
            }
        }else{
            //选择取消时，复选框回复初始状态
            e.preventDefault();
        }
    });
    
    //显示提示语
    $('#flash_message').fadeIn('slow');
    
    //设置flash message 显示时间
    setTimeout(
        function(){
            $('#flash_message').fadeOut('slow');
        },
        1000
        );
    
})
//单击修改图标时，弹出修改考生对话框
function open_edit_dialog(examId,examName,username,name,status){
    $('#edit_examId').val(examId);
    $('#edit_examName').val(examName);
    $('#edit_username').val(username);
    $('#edit_name').val(name);
    $('#edit_password').val("");
    $('input[name="status_radio"]').val([status]);
    $("#dialog_update_student").dialog('open');
}
//修改考生信息
function update_student() {
    //console.log($('#edit_examId').val());
    //console.log($('#edit_username').val());
    //console.log($('#edit_name').val());
    //console.log($('#edit_password').val());
    //console.log($('input[name="status_radio"]:checked').val());
    $.ajax({
        type: 'POST',
        url: '/admin/update_student',
        dataType: 'json',
        timeout: 5000,
        async: true,
        data: {
            examId: $('#edit_examId').val(),
            username: $('#edit_username').val(),
            name: $('#edit_name').val(),
            password: $('#edit_password').val(),
            status: $('input[name="status_radio"]:checked').val()
        },
        success: function (data) {
            if (data.success) {
                //console.log("修改成功！正在更新显示..." + data.success, 2000, 'TIP');
                window.location.reload(true);
            } else {
                //console.log("修改失败!");
                window.location.reload(true);
            }
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            //console.log("error " + textStatus);
            //console.log("网络或服务器异常！" + 'ERROR');
            alert(data.success);
        }
    });
}
//单击修改图标时，弹出修改考生对话框
function open_mul_edit_dialog(examId,examName){
    $('#mul_edit_examId').val(examId);
    $('#mul_edit_examName').val(examName);
    $("#dialog_mul_update_student").dialog('open');
}
//批量修改考生状态
function updateSelectedStudents(){
    var checkedValues = selectedValues();//该方法包含在admin.js中
    //console.log($('#mul_edit_examId').val());
    //console.log($('input[name="mul_status_radio"]:checked').val());
    //console.log(JSON.stringify(checkedValues));
    if(!jQuery.isEmptyObject(checkedValues)) {
            $.ajax({
                type: 'POST',
                url: '/admin/update_selectedStudents',
                data: {
                    examId: $('#mul_edit_examId').val(),
                    status: $('input[name="mul_status_radio"]:checked').val(),
                    selectedStudents: checkedValues
                },
                dataType: 'json',
                timeout: 5000,
                async: true,
                success: function (data) {
                    if (data.success) {
                        //console.log("勾选修改成功！正在更新显示...", 2000, 'TIP');
                        window.location.reload(true);
                    } else {
                        //console.log("勾选修改失败!");
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
//删除学生确认
function delconfirm(examName,username){			//定义函数
	if(window.confirm('您确定删除'+username+'吗?')==true){		//函数执行的操作
            $.ajax({
                type: 'GET',
                url: '/admin/delete_student/'+examName+'/'+username,
                dataType: 'json',
                timeout: 5000,
                async: true,
                success: function (data) {
                    if (data.success) {
                        //console.log("删除成功！正在更新显示..."+data.success, 2000, 'TIP');
                        window.location.reload(true);
                    } else {
                        //console.log("删除失败!");
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

//删除选中的学生
function deleteSelectedStudents(examName){
    var checkedValues = selectedValues();//该方法包含在admin.js中
    //console.log(JSON.stringify(checkedValues));
    if(!jQuery.isEmptyObject(checkedValues)) {
        if (window.confirm('您确定删除选中项吗?') == true) {
            $.ajax({
                type: 'POST',
                url: '/admin/delete_selectedStudents/'+examName,
                data: {
                    selectStudents: checkedValues
                },
                dataType: 'json',
                timeout: 5000,
                async: true,
                success: function (data) {
                    if (data.success) {
                        //console.log("勾选删除成功！正在更新显示...", 2000, 'TIP');
                        window.location.reload(true);
                    } else {
                        //console.log("勾选删除失败!");
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