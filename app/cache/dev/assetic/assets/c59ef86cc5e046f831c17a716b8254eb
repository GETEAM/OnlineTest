$(function(){
    //防止用户后退
    window.history.forward(1); 
    //隐藏flash_message
    //$('#flash_message').hide();
    //将开始考试变为灰色
    //$('#start_exam').css({backgroundColor: '#AAA'});
    //学生用户名
    var username=$('#student_username').html();
    //console.log(username);
    //获取试卷编号
    var examId=$('#exam_infor_examId').html();
    //获取是否实名
    var isRealname=$('#exam_infor_isrealname').html();
    //实名考试时 验证考生状态
    //if(isRealname=='realname'){
        //判断学生状态
      //  student_status(username,examId);
    //}
    
    
    //判断使用哪一张试卷
    which_paper(examId,isRealname,username);

    //判断考试是否已经开始
    /*setTimeout(
        function(){
            paper_status(paperId,isRealname,username);
        },
        5000
    );*/
    //该方法也可以，执行结束后可以停止活动
    //setInterval('isStart('+paperId+',"'+isRealname+'")',1000);
});
//判断考生是否在考或者已考
function student_status(username, examId){
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
                        //console.log('daf');
                        //window.location.href='/student/login/'+examId;
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

//判断使用哪一张试卷
 function which_paper(examId,isRealname,username){
    $.ajax({
                type: 'POST',
                url: '/student/exam/which_paper',
                dataType: 'json',
                timeout: 5000,
                async: true,
                data: {
                    examId: examId,
                    username: username
                },
                success: function (data) {
                    //console.log(data.hasAvailablePaper);
                    if (data.hasAvailablePaper==1) {//当考试开始入场时
                        $('#start_exam').attr('href', "/student/exam/" + isRealname + "/" + data.paperId+"?username="+username);
                        //location.href="/student/exam/" + isRealname + "/" + data.paperId+"?username="+username;
                    }else if (data.hasAvailablePaper==-1) {
                        $('#flash_message div').html('已用试卷不可用，重新调用新试卷!').parent().fadeIn('slow');
                        //设置flash message 显示时间
                        setTimeout(
                            function () {
                                $('#flash_message').fadeOut('slow');
                            },
                            1000
                        );
                        $('#start_exam').attr('href', "#");
                        //console.log("已用试卷不可用，重新调用新试卷!");
                    }else if (data.hasAvailablePaper==0){
                        $('#flash_message div').html('没有可以使用的试卷！').parent().fadeIn('slow');
                        //设置flash message 显示时间
                        setTimeout(
                            function () {
                                $('#flash_message').fadeOut('slow');
                            },
                            1000
                        );
                        $('#start_exam').attr('href', "#");
                        //console.log("没有可以使用的试卷!");
                    }
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    //console.log("error " + textStatus);
                    //console.log("网络或服务器异常！" + 'ERROR');
                }
            });
}
/*取消判断
//判断试卷是否开始
 function paperId(paperId,isRealname,username){
    $.ajax({
                type: 'POST',
                url: '/student/exam/paperId',
                dataType: 'json',
                timeout: 5000,
                async: true,
                data: {
                    paperId: paperId
                },
                success: function (data) {
                    //console.log(data.paper_status);
                    if (data.paper_status==2) {//当考试开始入场时
                        //console.log("考试开始!");
                        $('#start_exam').attr('href', "/student/exam/" + isRealname + "/" + paperId+"?username="+username);
                        //将开始考试变为绿色
                        $('#start_exam').css({backgroundColor: '#31ae86'});
                        setTimeout(
                            function () {
                                paper_status(paperId, isRealname,username);
                            },
                            1000
                        );
                    }else if (data.paper_status==3) {//当考试停止入场时
                        $('#start_exam').attr('href', "#");
                        //将开始考试变为绿色
                        $('#start_exam').css({backgroundColor: '#AAA'});
                        //console.log("考试已结束!");
                    }else {
                        //console.log("考试未开始!");
                        setTimeout(
                            function () {
                                paper_status(paperId, isRealname,username);
                            },
                            1000
                        );
                    }
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    //console.log("error " + textStatus);
                    //console.log("网络或服务器异常！" + 'ERROR');
                }
            });
}*/
