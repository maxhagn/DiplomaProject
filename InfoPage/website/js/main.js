var _____WB$wombat$assign$function_____ = function (name) {
    return (self._wb_wombat && self._wb_wombat.local_init && self._wb_wombat.local_init(name)) || self[name];
};
if (!self.__WB_pmw) {
    self.__WB_pmw = function (obj) {
        this.__WB_source = obj;
        return this;
    }
}
{
    let window = _____WB$wombat$assign$function_____("window");
    let self = _____WB$wombat$assign$function_____("self");
    let document = _____WB$wombat$assign$function_____("document");
    let location = _____WB$wombat$assign$function_____("location");
    let top = _____WB$wombat$assign$function_____("top");
    let parent = _____WB$wombat$assign$function_____("parent");
    let frames = _____WB$wombat$assign$function_____("frames");
    let opener = _____WB$wombat$assign$function_____("opener");

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
                if (window.location.pathname.endsWith("en/")) {
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

    google.charts.load('current', {'packages': ['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        var data = google.visualization.arrayToDataTable([
            ['Task', 'Hours per Day'],
            ['Max Hagn', 305.09],
            ['Jakob Dinhof', 319.22],
            ['Fabian Lenz', 245.44],
            ['Flo Schwingenschl√∂gl', 255.55],
            ['Michi Kutis', 83.24]

        ]);

        var options = {
            backgroundColor: '#F2F2F2'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
    }

    $(window).resize(function () {
        drawChart();
    });


}
/*
     FILE ARCHIVED ON 04:57:11 Aug 24, 2018 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 19:28:37 Apr 08, 2022.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
*/
/*
playback timings (ms):
  captures_list: 63.715
  exclusion.robots: 0.089
  exclusion.robots.policy: 0.08
  RedisCDXSource: 0.691
  esindex: 0.008
  LoadShardBlock: 43.544 (3)
  PetaboxLoader3.datanode: 61.909 (4)
  CDXLines.iter: 17.122 (3)
  load_resource: 200.809
  PetaboxLoader3.resolve: 168.958
*/
