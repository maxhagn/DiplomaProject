    /**
 * Created by jakobdinhof on 21.09.17.
 */


$(document).ready(function () {

    $('#tabs').click(function (e) {
        e.preventDefault();
        $('#tabs').tab('show');
    });


    window.onload = function () {
        setTimeout(function () {
            if(window.location.pathname.endsWith("en/")){
                new Image().src = "../img/hagn.jpg";
                new Image().src = "../img/dinhof.jpg";
                new Image().src = "../img/kutis.jpg";
                new Image().src = "../img/lenz.jpg";
                new Image().src = "../img/schwingenschloegl.jpg";
            } else {
                new Image().src = "img/hagn.jpg";
                new Image().src = "img/dinhof.jpg";
                new Image().src = "img/kutis.jpg";
                new Image().src = "img/lenz.jpg";
                new Image().src = "img/schwingenschloegl.jpg";
            }
        }, 1000);
    }

    $('a.slide').click(function (e) {
        e.preventDefault();
        $('html,body').animate({scrollTop: $($(this).attr('href')).offset().top}, 'slow');
    });

});

String.prototype.endsWith = function (pattern) {
    var d = this.length - pattern.length;
    return d >= 0 && this.lastIndexOf(pattern) === d;
};

google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

    var data = google.visualization.arrayToDataTable([
        ['Task', 'Hours per Day'],
        ['Max Hagn',     205.22],
        ['Jakob Dinhof',      147.22],
        ['Fabian Lenz',  129.33],
        ['Flo Schwingenschlögl', 120.34],
        ['Michi Kutis',    66.16]
    ]);

    var options = {
        backgroundColor: '#F2F2F2'
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart'));

    chart.draw(data, options);

        $('.scrollspy').scrollSpy();

}

$(window).resize(function () {
    drawChart();
});