//在jq中使用$(document).ready()时，位于其中的代码都会在DOM加载后立即执行
$(document).ready(function(){
    //使用子元素组合符(>)将css为“.horizontal”的样式只添加到位于顶级的项中。
    //实际上，位于$()函数中的选择符的含义是，查找ID为selected-plays的元素（#selected-plays）的子元素（>）中所有的列表项（li）。
    $('#selected-plays > li') .addClass('horizontal');
    //取得除horizontal类（：not(.horizontal)）外。为这些列表添加css名为sub-level的样式
    $('#selected-plays li:not(.horizontal)').addClass('sub-level');
    //寻找所有带href属性（[href]）且以mailto开头（^="mailto:"]）的锚元素（a）。
    $('a[href^="mailto:"]') .addClass('mailto');
    //为以.pdf结尾的href属性添加名为pdflink的css样式。
    $('a[href$=".pdf"]') .addClass('pdflink');
    //属性选择符组合使用，给href属性以http开头且任意位置包含henry的所有链接添加一个henrylink类。
    $('a[href^="http"][href*="henry"]') .addClass('henrylink');

    $('tr:even') .addClass('alt');
    //给位于嵌套列表第二个乘此的所有li元素添加special类
    $('#selected-plays > li > ul > li') .addClass('special');

    //$('td:eq(2)').addClass('year');
    console.log($('table>tr'));
    //给位于表格第三列的所有单元格添加year类；(方法一)
    $('table tr').each(function(){
        $(this).children('td:eq(2)').addClass('year');
    });
    //给位于表格第三列的所有单元格添加year类；(方法二)
    $('td:nth-child(3)').addClass('year');
    //为表格中包含文本Tragedy的第一行添加special类；
    $('tr:contains(Tragedy)').filter('tr:eq(0)').addClass('special');

});
