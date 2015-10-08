/*var tripsOptions = {
	chart: {
		renderTo: 'chart1',
        type: 'line'
    },
    title: {
        text: 'Utilisation du service KLASS'
    },
    xAxis: {
        categories: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre' ]
    },
    yAxis: {
        title: {
            text: 'Nombre de trajets effectués avec KLASS'
        }
    },
    series: [{
        name: '2015',
        data: [5, 4, 7, 8, 6, 10, 1, 2, 11, 14, 5, 3]
    }, {
	    
	    name: '2014',
	        data: [6, 8, 6, 5, 2, 13, 2, 3, 15, 12, 2, 1]
	}]
}

var tripRateOptions = {
    chart: {
    	renderTo: 'chart2',
        type: 'pie'
    },
    title: {
        text: 'Trajets effectués avec KLASS'
    },
    xAxis: {
        categories: ['Ker Lann - Bruz', 'Bruz - Ker Lann', 'Ker Lann - Rennes', 'Rennes - Ker Lann' ]
    },
    
    plotOptions: {
        series: {
            allowPointSelect: true
        }
    },
    
    series: [{
        name: 'Nombre de trajets',
        data: [{
        	name: 'Ker Lann - Bruz',
        	y: 14
        }, {
        	name: 'Bruz - Ker Lann',
        	y: 16
        }, {
        	name: 'Ker Lann - Rennes',
        	y: 25
        }, {
        	name: 'Rennes - Ker Lann',
        	y: 12
        }]
    }]
}


var userRate = {
    chart: {
        renderTo: 'chart3',
        type: 'line'
    },
    title: {
        text: "Nombre d'utilisateurs inscrits au service KLASS"
    },
    xAxis: {
        categories: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre' ]
    },
    yAxis: {
        title: {
            text: "Nombre d'utilisateurs"
        }
    },
    series: [{
        name: '2015',
        data: [787, 798, 874, 985, 1205, 1256, 1352, 1356, 1358, 1456, 1498, 1525]
    }, {
        
        name: '2014',
            data: [120, 140, 256, 298, 356, 458, 498, 502, 548, 598, 658, 662]
    }]
}*/

/*
var tripRateOptions = {
    chart: {
        renderTo: 'pie',
        type: 'pie'
    },
    title: {
        text: 'Trajets effectués avec KLASS'
    },
    xAxis: {
        categories: ['Ker Lann - Bruz', 'Bruz - Ker Lann', 'Ker Lann - Rennes', 'Rennes - Ker Lann' ]
    },

    plotOptions: {
        series: {
            allowPointSelect: true
        }
    },

    series: [{
        name: 'Nombre de trajets',
        data: [{
            name: 'Ker Lann - Bruz',
            y: 14
        }, {
            name: 'Bruz - Ker Lann',
            y: 16
        }, {
            name: 'Ker Lann - Rennes',
            y: 25
        }, {
            name: 'Rennes - Ker Lann',
            y: 12
        }]
    }]
}
*/



$(document).ready(function(){	
	
	//chart1 = new Highcharts.Chart(tripsOptions)
	//chart2 = new Highcharts.Chart(tripRateOptions);
    //chart3 = new Highcharts.Chart(userRate);

	$('.statistic_bloc').find('.trips').hide();
    $('.statistic_bloc').find('.users').hide();
	
	$('.stats_btn').on("click", function(){
		var id = $(this).attr('id');
		
		$('.statistic_bloc').find('section').hide();
		$('.statistic_bloc').find('.'+id).show();
		
		//chart1.destroy();
        //chart2.destroy();
		//chart3.destroy();
		
		//chart1 = new Highcharts.Chart(tripsOptions);
        //chart2 = new Highcharts.Chart(tripRateOptions);
		//chart3 = new Highcharts.Chart(userRate);
		
		$(this).parent().parent().find('li').removeClass('active');
		$(this).parent().addClass('active');
		
	});
});