<h1>Haya's Weekly Time Distribution</h1>
<div>
  <!-- Canvas element for rendering the doughnut chart -->
  <canvas id="myDoughnutChart" style="width: 300px; height: 300px;"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  // Define the data for the doughnut chart
  const data = {
    labels: ['Studying', 'Working', 'Sleeping', 'Talking to Roommate/Bestfriend'],  // Categories
    datasets: [{
      data: [10, 10, 20, 60],  // Percentage of time spent on each activity
      backgroundColor: ['#FFB6C1', '#FF69B4', '#FF1493', '#FF77FF'],  // Shades of pink for each segment
    }],
  };

  // Get the context of the canvas element
  const ctx = document.getElementById('myDoughnutChart').getContext('2d');

  // Create the doughnut chart
  new Chart(ctx, {
    type: 'doughnut',  // Doughnut chart type
    data: data,        // Pass the data to the chart
  });
</script>

