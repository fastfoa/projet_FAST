var ctx = document.getElementById("lineChartDeux");

var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        indexLabelPlacement: "inside",
        labels: [
            "2/3em année"
            , ""
            , ""],
        datasets: [{
            label: 'Concevoir une BDD',
            data: [100],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)'
            ],
            borderWidth: 1
        },{
            label: 'Mettre en place une BDD',
            data: [70],
            backgroundColor: [
                'rgba(54, 162, 235, 0.2)'
            ],
            borderColor: [
                'rgba(54, 162, 235, 1)'
            ],
            borderWidth: 1
        },{
            label: "Développer des vues d'une BDD",
            data: [30],
            backgroundColor: [
                'rgba(255, 206, 86, 0.2)'
            ],
            borderColor: [
                'rgba(255, 206, 86, 1)'
            ],
            borderWidth: 1
        }
    ]
    },
    options: {
        indexAxis: 'y',
        scales: {
            yAxes: [{
                display: true,
                ticks: {
                    suggestedMin: 0,    // minimum will be 0, unless there is a lower value.
                    // OR //
                    beginAtZero: true   // minimum value will be 0.
                }
            }]
        }
    }
});
