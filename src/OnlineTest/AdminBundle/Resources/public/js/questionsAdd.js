//就绪处理函数
$(function () {  
    
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
    $( "#questions_tool" ).draggable();
    //创建添加试题对话框
    add_questions_dialog = $("#dialog_add_questions").dialog({
        autoOpen: false,
        minHeight: 50,
        maxHeight: 600,
        width: 600,
        modal: true,
        buttons: {
            添加试题: add_question,
            关闭: function () {
                add_questions_dialog.dialog("close");
            }
        },
        close: function () {
        }});
    //创建编辑试题对话框
    edit_questions_dialog = $("#dialog_edit_questions").dialog({
        autoOpen: false,
        minHeight: 50,
        maxHeight: 600,
        width: 600,
        modal: true,
        buttons: {
            保存修改: update_question,
            关闭: function () {
                edit_questions_dialog.dialog("close");
            }
        },
        close: function () {
        }});
    //选择题型时，显示不同到输入表单
    $('#question_type').change(function () {
        $('#dialog_add_questions form').hide();
        $('#'+$('[name="questions_type_options"]:checked').val()).show();;
    })
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
function open_add_questions_dialog(examId){
    $("#dialog_add_questions").dialog('open');
    //先将#questions_kind里的内容清空
    //解决的问题1： 自定义类别在用户手动输入后，会更新
    //解决的问题1： 可输入下拉框在添加一次后会出现下拉不了的情况 故移除后再次添加，并初始化
    //后面会有下拉框的初始化
    $('#questions_kind').remove();
    $('<span>',
            {
                id: 'questions_kind',
                class: 'dialog_input'
            }).appendTo($('#question_kind_div'));
    //从后台获取考试的自定义类别
    $.ajax({
                type: 'POST',
                url: '/admin/get_exam_kinds',
                dataType: 'json',
                timeout: 5000,
                async: true,
                data: {
                    examId: examId
                },
                success: function (data) {
                    if (data.success) {
                        //试题所属类别下拉列表可输入（下拉框初始化）
                        $('#questions_kind').combox({datas: data.kinds});
                    } else {
                        //console.log("获取自定义类别失败!");
                    }
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    //console.log("error " + textStatus);
                    //console.log("网络或服务器异常！" + 'ERROR');
                }
            });
        
}
//单击添加选项，多加一个选项
function add_question_option(){
    var type=$('[name="questions_type_options"]:checked').val();    
    //不同的题型不同对待
    if(type=="single_choice_no_img"){
        var options_num=$('#single_choice_no_img fieldset [name="SCNI_question_option"]').length;
        var new_option_id='SCNI_question_option'+(options_num+1);
        $('<div>').html('<label for="'+new_option_id
                +'" class="dialog_label"><input type="radio" name="SCNI_option_radio" value="'
                +(options_num+1)+'"/>选项'
                +(options_num+1)
                +'：</label><textarea id="'
                +new_option_id
                +'" name="SCNI_question_option" class="text ui-widget-content ui-corner-all dialog_textarea" placeholder="请输入选项内容"></textarea>')
                .appendTo($('#single_choice_no_img fieldset'));
        
        //新增的textarea实现自动增高
        $('textarea').autoTextarea({minHeight:48,maxHeight:150,width:500});
    }else if(type=="single_choice_img"){
        var options_num=$('#single_choice_img fieldset [name="SCI_option_radio"]').length;
        var new_option_textarea_id='SCI_question_option'+(options_num+1);
        var new_option_img_id='SCI_question_option'+(options_num+1)+'_img';
        $('<div>').html('<label for="'+new_option_textarea_id
                +'" class="dialog_label"><input type="radio" name="SCI_option_radio" value="'
                +(options_num+1)+'"/>选项'
                +(options_num+1)
                +'：</label><textarea id="'
                +new_option_textarea_id
                +'" name="SCI_question_option" '
                +'class="text ui-widget-content ui-corner-all dialog_textarea" '
                +'placeholder="请输入选项内容"></textarea>'
                +'<input type="file" id="'+new_option_img_id+'"  name="'+new_option_img_id+'"  class="dialog_file" />')
                .appendTo($('#single_choice_img fieldset'));
        
        //新增的textarea实现自动增高
        $('textarea').autoTextarea({minHeight:48,maxHeight:150,width:500});
    }else if(type=="multiple_choices_no_img"){
        var options_num=$('#multiple_choices_no_img fieldset [name="MCNI_option_checkbox"]').length;
        var new_option_id='MCNI_question_option'+(options_num+1);
        $('<div>').html('<label for="'+new_option_id
                +'" class="dialog_label"><input type="checkbox" name="MCNI_option_checkbox" value="'
                +(options_num+1)+'"/>选项'
                +(options_num+1)
                +'：</label><textarea id="'
                +new_option_id
                +'" name="MCNI_question_option" class="text ui-widget-content ui-corner-all dialog_textarea" placeholder="请输入选项内容"></textarea>')
                .appendTo($('#multiple_choices_no_img fieldset'));
        
        //新增的textarea实现自动增高
        $('textarea').autoTextarea({minHeight:48,maxHeight:150,width:500});
    }
}
//单击减少选项，减少一个选项
function minus_question_option(){
    var type=$('[name="questions_type_options"]:checked').val();    
    //不同的题型不同对待
    if(type=="single_choice_no_img"){
        var options_num=$('#single_choice_no_img fieldset [name="SCNI_question_option"]').length;
        //选项大于两个时可以删除
        if(options_num>2){
            $('#single_choice_no_img fieldset [name="SCNI_question_option"]:last').parent().remove();
        }else{
            //选项小于两个时，提示不能低于两个
            $('<div>').attr({class: 'dialog_error'}).css({
                color: 'red',
                textAlign: 'center'
            }).html('选项个数不能低于两个').appendTo($('#single_choice_no_img fieldset'));
            //一秒之后提示消失
            setTimeout(
                    function () {
                        $('#single_choice_no_img fieldset .dialog_error').fadeOut('slow');
                    },
                    1000
                    );
        }
    }else if(type=="single_choice_img"){
        var options_num=$('#single_choice_img fieldset [name="SCI_question_option"]').length;
        //选项大于两个时可以删除
        if(options_num>2){
            $('#single_choice_img fieldset [name="SCI_question_option"]:last').parent().remove();
        }else{
            //选项小于两个时，提示不能低于两个
            $('<div>').attr({class: 'dialog_error'}).css({
                color: 'red',
                textAlign: 'center'
            }).html('选项个数不能低于两个').appendTo($('#single_choice_img fieldset'));
            //一秒之后提示消失
            setTimeout(
                    function () {
                        $('#single_choice_img fieldset .dialog_error').fadeOut('slow');
                    },
                    1000
                    );
        }
    }else if(type=="multiple_choices_no_img"){
        var options_num=$('#multiple_choices_no_img fieldset [name="MCNI_question_option"]').length;
        //选项大于两个时可以删除
        if(options_num>2){
            $('#multiple_choices_no_img fieldset [name="MCNI_question_option"]:last').parent().remove();
        }else{
            //选项小于两个时，提示不能低于两个
            $('<div>').attr({class: 'dialog_error'}).css({
                color: 'red',
                textAlign: 'center'
            }).html('选项个数不能低于两个').appendTo($('#multiple_choices_no_img fieldset'));
            //一秒之后提示消失
            setTimeout(
                    function () {
                        $('#multiple_choices_no_img fieldset .dialog_error').fadeOut('slow');
                    },
                    1000
                    );
        }
    }
}

//添加试题
function add_question() {
    //获取当前试卷编号
    var examId=$('#exam_infor #examId').html();
    //获取试题类型
    var type = $('[name="questions_type_options"]:checked').val();
    var questions_valida = questions_validation(type);
    //获取试题类别
    var kind = $('#questions_kind input').val();
    //console.log(kind);
    //获取试题是否比选
    var mustSelect = $('[name="mustSelect"]:checked').val();
    //
    var mustSelect_text;
    if(mustSelect==1){
        mustSelect_text='(必选)';
    }else{
        mustSelect_text='(可选)';
    }
    //获取试题选项是否打乱
    var optionShuffle = $('[name="optionShuffle"]:checked').val();
    if (questions_valida) {
        //当试题类型为单选题——无图片时
        if (type == "single_choice_no_img") {
            //获取试题题干
            var question_stem = $('#single_choice_no_img fieldset #SCNI_stem_textarea').val();
            //获取试题选项
            var question_options = [];
            $('#single_choice_no_img fieldset [name="SCNI_question_option"]').each(function () {
                question_options.push($(this).val());
            });
            //获取答案信息
            var answer = $('#single_choice_no_img fieldset [name="SCNI_option_radio"]:checked').val();
            //输出题干信息和选项
            //console.log(question_stem);
            //console.log(question_options);
            //console.log(answer);
            $.ajax({
                type: 'POST',
                url: '/admin/add_question',
                dataType: 'json',
                timeout: 5000,
                async: true,
                data: {
                    examId: examId,
                    type: type,
                    kind: kind,
                    mustSelect: mustSelect,
                    optionShuffle: optionShuffle,
                    question_stem: question_stem,
                    question_options: question_options,
                    answer: answer
                },
                success: function (data) {
                    if (data.question_id) {
                        //console.log("添加成功！正在更新显示..." + data.question_id, 2000, 'TIP');
                        //构造显示在试卷页面到试题字符串
                        //获取当前试题序号
                        var order_num = $('#questions_area div.questions').length;
                        //将题干信息加入试题字符串
                        var question_html = '<span class="order_num">' 
                                + (order_num + 1) 
                                + '</span><span class="question_infor">'
                                +mustSelect_text
                                +'('+kind+')'
                                +'</span><span class="question_id" hidden>' 
                                + data.question_id 
                                +'</span><span class="question_isMustSelect" hidden>' 
                                + mustSelect 
                                + '</span><span class="question_kind" hidden>'
                                + kind 
                                + '</span><span class="question_isOptionShuffle" hidden>'
                                + optionShuffle 
                                + '</span><span class="question_stem">' 
                                + question_stem.replace(/[\r\n]/g, '<br/>').replace(/ /g, '&nbsp;&nbsp;') 
                                + '</span><br/>';
                        //将选项内容加入到试题字符串
                        for (var i = 0; i < question_options.length; i++) {
                            var option_radio_value = i + 1;
                            var question_option_html = question_options[i].replace(/[\r\n]/g, '<br/>').replace(/ /g, '&nbsp;&nbsp;');
                            question_html += '<pre><input type="radio" id="question_'
                                    + data.question_id + '_option_' + option_radio_value
                                    + '" name="question_'
                                    + data.question_id + '_option_radio" value="'
                                    + option_radio_value + '" class="option_radio" disabled /><label for="question_'
                                    + data.question_id + '_option_'
                                    + option_radio_value + '" class="option_label">'
                                    + question_option_html + '</label></pre>';
                        }
                        //在试题最后加上操作功能
                        question_html += '<div class="questions_operations">'
                                + '<a href="#" onclick="open_edit_question_dialog(\'' 
                                + data.question_id 
                                + '\',\''
                                + type+ '\')" '
                                + 'class="button button-rounded button-flat-primary button-tiny question_op">编辑</a>'
                                + '<a href="#" onclick="delete_question_confirm(\'' + data.question_id + '\')" '
                                + 'class="button button-rounded button-flat-primary button-tiny question_op">删除</a>'
                                + '</div>';
                        //移除考卷暂无考题的提示
                        $('#hasQuestions').remove();
                        //将试题添加到页面显示
                        $('<div>', {
                            id: 'question_' + data.question_id,
                            class: 'questions new_questions'
                        }).html(question_html).appendTo($('#questions_area'));
                        //将答案项选中
                        $('input[name="question_' + data.question_id + '_option_radio"]').val([answer]);
                        //将各试题绑定鼠标浮动事件
                        $('.questions').bind('mouseover', function () {
                            $('.questions_operations', $(this)).show();
                        });
                        //将各试题绑定鼠标移出事件
                        $('.questions').bind('mouseout', function () {
                            $('.questions_operations', $(this)).hide();
                        });
                        //取消添加试题对话框中到内容，并且关闭对话框
                        $('#single_choice_no_img fieldset textarea').val("");
                        $('#single_choice_no_img fieldset [name="SCNI_option_radio"]:checked').attr("checked", false);
                        $("#dialog_add_questions").dialog('close');
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

        } else if (type == "single_choice_img") {//当试题类型为单选题——有图片时
            //获取试题题干
            var question_stem = $('#single_choice_img fieldset #SCI_stem_textarea').val();
            //获取试题选项
            var question_options = [];
            $('#single_choice_img fieldset [name="SCI_question_option"]').each(function () {
                question_options.push($(this).val());
            });

            //获取试题题干图片和试题选项图片
            var question_images_ids = [];
            var question_has_image = [];
            $('#single_choice_img fieldset input[type="file"]').each(function (i, item) {
                question_images_ids.push($(this).attr('id'));
                if ($(this).val()) {
                    question_has_image.push(1);
                } else {
                    question_has_image.push(0);
                }
            });

            //获取答案信息
            var answer = $('#single_choice_img fieldset [name="SCI_option_radio"]:checked').val();
            //输出题干信息和选项
            //console.log(question_stem);
            //console.log(question_options);
            //console.log(question_images_ids);
            //console.log(question_has_image);
            //console.log(answer);
            $.ajax({
                type: 'POST',
                url: '/admin/add_question',
                dataType: 'json',
                timeout: 5000,
                async: true,
                data: {
                    examId: examId,
                    type: type,
                    kind: kind,
                    mustSelect: mustSelect,
                    optionShuffle: optionShuffle,
                    question_stem: question_stem,
                    question_options: question_options,
                    answer: answer
                },
                success: function (data) {
                    if (data.question_id) {
                        //上传图片
                        $.ajaxFileUpload({
                            type: 'POST',
                            url: '/admin/upload_images', //你处理上传文件的服务端
                            secureuri: false,
                            fileElementId: question_images_ids,
                            dataType: 'json',
                            timeout: 5000,
                            async: true,
                            data: {
                                type: type,
                                question_id: data.question_id,
                                question_images_ids: question_images_ids
                            },
                            success: function (data, status)
                            {
                                //console.log(data.success);
                                //console.log(data.question_images);
                                var question_imgs = data.question_images;
                                //构造显示在试卷页面到试题字符串
                                //获取当前试题序号
                                var order_num = $('#questions_area div.questions').length;
                                //将题干信息加入试题字符串
                                var question_html = '<span class="order_num">'
                                        + (order_num + 1)
                                        + '</span><span class="question_infor">'
                                        + mustSelect_text
                                        + '(' + kind + ')'
                                        + '</span><span class="question_id" hidden>'
                                        + data.question_id
                                        + '</span><span class="question_isMustSelect" hidden>'
                                        + mustSelect
                                        + '</span><span class="question_kind" hidden>'
                                        + kind
                                        + '</span><span class="question_isOptionShuffle" hidden>'
                                        + optionShuffle 
                                        + '</span><span class="question_stem"><span>'
                                        + question_stem.replace(/[\r\n]/g, '<br/>').replace(/ /g, '&nbsp;&nbsp;');
                                if (question_imgs[0]) {
                                    question_html += '</span><br/><img src="/' + question_imgs[0] + '"/></span><br/>';
                                } else {
                                    question_html += '</span></span><br/>';
                                }
                                //将选项内容加入到试题字符串
                                for (var i = 0; i < question_options.length; i++) {
                                    var option_radio_value = i + 1;
                                    var question_option_html = question_options[i].replace(/[\r\n]/g, '<br/>').replace(/ /g, '&nbsp;&nbsp;');;
                                    question_html += '<pre><input type="radio" id="question_'
                                            + data.question_id + '_option_' + option_radio_value
                                            + '" name="question_'
                                            + data.question_id + '_option_radio" value="'
                                            + option_radio_value + '" class="option_radio" disabled /><label for="question_'
                                            + data.question_id + '_option_'
                                            + option_radio_value + '" class="option_label"><span>'
                                            + question_option_html;
                                    if (question_imgs[i + 1] != 0 && question_option_html != "") {
                                        question_html += '</span><br/>';
                                    }else{
                                        question_html += '</span>';
                                    }
                                    if (question_imgs[i + 1]) {
                                        question_html += '<img src="/' + question_imgs[i + 1] + '"/></label></pre>';
                                    } else {
                                        question_html += '</label></pre>';
                                    }
                                }
                                //在试题最后加上操作功能
                                question_html += '<div class="questions_operations">'
                                        + '<a href="#" onclick="open_edit_question_dialog(\''
                                        + data.question_id
                                        + '\',\''
                                        + type
                                        + '\')" '
                                        + 'class="button button-rounded button-flat-primary button-tiny question_op">编辑</a>'
                                        + '<a href="#" onclick="delete_question_confirm(\'' + data.question_id + '\')" '
                                        + 'class="button button-rounded button-flat-primary button-tiny question_op">删除</a>'
                                        + '</div>';
                                //移除考卷暂无考题的提示
                                $('#hasQuestions').remove();
                                //将试题添加到页面显示
                                $('<div>', {
                                    id: 'question_' + data.question_id,
                                    class: 'questions new_questions'
                                }).html(question_html).appendTo($('#questions_area'));
                                //将答案项选中
                                $('input[name="question_' + data.question_id + '_option_radio"]').val([answer]);
                                //将各试题绑定鼠标浮动事件
                                $('.questions').bind('mouseover', function () {
                                    $('.questions_operations', $(this)).show();
                                });
                                //将各试题绑定鼠标移出事件
                                $('.questions').bind('mouseout', function () {
                                    $('.questions_operations', $(this)).hide();
                                });
                                //取消添加试题对话框中到内容，并且关闭对话框
                                $('#single_choice_img fieldset textarea').val("");
                                $('#single_choice_img fieldset [name="SCI_option_radio"]:checked').attr("checked", false);
                                $("#dialog_add_questions").dialog('close');
                            },
                            error: function (data, status, e)//服务器响应失败处理函数
                            {
                                //console.log(e);
                            }
                        });
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
        }else if (type == "multiple_choices_no_img") {//当试题类型为多选题——无图片时
            //获取试题题干
            var question_stem = $('#multiple_choices_no_img fieldset #MCNI_stem_textarea').val();
            //console.log(question_stem);
            //获取试题选项
            var question_options = [];
            $('#multiple_choices_no_img fieldset [name="MCNI_question_option"]').each(function () {
                question_options.push($(this).val());
            });
            //console.log(question_options);
            //获取答案信息
            var answer = [];
            $('#multiple_choices_no_img fieldset [name="MCNI_option_checkbox"]:checked').each(function(){
                answer.push($(this).val());
            });
            //console.log(answer);
            $.ajax({
                type: 'POST',
                url: '/admin/add_question',
                dataType: 'json',
                timeout: 5000,
                async: true,
                data: {
                    examId: examId,
                    type: type,
                    kind: kind,
                    mustSelect: mustSelect,
                    optionShuffle: optionShuffle,
                    question_stem: question_stem,
                    question_options: question_options,
                    answer: answer
                },
                success: function (data) {
                    if (data.question_id) {
                        //console.log("添加成功！正在更新显示..." + data.question_id, 2000, 'TIP');
                        //构造显示在试卷页面到试题字符串
                        //获取当前试题序号
                        var order_num = $('#questions_area div.questions').length;
                        //将题干信息加入试题字符串
                        var question_html = '<span class="order_num">' 
                                + (order_num + 1) 
                                + '</span><span class="question_infor">'
                                +mustSelect_text
                                +'('+kind+')'
                                +'</span><span class="question_id" hidden>' 
                                + data.question_id 
                                +'</span><span class="question_isMustSelect" hidden>' 
                                + mustSelect 
                                + '</span><span class="question_kind" hidden>'
                                + kind 
                                + '</span><span class="question_isOptionShuffle" hidden>'
                                + optionShuffle 
                                + '</span><span class="question_stem">' 
                                + question_stem.replace(/[\r\n]/g, '<br/>').replace(/ /g, '&nbsp;&nbsp;') 
                                + '</span><br/>';
                        //将选项内容加入到试题字符串
                        for (var i = 0; i < question_options.length; i++) {
                            var option_checkbox_value = i + 1;
                            var question_option_html = question_options[i].replace(/[\r\n]/g, '<br/>').replace(/ /g, '&nbsp;&nbsp;');
                            question_html += '<pre><input type="checkbox" id="question_'
                                    + data.question_id + '_option_' + option_checkbox_value
                                    + '" name="question_'
                                    + data.question_id + '_option_checkbox" value="'
                                    + option_checkbox_value + '" class="option_radio" disabled /><label for="question_'
                                    + data.question_id + '_option_'
                                    + option_checkbox_value + '" class="option_label">'
                                    + question_option_html + '</label></pre>';
                        }
                        //在试题最后加上操作功能
                        question_html += '<div class="questions_operations">'
                                + '<a href="#" onclick="open_edit_question_dialog(\'' 
                                + data.question_id 
                                + '\',\''
                                + type+ '\')" '
                                + 'class="button button-rounded button-flat-primary button-tiny question_op">编辑</a>'
                                + '<a href="#" onclick="delete_question_confirm(\'' + data.question_id + '\')" '
                                + 'class="button button-rounded button-flat-primary button-tiny question_op">删除</a>'
                                + '</div>';
                        //移除考卷暂无考题的提示
                        $('#hasQuestions').remove();
                        //将试题添加到页面显示
                        $('<div>', {
                            id: 'question_' + data.question_id,
                            class: 'questions new_questions'
                        }).html(question_html).appendTo($('#questions_area'));
                        //将答案项选中
                        $('input[name="question_' + data.question_id + '_option_checkbox"]').val(answer);
                        //将各试题绑定鼠标浮动事件
                        $('.questions').bind('mouseover', function () {
                            $('.questions_operations', $(this)).show();
                        });
                        //将各试题绑定鼠标移出事件
                        $('.questions').bind('mouseout', function () {
                            $('.questions_operations', $(this)).hide();
                        });
                        //取消添加试题对话框中到内容，并且关闭对话框
                        $('#multiple_choices_no_img fieldset textarea').val("");
                        $('#multiple_choices_no_img fieldset [name="MCNI_option_checkbox"]:checked').attr("checked", false);
                        $("#dialog_add_questions").dialog('close');
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

        } else if (type == "short_answer_no_img") {
            //获取试题题干
            var question_stem = $('#short_answer_no_img fieldset #SANI_stem_textarea').val();
            //console.log(question_stem);
            $.ajax({
                type: 'POST',
                url: '/admin/add_question',
                dataType: 'json',
                timeout: 5000,
                async: true,
                data: {
                    examId: examId,
                    type: type,
                    kind: kind,
                    mustSelect: mustSelect,
                    optionShuffle: optionShuffle,
                    question_stem: question_stem
                },
                success: function (data) {
                    if (data.question_id) {
                        //console.log("添加成功！正在更新显示..." + data.question_id, 2000, 'TIP');
                        //构造显示在试卷页面到试题字符串
                        //获取当前试题序号
                        var order_num = $('#questions_area div.questions').length;
                        //将题干信息加入试题字符串
                        var question_html = '<span class="order_num">' 
                                + (order_num + 1)
                                + '</span><span class="question_infor">'
                                +mustSelect_text
                                +'('+kind+')'
                                +'</span><span class="question_id" hidden>' 
                                + data.question_id 
                                +'</span><span class="question_isMustSelect" hidden>' 
                                + mustSelect 
                                + '</span><span class="question_kind" hidden>'
                                + kind 
                                + '</span><span class="question_isOptionShuffle" hidden>'
                                + optionShuffle 
                                + '</span><span class="question_stem"><span>' 
                                + question_stem.replace(/[\r\n]/g, '<br/>').replace(/ /g, '&nbsp;&nbsp;') 
                                + '</span></span><br/>';
                        //在试题最后加上操作功能
                        question_html += '<div class="questions_operations">'
                                + '<a href="#" onclick="open_edit_question_dialog(\'' 
                                + data.question_id 
                                + '\',\'' 
                                + type 
                                + '\')" '
                                +  'class="button button-rounded button-flat-primary button-tiny question_op">编辑</a>'
                                + '<a href="#" onclick="delete_question_confirm(\'' + data.question_id + '\')" '
                                + 'class="button button-rounded button-flat-primary button-tiny question_op">删除</a>'
                                + '</div>';
                        //移除考卷暂无考题的提示
                        $('#hasQuestions').remove();
                        //将试题添加到页面显示
                        $('<div>', {
                            id: 'question_' + data.question_id,
                            class: 'questions new_questions'
                        }).html(question_html).appendTo($('#questions_area'));
                        //将各试题绑定鼠标浮动事件
                        $('.questions').bind('mouseover', function () {
                            $('.questions_operations', $(this)).show();
                        });
                        //将各试题绑定鼠标移出事件
                        $('.questions').bind('mouseout', function () {
                            $('.questions_operations', $(this)).hide();
                        });
                        //取消添加试题对话框中到内容，并且关闭对话框
                        $('#short_answer_no_img fieldset textarea').val("");
                        $('#short_answer_no_img fieldset [name="SANI_option_radio"]:checked').attr("checked", false);
                        $("#dialog_add_questions").dialog('close');
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

        }else if (type == "short_answer_img") {
            //获取试题题干
            var question_stem = $('#short_answer_img fieldset #SAI_stem_textarea').val();
            
            //获取试题题干图片和试题选项图片
            var question_images_ids = [];
            var question_has_image = [];
            $('#short_answer_img fieldset input[type="file"]').each(function (i, item) {
                question_images_ids.push($(this).attr('id'));
                if ($(this).val()) {
                    question_has_image.push(1);
                } else {
                    question_has_image.push(0);
                }
            });
            
            //console.log(question_stem);
            //console.log(question_images_ids);
            //console.log(question_has_image);
            $.ajax({
                type: 'POST',
                url: '/admin/add_question',
                dataType: 'json',
                timeout: 5000,
                async: true,
                data: {
                    examId: examId,
                    type: type,
                    kind: kind,
                    mustSelect: mustSelect,
                    optionShuffle: optionShuffle,
                    question_stem: question_stem
                },
                success: function (data) {
                    if (data.question_id) {
                        //上传图片
                        $.ajaxFileUpload({
                            type: 'POST',
                            url: '/admin/upload_images', //你处理上传文件的服务端
                            secureuri: false,
                            fileElementId: question_images_ids,
                            dataType: 'json',
                            timeout: 5000,
                            async: true,
                            data: {
                                type: type,
                                question_id: data.question_id,
                                question_images_ids: question_images_ids
                            },
                            success: function (data, status)
                            {
                                //console.log(data.success);
                                //console.log(data.question_images);
                                var question_imgs = data.question_images;
                                //构造显示在试卷页面到试题字符串
                                //获取当前试题序号
                                var order_num = $('#questions_area div.questions').length;
                                //将题干信息加入试题字符串
                                var question_html = '<span class="order_num">'
                                        + (order_num + 1)
                                        + '</span><span class="question_infor">'
                                        + mustSelect_text
                                        + '(' + kind + ')'
                                        + '</span><span class="question_id" hidden>'
                                        + data.question_id
                                        + '</span><span class="question_isMustSelect" hidden>'
                                        + mustSelect
                                        + '</span><span class="question_kind" hidden>'
                                        + kind
                                        + '</span><span class="question_isOptionShuffle" hidden>'
                                        + optionShuffle 
                                        + '</span><span class="question_stem"><span>'
                                        + question_stem.replace(/[\r\n]/g, '<br/>').replace(/ /g, '&nbsp;&nbsp;');
                                if (question_imgs[0]) {
                                    question_html += '</span><br/><img src="/' + question_imgs[0] + '"/></span><br/>';
                                } else {
                                    question_html += '</span></span><br/>';
                                }
                                //在试题最后加上操作功能
                                question_html += '<div class="questions_operations">'
                                        + '<a href="#" onclick="open_edit_question_dialog(\''
                                        + data.question_id
                                        + '\',\''
                                        + type
                                        + '\')"'
                                        + 'class="button button-rounded button-flat-primary button-tiny question_op">编辑</a>'
                                        + '<a href="#" onclick="delete_question_confirm(\'' + data.question_id + '\')" '
                                        + 'class="button button-rounded button-flat-primary button-tiny question_op">删除</a>'
                                        + '</div>';
                                //移除考卷暂无考题的提示
                                $('#hasQuestions').remove();
                                //将试题添加到页面显示
                                $('<div>', {
                                    id: 'question_' + data.question_id,
                                    class: 'questions new_questions'
                                }).html(question_html).appendTo($('#questions_area'));
                                //将各试题绑定鼠标浮动事件
                                $('.questions').bind('mouseover', function () {
                                    $('.questions_operations', $(this)).show();
                                });
                                //将各试题绑定鼠标移出事件
                                $('.questions').bind('mouseout', function () {
                                    $('.questions_operations', $(this)).hide();
                                });
                                //取消添加试题对话框中到内容，并且关闭对话框
                                $('#short_answer_img fieldset textarea').val("");
                                $('#short_answer_img fieldset [name="SAI_option_radio"]:checked').attr("checked", false);
                                $("#dialog_add_questions").dialog('close');
                            },
                            error: function (data, status, e)//服务器响应失败处理函数
                            {
                                //console.log(e);
                            }
                        });
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
//单击修改图标时，弹出修改试题对话框
function open_edit_question_dialog(questionId,type){
    //获取examId
    var examId = $('#examId').html();
    //获取isMustSelect
    var isMustSelect = $('#question_'+questionId+' .question_isMustSelect').html();
    //获取isOptionShuffle
    var isOptionShuffle = $('#question_'+questionId+' .question_isOptionShuffle').html();
    //获取kind
    var kind = $('#question_'+questionId+' .question_kind').html();
    //根据修改的题型，设置题型下拉菜单默认选项
    $('#edit_question_type option[value="'+type+'"]').attr('selected','selected');
    
    //选中是否必选
    $('input[name="edit_mustSelect"]').val([isMustSelect]);
    //选中选项是否乱序
    $('input[name="edit_optionShuffle"]').val([isOptionShuffle]);
    //将试题编号隐藏区域的值设置为questionId 
    $('#edit_question_id').val(questionId);
    $("#dialog_edit_questions").dialog('open');
    //将编辑框的内容清空,以及其他题型的编辑框内容删除
    $('#edit_single_choice_no_img fieldset div').remove();
    $('#edit_single_choice_img fieldset div').remove();
    $('#edit_short_answer_no_img fieldset div').remove();
    $('#edit_short_answer_img fieldset div').remove();
    
    //先将#questions_kind里的内容清空
    //解决的问题1： 自定义类别在用户手动输入后，会更新
    //解决的问题1： 可输入下拉框在添加一次后会出现下拉不了的情况 故移除后再次添加，并初始化
    //后面会有下拉框的初始化
    $('#edit_questions_kind').remove();
    $('<span>',
            {
                id: 'edit_questions_kind',
                class: 'dialog_input'
            }).appendTo($('#edit_question_kind_div'));
    //从后台获取考试的自定义类别
    $.ajax({
                type: 'POST',
                url: '/admin/get_exam_kinds',
                dataType: 'json',
                timeout: 5000,
                async: true,
                data: {
                    examId: examId
                },
                success: function (data) {
                    if (data.success) {
                        //试题所属类别下拉列表可输入（下拉框初始化）
                        $('#edit_questions_kind').combox({datas: data.kinds});
                        //设置试题所属类别
                        $('#edit_questions_kind input').val(kind);
                    } else {
                        //console.log("获取自定义类别失败!");
                    }
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    //console.log("error " + textStatus);
                    //console.log("网络或服务器异常！" + 'ERROR');
                }
            });
            
            
    if(type=="single_choice_no_img"){
        //获取编辑试题的答案
        var answer = $('[name="question_'+questionId+'_option_radio"]:checked').val();
        //console.log(answer);
        //console.log(questionId);
        //获取题干内容，并将试题内容加入到修改编辑框
        var question_stem=$('#question_'+questionId+' .question_stem').html();
        $('<div>').html('<label for="edit_SCNI_stem_textarea" class="dialog_label">题干内容：</label>'+'<textarea id="edit_SCNI_stem_textarea" class="text ui-widget-content ui-corner-all dialog_textarea" placeholder="请输入题干内容">'
                +question_stem+'</textarea>').appendTo($('#edit_single_choice_no_img fieldset'));
        //依次将选项内容加入到选项内容
        $('#question_'+questionId+' pre').each(function(){
            //获取当前选项的值
            var option_value=$('input',$(this)).val();
            var option_content=$('label',$(this)).html();
            $('<div>').html('<label for="edit_SCNI_question_option'+option_value
                +'" class="dialog_label"><input type="radio" name="edit_SCNI_option_radio" value="'
                +option_value+'"/>选项'
                +option_value
                +'：</label><textarea id="edit_SCNI_question_option'+option_value
                +'" name="edit_SCNI_question_option" class="text ui-widget-content ui-corner-all dialog_textarea" placeholder="请输入选项内容">'
                +option_content+'</textarea>')
                .appendTo($('#edit_single_choice_no_img fieldset'));
        });
        //将答案项选中
        $('#edit_single_choice_no_img fieldset input[name="edit_SCNI_option_radio"]').val([answer]);
        //textarea实现自动增高
        $('textarea').autoTextarea({minHeight:48,maxHeight:150,width:500});
    }else if(type=="single_choice_img"){
        //获取编辑试题的答案
        var answer = $('[name="question_'+questionId+'_option_radio"]:checked').val();
        //console.log(answer);
        //console.log(questionId);
        //获取题干内容，并将试题内容加入到修改编辑框
        var question_stem=$('#question_'+questionId+' .question_stem span').html();
        $('<div>').html('<label for="edit_SCI_stem_textarea" class="dialog_label">题干内容：</label>'
                +'<textarea id="edit_SCI_stem_textarea" class="text ui-widget-content ui-corner-all dialog_textarea" placeholder="请输入题干内容">'
                +question_stem+'</textarea>'
                +'<input type="file" id="edit_SCI_question_stem_img"  name="edit_SCI_question_stem_img"  class="dialog_file" />').appendTo($('#edit_single_choice_img fieldset'));
        //依次将选项内容加入到选项内容
        $('#question_'+questionId+' pre').each(function(){
            //获取当前选项的值
            var option_value=$('input',$(this)).val();
            var option_content=$('label span',$(this)).html();
            $('<div>').html('<label for="edit_SCI_question_option'+option_value
                +'" class="dialog_label"><input type="radio" name="edit_SCI_option_radio" value="'
                +option_value+'"/>选项'
                +option_value
                +'：</label><textarea id="edit_SCI_question_option'+option_value
                +'" name="edit_SCI_question_option" class="text ui-widget-content ui-corner-all dialog_textarea" placeholder="请输入选项内容">'
                +option_content+'</textarea>'
                +'<input type="file" id="edit_SCI_question_option'
                +option_value+'_img"  name="edit_SCI_question_option'+option_value+'_img"  class="dialog_file" />')
                .appendTo($('#edit_single_choice_img fieldset'));
        });
        //将答案项选中
        $('#edit_single_choice_img fieldset input[name="edit_SCI_option_radio"]').val([answer]);
        //textarea实现自动增高
        $('textarea').autoTextarea({minHeight:48,maxHeight:150,width:500});
    }else if(type=="short_answer_no_img"){
        //console.log(questionId);
        //获取题干内容，并将试题内容加入到修改编辑框
        var question_stem=$('#question_'+questionId+' .question_stem span').html();
        $('<div>').html('<label for="edit_SANI_stem_textarea" class="dialog_label">题干内容：</label>'
                +'<textarea id="edit_SANI_stem_textarea" class="text ui-widget-content ui-corner-all dialog_textarea" placeholder="请输入题干内容">'
                +question_stem+'</textarea>').appendTo($('#edit_short_answer_no_img fieldset'));
        $('textarea').autoTextarea({minHeight:48,maxHeight:150,width:500});
    }else if(type=="short_answer_img"){
        //console.log(questionId);
        //获取题干内容，并将试题内容加入到修改编辑框
        var question_stem=$('#question_'+questionId+' .question_stem span').html();
        $('<div>').html('<label for="edit_SAI_stem_textarea" class="dialog_label">题干内容：</label>'
                +'<textarea id="edit_SAI_stem_textarea" class="text ui-widget-content ui-corner-all dialog_textarea" placeholder="请输入题干内容">'
                +question_stem+'</textarea>'
                +'<input type="file" id="edit_SAI_question_stem_img"  name="edit_SAI_question_stem_img"  class="dialog_file" />')
                .appendTo($('#edit_short_answer_img fieldset'));
        $('textarea').autoTextarea({minHeight:48,maxHeight:150,width:500});
    }
    
}
//单击保存修改时，保存试题
function update_question() {
    //获取当前试卷编号
    var examId=$('#exam_infor #examId').html();
    //获取试题类型
    var type=$('[name="edit_questions_type_options"]:checked').val();
    //获取试题类别
    var kind = $('#edit_questions_kind input').val();
    //console.log(kind);
    //获取试题是否比选
    var mustSelect = $('[name="edit_mustSelect"]:checked').val();
    var mustSelect_text;
    if(mustSelect == "1"){
        mustSelect_text='(必选)';
    }else{
        mustSelect_text='(可选)';
    }
    //获取试题选项是否打乱
    var optionShuffle = $('[name="edit_optionShuffle"]:checked').val();
    //获取被修改的试题编号
    var questionId=$('#edit_question_id').val()
    //当试题类型为单选题——无图片时
    if(type=="single_choice_no_img"){
        //获取试题题干
        var question_stem = $('#edit_single_choice_no_img fieldset #edit_SCNI_stem_textarea').val();
        //获取试题选项
        var question_options = [];
        $('#edit_single_choice_no_img fieldset [name="edit_SCNI_question_option"]').each(function(){
            question_options.push($(this).val());
        });
        //获取答案信息
        var answer=$('#edit_single_choice_no_img fieldset [name="edit_SCNI_option_radio"]:checked').val();
        //输出题干信息和选项
        //console.log(question_stem);
        //console.log(question_options);
        //console.log(answer);
        $.ajax({
            type: 'POST',
            url: '/admin/update_question',
            dataType: 'json',
            timeout: 5000,
            async: true,
            data: {
                questionId: questionId,
                examId: examId,
                type: type,
                kind: kind,
                mustSelect: mustSelect,
                optionShuffle: optionShuffle,
                question_stem: question_stem,
                question_options: question_options,
                answer: answer
            },
            success: function (data) {
                if (data.success) {
                    //console.log("修改成功！正在更新显示..." , 2000, 'TIP');
                    //将修改后的类别和是否必选显示出来
                    $('#question_'+questionId+' .question_infor').html(mustSelect_text+'('+kind+')');
                    //将修改后的类别显示在页面
                    $('#question_'+questionId+' .question_kind').html(kind);
                    //将修改后的mustSelect显示在页面
                    $('#question_'+questionId+' .question_isMustSelect').html(mustSelect);
                    //将修改后的optionShuffle显示在页面
                    $('#question_'+questionId+' .question_isOptionShuffle').html(optionShuffle);
                    //将修改后的试题显示在页面
                    $('#question_'+questionId+' .question_stem').html(question_stem.replace(/[\r\n]/g, '<br/>'));
                    //将修改后到选项显示
                    for(var i=0;i<question_options.length;i++){
                        var option_radio_value=i+1;
                        $('#question_'+questionId+' label[for=question_'+questionId+'_option_'+option_radio_value+']').html(question_options[i].replace(/[\r\n]/g, '<br/>'));                       
                    }
                    //将修改后的答案显示在页面上
                    $('input[name="question_'+questionId+'_option_radio"]').val([answer]);
                    //将修改过的试题显示为红色边框
                    //修改过的试题内容直接存入数据库，即使刷新页面也会从数据库读取，故不用红色标记提醒
                    //$('#question_'+questionId).addClass('edited_questions');
                    //取消编辑试题对话框中到内容，并且关闭对话框
                    $('#edit_single_choice_no_img fieldset textarea').val("");
                    $('#edit_single_choice_no_img fieldset [name="edit_SCNI_option_radio"]:checked').attr("checked",false);
                    $("#dialog_edit_questions").dialog('close');
                } else {
                    //console.log("修改失败!");
                    window.location.reload(true);
                }
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                //console.log("error " + textStatus);
                //console.log("网络或服务器异常！" + 'ERROR');
            }
        });
        
    }else if(type=="single_choice_img"){//当试题类型为单选题——有图片时
        //获取试题题干
        var question_stem = $('#edit_single_choice_img fieldset #edit_SCI_stem_textarea').val();
        //获取试题选项
        var question_options = [];
        $('#edit_single_choice_img fieldset [name="edit_SCI_question_option"]').each(function(){
            question_options.push($(this).val());
        });
        //获取试题题干图片和试题选项图片
        var question_images_ids = [];
        var question_has_image = [];
        $('#edit_single_choice_img fieldset input[type="file"]').each(function (i, item) {
            question_images_ids.push($(this).attr('id'));
            if ($(this).val()) {
                question_has_image.push(1);
            } else {
                question_has_image.push(0);
            }
        });
        //获取答案信息
        var answer=$('#edit_single_choice_img fieldset [name="edit_SCI_option_radio"]:checked').val();
        //输出题干信息和选项
        //console.log(question_stem);
        //console.log(question_options);
        //console.log(answer);
        $.ajax({
            type: 'POST',
            url: '/admin/update_question',
            dataType: 'json',
            timeout: 5000,
            async: true,
            data: {
                questionId: questionId,
                examId: examId,
                type: type,
                kind: kind,
                mustSelect: mustSelect,
                optionShuffle: optionShuffle,
                question_stem: question_stem,
                question_options: question_options,
                answer: answer
            },
            success: function (data) {
                if (data.success) {
                    //上传图片
                    $.ajaxFileUpload({
                        type: 'POST',
                        url: '/admin/upload_edit_images', //你处理上传文件的服务端
                        secureuri: false,
                        fileElementId: question_images_ids,
                        dataType: 'json',
                        timeout: 5000,
                        async: true,
                        data: {
                            type: type,
                            question_id: questionId,
                            question_images_ids: question_images_ids
                        },
                        success: function (data, status)
                        {
                            /*
                            //console.log(data.success);
                            //console.log(data.question_images);
                            var question_imgs=data.question_images;
                            //将修改后的试题显示在页面
                            $('#question_' + questionId + ' .question_stem span').html(question_stem);
                            //将修改后到选项显示
                            for (var i = 0; i < question_options.length; i++) {
                                var option_radio_value = i + 1;
                                $('#question_' + questionId + ' label[for=question_' + questionId + '_option_' + option_radio_value + '] span').html(question_options[i]);
                            }
                            //将修改后的答案显示在页面上
                            $('input[name="question_' + questionId + '_option_radio"]').val([answer]);
                            */
                            //刷新前，先保存试卷
                            save_add();
                            //直接刷新，不用上面手动刷新页面 因为相关图片不刷新无法显示
                            window.location.reload(true);
                        },
                        error: function (data, status, e)//服务器响应失败处理函数
                        {
                            //console.log(e);
                        }
                    });
                } else {
                    //console.log("修改失败!");
                    window.location.reload(true);
                }
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                //console.log("error " + textStatus);
                //console.log("网络或服务器异常！" + 'ERROR');
            }
        });
        
    }else if(type=="short_answer_no_img"){//当试题类型为简答题——无图片时
        //获取试题题干
        var question_stem = $('#edit_short_answer_no_img fieldset #edit_SANI_stem_textarea').val();
        $.ajax({
            type: 'POST',
            url: '/admin/update_question',
            dataType: 'json',
            timeout: 5000,
            async: true,
            data: {
                questionId: questionId,
                examId: examId,
                type: type,
                kind: kind,
                mustSelect: mustSelect,
                optionShuffle: optionShuffle,
                question_stem: question_stem
            },
            success: function (data) {
                if (data.success) {
                    //console.log("修改成功！正在更新显示..." + data.question_id, 2000, 'TIP');
                    //将修改后的类别显示在页面
                    $('#question_'+questionId+' .question_kind').html(kind);
                    //将修改后的mustSelect显示在页面
                    $('#question_'+questionId+' .question_isMustSelect').html(mustSelect);
                    //将修改后的optionShuffle显示在页面
                    $('#question_'+questionId+' .question_isOptionShuffle').html(optionShuffle);
                    
                    //将修改后的试题显示在页面
                    $('#question_'+questionId+' .question_stem').html(question_stem.replace(/[\r\n]/g, '<br/>'));
                    
                    //将修改过的试题显示为红色边框
                    //修改过的试题内容直接存入数据库，即使刷新页面也会从数据库读取，故不用红色标记提醒
                    //$('#question_'+questionId).addClass('edited_questions');
                    //取消编辑试题对话框中到内容，并且关闭对话框
                    $('#edit_short_answer_no_img fieldset textarea').val("");
                    $('#edit_short_answer_no_img fieldset [name="edit_SANI_option_radio"]:checked').attr("checked",false);
                    $("#dialog_edit_questions").dialog('close');
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
    }else if(type=="short_answer_img"){//当试题类型为简答题——有图片时
        //获取试题题干
        var question_stem = $('#edit_short_answer_img fieldset #edit_SAI_stem_textarea').val();
        
        //获取试题题干图片和试题选项图片
        var question_images_ids = [];
        var question_has_image = [];
        $('#edit_short_answer_img fieldset input[type="file"]').each(function (i, item) {
            question_images_ids.push($(this).attr('id'));
            if ($(this).val()) {
                question_has_image.push(1);
            } else {
                question_has_image.push(0);
            }
        });
        //输出题干信息和选项
        //console.log(question_stem);
        $.ajax({
            type: 'POST',
            url: '/admin/update_question',
            dataType: 'json',
            timeout: 5000,
            async: true,
            data: {
                questionId: questionId,
                examId: examId,
                type: type,
                kind: kind,
                mustSelect: mustSelect,
                optionShuffle: optionShuffle,
                question_stem: question_stem
            },
            success: function (data) {
                if (data.success) {
                    //上传图片
                    $.ajaxFileUpload({
                        type: 'POST',
                        url: '/admin/upload_edit_images', //你处理上传文件的服务端
                        secureuri: false,
                        fileElementId: question_images_ids,
                        dataType: 'json',
                        timeout: 5000,
                        async: true,
                        data: {
                            type: type,
                            question_id: questionId,
                            question_images_ids: question_images_ids
                        },
                        success: function (data, status)
                        {
                            //刷新前，先保存试卷
                            save_add();
                            //直接刷新，不用上面手动刷新页面 因为相关图片不刷新无法显示
                            window.location.reload(true);
                        },
                        error: function (data, status, e)//服务器响应失败处理函数
                        {
                            //console.log(e);
                        }
                    });
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
    //保存添加
    //save_add();
}
//删除试题确认
function delete_question_confirm(questionId){			//定义函数
	if(window.confirm('您确定删除该试题吗?')==true){		//函数执行的操作
            //从页面将试题内容删除，保存试卷之后则删除试题    
            $('#question_' + questionId).remove();
            //改变试题序号
            change_order_num();
	}
}

//试题表单验证（是否为空）
function questions_validation(type){
    //通用输入框判断
    //试题类别为空时，做如下处理
    if ($('#questions_kind input').val() == ""){
        $('<div>').attr({class: 'dialog_error'}).css({
            color: 'red',
            textAlign: 'center'
        }).html('试题类别不能为空').appendTo($('#'+type+' fieldset'));
        ////console.log('题干为空');
        //一秒之后提示消失
        setTimeout(
                function () {
                    $('#'+type+' fieldset .dialog_error').fadeOut('slow');
                },
                1000
                );
        return false;
    }
    //当试题类型为单选题——无图片时
    if(type=="single_choice_no_img"){
        //试题题干为空时，做如下处理
        if($('#single_choice_no_img fieldset #SCNI_stem_textarea').val()==""){
            $('<div>').attr({class: 'dialog_error'}).css({
                color: 'red',
                textAlign: 'center'
            }).html('试题题干不能为空').appendTo($('#single_choice_no_img fieldset'));
            ////console.log('题干为空');
            //一秒之后提示消失
            setTimeout(
                    function () {
                        $('#single_choice_no_img fieldset .dialog_error').fadeOut('slow');
                    },
                    1000
                    );
            return false;
        }
        //判断选项是否为空
        var option_null_num=0;
        $('#single_choice_no_img fieldset [name="SCNI_question_option"]').each(function(){
            if ($(this).val() == "") {
                option_null_num++;
            }
        });
        if(option_null_num>=1){
            $('<div>').attr({class: 'dialog_error'}).css({
                    color: 'red',
                    textAlign: 'center'
                }).html('存在选项内容为空，请填写').appendTo($('#single_choice_no_img fieldset'));
                ////console.log('题干为空');
                //一秒之后提示消失
                setTimeout(
                        function () {
                            $('#single_choice_no_img fieldset .dialog_error').fadeOut('slow');
                        },
                        1000
                        );
            return false;
        }
        //判断是否选中答案
        if($('#single_choice_no_img fieldset [name="SCNI_option_radio"]:checked').size()==0){
            $('<div>').attr({class: 'dialog_error'}).css({
                color: 'red',
                textAlign: 'center'
            }).html('请选择试题的答案').appendTo($('#single_choice_no_img fieldset'));
            ////console.log('题干为空');
            //一秒之后提示消失
            setTimeout(
                    function () {
                        $('#single_choice_no_img fieldset .dialog_error').fadeOut('slow');
                    },
                    1000
                    );
            return false;
        }
        return true;
    }else if(type=="single_choice_img"){
        //$('#single_choice_img fieldset #SCI_stem_textarea').val()
        //#single_choice_img fieldset input[type="file"]
        //试题题干为空时，做如下处理
        if(($('#single_choice_img fieldset #SCI_stem_textarea').val()=="")&&($('#single_choice_img fieldset #SCI_stem_textarea').next('input[type="file"]').val()=="")){
            $('<div>').attr({class: 'dialog_error'}).css({
                color: 'red',
                textAlign: 'center'
            }).html('试题题干或者试题图片不能都为空').appendTo($('#single_choice_img fieldset'));
            ////console.log('题干为空');
            //一秒之后提示消失
            setTimeout(
                    function () {
                        $('#single_choice_img fieldset .dialog_error').fadeOut('slow');
                    },
                    1000
                    );
            return false;
        }
        //判断选项是否为空
        var option_null_num=0;
        $('#single_choice_img fieldset [name="SCI_question_option"]').each(function(){
            if (($(this).val() == "")&&($(this).next('input[type="file"]').val()=="")) {
                option_null_num++;
            }
        });
        if(option_null_num>=1){
            $('<div>').attr({class: 'dialog_error'}).css({
                    color: 'red',
                    textAlign: 'center'
                }).html('存在选项内容和选项图片均为空，请输入').appendTo($('#single_choice_img fieldset'));
                ////console.log('题干为空');
                //一秒之后提示消失
                setTimeout(
                        function () {
                            $('#single_choice_img fieldset .dialog_error').fadeOut('slow');
                        },
                        1000
                        );
            return false;
        }
        //判断是否选中答案
        if($('#single_choice_img fieldset [name="SCI_option_radio"]:checked').size()==0){
            $('<div>').attr({class: 'dialog_error'}).css({
                color: 'red',
                textAlign: 'center'
            }).html('请选择试题的答案').appendTo($('#single_choice_img fieldset'));
            ////console.log('题干为空');
            //一秒之后提示消失
            setTimeout(
                    function () {
                        $('#single_choice_img fieldset .dialog_error').fadeOut('slow');
                    },
                    1000
                    );
            return false;
        }
        return true;
    }else if(type=="multiple_choices_no_img"){//当试题类型为多选题——无图片时
        //试题题干为空时，做如下处理
        if($('#multiple_choices_no_img fieldset #MCNI_stem_textarea').val()==""){
            $('<div>').attr({class: 'dialog_error'}).css({
                color: 'red',
                textAlign: 'center'
            }).html('试题题干不能为空').appendTo($('#multiple_choices_no_img fieldset'));
            ////console.log('题干为空');
            //一秒之后提示消失
            setTimeout(
                    function () {
                        $('#multiple_choices_no_img fieldset .dialog_error').fadeOut('slow');
                    },
                    1000
                    );
            return false;
        }
        //判断选项是否为空
        var option_null_num=0;
        $('#multiple_choices_no_img fieldset [name="MCNI_question_option"]').each(function(){
            if ($(this).val() == "") {
                option_null_num++;
            }
        });
        if(option_null_num>=1){
            $('<div>').attr({class: 'dialog_error'}).css({
                    color: 'red',
                    textAlign: 'center'
                }).html('存在选项内容为空，请填写').appendTo($('#multiple_choices_no_img fieldset'));
                ////console.log('题干为空');
                //一秒之后提示消失
                setTimeout(
                        function () {
                            $('#multiple_choices_no_img fieldset .dialog_error').fadeOut('slow');
                        },
                        1000
                        );
            return false;
        }
        //判断是否选中答案
        if($('#multiple_choices_no_img fieldset [name="MCNI_option_checkbox"]:checked').size()==0){
            $('<div>').attr({class: 'dialog_error'}).css({
                color: 'red',
                textAlign: 'center'
            }).html('请选择试题的答案').appendTo($('#multiple_choices_no_img fieldset'));
            ////console.log('题干为空');
            //一秒之后提示消失
            setTimeout(
                    function () {
                        $('#multiple_choices_no_img fieldset .dialog_error').fadeOut('slow');
                    },
                    1000
                    );
            return false;
        }
        return true;
    }else if(type=="short_answer_no_img"){
        //试题题干为空时，做如下处理
        if($('#short_answer_no_img fieldset #SANI_stem_textarea').val()==""){
            $('<div>').attr({class: 'dialog_error'}).css({
                color: 'red',
                textAlign: 'center'
            }).html('试题题干不能为空').appendTo($('#short_answer_no_img fieldset'));
            //一秒之后提示消失
            setTimeout(
                    function () {
                        $('#short_answer_no_img fieldset .dialog_error').fadeOut('slow');
                    },
                    1000
                    );
            return false;
        }
        return true;
    }else if(type=="short_answer_img"){
        //试题题干为空时，做如下处理
        if(($('#short_answer_img fieldset #SAI_stem_textarea').val()=="")&&($('#short_answer_img fieldset #SAI_stem_textarea').next('input[type="file"]').val()=="")){
            $('<div>').attr({class: 'dialog_error'}).css({
                color: 'red',
                textAlign: 'center'
            }).html('试题题干或者试题图片不能都为空').appendTo($('#short_answer_img fieldset'));
            //一秒之后提示消失
            setTimeout(
                    function () {
                        $('#short_answer_img fieldset .dialog_error').fadeOut('slow');
                    },
                    1000
                    );
            return false;
        }
        return true;
    }
}

