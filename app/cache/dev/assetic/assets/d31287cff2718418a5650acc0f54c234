//就绪处理函数
$(function () {  
    //试题块换成标签形式
    $( "#parts_area" ).tabs();
    //将试题区域变成可排序
    $( "#questions_area" ).sortable();
    //将各试题绑定鼠标浮动事件
    $('.questions').bind('mouseover', function () {
        $('.questions_operations', $(this)).show();
    });
    //将各试题绑定鼠标移出事件
    $('.questions').bind('mouseout', function () {
        $('.questions_operations', $(this)).hide();
    });
    //移动排序之后，改变试题序号,调用change_order_num函数
    $( "#questions_area" ).bind('sortstop', change_order_num);
    $('textarea').autoTextarea({minHeight:48,maxHeight:150,width:500}); 
    //右侧功能框可拖动
    $( "#parts_tool" ).draggable();
    //创建添加试题块对话框
    add_parts_dialog = $("#dialog_add_part").dialog({
        autoOpen: false,
        minHeight: 50,
        maxHeight: 600,
        width: 600,
        modal: true,
        buttons: {
            添加试题块: add_part,
            关闭: function () {
                add_parts_dialog.dialog("close");
            }
        },
        close: function () {
        }});
    //part时长实现增减输入框
    $( "#dialog_add_part #parts_duration" ).spinner().spinner({
        min: 0,
        step: 5,//一步走几个数字
        page: 6 //一次走几步
    });
    //part试题数量实现增减输入框
    $( "#dialog_add_part #parts_questions_num" ).spinner().spinner({
        min: 0,
        step: 1,//一步走几个数字
        page: 5 //一次走几步
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
//点击添加试题，弹出对话框
function open_add_part_dialog(){
    $("#dialog_add_part").dialog('open');
}


//添加试题
function add_part() {
    //获取当前试卷编号
    var paperId=$('#paper_infor #paperId').html();
    ////console.log(paperId);
    //获取试题块包含的类别
    var kind = $('[name="parts_kind_options"]:checked').val();
    ////console.log(kind);
    //获取试题块内是否试题乱序
    var part_order = $('[name="part_order_radio"]:checked').val();
    ////console.log(part_order);
    //获取试题块的时长
    var duration = $('#parts_duration').val();
    ////console.log(duration);
    //获取试题块的试题数量
    var questions_num = $('#parts_questions_num').val();
    ////console.log(questions_num);
    
    var parts_valida = parts_validation();

    if (parts_valida) {
        $.ajax({
            type: 'POST',
            url: '/admin/add_part/'+paperId,
            dataType: 'json',
            timeout: 5000,
            async: true,
            data: {
                kind: kind,
                part_order: part_order,
                duration: duration,
                questions_num: questions_num
            },
            success: function (data) {
                if (data.success) {
                    //console.log("添加成功!");
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
//改变试题顺序 或者 删除试题时 修正试题序号
function change_order_num() {
    for(var i=0;i<$('.questions').size();i++){
        $('.order_num',$('.questions').get(i)).html(i+1);
    }
}
//将试题编号保存到试卷
function save_add() {
    //获取当前试卷编号
    var examId=$('#exam_infor #examId').html();
    //获取所有试题
    var questions = [];
    $('.questions').each(function(){
            questions.push($('.question_id',$(this)).html());
    });
    //console.log(questions);
    //console.log(examId);
    $.ajax({
        type: 'POST',
        url: '/admin/save_add',
        dataType: 'json',
        timeout: 5000,
        async: true,
        data: {
            examId: examId,
            questions: questions
        },
        success: function (data) {
            if (data.success) {
                //console.log("保存添加成功！正在更新显示..." + data.success, 2000, 'TIP');
                window.location.reload(true);
            } else {
                //console.log("保存添加失败!");
                window.location.reload(true);
            }
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            //console.log("error " + textStatus);
            //console.log("网络或服务器异常！" + 'ERROR');
        }
    });
}

//添加试题块表单验证（是否为空）
function parts_validation(){
    //通用输入框判断
    //试题数量为空时，做如下处理
    if ($('#parts_questions_num').val() == ""){
        $('<div>').attr({class: 'dialog_error'}).css({
            color: 'red',
            textAlign: 'center'
        }).html('试题数量不能为空').appendTo($('#single_choice_no_img fieldset'));
        ////console.log('题干为空');
        //一秒之后提示消失
        setTimeout(
                function () {
                    $('#dialog_add_part .dialog_error').fadeOut('slow');
                },
                1000
                );
        return false;
    }
    //试题块时长为空时，做如下处理
    if ($('#parts_duration').val() == ""){
        $('<div>').attr({class: 'dialog_error'}).css({
            color: 'red',
            textAlign: 'center'
        }).html('试题块时长不能为空').appendTo($('#single_choice_no_img fieldset'));
        ////console.log('题干为空');
        //一秒之后提示消失
        setTimeout(
                function () {
                    $('#dialog_add_part .dialog_error').fadeOut('slow');
                },
                1000
                );
        return false;
    }
    return true;
}

