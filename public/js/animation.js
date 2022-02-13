$(document).ready(function() {
    $(window).scroll(function() {
        // sticky navbar on scroll
        if (this.scrollY > 20) {
            $('.navbar').addClass("sticky");
        } else {
            $('.navbar').removeClass("sticky");
        }
    });
});

// Dashboard Chart used from google charts, with custom settings, only the model is taken//

google.charts.load('current', {
    'packages': ['corechart']
});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
    var data = google.visualization.arrayToDataTable([
        ['Month', 'Credits', 'NBSA boundary'],
        ['Sep', 0, 45],
        ['Oct', 2.5, 45],
        ['Nov', 12.5, 45],
        ['Dec', 12.5, 45],
        ['Jan', 12.5, 45],
        ['Feb', 23.75, 45],
        ['March', 23.75, 45],
        ['April', 23.75, 45],
        ['May', 23.75, 45],
        ['June', 23.75, 45],
        ['Juli', 23.75, 45],
    ]);

    var options = {
        title: 'The Study Monitor of Teodor Ivanov',
        legend: {
            position: 'bottom'
        }
    };

    var chart = new google.visualization.LineChart(document.getElementById('curvechart'));

    chart.draw(data, options);
}
