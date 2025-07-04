<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gallery | La Balai</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link href="style.css" rel="stylesheet" />
  </head>
  <body>
    <!-- Navbar (Same as index) -->
    <nav
      class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top"
    >
      <div class="container">
        <a
          class="navbar-brand d-flex align-items-center fw-bold text-success"
          href="index.html"
        >
          <img
            src="logo.jpg"
            alt="La Balai Logo"
            width="40"
            height="40"
            class="me-2 rounded-circle"
          />
          La Balai
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#mainNavbar"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNavbar">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="index.html#hero">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.html#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.html#rooms">Rooms</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.html#testimonials"
                >Testimonials</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="booking.html">Booking</a>
            </li>
          </ul>
          <a href="login.html" class="btn btn-success rounded-pill ms-3 px-4"
            >Sign In</a
          >
        </div>
      </div>
    </nav>
    <main>
      <!-- Gallery Section -->
      <section id="gallery" class="py-5 bg-light">
        <div class="container">
          <h2 class="fw-bold text-success text-center mb-5">🖼️ Full Gallery</h2>

          <div class="row" data-masonry='{"percentPosition": true }'>
            <!-- Mixed-size photos using Picsum -->
            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
              <img
                src="https://picsum.photos/seed/portrait1/600/900"
                alt="Gallery"
                class="img-fluid rounded shadow-sm"
              />
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
              <img
                src="https://picsum.photos/seed/landscape1/800/600"
                alt="Gallery"
                class="img-fluid rounded shadow-sm"
              />
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
              <img
                src="https://picsum.photos/seed/spa/600/1000"
                alt="Gallery"
                class="img-fluid rounded shadow-sm"
              />
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
              <img
                src="https://picsum.photos/seed/lounge/600/700"
                alt="Gallery"
                class="img-fluid rounded shadow-sm"
              />
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
              <img
                src="https://picsum.photos/seed/deck/600/850"
                alt="Gallery"
                class="img-fluid rounded shadow-sm"
              />
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
              <img
                src="https://picsum.photos/seed/garden/800/900"
                alt="Gallery"
                class="img-fluid rounded shadow-sm"
              />
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
              <img
                src="https://picsum.photos/seed/hut/600/600"
                alt="Gallery"
                class="img-fluid rounded shadow-sm"
              />
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
              <img
                src="https://picsum.photos/seed/view/800/1000"
                alt="Gallery"
                class="img-fluid rounded shadow-sm"
              />
            </div>
          </div>
        </div>
      </section>
    </main>

    <footer class="bg-dark text-white pt-5 pb-3">
      <div class="container">
        <div class="row text-center text-md-start">
          <!-- About -->
          <div class="col-md-4 mb-4">
            <h5 class="fw-bold">La Balai Staycation</h5>
            <p class="small">
              A Bali-inspired escape in Sitio Quimarayan, Caterman, Candon,
              Ilocos Sur.
            </p>
            <p class="small mb-0">
              📍 15 mins from City Proper • 10 mins to Vitalis Villas
            </p>
          </div>

          <!-- Contact -->
          <div class="col-md-4 mb-4">
            <h6>Contact Us</h6>
            <p class="small mb-1">📞 0912 345 6789</p>
            <p class="small mb-1">✉️ labalai.stay@gmail.com</p>
            <p class="small">📍 Candon, Ilocos Sur</p>
          </div>

          <!-- Quick Links -->
          <div class="col-md-4 mb-4">
            <h6>Quick Links</h6>
            <ul class="list-unstyled small">
              <li>
                <a href="#about" class="text-white text-decoration-none"
                  >About</a
                >
              </li>
              <li>
                <a href="#rooms" class="text-white text-decoration-none"
                  >Rooms</a
                >
              </li>
              <li>
                <a href="#gallery" class="text-white text-decoration-none"
                  >Gallery</a
                >
              </li>
              <li>
                <a href="booking.html" class="text-white text-decoration-none"
                  >Booking</a
                >
              </li>
            </ul>
          </div>
        </div>

        <div class="text-center mt-3 border-top pt-3 small">
          &copy; 2025 La Balai Staycation. All rights reserved.
        </div>
      </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
