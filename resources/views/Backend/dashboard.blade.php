@extends('Backend.layouts.app')
@section('title', ' Dashboard')
@section('head', 'Dashboard')
@section('content')
<div class="col-md-12">
    <div class="row statbox widget box box-shadow">

        <div class="col-md-3">
           
                <div class="widget-one" id="counterBasic">
                    <div class="widget-content">
                        <div class="w-numeric-value">
                            <div class="w-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                            </div>
                            <div class="w-content">
                               <div class="w-content">
                            <span class="w-value">3,192</span>
                            <span class="w-numeric-title">Total Orders</span>
                        </div>
                            </div>
                        </div>
                        <div class="w-chart" style="position: relative;">
                            <div id="total-orders" style="min-height: 180px;">
                                <div id="apexchartsk0mxb0dbl" class="apexcharts-canvas apexchartsk0mxb0dbl light" style="width: 342px; height: 180px;"><svg id="SvgjsSvg1285" width="342" height="280" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1287" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 125)"><defs id="SvgjsDefs1286"><clipPath id="gridRectMaskk0mxb0dbl"><rect id="SvgjsRect1291" width="344" height="121" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMaskk0mxb0dbl"><rect id="SvgjsRect1292" width="344" height="121" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><linearGradient id="SvgjsLinearGradient1298" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1299" stop-opacity="0.4" stop-color="rgba(255,255,255,0.4)" offset="0.45"></stop><stop id="SvgjsStop1300" stop-opacity="0.05" stop-color="rgba(255,255,255,0.05)" offset="1"></stop><stop id="SvgjsStop1301" stop-opacity="0.05" stop-color="rgba(255,255,255,0.05)" offset="1"></stop></linearGradient></defs><line id="SvgjsLine1290" x1="113.5" y1="0" x2="113.5" y2="119" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="113.5" y="0" width="1" height="119" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1304" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1305" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1308" class="apexcharts-grid"><line id="SvgjsLine1310" x1="0" y1="119" x2="342" y2="119" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1309" x1="0" y1="1" x2="0" y2="119" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1294" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1295" class="apexcharts-series" seriesName="Sales" data:longestSeries="true" rel="1" data:realIndex="0"><path id="apexcharts-area-0" d="M 0 119L 0 64.9090909090909C 13.299999999999999 64.9090909090909 24.700000000000003 41.72727272727272 38 41.72727272727272C 51.3 41.72727272727272 62.7 49.45454545454544 76 49.45454545454544C 89.3 49.45454545454544 100.7 18.545454545454533 114 18.545454545454533C 127.3 18.545454545454533 138.7 45.59090909090908 152 45.59090909090908C 165.3 45.59090909090908 176.7 3.0909090909090793 190 3.0909090909090793C 203.3 3.0909090909090793 214.7 45.59090909090908 228 45.59090909090908C 241.3 45.59090909090908 252.7 18.545454545454533 266 18.545454545454533C 279.3 18.545454545454533 290.7 49.45454545454544 304 49.45454545454544C 317.3 49.45454545454544 328.7 41.72727272727272 342 41.72727272727272C 342 41.72727272727272 342 41.72727272727272 342 119M 342 41.72727272727272z" fill="url(#SvgjsLinearGradient1298)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskk0mxb0dbl)" pathTo="M 0 119L 0 64.9090909090909C 13.299999999999999 64.9090909090909 24.700000000000003 41.72727272727272 38 41.72727272727272C 51.3 41.72727272727272 62.7 49.45454545454544 76 49.45454545454544C 89.3 49.45454545454544 100.7 18.545454545454533 114 18.545454545454533C 127.3 18.545454545454533 138.7 45.59090909090908 152 45.59090909090908C 165.3 45.59090909090908 176.7 3.0909090909090793 190 3.0909090909090793C 203.3 3.0909090909090793 214.7 45.59090909090908 228 45.59090909090908C 241.3 45.59090909090908 252.7 18.545454545454533 266 18.545454545454533C 279.3 18.545454545454533 290.7 49.45454545454544 304 49.45454545454544C 317.3 49.45454545454544 328.7 41.72727272727272 342 41.72727272727272C 342 41.72727272727272 342 41.72727272727272 342 119M 342 41.72727272727272z" pathFrom="M -1 119L -1 119L 38 119L 76 119L 114 119L 152 119L 190 119L 228 119L 266 119L 304 119L 342 119"></path><path id="apexcharts-area-0" d="M 0 64.9090909090909C 13.299999999999999 64.9090909090909 24.700000000000003 41.72727272727272 38 41.72727272727272C 51.3 41.72727272727272 62.7 49.45454545454544 76 49.45454545454544C 89.3 49.45454545454544 100.7 18.545454545454533 114 18.545454545454533C 127.3 18.545454545454533 138.7 45.59090909090908 152 45.59090909090908C 165.3 45.59090909090908 176.7 3.0909090909090793 190 3.0909090909090793C 203.3 3.0909090909090793 214.7 45.59090909090908 228 45.59090909090908C 241.3 45.59090909090908 252.7 18.545454545454533 266 18.545454545454533C 279.3 18.545454545454533 290.7 49.45454545454544 304 49.45454545454544C 317.3 49.45454545454544 328.7 41.72727272727272 342 41.72727272727272" fill="none" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskk0mxb0dbl)" pathTo="M 0 64.9090909090909C 13.299999999999999 64.9090909090909 24.700000000000003 41.72727272727272 38 41.72727272727272C 51.3 41.72727272727272 62.7 49.45454545454544 76 49.45454545454544C 89.3 49.45454545454544 100.7 18.545454545454533 114 18.545454545454533C 127.3 18.545454545454533 138.7 45.59090909090908 152 45.59090909090908C 165.3 45.59090909090908 176.7 3.0909090909090793 190 3.0909090909090793C 203.3 3.0909090909090793 214.7 45.59090909090908 228 45.59090909090908C 241.3 45.59090909090908 252.7 18.545454545454533 266 18.545454545454533C 279.3 18.545454545454533 290.7 49.45454545454544 304 49.45454545454544C 317.3 49.45454545454544 328.7 41.72727272727272 342 41.72727272727272" pathFrom="M -1 119L -1 119L 38 119L 76 119L 114 119L 152 119L 190 119L 228 119L 266 119L 304 119L 342 119"></path><g id="SvgjsG1296" class="apexcharts-series-markers-wrap"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1316" r="0" cx="114" cy="18.545454545454533" class="apexcharts-marker wox9tgc8wj no-pointer-events" stroke="#ffffff" fill="#ffffff" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g><g id="SvgjsG1297" class="apexcharts-datalabels"></g></g></g><line id="SvgjsLine1311" x1="0" y1="0" x2="342" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1312" x1="0" y1="0" x2="342" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1313" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1314" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1315" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1289" width="0" height="0" x="0" y="0" rx="0" ry="0" fill="#fefefe" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect><g id="SvgjsG1306" class="apexcharts-yaxis" rel="0" transform="translate(-21, 0)"><g id="SvgjsG1307" class="apexcharts-yaxis-texts-g"></g></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip dark" style="left: 125px; top: 21px;"><div class="apexcharts-tooltip-series-group active" style="display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 255, 255);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label">Sales: </span><span class="apexcharts-tooltip-text-value">52</span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                        <div class="resize-triggers">
                            <div class="expand-trigger">
                            <div style="width: 343px; height:;">
                        </div>
                    </div>
                    <div class="contract-trigger">
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>  
        
        <div class="col-md-3">
            <div class="widget-one">
                <div class="widget-content">
                    <div class="w-numeric-value">
                        <div class="w-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                        </div>
                        <div class="w-content">
                            <span class="w-value">3,192</span>
                            <span class="w-numeric-title">Total Orders</span>
                        </div>
                    </div>
                    <div class="w-chart" style="position: relative;">
                        <div id="total-orders" style="min-height: 180px;">
                            <div id="apexchartsk0mxb0dbl" class="apexcharts-canvas apexchartsk0mxb0dbl light" style="width: 342px; height: 180px;"><svg id="SvgjsSvg1285" width="342" height="280" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1287" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 125)"><defs id="SvgjsDefs1286"><clipPath id="gridRectMaskk0mxb0dbl"><rect id="SvgjsRect1291" width="344" height="121" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMaskk0mxb0dbl"><rect id="SvgjsRect1292" width="344" height="121" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><linearGradient id="SvgjsLinearGradient1298" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1299" stop-opacity="0.4" stop-color="rgba(255,255,255,0.4)" offset="0.45"></stop><stop id="SvgjsStop1300" stop-opacity="0.05" stop-color="rgba(255,255,255,0.05)" offset="1"></stop><stop id="SvgjsStop1301" stop-opacity="0.05" stop-color="rgba(255,255,255,0.05)" offset="1"></stop></linearGradient></defs><line id="SvgjsLine1290" x1="113.5" y1="0" x2="113.5" y2="119" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="113.5" y="0" width="1" height="119" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1304" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1305" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1308" class="apexcharts-grid"><line id="SvgjsLine1310" x1="0" y1="119" x2="342" y2="119" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1309" x1="0" y1="1" x2="0" y2="119" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1294" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1295" class="apexcharts-series" seriesName="Sales" data:longestSeries="true" rel="1" data:realIndex="0"><path id="apexcharts-area-0" d="M 0 119L 0 64.9090909090909C 13.299999999999999 64.9090909090909 24.700000000000003 41.72727272727272 38 41.72727272727272C 51.3 41.72727272727272 62.7 49.45454545454544 76 49.45454545454544C 89.3 49.45454545454544 100.7 18.545454545454533 114 18.545454545454533C 127.3 18.545454545454533 138.7 45.59090909090908 152 45.59090909090908C 165.3 45.59090909090908 176.7 3.0909090909090793 190 3.0909090909090793C 203.3 3.0909090909090793 214.7 45.59090909090908 228 45.59090909090908C 241.3 45.59090909090908 252.7 18.545454545454533 266 18.545454545454533C 279.3 18.545454545454533 290.7 49.45454545454544 304 49.45454545454544C 317.3 49.45454545454544 328.7 41.72727272727272 342 41.72727272727272C 342 41.72727272727272 342 41.72727272727272 342 119M 342 41.72727272727272z" fill="url(#SvgjsLinearGradient1298)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskk0mxb0dbl)" pathTo="M 0 119L 0 64.9090909090909C 13.299999999999999 64.9090909090909 24.700000000000003 41.72727272727272 38 41.72727272727272C 51.3 41.72727272727272 62.7 49.45454545454544 76 49.45454545454544C 89.3 49.45454545454544 100.7 18.545454545454533 114 18.545454545454533C 127.3 18.545454545454533 138.7 45.59090909090908 152 45.59090909090908C 165.3 45.59090909090908 176.7 3.0909090909090793 190 3.0909090909090793C 203.3 3.0909090909090793 214.7 45.59090909090908 228 45.59090909090908C 241.3 45.59090909090908 252.7 18.545454545454533 266 18.545454545454533C 279.3 18.545454545454533 290.7 49.45454545454544 304 49.45454545454544C 317.3 49.45454545454544 328.7 41.72727272727272 342 41.72727272727272C 342 41.72727272727272 342 41.72727272727272 342 119M 342 41.72727272727272z" pathFrom="M -1 119L -1 119L 38 119L 76 119L 114 119L 152 119L 190 119L 228 119L 266 119L 304 119L 342 119"></path><path id="apexcharts-area-0" d="M 0 64.9090909090909C 13.299999999999999 64.9090909090909 24.700000000000003 41.72727272727272 38 41.72727272727272C 51.3 41.72727272727272 62.7 49.45454545454544 76 49.45454545454544C 89.3 49.45454545454544 100.7 18.545454545454533 114 18.545454545454533C 127.3 18.545454545454533 138.7 45.59090909090908 152 45.59090909090908C 165.3 45.59090909090908 176.7 3.0909090909090793 190 3.0909090909090793C 203.3 3.0909090909090793 214.7 45.59090909090908 228 45.59090909090908C 241.3 45.59090909090908 252.7 18.545454545454533 266 18.545454545454533C 279.3 18.545454545454533 290.7 49.45454545454544 304 49.45454545454544C 317.3 49.45454545454544 328.7 41.72727272727272 342 41.72727272727272" fill="none" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskk0mxb0dbl)" pathTo="M 0 64.9090909090909C 13.299999999999999 64.9090909090909 24.700000000000003 41.72727272727272 38 41.72727272727272C 51.3 41.72727272727272 62.7 49.45454545454544 76 49.45454545454544C 89.3 49.45454545454544 100.7 18.545454545454533 114 18.545454545454533C 127.3 18.545454545454533 138.7 45.59090909090908 152 45.59090909090908C 165.3 45.59090909090908 176.7 3.0909090909090793 190 3.0909090909090793C 203.3 3.0909090909090793 214.7 45.59090909090908 228 45.59090909090908C 241.3 45.59090909090908 252.7 18.545454545454533 266 18.545454545454533C 279.3 18.545454545454533 290.7 49.45454545454544 304 49.45454545454544C 317.3 49.45454545454544 328.7 41.72727272727272 342 41.72727272727272" pathFrom="M -1 119L -1 119L 38 119L 76 119L 114 119L 152 119L 190 119L 228 119L 266 119L 304 119L 342 119"></path><g id="SvgjsG1296" class="apexcharts-series-markers-wrap"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1316" r="0" cx="114" cy="18.545454545454533" class="apexcharts-marker wox9tgc8wj no-pointer-events" stroke="#ffffff" fill="#ffffff" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g><g id="SvgjsG1297" class="apexcharts-datalabels"></g></g></g><line id="SvgjsLine1311" x1="0" y1="0" x2="342" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1312" x1="0" y1="0" x2="342" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1313" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1314" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1315" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1289" width="0" height="0" x="0" y="0" rx="0" ry="0" fill="#fefefe" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect><g id="SvgjsG1306" class="apexcharts-yaxis" rel="0" transform="translate(-21, 0)"><g id="SvgjsG1307" class="apexcharts-yaxis-texts-g"></g></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip dark" style="left: 125px; top: 21px;"><div class="apexcharts-tooltip-series-group active" style="display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 255, 255);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label">Sales: </span><span class="apexcharts-tooltip-text-value">52</span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                    <div class="resize-triggers">
                        <div class="expand-trigger">
                        <div style="width: 343px; height:;">
                    </div>
                </div>
                <div class="contract-trigger">
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="widget-one">
                <div class="widget-content">
                    <div class="w-numeric-value">
                        <div class="w-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                        </div>
                        <div class="w-content">
                            <span class="w-value">3,192</span>
                            <span class="w-numeric-title">Total Orders</span>
                        </div>
                    </div>
                    <div class="w-chart" style="position: relative;">
                        <div id="total-orders" style="min-height: 180px;">
                            <div id="apexchartsk0mxb0dbl" class="apexcharts-canvas apexchartsk0mxb0dbl light" style="width: 342px; height: 180px;"><svg id="SvgjsSvg1285" width="342" height="280" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1287" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 125)"><defs id="SvgjsDefs1286"><clipPath id="gridRectMaskk0mxb0dbl"><rect id="SvgjsRect1291" width="344" height="121" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMaskk0mxb0dbl"><rect id="SvgjsRect1292" width="344" height="121" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><linearGradient id="SvgjsLinearGradient1298" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1299" stop-opacity="0.4" stop-color="rgba(255,255,255,0.4)" offset="0.45"></stop><stop id="SvgjsStop1300" stop-opacity="0.05" stop-color="rgba(255,255,255,0.05)" offset="1"></stop><stop id="SvgjsStop1301" stop-opacity="0.05" stop-color="rgba(255,255,255,0.05)" offset="1"></stop></linearGradient></defs><line id="SvgjsLine1290" x1="113.5" y1="0" x2="113.5" y2="119" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="113.5" y="0" width="1" height="119" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1304" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1305" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1308" class="apexcharts-grid"><line id="SvgjsLine1310" x1="0" y1="119" x2="342" y2="119" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1309" x1="0" y1="1" x2="0" y2="119" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1294" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1295" class="apexcharts-series" seriesName="Sales" data:longestSeries="true" rel="1" data:realIndex="0"><path id="apexcharts-area-0" d="M 0 119L 0 64.9090909090909C 13.299999999999999 64.9090909090909 24.700000000000003 41.72727272727272 38 41.72727272727272C 51.3 41.72727272727272 62.7 49.45454545454544 76 49.45454545454544C 89.3 49.45454545454544 100.7 18.545454545454533 114 18.545454545454533C 127.3 18.545454545454533 138.7 45.59090909090908 152 45.59090909090908C 165.3 45.59090909090908 176.7 3.0909090909090793 190 3.0909090909090793C 203.3 3.0909090909090793 214.7 45.59090909090908 228 45.59090909090908C 241.3 45.59090909090908 252.7 18.545454545454533 266 18.545454545454533C 279.3 18.545454545454533 290.7 49.45454545454544 304 49.45454545454544C 317.3 49.45454545454544 328.7 41.72727272727272 342 41.72727272727272C 342 41.72727272727272 342 41.72727272727272 342 119M 342 41.72727272727272z" fill="url(#SvgjsLinearGradient1298)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskk0mxb0dbl)" pathTo="M 0 119L 0 64.9090909090909C 13.299999999999999 64.9090909090909 24.700000000000003 41.72727272727272 38 41.72727272727272C 51.3 41.72727272727272 62.7 49.45454545454544 76 49.45454545454544C 89.3 49.45454545454544 100.7 18.545454545454533 114 18.545454545454533C 127.3 18.545454545454533 138.7 45.59090909090908 152 45.59090909090908C 165.3 45.59090909090908 176.7 3.0909090909090793 190 3.0909090909090793C 203.3 3.0909090909090793 214.7 45.59090909090908 228 45.59090909090908C 241.3 45.59090909090908 252.7 18.545454545454533 266 18.545454545454533C 279.3 18.545454545454533 290.7 49.45454545454544 304 49.45454545454544C 317.3 49.45454545454544 328.7 41.72727272727272 342 41.72727272727272C 342 41.72727272727272 342 41.72727272727272 342 119M 342 41.72727272727272z" pathFrom="M -1 119L -1 119L 38 119L 76 119L 114 119L 152 119L 190 119L 228 119L 266 119L 304 119L 342 119"></path><path id="apexcharts-area-0" d="M 0 64.9090909090909C 13.299999999999999 64.9090909090909 24.700000000000003 41.72727272727272 38 41.72727272727272C 51.3 41.72727272727272 62.7 49.45454545454544 76 49.45454545454544C 89.3 49.45454545454544 100.7 18.545454545454533 114 18.545454545454533C 127.3 18.545454545454533 138.7 45.59090909090908 152 45.59090909090908C 165.3 45.59090909090908 176.7 3.0909090909090793 190 3.0909090909090793C 203.3 3.0909090909090793 214.7 45.59090909090908 228 45.59090909090908C 241.3 45.59090909090908 252.7 18.545454545454533 266 18.545454545454533C 279.3 18.545454545454533 290.7 49.45454545454544 304 49.45454545454544C 317.3 49.45454545454544 328.7 41.72727272727272 342 41.72727272727272" fill="none" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskk0mxb0dbl)" pathTo="M 0 64.9090909090909C 13.299999999999999 64.9090909090909 24.700000000000003 41.72727272727272 38 41.72727272727272C 51.3 41.72727272727272 62.7 49.45454545454544 76 49.45454545454544C 89.3 49.45454545454544 100.7 18.545454545454533 114 18.545454545454533C 127.3 18.545454545454533 138.7 45.59090909090908 152 45.59090909090908C 165.3 45.59090909090908 176.7 3.0909090909090793 190 3.0909090909090793C 203.3 3.0909090909090793 214.7 45.59090909090908 228 45.59090909090908C 241.3 45.59090909090908 252.7 18.545454545454533 266 18.545454545454533C 279.3 18.545454545454533 290.7 49.45454545454544 304 49.45454545454544C 317.3 49.45454545454544 328.7 41.72727272727272 342 41.72727272727272" pathFrom="M -1 119L -1 119L 38 119L 76 119L 114 119L 152 119L 190 119L 228 119L 266 119L 304 119L 342 119"></path><g id="SvgjsG1296" class="apexcharts-series-markers-wrap"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1316" r="0" cx="114" cy="18.545454545454533" class="apexcharts-marker wox9tgc8wj no-pointer-events" stroke="#ffffff" fill="#ffffff" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g><g id="SvgjsG1297" class="apexcharts-datalabels"></g></g></g><line id="SvgjsLine1311" x1="0" y1="0" x2="342" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1312" x1="0" y1="0" x2="342" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1313" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1314" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1315" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1289" width="0" height="0" x="0" y="0" rx="0" ry="0" fill="#fefefe" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect><g id="SvgjsG1306" class="apexcharts-yaxis" rel="0" transform="translate(-21, 0)"><g id="SvgjsG1307" class="apexcharts-yaxis-texts-g"></g></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip dark" style="left: 125px; top: 21px;"><div class="apexcharts-tooltip-series-group active" style="display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 255, 255);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label">Sales: </span><span class="apexcharts-tooltip-text-value">52</span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                    <div class="resize-triggers">
                        <div class="expand-trigger">
                        <div style="width: 343px; height:;">
                    </div>
                </div>
                <div class="contract-trigger">
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
              <div class="widget-one">
                <div class="widget-content">
                    <div class="w-numeric-value">
                        <div class="w-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                        </div>
                        <div class="w-content">
                            <span class="w-value">3,192</span>
                            <span class="w-numeric-title">Total Orders</span>
                        </div>
                    </div>
                    <div class="w-chart" style="position: relative;">
                        <div id="total-orders" style="min-height: 180px;">
                            <div id="apexchartsk0mxb0dbl" class="apexcharts-canvas apexchartsk0mxb0dbl light" style="width: 342px; height: 180px;"><svg id="SvgjsSvg1285" width="342" height="280" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1287" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 125)"><defs id="SvgjsDefs1286"><clipPath id="gridRectMaskk0mxb0dbl"><rect id="SvgjsRect1291" width="344" height="121" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMaskk0mxb0dbl"><rect id="SvgjsRect1292" width="344" height="121" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><linearGradient id="SvgjsLinearGradient1298" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1299" stop-opacity="0.4" stop-color="rgba(255,255,255,0.4)" offset="0.45"></stop><stop id="SvgjsStop1300" stop-opacity="0.05" stop-color="rgba(255,255,255,0.05)" offset="1"></stop><stop id="SvgjsStop1301" stop-opacity="0.05" stop-color="rgba(255,255,255,0.05)" offset="1"></stop></linearGradient></defs><line id="SvgjsLine1290" x1="113.5" y1="0" x2="113.5" y2="119" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="113.5" y="0" width="1" height="119" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1304" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1305" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1308" class="apexcharts-grid"><line id="SvgjsLine1310" x1="0" y1="119" x2="342" y2="119" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1309" x1="0" y1="1" x2="0" y2="119" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1294" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1295" class="apexcharts-series" seriesName="Sales" data:longestSeries="true" rel="1" data:realIndex="0"><path id="apexcharts-area-0" d="M 0 119L 0 64.9090909090909C 13.299999999999999 64.9090909090909 24.700000000000003 41.72727272727272 38 41.72727272727272C 51.3 41.72727272727272 62.7 49.45454545454544 76 49.45454545454544C 89.3 49.45454545454544 100.7 18.545454545454533 114 18.545454545454533C 127.3 18.545454545454533 138.7 45.59090909090908 152 45.59090909090908C 165.3 45.59090909090908 176.7 3.0909090909090793 190 3.0909090909090793C 203.3 3.0909090909090793 214.7 45.59090909090908 228 45.59090909090908C 241.3 45.59090909090908 252.7 18.545454545454533 266 18.545454545454533C 279.3 18.545454545454533 290.7 49.45454545454544 304 49.45454545454544C 317.3 49.45454545454544 328.7 41.72727272727272 342 41.72727272727272C 342 41.72727272727272 342 41.72727272727272 342 119M 342 41.72727272727272z" fill="url(#SvgjsLinearGradient1298)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskk0mxb0dbl)" pathTo="M 0 119L 0 64.9090909090909C 13.299999999999999 64.9090909090909 24.700000000000003 41.72727272727272 38 41.72727272727272C 51.3 41.72727272727272 62.7 49.45454545454544 76 49.45454545454544C 89.3 49.45454545454544 100.7 18.545454545454533 114 18.545454545454533C 127.3 18.545454545454533 138.7 45.59090909090908 152 45.59090909090908C 165.3 45.59090909090908 176.7 3.0909090909090793 190 3.0909090909090793C 203.3 3.0909090909090793 214.7 45.59090909090908 228 45.59090909090908C 241.3 45.59090909090908 252.7 18.545454545454533 266 18.545454545454533C 279.3 18.545454545454533 290.7 49.45454545454544 304 49.45454545454544C 317.3 49.45454545454544 328.7 41.72727272727272 342 41.72727272727272C 342 41.72727272727272 342 41.72727272727272 342 119M 342 41.72727272727272z" pathFrom="M -1 119L -1 119L 38 119L 76 119L 114 119L 152 119L 190 119L 228 119L 266 119L 304 119L 342 119"></path><path id="apexcharts-area-0" d="M 0 64.9090909090909C 13.299999999999999 64.9090909090909 24.700000000000003 41.72727272727272 38 41.72727272727272C 51.3 41.72727272727272 62.7 49.45454545454544 76 49.45454545454544C 89.3 49.45454545454544 100.7 18.545454545454533 114 18.545454545454533C 127.3 18.545454545454533 138.7 45.59090909090908 152 45.59090909090908C 165.3 45.59090909090908 176.7 3.0909090909090793 190 3.0909090909090793C 203.3 3.0909090909090793 214.7 45.59090909090908 228 45.59090909090908C 241.3 45.59090909090908 252.7 18.545454545454533 266 18.545454545454533C 279.3 18.545454545454533 290.7 49.45454545454544 304 49.45454545454544C 317.3 49.45454545454544 328.7 41.72727272727272 342 41.72727272727272" fill="none" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskk0mxb0dbl)" pathTo="M 0 64.9090909090909C 13.299999999999999 64.9090909090909 24.700000000000003 41.72727272727272 38 41.72727272727272C 51.3 41.72727272727272 62.7 49.45454545454544 76 49.45454545454544C 89.3 49.45454545454544 100.7 18.545454545454533 114 18.545454545454533C 127.3 18.545454545454533 138.7 45.59090909090908 152 45.59090909090908C 165.3 45.59090909090908 176.7 3.0909090909090793 190 3.0909090909090793C 203.3 3.0909090909090793 214.7 45.59090909090908 228 45.59090909090908C 241.3 45.59090909090908 252.7 18.545454545454533 266 18.545454545454533C 279.3 18.545454545454533 290.7 49.45454545454544 304 49.45454545454544C 317.3 49.45454545454544 328.7 41.72727272727272 342 41.72727272727272" pathFrom="M -1 119L -1 119L 38 119L 76 119L 114 119L 152 119L 190 119L 228 119L 266 119L 304 119L 342 119"></path><g id="SvgjsG1296" class="apexcharts-series-markers-wrap"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1316" r="0" cx="114" cy="18.545454545454533" class="apexcharts-marker wox9tgc8wj no-pointer-events" stroke="#ffffff" fill="#ffffff" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g><g id="SvgjsG1297" class="apexcharts-datalabels"></g></g></g><line id="SvgjsLine1311" x1="0" y1="0" x2="342" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1312" x1="0" y1="0" x2="342" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1313" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1314" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1315" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1289" width="0" height="0" x="0" y="0" rx="0" ry="0" fill="#fefefe" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect><g id="SvgjsG1306" class="apexcharts-yaxis" rel="0" transform="translate(-21, 0)"><g id="SvgjsG1307" class="apexcharts-yaxis-texts-g"></g></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip dark" style="left: 125px; top: 21px;"><div class="apexcharts-tooltip-series-group active" style="display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 255, 255);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label">Sales: </span><span class="apexcharts-tooltip-text-value">52</span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                    <div class="resize-triggers">
                        <div class="expand-trigger">
                        <div style="width: 343px; height:;">
                    </div>
                </div>
                <div class="contract-trigger">
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-md-7 statbox widget box box-shadow">
            <div class="widget-header">
                <h4>Stock Status</h4>
            </div>
            <div id="s-col-stacked"></div>
        </div>

        <div class="col-md-5 statbox widget box box-shadow">
            <div class="widget-header">
                <h4>Sale Overview</h4>
            </div>
            <div id="donut-chart"></div>
            
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-md-6 statbox widget box box-shadow">
            <div class="widget-header">
                <h4>Monthly Sale Status</h4>
            </div>
            <div id="s-line"></div>
        </div>

        <div class="col-md-6 statbox widget box box-shadow">
            <div class="widget-header">
                <h4>Stock Status</h4>
            </div>
            <div id="donut-chart"></div>
            
        </div>
    </div>
    
