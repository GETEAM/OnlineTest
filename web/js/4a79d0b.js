//管理员菜单部分的时间显示
var initializationTime=(new Date()).getTime();
function showLeftTime()
{

var now=new Date();
var year=now.getFullYear();
var month=now.getMonth();
var day=now.getDate();
var week=new Array("周日", "周一", "周二", "周三", "周四", "周五", "周六")[now.getDay()];
document.all.welcome_date.innerHTML=""+year+"-"+(month+1)+"-"+day+"  "+week;
//一秒刷新一次显示时间
var timeID=setTimeout(showLeftTime,1000);
}



//实现全选或全部不选
function isCheckAll(ischecked){
    var checkOnes=document.getElementsByName("checkOne");
    for (var i=0; i<checkOnes.length; i++){
            if(checkOnes[i].type=="checkbox"){
                checkOnes[i].checked=ischecked;
            }
    }     
}

//获取多选框的选中的内容
function selectedValues(){
    var checkedValues = {};
    var count = 0;
    var checkOnes = document.getElementsByName("checkOne");
    for (var i = 0; i < checkOnes.length; i++) {
        if (checkOnes[i].type == "checkbox") {
            if (checkOnes[i].checked) {
                var val = checkOnes[i].value
                checkedValues[val] = val;
                count++;
            }
        }
    }
    return checkedValues;
}
//获取试题图片id 
function get_images_ids() {
    var question_images_ids = {};
    $('#single_choice_img fieldset input[type="file"]').each(function (i, item) {
        question_images_ids[$(this).attr('id')] = $(this).attr('id');
    });
    return question_images_ids;
}