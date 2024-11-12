<h1>Do People Like Haya?</h1>
<div>
  <canvas id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  // Define the data for the pie chart
  const data = {
    datasets: [{
        data: [2, 10],  // The data values for the chart
        backgroundColor: ['#FF0000', '#00FF00'],  // Colors for each segment
    }],
    labels: ['No', 'Not at all'],  // Labels for the segments
  };

  // Get the canvas element where the chart will be rendered
  const ctx = document.getElementById('myChart').getContext('2d');

  // Create the chart
  const myChart = new Chart(ctx, {
    type: 'pie',  // Specify the chart type (pie chart)
    data: data,   // Pass the data to the chart
    options: {
      responsive: true,  // Make the chart responsive to window size
      plugins: {
        legend: {
          position: 'top',  // Position of the legend
        },
      },
    },
  });
</script>
