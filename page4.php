<h1>Haya's Weekly Time Distribution (%)</h1>
<div>
   <canvas id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const data = {
    labels: ['Studying', 'Working', 'Sleeping', 'Talking to Roommate/Bestfriend'],
    datasets: [{
      data: [10, 10, 20, 60],  
      backgroundColor: ['#FFB6C1', '#FF69B4', '#FF1493', '#FF77FF'], 
    }],
  };

  const ctx = document.getElementById('myDoughnutChart').getContext('2d');

  new Chart(ctx, {
    type: 'doughnut',
    data: data,
  });
</script>
