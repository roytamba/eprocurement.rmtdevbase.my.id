!(function (r) {
    "use strict";
    function e() {
        (this.$body = r("body")), (this.charts = []);
    }
    (e.prototype.initCharts = function () {
        window.Apex = {
            chart: { parentHeightOffset: 0, toolbar: { show: !1 } },
            grid: { padding: { left: 0, right: 0 } },
            colors: ["#727cf5", "#0acf97", "#fa5c7c", "#ffbc00"],
        };
        var e = ["#727cf5", "#0acf97", "#fa5c7c", "#ffbc00"],
            t = r("#revenue-chart").data("colors"),
            o = {
                chart: {
                    height: 370,
                    type: "line",
                    dropShadow: {
                        enabled: !0,
                        opacity: 0.2,
                        blur: 7,
                        left: -7,
                        top: 7,
                    },
                },
                dataLabels: { enabled: !1 },
                stroke: { curve: "smooth", width: 4 },
                series: [
                    {
                        name: "Current Week",
                        data: [10, 20, 15, 25, 20, 30, 20],
                    },
                    {
                        name: "Previous Week",
                        data: [0, 15, 10, 30, 15, 35, 25],
                    },
                ],
                colors: (e = t ? t.split(",") : e),
                zoom: { enabled: !1 },
                legend: { show: !1 },
                xaxis: {
                    type: "string",
                    categories: [
                        "Mon",
                        "Tue",
                        "Wed",
                        "Thu",
                        "Fri",
                        "Sat",
                        "Sun",
                    ],
                    tooltip: { enabled: !1 },
                    axisBorder: { show: !1 },
                },
                grid: { strokeDashArray: 7 },
                yaxis: {
                    stepSize: 9,
                    labels: {
                        formatter: function (e) {
                            return e + "k";
                        },
                        offsetX: -15,
                    },
                },
            },
            e =
                (new ApexCharts(
                    document.querySelector("#revenue-chart"),
                    o
                ).render(),
                ["#727cf5", "#e3eaef"]),
            o = {
                chart: { height: 256, type: "bar", stacked: !0 },
                plotOptions: { bar: { horizontal: !1, columnWidth: "20%" } },
                dataLabels: { enabled: !1 },
                stroke: { show: !0, width: 0, colors: ["transparent"] },
                series: [
                    {
                        name: "Actual",
                        data: [65, 59, 80, 81, 56, 89, 40, 32, 65, 59, 80, 81],
                    },
                    {
                        name: "Projection",
                        data: [89, 40, 32, 65, 59, 80, 81, 56, 89, 40, 65, 59],
                    },
                ],
                zoom: { enabled: !1 },
                legend: { show: !1 },
                colors: (e = (t = r("#high-performing-product").data("colors"))
                    ? t.split(",")
                    : e),
                xaxis: {
                    categories: [
                        "Jan",
                        "Feb",
                        "Mar",
                        "Apr",
                        "May",
                        "Jun",
                        "Jul",
                        "Aug",
                        "Sep",
                        "Oct",
                        "Nov",
                        "Dec",
                    ],
                    axisBorder: { show: !1 },
                },
                yaxis: {
                    stepSize: 40,
                    labels: {
                        formatter: function (e) {
                            return e + "k";
                        },
                        offsetX: -15,
                    },
                },
                fill: { opacity: 1 },
                tooltip: {
                    y: {
                        formatter: function (e) {
                            return "$" + e + "k";
                        },
                    },
                },
            },
            e =
                (new ApexCharts(
                    document.querySelector("#high-performing-product"),
                    o
                ).render(),
                ["#727cf5", "#0acf97", "#fa5c7c", "#ffbc00"]),
            o = {
                chart: { height: 202, type: "donut" },
                legend: { show: !1 },
                stroke: { width: 0 },
                series: [44, 55, 41, 17],
                labels: ["Direct", "Affilliate", "Sponsored", "E-mail"],
                colors: (e = (t = r("#average-sales").data("colors"))
                    ? t.split(",")
                    : e),
                responsive: [
                    {
                        breakpoint: 480,
                        options: {
                            chart: { width: 200 },
                            legend: { position: "bottom" },
                        },
                    },
                ],
            };
        new ApexCharts(document.querySelector("#average-sales"), o).render();
    }),
        (e.prototype.initMaps = function () {
            new jsVectorMap({
                map: "world",
                selector: "#world-map-markers",
                zoomOnScroll: !1,
                zoomButtons: !0,
                markersSelectable: !0,
                hoverOpacity: 0.7,
                hoverColor: !1,
                regionStyle: { initial: { fill: "rgba(145, 166, 189, 0.25)" } },
                markerStyle: {
                    initial: {
                        r: 9,
                        fill: "#727cf5",
                        "fill-opacity": 0.9,
                        stroke: "#fff",
                        "stroke-width": 7,
                        "stroke-opacity": 0.4,
                    },
                    hover: {
                        stroke: "#fff",
                        "fill-opacity": 1,
                        "stroke-width": 1.5,
                    },
                },
                backgroundColor: "transparent",
                markers: [
                    { coords: [40.71, -74], name: "New York" },
                    { coords: [37.77, -122.41], name: "San Francisco" },
                    { coords: [-33.86, 151.2], name: "Sydney" },
                    { coords: [1.3, 103.8], name: "Singapore" },
                ],
            });
        }),
        (e.prototype.init = function () {
            r("#dash-daterange").daterangepicker({ singleDatePicker: !0 }),
                this.initCharts(),
                this.initMaps();
        }),
        (r.Dashboard = new e()),
        (r.Dashboard.Constructor = e);
})(window.jQuery),
    (function (t) {
        "use strict";
        t(document).ready(function (e) {
            t.Dashboard.init();
        });
    })(window.jQuery);
