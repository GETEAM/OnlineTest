//就绪处理函数
$(function () {
    //表单初始化必须在表单内容加载之前
    //当表单排序之后，返回第一页
    $('#studentslist').bind('sortEnd',function(){
        //直接显示当前页，可以使当前页出发点击事件
        $('.page_bar a:first-child').click();
    });
    
    //先显示表单tr，等表单初始化之后，使得表单tr隐藏
    $('#studentslist').bind('tablesorter-initialized',function(){
        $('#studentslist tbody tr').hide();
    });
    //使表格变成可排序
    $('#studentslist').tablesorter({
        theme: 'blue',
        widgets: ['zebra', 'columns'],
        usNumberFormat: false,
        sortReset: true,
        sortRestart: true,
        sortList: [[0, 0], [1, 0]],
        headers: {
            0: {sorter: false},
            1: {sorter: false},
            5: {sorter: false}
        }
    });
    var page_size=5;
    //默认显示第一页内容那个
    for(var i=1;i<=page_size;i++){
        $selector='tbody tr:nth-child('+i+')';
        $($selector).show();
        $('.page_bar a:first-child').addClass('page_checked');
    }
    //点击页码时显示对应到信息
    $('.page_bar a').click(function(){
        //先将之前到内容隐藏
        $('tbody tr').hide();
        //显示点击到页码到内容
        $('.page_bar a').removeClass('page_checked');
        $(this).addClass('page_checked');
        //通过点击链接到内容获取页码起始
        $cur_page_start=($(this).html()-1)*page_size+1;//当前页码开始行
        $cur_page_end=($(this).html())*page_size;//当前页码结束行
        for (var i = $cur_page_start; i <= $cur_page_end; i++) {
            $selector = 'tbody tr:nth-child(' + i + ')';
            $($selector).show();
        }
    });
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
    //考试名词下拉框改变时删除提示语
    $('#form_examName').change(function(){
        $('[value=""]',$(this)).remove();
    })
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
    
    $('#flash_message').fadeIn('slow');
    
    //设置flash message 显示时间
    setTimeout(
        function(){
            $('#flash_message').fadeOut('slow');
        },
        1000
        );

});
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
    var examId = $('#edit_examId').val();
    var username = $('#edit_username').val();
    var name = $('#edit_name').val();
    var password = $('#edit_password').val();
    var status=$('input[name="status_radio"]:checked').val();
    $.ajax({
        type: 'POST',
        url: '/admin/update_student',
        dataType: 'json',
        timeout: 5000,
        async: true,
        data: {
            examId: examId,
            username: username,
            name: name,
            password: password,
            status: status
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
                    if (data.success==1) {
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

