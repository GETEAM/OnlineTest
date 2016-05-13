$(function () {
    //使表格变成可排序
    $('#resultlist').tablesorter({
        theme: 'blue',
        widgets: ['zebra', 'columns'],
        usNumberFormat: false,
        sortReset: true,
        sortRestart: true,
        sortList: [[0, 0], [1, 0]],
        headers: {
            5: {sorter: false}
        }
    });
    //考试名词下拉框改变时删除提示语
    $('#form_examName').change(function(){
        $('[value=""]',$(this)).remove();
    })
   
});