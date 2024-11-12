<h1>Haya's Weekly Time Distribution</h1>
<div>
  <!-- Canvas element for rendering the doughnut chart -->
  <canvas id="myDoughnutChart" style="width: 300px; height: 300px;"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const data = {
    labels: ['Studying', 'Working', 'Sleeping', 'Talking to Roommate/Bestfriend'],
    datasets: [{
      data: [10, 10, 20, 60],  // Time distribution in percentages
      backgroundColor: ['#FFB6C1', '#FF69B4', '#FF1493', '#FF77FF'],  // Shades of pink for each segment
    }],
  };

  const ctx = document.getElementById('myDoughnutChart').getContext('2d');

  new Chart(ctx, {
    type: 'doughnut',  // Doughnut chart type
    data: data,        // Pass the data to the chart
  });
</script>
