<!DOCTYPE html>
<html>
<head>
    <title>Daily Video Views</title>
    <!-- Add Chart.js library -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <canvas id="viewsChart" width="800" height="400"></canvas>

    <script>
        // Simulated data (replace this with your PHP to retrieve actual data)
const viewsData = {
    labels: ["2023-10-01", "2023-10-02", "2023-10-03", "2023-10-04", "2023-10-05", "2023-10-06"],
    values: [120, 180, 200, 150, 220, 190] // Replace with your actual views per day
};

// Use the Chart.js library to create the line chart
const ctx = document.getElementById('viewsChart').getContext('2d');

const viewsChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: viewsData.labels,
        datasets: [{
            label: 'Daily Video Views',
            data: viewsData.values,
            fill: false,
            borderColor: 'blue',
            tension: 0.4
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

        // Your JavaScript code to create the chart will go here
    </script>
</body>
</html>
