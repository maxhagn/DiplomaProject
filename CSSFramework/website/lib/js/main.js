$(document).ready(function () {

    $('#tabs').click(function (e) {
        e.preventDefault();
        $('#tabs').tab('show');
    });

    $('a.slide').click(function (e) {
        e.preventDefault();
        $('html,body').animate({scrollTop: $($(this).attr('href')).offset().top}, 'slow');
    });

});

String.prototype.endsWith = function (pattern) {
    var d = this.length - pattern.length;
    return d >= 0 && this.lastIndexOf(pattern) === d;
};
