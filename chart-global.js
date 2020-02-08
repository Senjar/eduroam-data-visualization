// Create the World/Global chart

Highcharts.mapChart('container', {
    chart: {
        map: 'custom/world'
    },

    title: {
        text: 'Eduroam Connected Users - World'
    },

    subtitle: {
        text: 'API data'
    },

    mapNavigation: {
        enabled: true,
        buttonOptions: {
            verticalAlign: 'bottom'
        }
    },

    colorAxis: {
        min: 1,
		max: 20,
		stops: [
                [0, '#ffffff'],
				[1, '#0000ff'],
                [1000, '#0000ff']
            ]
    },
	
    series: [{
        data: data,
        name: 'API data',
        states: {
            hover: {
                color: '#BADA55'
            }
        },
        dataLabels: {
            enabled: true,
            format: '{point.name}'
        },
		tooltip: {
                valueSuffix: ' users'
            }
    }]
});
