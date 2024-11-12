<h1>Do People Like Haya?</h1>
<div>
<canvas id="myChart" style="width: 300px; height: 300px;"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  // Define the data for the pie chart
  const data = {
    datasets: [{
        data: [2, 10],  
        backgroundColor: ['#ffb4b4', '#cf3476'],  
    }],
    labels: ['No', 'Not at all'],  
  };

  
  const ctx = document.getElementById('myChart').getContext('2d');

 
  const myChart = new Chart(ctx, {
    type: 'pie',  
    data: data,   
    options: {
      plugins: {
  
      },
    },
  });
</script>