</div>




@endsection
@section('script')
<!-- <script src="{{asset('Backend_assets/js/company.js')}}"></script> -->
<script src="{{ asset('Backend_assets/assets/js/dash_1.js') }}"></script>
<script src="{{ asset('Backend_assets/assets/js/custom-countdown.js') }}"></script>
<script src="{{ asset('Backend_assets/assets/js/custom-counter.js') }}"></script>

<script src="{{ asset('Backend_assets/assets/js/dash_2.js') }}"></script>

<script src="{{asset('Backend_assets/assets/js/apex/apexcharts.min.js')}}"></script>
<script src="{{asset('Backend_assets/assets/js/apex/custom-apexcharts.js')}}"></script>
<script type="text/javascript">
   
Line
Area
Column
Column Stacked
Bar
Mixed
Donut
Radial
Apex (Simple)
var sline = {
  chart: {
    height: 350,
    type: 'line',
    zoom: {
      enabled: false
    },
    toolbar: {
      show: false,
    }
  },
  dataLabels: {
    enabled: false
  },
  stroke: {
    curve: 'straight'
  },
  series: [{
    name: "Desktops",
    data: [10, 41, 35, 51, 49, 62, 69, 91, 148]
  }],
  title: {
    text: 'Product Trends by Month',
    align: 'left'
  },
  grid: {
    row: {
      colors: ['#f1f2f3', 'transparent'], // takes an array which will be repeated on columns
      opacity: 0.5
    },
  },
  xaxis: {
    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
  }
}

