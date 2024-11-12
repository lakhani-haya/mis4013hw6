<h1>How Many Cities Has Haya Visited in Each Continent?</h1>
<div>
  <canvas id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const data = {
    labels: ['North America', 'Europe', 'Asia'], 
    datasets: [{
      label: 'Cities Visited',  
      data: [12, 5, 6], 
      backgroundColor: ['#98FF98', '#B3D9FF', '#D3D3D3'],  
    }],
  };

  const ctx = document.getElementById('myChart').getContext('2d');


  const myChart = new Chart(ctx, {
    type: 'bar',
    data: data,  
    options: {
      responsive: true,  
      scales: {
        y: {
          beginAtZero: true, 
        },
      },
    },
  });
</script>
