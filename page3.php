<h1>How Much Did Haya Like MIS Each Year of College (Scale of 0 to 10)?</h1>
<div>
   <canvas id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const data = {
    labels: ['Freshman', 'Sophomore', 'Junior', 'Senior'],  
    datasets: [{
      label: 'MIS Rating',  
      data: [0, 8, 7, 5],   
      borderColor: '#FF69B4',  
      fill: true,  
    }],
  };

  const ctx = document.getElementById('myChart').getContext('2d');

  const myChart = new Chart(ctx, {
    type: 'line',  
    data: data,   
  });
</script>
