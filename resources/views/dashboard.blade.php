@extends('layout')

@section('dashboard-content')
<head>
    <title>Dashboard</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>
<body>
<div class="containerdashboard">
    <div class="backgroundfade"></div>
    <div class="dashboardtable">
        <table class="dashboardtable">
            <thead class="tablehead">
            <tr>
                <th colspan=" 6">
                    <p> Exams Table for the </p>
                    <p> propaedeutic phase </p>
                </th>
            </tr>
            </thead>
            <tbody style="text-align: center;">
            <tr>
                <th>Quartile</th>
                <th>Course</th>
                <th> EXAM </th>
                <th>Credits</th>
                <th>Credits obtained</th>
                <th>Grade
                    <p class="gradescale">On a scale to 10</p>
                </th>
            </tr>
            <tr class="taken">
                <th class="taken" rowspan="7">1</th>
                <th></th>
                <th>Who am I</th>
                <th>0</th>
                <th>0</th>
                <th>10.0</th>
            </tr>
            <tr class="taken">
                <th>Program- & Career Orientation</th>
                <th>Assessment</th>
                <th>2.5</th>
                <th>2.5</th>
                <th>10</th>
            </tr>
            <tr class="taken">
                <th>Computer Science Basics</th>
                <th>Written</th>
                <th>5</th>
                <th>5</th>
                <th>9</th>
            </tr>
            <tr class="taken">
                <th>Programming Basics</th>
                <th>Case study</th>
                <th>5</th>
                <th>5</th>
                <th>10</th>
            </tr>
            <tr>
                <th>Personal Professional Development: Exploration</th>
                <th>Criterium focused assessment based on portfolio</th>
                <th>12.5</th>
                <th></th>
                <th></th>
            </tr>
            <tr class="taken">
                <th>IT Personality Projectweek 1</th>
                <th rowspan="2">Report</th>
                <th rowspan="2">1.25</th>
                <th rowspan="2">1.25</th>
                <th rowspan="2">8</th>
            </tr>
            <tr class="taken">
                <th>IT Personality 1</th>
            </tr>
            <tr class="taken">
                <th rowspan="2">2</th>
                <th rowspan="2">Object-oriented programming</th>
                <th>Project</th>
                <th rowspan="2">10</th>
                <th rowspan="2">10</th>
                <th>7.5</th>
            </tr>
            <tr class="taken">
                <th>Case study</th>
                <th>9.5</th>
            </tr>
            <tr>
                <th rowspan="4">3</th>
                <th>Framework development 1</th>
                <th>case study</th>
                <th>5</th>
                <th></th>
                <th></th>
            </tr>
            <tr>
                <th rowspan="3">Framework Project 1</th>
                <th>Project</th>
                <th rowspan="3">7.5</th>
                <th rowspan="3"></th>
                <th></th>
            </tr>
            <tr>
                <th>Assessment</th>
                <th></th>
            </tr>
            <tr>
                <th>Report</th>
                <th></th>
            </tr>
            <tr>
                <th rowspan="5">4</th>
                <th rowspan="3">Framework project 2</th>
                <th>Portfolio</th>
                <th rowspan="3">10</th>
                <th rowspan="3"></th>
                <th></th>
            </tr>
            <tr>
                <th>Project</th>
                <th></th>

            </tr>
            <tr>
                <th>Assessment</th>
                <th></th>
            </tr>
            <tr>
                <th>IT Personality International week</th>
                <th rowspan="2">Report</th>
                <th rowspan="2">1.25</th>
                <th rowspan="2"></th>
                <th rowspan="2"></th>
            </tr>
            <tr>
                <th>IT Personality 2 </th>
            </tr>
            <tr class="taken">
                <th colspan="4">TOTAL</th>
                <th>Total Credits obtained: 23.75</th>
                <th>Average Grade: 9.00</th>
            </tr>
            </tbody>
            <tfoot></tfoot>
        </table>
    </div>
    <div class="infotable">
        <img src="img/hzbestone1.png" class="hzlogodash" alt="">
        <p>This table shows which courses and exams I will attend this first year in the HZ university.</p>
    </div>
    <div class="updated">
        <h5>Updated on: 13.02.2022 14:44</h5>
    </div>
    <div id="chartinfo">
        <img src="img/hzbestone1.png" class="hzlogodash" alt="">
        <p>The line chart on the right displays the relationship between Credits and the NBSA Boundary. The minimum of credits for continuing to the second year of education in the ICT programme is 45, otherwise the <span>NBSA</span> zone begins.</p>
    </div>
    <div id="curvechart"></div>
</div>

</body>
@endsection
