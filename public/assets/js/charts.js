function loadCharts(){
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(chart_1);
    $('#chart_1').empty();
    function chart_1() {
        var data = new google.visualization.DataTable();

        var data = google.visualization.arrayToDataTable([
            ['Data', 'Inscritos', 'Tips', 'Post', 'Indicações', 'Live'],
            ['01 de Fevereiro 09:00h', 1000, 400, 765, 679, 529],
            ['16 de Fevereiro 21:00h', 1170, 460, 845, 846, 861],
            ['2001 de Março 20:00h15', 660, 1120, 910, 1090, 469],
        ]);

        var options = {
            title: '',
            curveType: 'function',
            lineWidth: 2,
            intervals: { 'style':'line' },
            legend: 'none',
            backgroundColor: '#efefef',
            chartArea: {
                width:'100%',
                height:'85%',
                left:0
            },
            vAxis: {
                gridlines: {
                    color: 'transparent'
                }
            },
            series: {
                0: { color: '#12E520' },
                1: { color: '#C00372' },
                2: { color: '#1219E5' },
                3: { color: '#E5A612' },
                4: { color: '#E51219' }
            },
            hAxis: {
                textStyle:{
                    color: '#C00372',
                    fontName: 'Montserrat'
                }            
            }
        };

        var chart_lines = new google.visualization.LineChart(document.getElementById('chart_1'));
        chart_lines.draw(data, options);
    }

    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(chart_2);
    $('#chart_2').empty();
    function chart_2() {
        var data = new google.visualization.DataTable();

        var data = google.visualization.arrayToDataTable([
            ['Data', 'Inscritos', 'Tips', 'Post', 'Indicações', 'Live'],
            ['01 de Fevereiro 09:00h', 1000, 400, 765, 679, 529],
            ['16 de Fevereiro 21:00h', 1170, 460, 845, 846, 861],
            ['2001 de Março 20:00h15', 660, 1120, 910, 1090, 469],
        ]);

        var options = {
            title: '',
            curveType: 'function',
            lineWidth: 2,
            intervals: { 'style':'line' },
            legend: 'none',
            backgroundColor: '#efefef',
            chartArea: {
                width:'100%',
                height:'85%',
                left:0
            },
            vAxis: {
                gridlines: {
                    color: 'transparent'
                }
            },
            series: {
                0: { color: '#12E520' },
                1: { color: '#C00372' },
                2: { color: '#1219E5' },
                3: { color: '#E5A612' },
                4: { color: '#E51219' }
            },
            hAxis: {
                textStyle:{
                    color: '#C00372',
                    fontName: 'Montserrat'
                }                    
            }
        };

        var chart_lines = new google.visualization.LineChart(document.getElementById('chart_2'));
        chart_lines.draw(data, options);
    }

    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(chart_3);
    $('#chart_3').empty();
    function chart_3() {
        var data = new google.visualization.DataTable();

        var data = google.visualization.arrayToDataTable([
            ['Data', 'Inscritos', 'Tips', 'Post', 'Indicações', 'Live'],
            ['01 de Fevereiro 09:00h', 1000, 400, 765, 679, 529],
            ['16 de Fevereiro 21:00h', 1170, 460, 845, 846, 861],
            ['2001 de Março 20:00h15', 660, 1120, 910, 1090, 469],
        ]);

        var options = {
            title: '',
            curveType: 'function',
            lineWidth: 2,
            intervals: { 'style':'line' },
            legend: 'none',
            backgroundColor: '#efefef',
            chartArea: {
                width:'100%',
                height:'85%',
                left:0
            },
            vAxis: {
                gridlines: {
                    color: 'transparent'
                }
            },
            series: {
                0: { color: '#12E520' },
                1: { color: '#C00372' },
                2: { color: '#1219E5' },
                3: { color: '#E5A612' },
                4: { color: '#E51219' }
            },
            hAxis: {
                textStyle:{
                    color: '#C00372',
                    fontName: 'Montserrat'
                }                    
            }
        };

        var chart_lines = new google.visualization.LineChart(document.getElementById('chart_3'));
        chart_lines.draw(data, options);
    }

    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(chart_4);
    $('#chart_4').empty();
    function chart_4() {
        var data = new google.visualization.DataTable();

        var data = google.visualization.arrayToDataTable([
            ['Data', 'Inscritos', 'Tips', 'Post', 'Indicações', 'Live'],
            ['01 de Fevereiro 09:00h', 1000, 400, 765, 679, 529],
            ['16 de Fevereiro 21:00h', 1170, 460, 845, 846, 861],
            ['2001 de Março 20:00h15', 660, 1120, 910, 1090, 469],
        ]);

        var options = {
            title: '',
            curveType: 'function',
            lineWidth: 2,
            intervals: { 'style':'line' },
            legend: 'none',
            backgroundColor: '#efefef',
            chartArea: {
                width:'100%',
                height:'85%',
                left:0
            },
            vAxis: {
                gridlines: {
                    color: 'transparent'
                }
            },
            series: {
                0: { color: '#12E520' },
                1: { color: '#C00372' },
                2: { color: '#1219E5' },
                3: { color: '#E5A612' },
                4: { color: '#E51219' }
            },
            hAxis: {
                textStyle:{
                    color: '#C00372',
                    fontName: 'Montserrat'
                }                    
            }
        };

        var chart_lines = new google.visualization.LineChart(document.getElementById('chart_4'));
        chart_lines.draw(data, options);
    }

    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(chart_5);
    $('#chart_5').empty();
    function chart_5() {
        var data = new google.visualization.DataTable();

        var data = google.visualization.arrayToDataTable([
            ['Data', 'Inscritos', 'Tips', 'Post', 'Indicações', 'Live'],
            ['01 de Fevereiro 09:00h', 1000, 400, 765, 679, 529],
            ['16 de Fevereiro 21:00h', 1170, 460, 845, 846, 861],
            ['2001 de Março 20:00h15', 660, 1120, 910, 1090, 469],
        ]);

        var options = {
            title: '',
            curveType: 'function',
            lineWidth: 2,
            intervals: { 'style':'line' },
            legend: 'none',
            backgroundColor: '#efefef',
            chartArea: {
                width:'100%',
                height:'85%',
                left:0
            },
            vAxis: {
                gridlines: {
                    color: 'transparent'
                }
            },
            series: {
                0: { color: '#12E520' },
                1: { color: '#C00372' },
                2: { color: '#1219E5' },
                3: { color: '#E5A612' },
                4: { color: '#E51219' }
            },
            hAxis: {
                textStyle:{
                    color: '#C00372',
                    fontName: 'Montserrat'
                }                    
            }
        };

        var chart_lines = new google.visualization.LineChart(document.getElementById('chart_5'));
        chart_lines.draw(data, options);
    }

    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(chart_6);
    $('#chart_6').empty();
    function chart_6() {
        var data = new google.visualization.DataTable();

        var data = google.visualization.arrayToDataTable([
            ['Data', 'Inscritos', 'Tips', 'Post', 'Indicações', 'Live'],
            ['01 de Fevereiro 09:00h', 1000, 400, 765, 679, 529],
            ['16 de Fevereiro 21:00h', 1170, 460, 845, 846, 861],
            ['2001 de Março 20:00h15', 660, 1120, 910, 1090, 469],
        ]);

        var options = {
            title: '',
            curveType: 'function',
            lineWidth: 2,
            intervals: { 'style':'line' },
            legend: 'none',
            backgroundColor: '#efefef',
            chartArea: {
                width:'100%',
                height:'85%',
                left:0
            },
            vAxis: {
                gridlines: {
                    color: 'transparent'
                }
            },
            series: {
                0: { color: '#12E520' },
                1: { color: '#C00372' },
                2: { color: '#1219E5' },
                3: { color: '#E5A612' },
                4: { color: '#E51219' }
            },
            hAxis: {
                textStyle:{
                    color: '#C00372',
                    fontName: 'Montserrat'
                }                    
            }
        };

        var chart_lines = new google.visualization.LineChart(document.getElementById('chart_6'));
        chart_lines.draw(data, options);
    }

    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(chart_7);
    $('#chart_7').empty();
    function chart_7() {
        var data = new google.visualization.DataTable();

        var data = google.visualization.arrayToDataTable([
            ['Data', 'Inscritos', 'Tips', 'Post', 'Indicações', 'Live'],
            ['01 de Fevereiro 09:00h', 1000, 400, 765, 679, 529],
            ['16 de Fevereiro 21:00h', 1170, 460, 845, 846, 861],
            ['2001 de Março 20:00h15', 660, 1120, 910, 1090, 469],
        ]);

        var options = {
            title: '',
            curveType: 'function',
            lineWidth: 2,
            intervals: { 'style':'line' },
            legend: 'none',
            backgroundColor: '#efefef',
            chartArea: {
                width:'100%',
                height:'85%',
                left:0
            },
            vAxis: {
                gridlines: {
                    color: 'transparent'
                }
            },
            series: {
                0: { color: '#12E520' },
                1: { color: '#C00372' },
                2: { color: '#1219E5' },
                3: { color: '#E5A612' },
                4: { color: '#E51219' }
            },
            hAxis: {
                textStyle:{
                    color: '#C00372',
                    fontName: 'Montserrat'
                }                    
            }
        };

        var chart_lines = new google.visualization.LineChart(document.getElementById('chart_7'));
        chart_lines.draw(data, options);
    }

    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(chart_8);
    $('#chart_8').empty();
    function chart_8() {
        var data = new google.visualization.DataTable();

        var data = google.visualization.arrayToDataTable([
            ['Data', 'Inscritos', 'Tips', 'Post', 'Indicações', 'Live'],
            ['01 de Fevereiro 09:00h', 1000, 400, 765, 679, 529],
            ['16 de Fevereiro 21:00h', 1170, 460, 845, 846, 861],
            ['2001 de Março 20:00h15', 660, 1120, 910, 1090, 469],
        ]);

        var options = {
            title: '',
            curveType: 'function',
            lineWidth: 2,
            intervals: { 'style':'line' },
            legend: 'none',
            backgroundColor: '#efefef',
            chartArea: {
                width:'100%',
                height:'85%',
                left:0
            },
            vAxis: {
                gridlines: {
                    color: 'transparent'
                }
            },
            series: {
                0: { color: '#12E520' },
                1: { color: '#C00372' },
                2: { color: '#1219E5' },
                3: { color: '#E5A612' },
                4: { color: '#E51219' }
            },
            hAxis: {
                textStyle:{
                    color: '#C00372',
                    fontName: 'Montserrat'
                }                    
            }
        };

        var chart_lines = new google.visualization.LineChart(document.getElementById('chart_8'));
        chart_lines.draw(data, options);
    }
}

$(document).on('click','.box_earnings_header[aria-expanded="false"]',function(){
    loadCharts();
});

$(window).on('resize',function(){
    loadCharts();
}).resize();