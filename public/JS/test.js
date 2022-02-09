var ctx = document.getElementById("lineChart");

var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        indexLabelPlacement: "inside",
        labels: [
            "1er années"
        ],
        datasets: [{
            label: "Maquetter une application",
            data: [100, 70, 50, 25, 5, 3],
            backgroundColor: [
                'rgba(255, 206, 86, 0.2)',
            ],
            borderColor: [
                'rgba(255, 206, 86, 1)',
            ],
            borderWidth: 1
        },{
            label: "Développer une interface de type desktop",
            data: [100, 70, 50, 25, 5, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
            ],
            borderColor: [
                'rgba(255,99,132,1)',
            ],
            borderWidth: 1
        }
    ]
    },
    options: {
        indexAxis: 'y',
        
        
    }
});
