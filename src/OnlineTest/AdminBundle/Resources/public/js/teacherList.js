//就绪处理函数
$(function () {
    //使表格变成可排序
    $('#enabledTeachers').tablesorter({
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
    
    //实现全选或者全不选功能
    $("#checkAll").click(function () {
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


//删除教师确认
function delconfirm(username){			//定义函数
	if(window.confirm('您确定删除'+username+'吗?')==true){		//函数执行的操作
            $.ajax({
                type: 'POST',
                url: '/admin/delete_teacher/'+username,
                data: {
                    del_username: username
                },
                dataType: 'json',
                timeout: 5000,
                async: true,
                success: function (data) {
                    if (data.success) {
                        //console.log("删除成功！正在更新显示...", 2000, 'TIP');
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

//删除选中到教师
function deleteSelectedTeachers(){
    var checkedValues = selectedValues();
    //console.log(JSON.stringify(checkedValues));
    if(!jQuery.isEmptyObject(checkedValues)) {
        if (window.confirm('您确定删除选中项吗?') == true) {
            $.ajax({
                type: 'POST',
                url: '/admin/delete_selectedTeachers',
                data: {
                    selectTeachers: checkedValues
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


//失效选中的教师
function deactiveSelectedTeachers(){
    var checkedValues = selectedValues();
    //console.log(JSON.stringify(checkedValues));
    if (!jQuery.isEmptyObject(checkedValues)) {
        if (window.confirm('您确定失效选中项吗?') == true) {
            $.ajax({
                type: 'POST',
                url: '/admin/deactive_selectedTeachers',
                data: {
                    selectTeachers: checkedValues
                },
                dataType: 'json',
                timeout: 5000,
                async: true,
                success: function (data) {
                    if (data.success) {
                        //console.log("勾选项激活成功！正在更新显示...", 2000, 'TIP');
                        window.location.reload(true);
                    } else {
                        //console.log("勾选项激活失败!");
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