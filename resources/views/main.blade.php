@extends('layouts.main')

@section('content')
    <section class="dashboard">
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">رواد المكتبة</h5>
                        <canvas id="pieChart"
                            style="max-height: 400px; display: block; box-sizing: border-box; height: 400px; width: 853px;"
                            width="1067" height="500"></canvas>
                        <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                new Chart(document.querySelector('#pieChart'), {
                                    type: 'pie',
                                    data: {
                                        labels: [
                                            'طلبة',
                                            'اعضاء هية التدريس',
                                            'المسؤولين'
                                        ],
                                        datasets: [{
                                            label: 'عدد',
                                            data: [{{ $students }}, {{ $teachers }}, {{ $admin }}],
                                            backgroundColor: [
                                                'rgb(255, 99, 132)',
                                                'rgb(54, 162, 235)',
                                                'rgb(255, 205, 86)'
                                            ],
                                            hoverOffset: 4
                                        }]
                                    }
                                });
                            });
                        </script>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-6">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title">عدد الكتب <span>| اليوم</span></h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-book"></i>
                                    </div>
                                    <div class="mx-3">
                                        <h6>{{ $books }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card info-card revenue-card">
                            <div class="card-body">
                                <h5 class="card-title">عدد المجلات العلمية <span>| اليوم</span></h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-journal"></i>
                                    </div>
                                    <div class="mx-3">
                                        <h6>{{ $scintificJournals }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card info-card customers-card">
                            <div class="card-body">
                                <h5 class="card-title">عدد الاوراق العلمية <span>| اليوم</span></h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-file-earmark-fill"></i>
                                    </div>
                                    <div class="mx-3">
                                        <h6>{{ $scientificPapers }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
