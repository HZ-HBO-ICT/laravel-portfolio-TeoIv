@extends('layout')

@section('faq-content')
<head>
    <title>Frequently Asked Questions</title>
</head>
<body>
<div class="container">
    <div class="img"></div>
    <div class="backgroundfade"></div>
    <div class="faqheader">
        <p> <span> F</span>requently <span>A</span>sked <span>Q</span>uestons</p>
    </div>
    <div class="maincontentfaq">
        <section>
            @foreach($faqs as $faq)
                <details style="color: white">
                    <summary>
                        {{ $faq->question }}
                    </summary>
                    <p>{{$faq->answer}}</p>
                </details>

            @endforeach
        </section>
    </div>
    <div class="new_faq">
        <a href="/faq/create">CREATE A NEW FAQ</a>
    </div>
    <div class="asidemenu">
        <section>
            <aside>
                <ul>
                    <h2>Useful links</h2>
                    <li><a href="https://github.com/HZ-HBO-ICT" target="_blank">Github</a></li>
                    <li><a href="https://apps.hz.nl/angular/studievoortgang/studiestatus" target="_blank">Study progress</a></li>
                    <li>
                        <a href="https://teams.microsoft.com/_?tenantId=4c16deb3-342d-4fca-bcd5-b1429308034c#/school/conversations/unknown?groupId=95bddebc-a340-4d88-81fc-b80e0bfc70c3&threadId=19:2e2afa0286b04932be16cb8ad2d9d2c0@thread.skype&ctx=channel" target="_blank">Teams</a>
                    </li>
                    <li><a href="https://learn.hz.nl/my/" target="_blank">Learn</a></li>
                    <li>
                        <a href="https://hz.nl/uploads/documents/Regelingen/NL/Onderwijs-examenregelingen/OER-HZ-2021-2022-BaDEF19-8-2021naBDT13-7-21-Nvdw.pdf" target="_blank">Education and Examination Regulations</a>
                    </li>
                    <li>
                        <a href="https://hz.nl/uploads/documents/Regelingen/OERS/2021-2022/11.-Uitvoeringsregeling-OER-ICT-Voltijd-2021-2022.pdf" target="_blank">Implementation Regulations </a>
                    </li>
                </ul>
            </aside>
        </section>
    </div>
</div>
</body>
@endsection
