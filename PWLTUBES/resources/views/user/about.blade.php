@extends('layouts.main')

@section('title', 'about')
@section('statusAbout', 'active')
@section('content')

<section style="margin-top: 10%;" id="about" class="about">
    <div class="container">

      <div class="section-title" data-aos="zoom-out">
        <h2>About</h2>
        <p>Who we are</p>
      </div>

      <div class="row content" data-aos="fade-up">
        <div class="col-lg-6">
          <p>
          Perkembangan dunia perbankan saat ini sangatlah cepat. Cara menabung dan melakukan pembayaran tidak lagi
          dilakukan melalui mesin ATM namun juga dapat dilakukan melalui website. Dengan demikian kami berinovasi membuat
          sebuah website tabungan elektronik yang dapat digunakan siswa sekolah dengan mudah dan terpercaya.
          </p>

        </div>
        <div class="col-lg-6 pt-4 pt-lg-0">

        </div>
      </div>
    </div>
  </section>
  <section id="team" class="team">
    <div class="container">

      <div class="section-title" data-aos="zoom-out">
        <h2>Team</h2>
        <p>Our Hardworking Team</p>
      </div>
      <div class="row">

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up">
            <div class="member-img">
              <img src="images/gery.png" class="img-fluid" alt="">
            </div>
            <div class="member-info">
              <h4>Gery Jonathan Manurung</h4>
              <span>(211402137)</span>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up">
            <div class="member-img">
              <img src="images/paul.jpeg" class="img-fluid" alt="">
            </div>
            <div class="member-info">
              <h4>Paulus Simon Halomoan Sigalingging</h4>
              <span>(211402128)</span>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up">
            <div class="member-img">
              <img src="images/bagus1.png" class="img-fluid" alt="">
            </div>
            <div class="member-info">
              <h4>Bagus Sadewo</h4>
              <span>(211402035)</span>
            </div>
          </div>
        </div>
      </div>
      <div class="row">

<div class="col-lg-3 col-md-6 d-flex align-items-stretch">
  <div class="member" data-aos="fade-up">
    <div class="member-img">
      <img src="images/karin.png" class="img-fluid" alt="">
    </div>
    <div class="member-info">
      <h4>Karina Angela Tobing</h4>
      <span>(211402041)</span>
    </div>
  </div>
</div>

<div class="col-lg-3 col-md-6 d-flex align-items-stretch">
  <div class="member" data-aos="fade-up">
    <div class="member-img">
      <img src="images/jessie.jpeg" class="img-fluid" alt="">
    </div>
    <div class="member-info">
      <h4>Jessica Larasty Meliala</h4>
      <span>(211402116)</span>
    </div>
  </div>
</div>

<div class="col-lg-3 col-md-6 d-flex align-items-stretch">
  <div class="member" data-aos="fade-up">
    <div class="member-img">
      <img src="images/kev.jpeg" class="img-fluid" alt="">
    </div>
    <div class="member-info">
      <h4>Kevin Simamora</h4>
      <span>(211402068)</span>
    </div>
  </div>
</div>
</div>
    </div>
  </section>
  </main>
 @endsection
