$(function(){
    //防止用户后退
    window.history.forward(1); 
    //试题块换成标签形式
    $( "#parts_area" ).tabs();
    $('#flash_message').hide();
    
//    window.onscroll = function(e){
//        console.log(e.target);
//    }
    
    //右侧功能框可拖动
    //$( "#parts_tool" ).draggable();
    //简答题答题区域自动变化大小
//    $('textarea').autoTextarea({minHeight:100,maxHeight:800}); 
    

    //学生用户名
    var username=$('#student_username').html();
    //console.log(username);
    //获取试卷编号
    var examId=$('#examId').html();
    //console.log(examId);
    //获取试卷编号
    var paperId=$('#paper_infor_paperId').html();
    //获取是否实名
    var isRealname=$('#paper_infor_isrealname').html();
    //console.log(isRealname);
    //实名考试时 验证考生状态
    if(isRealname){
        //判断学生状态
        student_status(username,examId);
    }
    //获取剩余时间
    var resttime=$('#paper_infor_resttime').html();
    //获取本地存储的相关内容
    for(var i=0;i<window.localStorage.length;i++){
        if(localStorage.key(i)==username+'_resttime'){
            resttime = localStorage.getItem(localStorage.key(i));
            //console.log(localStorage.key(i));
            //console.log(resttime);
        }else if(localStorage.key(i).split("#")[0] == username) {
            //获取本地存储中的试题编号
            var questionId = localStorage.key(i).split("#")[1];
            ////console.log(questionId);
            //获取存储的试题答案
            var answer = localStorage.getItem(localStorage.key(i));
            //console.log(answer);
            ////console.log(answer);
            if (questionId) {
                //获取试题类别
                var questionType = $('.question_type', $('#question_' + questionId)).html();
                var question_in_part = $('.question_in_part', $('#question_' + questionId)).html();
                var question_order_num = $('.order_num', $('#question_' + questionId)).html();
                if (questionType == "single_choice_no_img" || questionType == "single_choice_img") {
                    //将答案项选中
                    $('#question_' + questionId + ' input[type="radio"]').val([answer]);
                    //在试题列表中标出
                    $('#td_' +question_in_part+'_'+ question_order_num).addClass('td_done');
                }else if (questionType == "multiple_choices_no_img" ) {
                    //console.log(answer);
                    if (answer) {
                        answer1 = answer.split(",");
                        //将答案项选中
                        $('#question_' + questionId + ' input[type="checkbox"]').val(answer1);
                        //在试题列表中标出
                        $('#td_' + question_in_part + '_' + question_order_num).addClass('td_done');
                    }
                }else if (questionType == "short_answer_no_img" || questionType == "short_answer_img") {
                    if (answer) {
                        //将答案项写入文本区域
                        $('#question_' + questionId + ' textarea').html(answer);
                        //在试题列表中标出
                        $('#td_' +question_in_part+'_'+ question_order_num).addClass('td_done');
                    }
                }
            }
        }
    }
    
    autosize($('textarea'));
    
    //开启考试倒计时
    clock(username,resttime);
    //根据时间设置自动提交
    if(resttime) {
        setTimeout("show1();", (parseInt(resttime) - 5 * 60) * 1000);
        setTimeout("submit_paper_isAuto(1)", parseInt(resttime) * 1000); //设置自动提交时间
    }
    	
    //为每一个试题添加处理
    $('.questions').each(function(index){
        //获取试题类别
        var question_type=$('.question_type',$(this)).html();
        //获取试题编号
        var question_id=$('.question_id',$(this)).html();
        //获取试题所在part
        var question_in_part=$('.question_in_part',$(this)).html();
        //获取试题序号
        var order_num=$('.order_num',$(this)).html();
        var question_in_part=$('.question_in_part',$(this)).html();
        if(question_type=="single_choice_no_img"||question_type=="single_choice_img"){
            $('input[type="radio"]',$(this)).click(function(){
                //index从0开始
                $('#td_'+question_in_part+'_'+order_num).addClass('td_done');
                //将选中项存在本地
                localStorage[username+'#'+question_id] = $(this).val();
            });
        }else if(question_type=="multiple_choices_no_img"){
            $('input[type="checkbox"]', $(this)).click(function () {
                if ($('input[type="checkbox"]:checked', $(this).parent().parent()).size() > 0) {
                    
                    var answer=[];
                    $('input[type="checkbox"]:checked', $(this).parent().parent()).each(function () {
                        answer.push($(this).val());
                    });
                    //将选中项存在本地
                    localStorage[username + '#' + question_id] = answer;
                    ////console.log(localStorage[username + '#' + question_id]);
                    //index从0开始
                    $('#td_' + question_in_part + '_' + order_num).addClass('td_done');
                }else{
                    //将选中项存在本地
                    localStorage[username + '#' + question_id] = [];
                    $('#td_' + question_in_part + '_' + order_num).removeClass('td_done');
                }
                
            });
        }else if(question_type=="short_answer_no_img"||question_type=="short_answer_img"){
            $('textarea',$(this)).keyup(function(){
                if ($(this).val()!= "") {
                    //index从0开始
                    $('#td_' + question_in_part + '_' + order_num).addClass('td_done');
                }else{
                    $('#td_' + question_in_part + '_' + order_num).removeClass('td_done');
                }
                //将文本输入内容存在本地
                localStorage[username+'#'+question_id] = $(this).val();
            });
        }
    });
});
//判断考生是否在考或者已考
function student_status(username,examId){
    $.ajax({
                type: 'POST',
                url: '/student/exam/student_status',
                dataType: 'json',
                timeout: 5000,
                async: true,
                data: {
                    username: username
                },
                success: function (data) {
                    //console.log('考生状态：'+data.student_status);
                    /*if (data.student_status==1) {//当学生状态为在考时
                        $('#flash_message div').html('您已经在考试状态，请确认没在其他机器登录！');
                        $('#flash_message').fadeIn('slow');
                        setTimeout(
                        function () {
                            window.location.href='/student/logout';
                        },
                        1500
                        );
                    }else */
                    if (data.student_status==2) {//当学生状态为已考时
                        $('#flash_message div').html('您已经参加过该场考试！');
                        $('#flash_message').fadeIn('slow');
                        setTimeout(
                        function () {
                            window.location.href='/student/login/'+examId;
                        },
                        1500
                        );
                    }else {
                        //console.log("可以考试");
                    }
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    //console.log("error " + textStatus);
                    //console.log("网络或服务器异常！" + 'ERROR');
                }
            });
}
function show1(){
    $('#flash_message div').html('距离考试结束还有五分钟');
    //console.log('距离考试结束还有五分钟');
    $('#flash_message').fadeIn('slow');
    setTimeout("$('#flash_message').hide();", 1500);
}
//点击试题列表中到试题编号 跳转到相应的试题
function locate(part_orderId,question_orderId){
    var a='#q_'+part_orderId+'_'+question_orderId;
    window.location.href=a;
}

