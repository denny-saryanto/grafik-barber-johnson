<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Grafik Barber Johnson</title>
        <link rel="stylesheet" href="{{ asset('mazer-2.1.0/assets/compiled/css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('mazer-2.1.0/assets/compiled/css/app-dark.css') }}">
        <link rel="stylesheet" href="{{ asset('mazer-2.1.0/assets/compiled/css/iconly.css') }}">
    </head>
    <body>
        <script src="{{ asset('mazer-2.1.0/assets/static/js/initTheme.js') }}"></script>
        <div id="app">
            <div id="main">
                <header class="mb-3">
                    <a href="#" class="burger-btn d-block d-xl-none">
                        <i class="bi bi-justify fs-3"></i>
                    </a>
                </header>
                <div class="page-heading">
                    <h3>Grafik Barber Johnson</h3>
                </div>
                <div class="page-content">
                    <section class="row">
                        <div class="col-12 col-lg-9">
                            <div class="row">
                                <div class="col-6 col-lg-3 col-md-6">
                                    <div class="card">
                                        <div class="card-body px-4 py-4-5">
                                            <div class="row">
                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                                <h6 class="text-muted font-semibold">AvLOS</h6>
                                                <h6 id="tampilLOS" class="font-extrabold mb-0">Loading...</h6>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-3 col-md-6">
                                    <div class="card">
                                    <div class="card-body px-4 py-4-5">
                                        <div class="row">
                                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                            <h6 class="text-muted font-semibold">BTO</h6>
                                            <h6 id="tampilBTO" class="font-extrabold mb-0">Loading...</h6>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-3 col-md-6">
                                    <div class="card">
                                    <div class="card-body px-4 py-4-5">
                                        <div class="row">
                                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                            <h6 class="text-muted font-semibold">BOR</h6>
                                            <h6 id="tampilBOR" class="font-extrabold mb-0">Loading...</h6>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-3 col-md-6">
                                    <div class="card">
                                    <div class="card-body px-4 py-4-5">
                                        <div class="row">
                                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                            <h6 class="text-muted font-semibold">TOI</h6>
                                            <h6 id="tampilTOI" class="font-extrabold mb-0">Loading...</h6>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Grafik Barber Johnson</h4>
                                        </div>
                                        <div class="card-body">
                                            <canvas id="line"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="page-heading">
                                <h4>Hitung Barber Johnson</h4>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-4 col-md-6">
                                    <div class="card">
                                        <div class="card-body px-4 py-4-5">
                                            <div class="row">
                                                <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                    <h6 class="text-muted font-semibold">Total Bed</h6>
                                                    <input type="number" name="jumlah_bed" class="form-control round"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4 col-md-6">
                                    <div class="card">
                                        <div class="card-body px-4 py-4-5">
                                            <div class="row">
                                                <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                    <h6 class="text-muted font-semibold">Pasien Pulang</h6>
                                                    <input type="number" name="total_pasien" class="form-control round"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4 col-md-6">
                                    <div class="card">
                                        <div class="card-body px-4 py-4-5">
                                            <div class="row">
                                                <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                    <h6 class="text-muted font-semibold">Durasi (Hari)</h6>
                                                    <input type="number" name="ld" class="form-control round"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-4 col-md-6">
                                    <div class="card">
                                        <div class="card-body px-4 py-4-5">
                                            <div class="row">
                                                <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                    <h6 class="text-muted font-semibold">PMKHS</h6>
                                                    <input type="number" name="pmkhs" class="form-control round"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4 col-md-6">
                                    <div class="card">
                                        <div class="card-body px-4 py-4-5">
                                            <div class="row">
                                                <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                    <h6 class="text-muted font-semibold">Pasien Belum Pulang</h6>
                                                    <input type="number" name="pasien_belum_pulang" class="form-control round"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4 col-md-6">
                                    <div class="card">
                                        <div class="card-body px-4 py-4-5">
                                            <div class="row">
                                                <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                    <h6 class="text-muted font-semibold">Jumlah Hari Dalam Bulan</h6>
                                                    <input type="number" name="jumlahHariBulan" class="form-control round"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4 col-md-6">
                                    <div class="card">
                                        <div class="card-body px-4 py-4-5">
                                            <div class="row">
                                                <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                <h6 class="text-muted font-semibold">Perintah</h6>
                                                <a onclick="count();" class="btn icon icon-left btn-primary mb-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg> Hitung</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3">
                            <div class="card">
                                <div class="card-body py-4 px-4">
                                    <div class="d-flex align-items-center">
                                    <div class="avatar avatar-xl">
                                        <img src="{{ asset('mazer-2.1.0/assets/compiled/jpg/1.jpg') }}" alt="Face 1" />
                                    </div>
                                    <div class="ms-3 name">
                                        <h5 class="font-bold">Test User</h5>
                                        <h6 class="text-muted mb-0">Test NIP</h6>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body py-4 px-4">
                                    <div class="d-flex align-items-center">
                                        <div class="ms-3 name">
                                            <h5 class="font-bold">Standar Efisien</h5>
                                            <h6 class="text-muted mb-0">Departemen Kesehatan RI 2005</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body py-4 px-4">
                                    <div class="d-flex align-items-center">
                                        <div class="ms-3 name">
                                            <h5 class="font-bold">AvLOS</h5>
                                            <h6 id="losStats" class="text-muted mb-2">-</h6>
                                            <h5 class="font-bold">BTO</h5>
                                            <h6 id="btoStats" class="text-muted mb-2">-</h6>
                                            <h5 class="font-bold">BOR</h5>
                                            <h6 id="borStats" class="text-muted mb-2">-</h6>
                                            <h5 class="font-bold">TOI</h5>
                                            <h6 id="toiStats" class="text-muted mb-2">-</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <footer>
                    <div class="footer clearfix mb-0 text-muted">
                    <div class="float-end">
                        <p>
                        Crafted with
                        <span class="text-danger"
                            ><i class="bi bi-heart-fill icon-mid"></i
                        ></span>
                        by <a href="https://saugi.me">Saugi</a>
                        </p>
                    </div>
                    </div>
                </footer>
            </div>
        </div>
    </body>
    
    <script src="{{ asset('mazer-2.1.0/assets/static/js/components/dark.js') }}"></script>
    <script src="{{ asset('mazer-2.1.0/assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>

    <script src="{{ asset('mazer-2.1.0/assets/compiled/js/app.js') }}"></script>

    <script src="{{ asset('mazer-2.1.0/assets/extensions/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('mazer-2.1.0/assets/static/js/pages/dashboard.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mathjs/11.8.0/math.js" integrity="sha512-VW8/i4IZkHxdD8OlqNdF7fGn3ba0+lYqag+Uy4cG6BtJ/LIr8t23s/vls70pQ41UasHH0tL57GQfKDApqc9izA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        const ctx = document.getElementById('line');

        let dataChart = [];

        let chartView = new Chart(ctx, {
            type: 'scatter',
            data: {
                datasets: dataChart,
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        max: 30,
                        title: {
                            display: true,
                            text: 'AvLOS',
                        }
                    },
                    x: {
                        title: {
                            display: true,
                            text: 'TOI',
                        }
                    }
                },
            }
        });

        autoColor = () => {
            let r = Math.floor(Math.random() * 255);
            let g = Math.floor(Math.random() * 255);
            let b = Math.floor(Math.random() * 255);
            return "rgb(" + r + "," + g + "," + b + ")";
        };

        count = () => {
            chartView.data.datasets.length = 0;
            let totalHariBulanIni = document.getElementsByName('jumlahHariBulan')[0].value;
            let totalBed = document.getElementsByName('jumlah_bed')[0].value;
            let totalPasienRanap = document.getElementsByName('total_pasien')[0].value;
            let totalDurasiPasien = document.getElementsByName('ld')[0].value;
            let pmkhs = document.getElementsByName('pmkhs')[0].value;
            let pasienBelumPulang = document.getElementsByName('pasien_belum_pulang')[0].value;
            let hp = parseInt(pmkhs) + parseInt(pasienBelumPulang);

            let avLOS = AvLOS(totalDurasiPasien, totalPasienRanap).toFixed(2);
            let toi = TOI(totalBed, totalHariBulanIni, totalPasienRanap).toFixed(2);
            let bor = BOR(hp, totalBed, totalHariBulanIni).toFixed(2);
            let bto = BTO(totalPasienRanap, totalBed).toFixed(2);
            let coordBOR = borToCoords(convertBORStepOne(bor), convertBORStepTwo(bor));
            let coordBTO = [btoX(totalHariBulanIni, bto), btoY(totalHariBulanIni, bto)];

            document.getElementById('tampilBOR').innerHTML = bor + ' %';
            document.getElementById('tampilLOS').innerHTML = avLOS + ' hari';
            document.getElementById('tampilTOI').innerHTML = toi + ' hari';
            document.getElementById('tampilBTO').innerHTML = bto + ' hari';

            console.log('AvLOS : ', avLOS);
            console.log('TOI : ', toi);
            console.log('BOR : ', bor);
            console.log('BTO : ', bto);

            document.getElementById('losStats').innerHTML = (avLOS >= 6 && avLOS <= 9) ? 'Efisien' : 'Tidak Efisien';
            document.getElementById('borStats').innerHTML = (bor >= 60 && bor <= 80) ? 'Efisien' : 'Tidak Efisien';
            document.getElementById('toiStats').innerHTML = (toi >= 1 && toi <= 3) ? 'Efisien' : 'Tidak Efisien';
            document.getElementById('btoStats').innerHTML = (bto >= 40 && bto <= 50) ? 'Efisien' : 'Tidak Efisien';

            let daerahEfisien = {
                label : 'Daerah Efisien',
                data : [
                    {
                        x: 1,
                        y: 3,
                    },{
                        x: 3,
                        y: 9,
                    },{
                        x: 3,
                        y: 12,
                    },{
                        x: 1,
                        y: 12,
                    },{
                        x: 1,
                        y: 3,
                    }
                ],
                showLine : true,
                // backgroundColor: autoColor(),
                borderColor: autoColor(),
            }

            let garisAvLos = {
                label : 'AvLOS',
                data : [
                    {
                        x: toi,
                        y: avLOS,
                    },{
                        x: 0,
                        y: avLOS,
                    }
                ],
                showLine : true,
                // backgroundColor: autoColor(),
                borderColor: autoColor(),
            }

            let garisTOI = {
                label : 'TOI',
                data : [
                    {
                        x: toi,
                        y: avLOS,
                    },{
                        x: toi,
                        y: 0,
                    }
                ],
                showLine : true,
                // backgroundColor: autoColor(),
                borderColor: autoColor(),
            }

            let garisBOR = {
                label : 'BOR',
                data : [
                    {
                        x: 0,
                        y: 0,
                    },{
                        x: coordBOR[1],
                        y: coordBOR[0],
                    }
                ],
                showLine : true,
                // backgroundColor: autoColor(),
                borderColor: autoColor(),
            }

            let garisBTO = {
                label : 'BTO',
                data : [
                    {
                        x: btoX(totalHariBulanIni, bto),
                        y: 0,
                    },{
                        x: 0,
                        y: btoY(totalHariBulanIni, bto),
                    }
                ],
                showLine : true,
                // backgroundColor: autoColor(),
                borderColor: autoColor(),
            }

            dataChart.push(daerahEfisien);
            dataChart.push(garisAvLos);
            dataChart.push(garisTOI);
            dataChart.push(garisBOR);
            dataChart.push(garisBTO);
            chartView.update();
        }

        BOR = (hp, tt, hari) => {
            return math.divide(hp, tt*hari)*100;
        }

        AvLOS = (ld, pasien) => {
            return (ld/pasien)*1;
        }

        TOI = (bed, hari, pasien) => {
            return (((bed*hari)-1)/pasien)*1;
        }

        BTO = (pasien, bed) => {
            return (pasien/bed)*1;
        }

        convertBORStepOne = (bor) => {
            // hasil L
            return bor;
        }

        convertBORStepTwo = (bor) => {
            // hasil T
            let T = 100 - bor;
            return T;
        }

        borToCoords = (L, T) => {
            let LF = L / 10;
            let TF = T / 10;
            return [LF, TF];
        }

        btoX = (hari, bto) => {
            let L = 1 * (hari / bto);
            return L;
        }

        btoY = (hari, bto) => {
            let T = 1 * (hari / bto);
            return T;
        }


    </script>
</html>