var chart = new ApexCharts(
  document.querySelector("#s-line"),
  sline
);

chart.render();
Simple Area
Simple Column
Simple Column Stacked
var sColStacked = {
    chart: {
        height: 350,
        type: 'bar',
        stacked: true,
        toolbar: {
          show: false,
        }
    },
    responsive: [{
        breakpoint: 480,
        options: {
            legend: {
                position: 'bottom',
                offsetX: -10,
                offsetY: 0
            }
        }
    }],
    plotOptions: {
        bar: {
            horizontal: false,
        },
    },
    series: [{
        name: 'PRODUCT A',
        data: [44, 55, 41, 67, 22, 43]
    },{
        name: 'PRODUCT B',
        data: [13, 23, 20, 8, 13, 27]
    },{
        name: 'PRODUCT C',
        data: [11, 17, 15, 15, 21, 14]
    },{
        name: 'PRODUCT D',
        data: [21, 7, 25, 13, 22, 8]
    }],
    xaxis: {
        type: 'datetime',
        categories: ['01/01/2011 GMT', '01/02/2011 GMT', '01/03/2011 GMT', '01/04/2011 GMT', '01/05/2011 GMT', '01/06/2011 GMT'],
    },
    legend: {
        position: 'right',
        offsetY: 40
    },
    fill: {
        opacity: 1
    },
}

