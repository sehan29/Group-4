const labels = [
    '0 - 10',
    '10 - 20',
    '20 - 30',
    '40 - 50',
    '50 - 60',
    '60 - 70',
    '70 - 80',
    '80 - 90',
    '90 - 100',
   ];
   
   
   const data = {
    labels: labels,
    datasets: [{
        label: 'My First Dataset',
        backgroundColor: 'rgb(38, 75, 110)',
        borderColor: 'rgb(84, 118, 150)',
        data: [65, 75, 80, 55, 66, 70, 45,55, 66, 70],
    }]
   };
   
   const config = {
    type: 'bar',
    data,
    options: {
   
        plugins: {
            legend: {
                display:false
            }
        }
    }
   };
   
   
   var myChart = new Chart(
    document.getElementById('myChart'),
    config
   )
   
   
   myChart.canvas.parentNode.style.height = '500px';
   myChart.canvas.parentNode.style.width = '980px';
   
   
   