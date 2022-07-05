/*
Template Name: Admin Pro Admin
Author: Wrappixel
Email: niravjoshi87@gmail.com
File: js
*/
$(function () {
  "use strict";
  // ==============================================================
  // Newsletter
  // ==============================================================

  var chart2 = new Chartist.Bar(
		"#chartwisata",
		{
			labels: [
				"Devoyage",
				"Kebun Raya Bogor",
				"The Jungle Water",
				"Museum Zoologi",
				"Water Park SKI",
			],
			series: [[4.5, 4, 4, 3, 3]],
		},
		{
			axisX: {
				// On the x-axis start means top and end means bottom
				position: "end",
				showGrid: false,
			},
			axisY: {
				// On the y-axis start means left and end means right
				position: "start",
			},
			high: "5",
			low: "0",
			plugins: [Chartist.plugins.tooltip()],
		}
	);

	var chart = [chart2];

	var chart3 = new Chartist.Bar(
		"#chartkuliner",
		{
			labels: [
				"Saung Aki",
				"Raito Ya",
				"Gurih 7",
				"Doclang Mantarena",
				"Rumah Air Bogor",
			],
			series: [[4.5, 4.8, 2, 3, 3]],
		},
		{
			axisX: {
				// On the x-axis start means top and end means bottom
				position: "end",
				showGrid: false,
			},
			axisY: {
				// On the y-axis start means left and end means right
				position: "start",
			},
			high: "5",
			low: "0",
			plugins: [Chartist.plugins.tooltip()],
		}
	);

	var chart2 = [chart3];

	var chart4 = new Chartist.Bar(
		"#chartpenginapan",
		{
			labels: [
				"Padjajaran Suites",
				"101 Hotel Suryakencana",
				"Royal Amarosa",
				"Braja Mustika",
				"Hotel Zest",
			],
			series: [[4.3, 2.5, 3.7, 3, 5]],
		},
		{
			axisX: {
				// On the x-axis start means top and end means bottom
				position: "end",
				showGrid: false,
			},
			axisY: {
				// On the y-axis start means left and end means right
				position: "start",
			},
			high: "5",
			low: "0",
			plugins: [Chartist.plugins.tooltip()],
		}
	);

	var chart3 = [chart4];

	var chart5 = new Chartist.Bar(
		"#chartoleholeh",
		{
			labels: [
				"Lapis Talas Bogor",
				"Munti Keramik",
				"Boneka Potty",
				"Waroeng Coklat",
				"Kaos Unchal",
			],
			series: [[3.6, 4.3, 3.7, 3, 5]],
		},
		{
			axisX: {
				// On the x-axis start means top and end means bottom
				position: "end",
				showGrid: false,
			},
			axisY: {
				// On the y-axis start means left and end means right
				position: "start",
			},
			high: "5",
			low: "0",
			plugins: [Chartist.plugins.tooltip()],
		}
	);

	var chart4 = [chart5];
});