var chart = new ApexCharts(
    document.querySelector("#s-col-stacked"),
    sColStacked
);

chart.render();  

//for curcial 


Line
Area
Column
Column Stacked
Bar
Mixed
Donut
Radial
Apex (Simple)
var sline = {
  chart: {
    height: 350,
    type: 'line',
    zoom: {
      enabled: false
    },
    toolbar: {
      show: false,
    }
  },
  dataLabels: {
    enabled: false
  },
  stroke: {
    curve: 'straight'
  },
  series: [{
    name: "Desktops",
    data: [10, 41, 35, 51, 49, 62, 69, 91, 148]
  }],
  title: {
    text: 'Product Trends by Month',
    align: 'left'
  },
  grid: {
    row: {
      colors: ['#f1f2f3', 'transparent'], // takes an array which will be repeated on columns
      opacity: 0.5
    },
  },
  xaxis: {
    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
  }
}

var chart = new ApexCharts(
  document.querySelector("#s-line"),
  sline
);

chart.render();
Simple Area
Simple Column
Simple Column Stacked
Simple Bar
Mixed
Donut
var donutChart = {
    chart: {
        height: 350,
        type: 'donut',
        toolbar: {
          show: false,
        }
    },
    series: [44, 55, 41, 17],
    responsive: [{
        breakpoint: 480,
        options: {
            chart: {
                width: 200
            },
            legend: {
                position: 'bottom'
            }
        }
    }]
}

