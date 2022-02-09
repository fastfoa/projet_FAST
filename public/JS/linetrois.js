
var ctx = document.getElementById("lineCharttrois");

var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [
            "3em année"
        ],
        datasets: [{
            label: 'Collaborer à la gestion d’un projet informatique',
            data: [100],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)'
            ],
            borderWidth: 1
        },{
            label: 'et Organiser l’environnement de développement',
            data: [70],
            backgroundColor: [
                'rgba(54, 162, 235, 0.2)'
            ],
            borderColor: [
                'rgba(54, 162, 235, 1)'
            ],
            borderWidth: 1
        },{
            label: 'Concevoir une application',
            data: [50],
            backgroundColor: [
                'rgba(255, 206, 86, 0.2)'
            ],
            borderColor: [
                'rgba(255, 206, 86, 1)'
            ],
            borderWidth: 1
        },{
            label: 'Développer des composants métier',
            data: [35],
            backgroundColor: [
                'rgba(75, 192, 192, 1)'
            ],
            borderColor: [
                'rgba(75, 192, 192, 1)'
            ],
            borderWidth: 1
        },{
            label: 'Construire une application organisée en couches',
            data: [30],
            backgroundColor: [
                'rgba(75, 192, 192, 0.2)'
            ],
            borderColor: [
                'rgba(75, 192, 192, 0.2)'
            ],
            borderWidth: 1
        },{
            label: 'Développer des composants métier',
            data: [20],
            backgroundColor: [
                'rgba(75, 192, 192, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)'
            ],
            borderColor: [
                'rgba(75, 192, 192, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 1)'
            ],
            borderWidth: 1
        },{
            label: 'Développer une application mobile',
            data: [15],
            backgroundColor: [
                'rgba(75, 192, 192, 0.2)'
            ],
            borderColor: [
                'rgba(75, 192, 192, 0.2)'
            ],
            borderWidth: 1
        },{
            label: 'Préparer et exécuter les plans de  tests d’une app',
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