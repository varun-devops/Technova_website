<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Achievements</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"
  ></script>
    <link rel="stylesheet" href="achieve_style.css" />
    <link rel="stylesheet" href="/master.css" />
  </head>
  <body>
    <header class="header">
      <div class="container-fluid">
          <nav class="navbar navbar-expand-lg navbar-light bg-lignt">
              <h3>              <a class="navbar-brand-1" href="">Technical Society @ Sharda University</a></h3>
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarTogglerDemo02"
              aria-controls="navbarTogglerDemo02"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon navbar-light"></span>
            </button>
  
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
              <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                  <a class="highlight" href="Achievments/achievements.php">Achievements</a>
                </li>
                <li class="nav-item">
                  <a class="underline" href="Members/members.php">Members</a>
                </li>
                <li class="nav-item">
                  <a class="underline" href="Events/event.php">Events</a>
                </li>
              </ul>
            </div>
          </div>
          </nav>
  </header>
    <section class="achievements">
      <div class="container-title-page">
        <div class="title-row row">
          <div
            class="col-lg-6 pt-2 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center"
          >
            <img class="dots" src="images/dots.png" alt="" />
            <div class="images">
              <img
                class="trophy"
                src="Achievments/achieve_img/Trophy Cup.png"
                alt=""
              />
              <img
                class="sharda-logo"
                src="./Achievments/achieve_img/SET Technical Logo8 1.png"
                alt=""
              />
            </div>
            <h1 class="heading-achievements">ACHIEVEMENTS</h1>
            <p class="description">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam
              incidunt blanditiis, provident similique at aliquid ad numquam
              dolores quaerat officiis optio atque adipisci, sed quibusdam.
              Dignissimos ab, praesentium molestiae esse quisquam officia.
              Voluptatibus optio animi libero? Rem nesciunt repellat unde
              corrupti nulla tempore totam ratione necessitatibus dolores at
              accusamus laborum, aut quod quaerat repellendus, excepturi quis
              nostrum veritatis quos cupiditate!
            </p>
            <div class="btn-container">
              <button class="btn-explore">
                <a href="#achievement-list">Explore Now</a>
              </button>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 achievement-image-container">
            <img
              src="/Achievments/achieve_img/image 1 (2).png"
              alt=""
              class="img-fluid achievement-image down"
            />
          </div>
          <img src="/images/dots.png" alt="" class="dots-img-2" />
        </div>
      </div>
    </section>

    <section class="achievement-list" id="achievement-list">
      <div class="achievement-container">
        <img
          class="trophy-blue"
          src="/Achievments/achieve_img/healthicons_award-trophy.png"
          alt=""
        />
        <h1 class="achievements-heading">Unleashing Greatness!</h1>
      </div>
    </section>
  </body>
  <script src="/Achievments/achieve.js"></script>
</html>