var donut = new ApexCharts(
    document.querySelector("#donut-chart"),
    donutChart
);

donut.render();

//for monthly sell

Line
Area
Column
Column Stacked
Bar
Mixed
Donut
Radial
Apex (Simple)
var sline = {
  chart: {
    height: 350,
    type: 'line',
    zoom: {
      enabled: false
    },
    toolbar: {
      show: false,
    }
  },
  dataLabels: {
    enabled: false
  },
  stroke: {
    curve: 'straight'
  },
  series: [{
    name: "Desktops",
    data: [10, 41, 35, 51, 49, 62, 69, 91, 148]
  }],
  title: {
    text: 'Product Trends by Month',
    align: 'left'
  },
  grid: {
    row: {
      colors: ['#f1f2f3', 'transparent'], // takes an array which will be repeated on columns
      opacity: 0.5
    },
  },
  xaxis: {
    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
  }
}

var chart = new ApexCharts(
  document.querySelector("#s-line"),
  sline
);

chart.render();
Simple Area
Simple Column
Simple Column Stacked
Simple Bar
Mixed
Donut
var donutChart = {
    chart: {
        height: 350,
        type: 'donut',
        toolbar: {
          show: false,
        }
    },
    series: [44, 55, 41, 17],
    responsive: [{
        breakpoint: 480,
        options: {
            chart: {
                width: 200
            },
            legend: {
                position: 'bottom'
            }
        }
    }]
}

var donut = new ApexCharts(
    document.querySelector("#donut-chart"),
    donutChart
);

donut.render();
</script>
@endsection
