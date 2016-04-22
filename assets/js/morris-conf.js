// var Script = function () {

	
	var chart = Morris.Bar({
        element: 'hero-bar',
        data: [
          {content: 'Tar', amount: 0},
          {content: 'Nicotine', amount: 0},
          {content: 'Carbon Monoxide', amount: 0}
        ],
        xkey: 'content',
        ykeys: ['amount'],
        labels: ['AMOUNT'],
        barRatio: 0.4,
        xLabelAngle: 0,
        hideHover: 'auto',
        barColors: ['#ed5565']
      });
    function initialChart()
	{
    	chart;
	}  
	function showChart(tar, nct, co) {
	    //morris chart
      // data stolen from http://howmanyleft.co.uk/vehicle/jaguar_'e'_type


//       var thisTar = 0;
//       var thisNct = 0;
//       var thisCo = 0;
	  
// 	  alert("bb");
      var thisTar = tar;
      var thisNct = nct;
      var thisCo = co;
      var newData = [
          {"content": "Tar", "amount": thisTar},
          {"content": "Nicotine", "amount": thisNct},
          {"content": "Carbon Monoxide", "amount": thisCo}
        ];
	  
        chart.setData(newData);	
      // Morris.Line({
//         element: 'hero-graph',
//         data: tax_data,
//         xkey: 'period',
//         ykeys: ['licensed', 'sorned'],
//         labels: ['Licensed', 'Off the road'],
//         lineColors:['#4ECDC4','#ed5565']
//       });

//       Morris.Donut({
//         element: 'hero-donut',
//         data: [
//           {label: 'Jam', value: 25 },
//           {label: 'Frosted', value: 40 },
//           {label: 'Custard', value: 25 },
//           {label: 'Sugar', value: 10 }
//         ],
//           colors: ['#3498db', '#2980b9', '#34495e'],
//         formatter: function (y) { return y + "%" }
//       });
// 
//       Morris.Area({
//         element: 'hero-area',
//         data: [
//           {period: '2010 Q1', iphone: 2666, ipad: null, itouch: 2647},
//           {period: '2010 Q2', iphone: 2778, ipad: 2294, itouch: 2441},
//           {period: '2010 Q3', iphone: 4912, ipad: 1969, itouch: 2501},
//           {period: '2010 Q4', iphone: 3767, ipad: 3597, itouch: 5689},
//           {period: '2011 Q1', iphone: 6810, ipad: 1914, itouch: 2293},
//           {period: '2011 Q2', iphone: 5670, ipad: 4293, itouch: 1881},
//           {period: '2011 Q3', iphone: 4820, ipad: 3795, itouch: 1588},
//           {period: '2011 Q4', iphone: 15073, ipad: 5967, itouch: 5175},
//           {period: '2012 Q1', iphone: 10687, ipad: 4460, itouch: 2028},
//           {period: '2012 Q2', iphone: 8432, ipad: 5713, itouch: 1791}
//         ],
// 
//           xkey: 'period',
//           ykeys: ['iphone', 'ipad', 'itouch'],
//           labels: ['iPhone', 'iPad', 'iPod Touch'],
//           hideHover: 'auto',
//           lineWidth: 1,
//           pointSize: 5,
//           lineColors: ['#4a8bc2', '#ff6c60', '#a9d86e'],
//           fillOpacity: 0.5,
//           smooth: true
//       });
// 
//       var chart = Morris.Bar({
//         element: 'hero-bar',
//         data: [
//           {content: 'Tar', amount: thisTar},
//           {content: 'Nicotine', amount: thisNct},
//           {content: 'Carbon Monoxide', amount: thisCo}
//         ],
//         xkey: 'content',
//         ykeys: ['amount'],
//         labels: ['AMOUNT'],
//         barRatio: 0.4,
//         xLabelAngle: 0,
//         hideHover: 'auto',
//         barColors: ['#ed5565']
//       });

//       new Morris.Line({
//         element: 'examplefirst',
//         xkey: 'year',
//         ykeys: ['value'],
//         labels: ['Value'],
//         data: [
//           {year: '2008', value: 20},
//           {year: '2009', value: 10},
//           {year: '2010', value: 5},
//           {year: '2011', value: 5},
//           {year: '2012', value: 20}
//         ]
//       });
// 
//       $('.code-example').each(function (index, el) {
//         eval($(el).text());
//       });

}

