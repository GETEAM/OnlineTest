$(function () {
    //使表格变成可排序
    $('#paperslist').tablesorter({
        theme: 'blue',
        widgets: ['zebra', 'columns'],
        usNumberFormat: false,
        sortReset: true,
        sortRestart: true,
        sortList: [[0, 0], [1, 0]],
        headers: {
            0: {sorter: false},
            1: {sorter: false},
            6: {sorter: false}
        }
    });
    
    //创建添加试卷对话框
    add_dialog = $("#dialog_add_paper").dialog({
        autoOpen: false,
        height: 350,
        width: 550,
        modal: true,
        buttons: {
            添加试卷: add_paper,
            关闭: function () {
                add_dialog.dialog("close");
            }
        },
        close: function () {
        }});
    //创建修改试卷对话框
    edit_dialog = $("#dialog_edit_paper").dialog({
        autoOpen: false,
        height: 350,
        width: 550,
        modal: true,
        buttons: {
            修改试卷: update_paper,
            关闭: function () {
                edit_dialog.dialog("close");
            }
        },
        close: function () {
        }});
    //添加试卷
    //试卷时长实现增减输入框
    $( "#dialog_add_paper #add_duration" ).spinner().spinner({
        min: 0,
        step: 5,//一步走几个数字
        page: 6 //一次走几步
    }); 

    
    //考试名称下拉框改变时删除提示语
    $('#form_examName').change(function(){
        $('[value=""]',$(this)).remove();
        //获取下拉框中考试编号
        var examId = $('#form_examName').val();
        //console.log(examId);
        location.href='/admin/paper_list/'+examId;
    })
    
    //编辑试卷
    //试卷时长实现增减输入框
    $( "#dialog_edit_paper #edit_duration" ).spinner().spinner({
        min: 0,
        step: 5,//一步走几个数字
        page: 6 //一次走几步
    }); 
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
//点击添加考试，弹出对话框
function open_add_dialog(examId,examName){
    if(examId==""){
        $('#flash_message').html('<div class="button glow button-rounded button-flat-action flash-notice">请先选择考试</div>').fadeIn('slow');

        //设置flash message 显示时间
        setTimeout(
                function () {
                    $('#flash_message').fadeOut('slow');
                },
                1000
                );
    }else{
        $('#add_examId').val(examId);
        $('#add_examName').val(examName);
        $("#dialog_add_paper").dialog('open');
    }
        
}

//添加试卷
function add_paper() {
    //console.log($('#add_examId').val());
    //console.log($('#add_paperName').val());
    //console.log($('#add_duration').val());
    $.ajax({
        type: 'POST',
        url: '/admin/add_paper',
        dataType: 'json',
        timeout: 5000,
        async: true,
        data: {
            examId: $('#add_examId').val(),
            paperName: $('#add_paperName').val(),
            duration: $('#add_duration').val()
        },
        success: function (data) {
            if (data.success) {
                //console.log("试卷添加成功！正在更新显示..." + data.success, 2000, 'TIP');
                window.location.reload(true);
            } else {
                //console.log("试卷添加失败!");
                window.location.reload(true);
            }
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            //console.log("error " + textStatus);
            //console.log("网络或服务器异常！" + 'ERROR');
        }
    });
}
//单击修改图标时，弹出修改试卷对话框
function open_edit_dialog(examId,examName,paperId,paperName,duration,usable){
    $('#edit_examId').val(examId);
    $('#edit_examName').val(examName);
    $('#edit_paperId').val(paperId);
    $('#edit_paperName').val(paperName);
    $('#edit_duration').val(duration);
    $('input[name="edit_usable_radio"]').val([usable]);
    $("#dialog_edit_paper").dialog('open');
}
//修改试卷
function update_paper() {
    ////console.log($('#edit_examId').val());
    ////console.log($('#edit_examName').val());
    ////console.log($('#edit_paperId').val());
    ////console.log($('#edit_paperName').val());
    ////console.log($('#duration').val());
    //console.log($('input[name="edit_usable_radio"]:checked').val());
    $.ajax({
        type: 'POST',
        url: '/admin/update_paper',
        dataType: 'json',
        timeout: 5000,
        async: true,
        data: {
            examId: $('#edit_examId').val(),
            paperId: $('#edit_paperId').val(),
            paperName: $('#edit_paperName').val(),
            duration: $('#edit_duration').val(),
            usable: $('input[name="edit_usable_radio"]:checked').val()
        },
        success: function (data) {
            if (data.success) {
                //console.log("修改成功！正在更新显示..." + data.success, 2000, 'TIP');
                window.location.reload(true);
            } else {
                //console.log("修改失败!");
            }
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            //console.log("error " + textStatus);
            //console.log("网络或服务器异常！" + 'ERROR');
        }
    });
}
//删除试卷确认
function delconfirm(examId,paperId){			//定义函数
	if(window.confirm('您确定删除该试卷吗?')==true){		//函数执行的操作
            $.ajax({
                type: 'GET',
                url: '/admin/delete_paper/'+paperId,
                dataType: 'json',
                timeout: 5000,
                async: true,
                success: function (data) {
                    console.log(data.success)
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

//删除选中试卷
function deleteSelectedPapers(examId){
    var checkedValues = selectedValues();//该方法包含在admin.js中
    //console.log(JSON.stringify(checkedValues));
    if(!jQuery.isEmptyObject(checkedValues)) {
        if (window.confirm('您确定删除选中项吗?') == true) {
            $.ajax({
                type: 'POST',
                url: '/admin/delete_selectedPapers',
                data: {
                    selectedPapers: checkedValues
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
//将试卷置为可用
function enable_paper(paperId) {
    $.ajax({
        type: 'POST',
        url: '/admin/enable_paper/'+paperId,
        dataType: 'json',
        timeout: 5000,
        async: true,
        data: {
        },
        success: function (data) {
            if (data.usable==1) {
                /*
                $('<a href="#" onclick="disable_paper('
                        +paperId
                        +');"  id="'+paperId+'_disable_paper"  class="button button-rounded button-flat-primary button-tiny search_buttun" style="padding:0px;width:40px;margin-left: 0px;">过期</a>')
                        .insertAfter($('#'+paperId+'_enable_paper'));               
                $('#'+paperId+'_enable_paper').parent().prev().html("可用");
                $('#'+paperId+'_enable_paper').remove();
                */
                window.location.reload(true);
            } else {
                //console.log("启用试卷失败!");
            }
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            //console.log("error " + textStatus);
            //console.log("网络或服务器异常！" + 'ERROR');
        }
    });
}
//将试卷置为过期
function disable_paper(paperId) {
    $.ajax({
        type: 'POST',
        url: '/admin/disable_paper/'+paperId,
        dataType: 'json',
        timeout: 5000,
        async: true,
        data: {
        },
        success: function (data) {
            if (data.usable==0) {
                /*
                $('<a href="#" onclick="enable_paper('
                        +paperId
                        +');"  id="'+paperId+'_enable_paper"  class="button button-rounded button-flat-primary button-tiny search_buttun" style="padding:0px;width:40px;margin-left: 0px;">启用</a>')
                        .insertAfter($('#'+paperId+'_disable_paper'));               
                $('#'+paperId+'_disable_paper').parent().prev().html("过期");
                $('#'+paperId+'_disable_paper').remove();
                */
                window.location.reload(true);
            } else {
                //console.log("启用试卷失败!");
            }
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            //console.log("error " + textStatus);
            //console.log("网络或服务器异常！" + 'ERROR');
        }
    });
}
