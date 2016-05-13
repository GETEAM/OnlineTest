$(function () {
    //使表格变成可排序
    $('#result_detail').tablesorter({
        theme: 'blue',
        widgets: ['zebra', 'columns'],
        usNumberFormat: false,
        sortReset: true,
        sortRestart: true,
        sortList: [[0, 0], [1, 0]],
        headers: {
            0: {sorter: false},
            1: {sorter: false},
            2: {sorter: false},
            6: {sorter: false}
        }
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
//删除考试记录确认
function delconfirm(recordId){			//定义函数
	if(window.confirm('您确定删除该试卷吗?')==true){		//函数执行的操作
            $.ajax({
                type: 'GET',
                url: '/admin/delete_exam_record/'+recordId,
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

//删除选中考试记录
function deleteSelectedRecords(){
    var checkedValues = selectedValues();//该方法包含在admin.js中
    //console.log(JSON.stringify(checkedValues));
    if(!jQuery.isEmptyObject(checkedValues)) {
        if (window.confirm('您确定删除选中项吗?') == true) {
            $.ajax({
                type: 'POST',
                url: '/admin/delete_selected_exam_record',
                data: {
                    selectedRecords: checkedValues
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
//将考试详情导出为Excel
function exportExcel(paperId){
    $.ajax({
        type: 'POST',
        url: '/admin/export_excel/'+paperId,
        data: {
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
