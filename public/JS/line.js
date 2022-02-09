var ctx = document.getElementById("lineChart");

var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        indexLabelPlacement: "inside",
        labels: [
            "2em années"
        ],
        datasets: [{
            label: "Maquetter une application",
            data: [100],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)'
            ],
            borderWidth: 1
        },{
            label: "Développer une interface de type desktop",
            data: [90],
            backgroundColor: [
                'rgba(54, 162, 235, 0.2)',
            ],
            borderColor: [
                'rgba(54, 162, 235, 1)'
            ],
            borderWidth: 1
        },{
            label: "Développer des composants d'accès aux données",
            data: [70],
            backgroundColor: [
                'rgba(255, 206, 86, 0.2)'
            ],
            borderColor: [
                'rgba(255, 206, 86, 1)'
            ],
            borderWidth: 1
        },{
            label: "Développer la partie front-end d'un web",
            data: [50],
            backgroundColor: [
                'rgba(75, 192, 192, 0.2)'
            ],
            borderColor: [
                'rgba(75, 192, 192, 1)'
            ],
            borderWidth: 1
        },{
            label: "Développer la partie back-end d'un web",
            data: [10],
            backgroundColor: [
                'rgba(153, 102, 255, 0.2)'
            ],
            borderColor: [
                'rgba(153, 102, 255, 1)'
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
