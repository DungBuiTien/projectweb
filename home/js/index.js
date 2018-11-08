// menu đẩy
$(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });
});



// biểu đồ đường
function LineChart(){
    var ctxL = document.getElementById("lineChart").getContext('2d');
    var myLineChart = new Chart(ctxL, {
        type: 'line',
        data: {
            labels: ["2011", "2012", "2013", "2014", "2015", "2016", "2017","2018"],
            datasets: [{
                label: "Tỉ lệ cựu sinh viên tốt nghiệp có việc liên quan đến ngành học (%)",
                data: [65, 59, 71, 74, 68, 72, 80, 86],
                backgroundColor: [
                    'rgba(105, 0, 132, .0)',
                ],
                borderColor: [
                    'rgb(250, 3, 14)',
                ],
                borderWidth: 2
            }
            ]
        },
        options: {
            responsive: true,
            scales: {
                yAxes: [{
                    stacked: true
                }]
            }
        }
    });
}

// biểu đồ cột
function BarChart(){
    var ctxB = document.getElementById("barChart").getContext('2d');
    var myBarChart = new Chart(ctxB, {
        type: 'bar',
        data: {
            labels: ["2011", "2012", "2013", "2014", "2015", "2016","2017"],
            datasets: [{
                label: 'Trung bình lương qua các năm(đơn vị :triệu đồng)',
                data: [10, 16, 18, 20, 35, 31,45],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(125, 148, 45, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(125, 148, 45, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    stacked: true,
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
}
// biểu đồ tròn
function PieChart(a,b,c,d){
    var ctxC = document.getElementById("pieChart").getContext('2d');
    var myPieChart = new Chart(ctxC,{
        type: 'pie',
        data : {
            datasets: [{
                label: 'Tỷ lệ lương',
                data: [a, b, c,d],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(125, 148, 45, 0.2)'
                ],
                borderColor: [
                   'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(125, 148, 45, 1)'
                ],
            }],

            // These labels appear in the legend and in the tooltips when hovering different arcs
            labels: ['5-10', '10-20','20-50','>50']
        }
    });
}
//biểu đồ tròn
function PieChart2(a,b,c,d){
    var ctxC = document.getElementById("pieChart2").getContext('2d');
    var myPieChart = new Chart(ctxC,{
        type: 'pie',
        data : {
            datasets: [{
                label: 'Tỷ lệ lương',
                data: [a, b, c,d],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(125, 148, 45, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(125, 148, 45, 1)'
                ],
            }],
            options: {
                responsive: true,
                scales: {
                    yAxes: [{
                        stacked: true
                    }]
                },
                
                animation: {
                    onProgress: function(animation) {
                        animation.animateScale=true,
                        progress.value = animation.animationObject.currentStep / animation.animationObject.numSteps;
                    }
                }
            },
        
            // These labels appear in the legend and in the tooltips when hovering different arcs
            labels: ['5-10', '10-20','20-50','>50']
        }
    });
}
