/*=========================================================================================
    File Name: curvy-line.js
    Description: Dimple curvy line chart
    ----------------------------------------------------------------------------------------
    Item Name: Robust - Responsive Admin Theme
    Version: 1.0
    Author: GeeksLabs
    Author URL: http://www.themeforest.net/user/geekslabs
==========================================================================================*/

// Curvy line chart
// ------------------------------
$(window).on("load", function(){

    // Construct chart
    var svg = dimple.newSvg("#curvy-line-chart", "100%", 500);


    // Chart setup
    // ------------------------------

    d3.tsv("../../../robust-assets/demo-data/dimple/example-data.tsv", function (data) {

        // Filter data
        data = dimple.filterData(data, "Owner", ["Aperture", "Black Mesa"]);


        // Create chart
        // ------------------------------

        // Define chart
        var myChart = new dimple.chart(svg, data);

        // Set bounds
        myChart.setBounds(0, 0, "100%", "100%");

        // Set margins
        myChart.setMargins(40, 10, 0, 50);


        // Create axes
        // ------------------------------

        // Horizontal
        var x = myChart.addCategoryAxis("x", "Month");
            x.addOrderRule("Date");

        // Vertical
        var y = myChart.addMeasureAxis("y", "Unit Sales");


        // Construct layout
        // ------------------------------

        // Add line
        var s = myChart
            .addSeries("Channel", dimple.plot.line)
            .interpolation = "cardinal";

        // Assign Color
        myChart.defaultColors = [
            new dimple.color("#673AB7"), // Set a deep purple fill
            new dimple.color("#E91E63"), // Set a pink fill
        ];

        // Add styles
        // ------------------------------

        // Font size
        x.fontSize = "12";
        y.fontSize = "12";

        // Draw
        myChart.draw();

        // Remove axis titles
        x.titleShape.remove();
        y.titleShape.remove();


        // Resize chart
        // ------------------------------

        // Add a method to draw the chart on resize of the window
        $(window).on('resize', resize);
        $(".menu-toggle").on('click', resize);

        // Resize function
        function resize() {
            setTimeout(function() {

                // Redraw chart
                myChart.draw(0, true);

                // Remove axis titles
                x.titleShape.remove();
                y.titleShape.remove();
            }, 100);
        }
    });
});