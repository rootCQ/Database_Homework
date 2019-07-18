
/**
 * Created by LLT on 2019/7/18.
 */
$('#myModal').on('shown.bs.modal',function(){
    var myChart=echarts.init(document.getElementById('chart1'));
    console.log(myChart);
    // alert();
    // myChart.resize();
});
