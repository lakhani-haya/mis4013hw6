<h1>How Much Did Haya Like MIS Each Year of College (Scale of 0 to 10)?</h1>
<div>
  <!-- Canvas element for rendering the line chart -->
  <canvas id="myChart" style="width: 300px; height: 300px;"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  // Define the data for the line chart
  const data = {
    labels: ['Freshman', 'Sophomore', 'Junior', 'Senior'],  // Labels for each year
    datasets: [{
      label: 'MIS Rating',  // Label for the dataset
      data: [0, 8, 7, 5],   // Data points for each year (0-10 scale)
      borderColor: '#FF69B4',  // Pink color for the line
      fill: true,  // Do not fill the area under the line
      tension: 0.1,  // Makes the line smooth
    }],
  };

  // Get the context of the canvas element
  const ctx = document.getElementById('myChart').getContext('2d');

  // Create the line chart
  const myChart = new Chart(ctx, {
    type: 'line',  // Line chart type
    data: data,    // Pass the data to the chart
  });
</script>
