var ctx = document.getElementById("sampleChart");

var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ["Janvier", "Fevrier", "Mars", "Avril", "Mai", "Juin","Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Decembre"],
        datasets: [{
            label: 'front-end',
            data: [0, 12, 19, 30, 50, 70, 90, 90, 100, 100, 100, 100],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)'
            ],
            borderWidth: 1
        },{
            label: 'back-end',
            data: [0, 0, 10, 25, 50, 60, 60, 70, 75, 80, 90, 100],
            backgroundColor: [
                'rgba(55, 99, 132, 0.2)'
            ],
            borderColor: [
                'rgba(55,99,132,1)'
            ],
            borderWidth: 1
        },{
            label: 'base de donnée',
            data: [0, 0, 0, 10, 25, 70, 80, 80, 95, 95, 100, 100],
            backgroundColor: [
                'rgba(155, 99, 132, 0.2)'
            ],
            borderColor: [
                'rgba(155,99,132,1)'
            ],
            borderWidth: 1
        },{
            label: 'mobile',
            data: [0, 0, 0, 0, 0, 0, 0, 25, 50, 75, 100, 100],
            backgroundColor: [
                'rgba(155, 99, 132, 0.2)'
            ],
            borderColor: [
                'rgba(155,99,132,1)'
            ],
            borderWidth: 1
        },{
            label: 'sécurité',
            data: [0, 0, 0, 0, 0, 0, 0, 0, 25, 50, 90, 100],
            backgroundColor: [
                'rgba(205, 99, 132, 0.2)'
            ],
            borderColor: [
                'rgba(205,99,132,1)'
            ],
            borderWidth: 1
        },{
            label: 'relationnel',
            data: [10, 25, 50, 100, 100, 100, 100, 100, 100, 100, 100, 100],
            backgroundColor: [
                'rgba(105, 99, 132, 0.2)'
            ],
            borderColor: [
                'rgba(105,99,132,1)'
            ],
            borderWidth: 1
        }]
        
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});