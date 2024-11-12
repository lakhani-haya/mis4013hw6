<h1>How Many Cities Has Haya Visited in Each Continent?</h1>
<div>
  <!-- Canvas element for rendering the bar chart -->
  <canvas id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  // Define the data for the bar chart
  const data = {
    labels: ['North America', 'Europe', 'Asia'],  // Continent labels
    datasets: [{
      label: 'Cities Visited',  // Label for the bar chart
      data: [12, 5, 6],  // Number of cities visited in each continent
      backgroundColor: ['#98FF98', '#B3D9FF', '#D3D3D3'],  // Pastel colors for the bars
      borderColor: ['#76C076', '#A3C8E3', '#A0A0A0'],  // Slightly darker border color
      borderWidth: 1,  // Width of the border around the bars
    }],
  };

  // Get the context of the canvas element
  const ctx = document.getElementById('myChart').getContext('2d');

  // Create the bar chart
  const myChart = new Chart(ctx, {
    type: 'bar',  // Bar chart type
    data: data,   // Pass the data to the chart
    options: {
      responsive: true,  // Make the chart responsive to window size
      scales: {
        y: {
          beginAtZero: true,  // Start the Y-axis at zero
        },
      },
    },
  });
</script>
