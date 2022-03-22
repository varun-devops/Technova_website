<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Events</title>
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

    <link rel="stylesheet" href="/Events/events_style.css" />
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
                  <a class="underline" href="Achievments/achievements.php">Achievements</a>
                </li>
                <li class="nav-item">
                  <a class="underline" href="Members/members.php">Members</a>
                </li>
                <li class="nav-item">
                  <a class="highlight" href="Events/event.php">Events</a>
                </li>
              </ul>
            </div>
          </div>
          </nav>
  </header>
    <section class="events">
      <div class="container-title-page">
        <div class="title-row row">
          <div
            class="col-lg-6 pt-2 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center"
          >
            <img class="dots" src="/images/dots.png" alt="" />
            <div class="images">
              <img class="medal" src="/Events/events_img/Award 6.png" alt="" />
            </div>
            <h1 class="heading-events">Exciting Events</h1>
            <p class="description">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum
              quos veniam dolores quae quisquam possimus vitae corrupti adipisci
              similique esse nostrum nesciunt, perspiciatis tenetur
              reprehenderit enim soluta nemo. Laboriosam, culpa mollitia quas
              accusamus sed id maiores, neque aliquid commodi, ipsa voluptatum!
              Magnam ducimus velit libero maxime earum eos unde autem?
            </p>
            <div class="btn-container">
              <button class="btn-explore">Explore Now!</button>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 event-img-container">
            <img
              src="/Events/events_img/image 1-1.png"
              alt=""
              class="img-fluid event-image down"
            />
          </div>
          <img src="/images/dots.png" alt="" class="dots-img-2" />
        </div>
      </div>
    </section>

    <section class="event-list" id="event-list">
      <div class="event-container">
        <img
          class="medal-blue"
          src="/Events/events_img/dashicons_awards.png"
          alt=""
        />
        <h1 class="event-heading">Mind Blowing Events</h1>
      </div>
    </section>

    <section class="upcoming-events">
      <div class="events-container">
        <div class="container-heading">
          <img src="/Events/events_img/carbon_event-schedule.png" alt="" />
          <h1>Upcoming Events</h1>
        </div>

        <div class="event event-1">
          <div class="event-heading">
            <h3>Event Title:</h3>
            <h3>DD/MM/YY</h3>
          </div>

          <button class="register">Register</button>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia
            accusamus vel aspernatur officia cupiditate maxime eos laborum
            itaque ex minus molestias quam, sint molestiae quasi laudantium
            praesentium provident expedita eveniet non sunt voluptates ipsa
            asperiores a consequatur. Commodi, ex eum.
          </p>
        </div>
        <div class="event event-2">
          <div class="event-heading">
            <h3>Event Title:</h3>
            <h3>DD/MM/YY</h3>
          </div>
          <button class="register">Register</button>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia
            accusamus vel aspernatur officia cupiditate maxime eos laborum
            itaque ex minus molestias quam, sint molestiae quasi laudantium
            praesentium provident expedita eveniet non sunt voluptates ipsa
            asperiores a consequatur. Commodi, ex eum.
          </p>
        </div>
        <div class="event event-3">
          <div class="event-heading">
            <h3>Event Title:</h3>
            <h3>DD/MM/YY</h3>
          </div>
          <button class="register">Register</button>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia
            accusamus vel aspernatur officia cupiditate maxime eos laborum
            itaque ex minus molestias quam, sint molestiae quasi laudantium
            praesentium provident expedita eveniet non sunt voluptates ipsa
            asperiores a consequatur. Commodi, ex eum.
          </p>
        </div>
      </div>
    </section>
  </body>
  <script src="/Events/events.js"></script>
</html>
