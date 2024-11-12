<h1>Do People Like Haya?</h1>
<p>(they are all liars)</p>
<div>
<canvas id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
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
      responsive: true, 
    },
  });
</script>