function clock(username , s) {
        s--;
        var hour = parseInt(s / 3600) >= 10 ? parseInt(s / 3600) : '0' + parseInt(s / 3600);
        var minute = parseInt(s / 60 % 60) >= 10 ? parseInt(s / 60 % 60) : '0' + parseInt(s / 60 % 60);
        var second = (s % 60) >= 10 ? (s % 60) : '0' + (s % 60);
        $('#time_infor_resttime').html("<span class='time_font'>剩余时间：  " + hour + ":" + minute + ":" + second + "</span>");
        localStorage[username+'_resttime'] = s;
        setTimeout('clock("'+username+'", '+s+')', 1000);
    }
    
//提交试卷
function submit_paper() {
        //获取用户名
        var username = $('#student_username').html();
        //console.log(username);
        //获取当前试卷编号
        var paperId = $('#paper_infor_paperId').html();
        //获取所有试题答案
        var answers = {}
        $('.questions').each(function () {
            var question_id = $('.question_id', $(this)).html();
            var question_type = $('.question_type', $(this)).html();
            if (question_type == 'short_answer_no_img' || question_type == 'short_answer_img') {
                answers[question_id] = $('#question_' + question_id + '_answer').val();
                ////console.log($('textarea', $(this)).html());
            }else if (question_type == 'multiple_choices_no_img') {
                var answer_temp = [];
                $('[name="question_' + question_id + '_option_checkbox"]:checked').each(function () {
                    answer_temp.push($(this).val());
                });
                answers[question_id]=answer_temp;
            }
            else if (question_type == 'single_choice_img' || question_type == 'single_choice_no_img') {
                answers[question_id] = $('[name="question_' + question_id + '_option_radio"]:checked').val();
                ;
            }
        });
        $.ajax({
            type: 'POST',
            url: '/student/exam/submit_paper',
            dataType: 'json',
            async: true,
            data: {
                username: username,
                paperId: paperId,
                answers: answers
            },
            success: function (data) {
                if (data.success) {
                    //console.log("提交成功！正在更新显示..." + data.success, 2000, 'TIP');
                    $('#flash_message div').html('问卷提交成功，感谢您的参与！');
                    $('#flash_message').fadeIn('slow');
                    setTimeout("$('#flash_message').hide();localStorage.clear();window.location.href = '/student/exam/examed';", 2000);
                    
                } else {
                    //console.log("提交失败!");
                    $('#flash_message div').html('问卷提交失败，请重新提交！');
                    $('#flash_message').fadeIn('slow');
                    setTimeout("$('#flash_message').hide();", 2000);
                }
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                //console.log("error " + textStatus);
                //console.log("网络或服务器异常！" + 'ERROR');
                $('#flash_message div').html('问卷提交失败，请重新提交！');
                $('#flash_message').fadeIn('slow');
                setTimeout("$('#flash_message').hide();", 2000);

            }
        });
}
//判断是否为自动提交试卷
function submit_paper_isAuto(isAuto) {
    if(isAuto){
        submit_paper();
    }else{
        var undo_questions=0;
        $('.questions').each(function(){
                var question_id = $('.question_id', $(this)).html();
                var question_type = $('.question_type', $(this)).html();
                if(question_type=='single_choice_no_img' || question_type=='single_choice_img'){
                    if(!$('[name="question_' + question_id + '_option_radio"]:checked').val()){
                        undo_questions++;
                    }
                }else if(question_type=='multiple_choices_no_img'){
                    if(!$('[name="question_' + question_id + '_option_checkbox"]:checked').val()){
                        undo_questions++;
                    }
                }
            });
        if (undo_questions > 0) {
            if (window.confirm('问卷未填完，请查看左侧列表核对') == true) {
                return false;
            }else{
                return false;
            }
        } else {
            if (window.confirm('提交确认，确认提交请点击确认！') == true) {
                submit_paper();
            }
        }
        
    }
    
}